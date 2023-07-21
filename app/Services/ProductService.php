<?php 

namespace App\Services;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Categroy;
use App\Models\Product;
use App\Models\ProductImages;
use App\Utils\ColorList;
use App\Utils\FileProcessor;
use App\Utils\SizeList;
use Illuminate\Support\Facades\Auth;

class ProductService{

    public function index()
    {
        $data['categories'] = Category::all();
        $data['products'] = Product::all();
        return $data;
    }
    
    public function create()
    {
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();
        $data['colors'] = ColorList::ALL_COLORS;
        $data['sizes'] = SizeList::SIZES;
        return $data;
    }

    public function edit()
    {
        $data['categories'] = Category::all();
        $data['brands'] = Brand::all();
        $data['colors'] = ColorList::ALL_COLORS;
        $data['sizes'] = SizeList::SIZES;
        // $data['product'] = $product;
        return $data;
    }

    public function store($data){

       
        $data['user_id'] = Auth::user()->id;

        if(isset($data['image']))
        {
            $idImage = FileProcessor::storeImage($data['image'], "images", "productimage" );
            $data['image'] = $idImage;
        }

        $product = Product::create($data);

        if( isset($data['other_images']) )
        {
            foreach( $data['other_images'] as $img)
            {
                $idImage = FileProcessor::storeImage($img, "images", "otherproductimage" );
                $productImage = new ProductImages;
                $productImage->product_id = $product->id;
                $productImage->name = $idImage;
                $productImage->save();
            }
        }

    }

    public function update($data , $id){

        
        $data['user_id'] = Auth::user()->id;

        if(isset($data['image']))
        {
            $idImage = FileProcessor::storeImage($data['image'], "images", "productimage" );
            $data['image'] = $idImage;
        }

        $product = Product::find($id);
        $product->update($data);

        if( isset($data['other_images']) )
        {
            foreach( $data['other_images'] as $img)
            {
                $idImage = FileProcessor::storeImage($img, "images", "otherproductimage" );
                $productImage = new ProductImages;
                $productImage->product_id = $product->id;
                $productImage->name = $idImage;
                $productImage->save();
            }
        }

        return $product;
        
    }

    public function delete($id){

    }
}



