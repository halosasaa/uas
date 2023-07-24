<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori_buku; 
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

        $buku = Buku::all();
        $kategori_buku = Kategori_buku::all();
        return view('home',compact('title', 'pages', 'kategori_buku','buku','cartItems'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
