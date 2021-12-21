<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function newsList()
    {
        // $news = DB::select('select * from news');
        // $news = DB::table('news')->get();
        $news = News::get();

        return view('front.news.list', compact('news'));
    }
    
    public function newsContent($id)
    {
 
        // 方法一:  find 會給 collect 
        // $newsDetail = DB::table('news')->find($id);
        $newsDetail = News::find($id);
        dd($newsDetail);
        // 方法二: where -> get 會給 array
        // $news = DB::table('news')->where('id',$id)->get();

        // 延伸 first 是會只有一筆 -> 
        // $newsDetail = DB::table('news')->where('id',$id)->first();

        return view('front.news.content', compact('newsDetail'));
    }

    public function contact(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|max:1',
        // ]);
        $validator = Validator::make(request()->all(), [
            'name' => 'max:50',
            'phone' => 'min:9|max:10',
            'email' => 'email',
            'content' => 'max:50',
            'g-recaptcha-response' => 'recaptcha',
        ]);
        // // check if validator fails
        if($validator->fails()) {
            // $errors = $validator->errors();
            return redirect('/')
            ->withErrors($validator)
            ->withInput();
        }

        Contact::create([
            "name" => $request->name, 
            "phone" => $request->phone, 
            "email" => $request->email, 
            "content" => $request->content,
        ]);


        return redirect()->route('index');
        // return redirect('/'); 只能走 get
    }
    public function facility()
    {
        $facilities = Facility::get();
        return view('front.facility.index', compact('facilities'));
    }
}
