<?php 

namespace App\Services;

use App\Models\Category;
use App\Models\Categroy;
use App\Models\Product;
use App\Models\ProductImages;
use App\Utils\FileProcessor;
use Illuminate\Support\Facades\Auth;

class ProductService{

    public function index()
    {
        $data['categories'] = Category::all();
        $data['products'] = Product::all();
        return $data;

    }

    public function store($data){

       
        $data['user_id'] = Auth::user()->id;

        if(isset($data['image'])){
            $idImage = FileProcessor::storeImage($data['image'], "images", "productimage" );
            $data['image'] = $idImage;
           }

        $product = Product::create( $data );


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

    }

    public function delete($id){

    }
}



