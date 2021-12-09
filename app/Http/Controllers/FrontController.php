<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function hello($id)
    {
        $name = 'alien';
        return view('hello', compact('name', 'id'));
    }

    public function news()
    {
        // $news = DB::select('select * from news');
        $news = DB::table('news')->get();

        return view('news', compact('news'));
    }
    
    public function newsDetail($id)
    {
        // 方法一:  find 會給 collect 
        $newsDetail = DB::table('news')->find($id);

        // 方法二: where -> get 會給 array
        // $news = DB::table('news')->where('id',$id)->get();

        // 延伸 first 是會只有一筆 -> 
        // $newsDetail = DB::table('news')->where('id',$id)->first();


        return view('news-page', compact('newsDetail'));
    }
}
