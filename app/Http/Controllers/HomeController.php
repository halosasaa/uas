<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Jenis_menu; 
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $title = 'home';
        $pages = 'home';
        $cartItems = \Cart::getContent(); 

        $menu = Menu::all();
        $jenis_menu = Jenis_menu::all();
        return view('home',compact('title', 'pages', 'jenis_menu','menu','cartItems'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
