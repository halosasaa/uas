<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Jenis_menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontJenisMenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $res_jenis_menu = Jenis_menu::all();
        return view('front/fjenismenu',compact('res_jenis_menu'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
