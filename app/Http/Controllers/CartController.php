<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::where('user_id',Auth::user()->id )->get();
        return view('external.shoppingcart',compact('carts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartRequest $request)
    {
         $data = $request->validated();
         $product = Product::find($data['product_id']);
         $data['price'] = $product->price;
         $data['total_price'] = $product->price * $data['quantity'];
        $data['user_id'] = Auth::id();
         Cart::create($data);

         return redirect('/cart')->with('status', 'Cart Item added !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $credentials = $request->validate([
            'id' => ['required', 'integer'],
            'qty' => ['required','integer'],
        ]);

        return $credentials['id'];

        // id, qty
        $cart = Cart::find($id );
        $cart->quantity = $credentials['qty'];
        $cart->total_price = $cart->price * $credentials['qty'];

        $cart->save();

        return response()->json([ 'response' => [
            'status' => 'success',
            'data' => $cart,
        ]]);

    }

    public function cartQuantityUpdate(Request $request,  $id)
    {

        $credentials = $request->validate([
            'id' => ['required', 'integer'],
            'qty' => ['required','integer'],
        ]);

        // return $credentials['id'];
        
        $cart = Cart::find($id);
        $cart->quantity = $credentials['qty'];
        $cart->total_price = $cart->price * $credentials['qty'];

        $cart->save();

        return response()->json([ 'response' => [
            'status' => 'success',
            'data' => $cart,
        ]
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
