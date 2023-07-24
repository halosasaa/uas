<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Jenis_menu;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    public function add_cart(Request $request)
    {
        Cart::add(
            array(
                'id' => $request->id, // inique row ID
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => 1,
                'attributes' => array(
                    'image' => $request->image
                )
            )
        ); 
        $cartItems = \Cart::getContent(); 
        dump($cartItems); 
        
        $menu = Menu::all();
        $jenis_menu = Jenis_menu::all();
        return back();
    }

    public function update_cart(Request $request)
    {
        Cart::update(
            $request->id,
            array(
                'quantity' => $request->quantity,
                // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
            )
        );
        return back();
    }

    public function view_cart()
    {
        $menu = Menu::all();
        $jenis_menu = Jenis_menu::all();
        $carts = Cart::getContent();
        return view('front.cart', compact('menu', 'jenis_menu','carts'));
    }

    public function remove_item($id){
        Cart::remove($id);

        return back();
    }

    public function clear_item(){
        Cart::clear();
        return back();
    }
}