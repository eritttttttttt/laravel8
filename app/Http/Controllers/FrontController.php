<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
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
        // $news = DB::table('news')->get();
        $news = News::get();

        return view('news', compact('news'));
    }
    
    public function newsDetail($id)
    {
        // 方法一:  find 會給 collect 
        // $newsDetail = DB::table('news')->find($id);
        $newsDetail = News::find($id);
        // 方法二: where -> get 會給 array
        // $news = DB::table('news')->where('id',$id)->get();

        // 延伸 first 是會只有一筆 -> 
        // $newsDetail = DB::table('news')->where('id',$id)->first();
        

        return view('news-page', compact('newsDetail'));
    }
    public function createNews(){
        // $news = DB::table('news')->insert([
        // C
        News::create([
            'title'=>'title',
            'date'=>'2021-01-01',
            'content'=>'aaaaaaaaaaaaaaaaaaaaaaaa',
            'image_url' => '123'
        ]);

        // update
        // $news = News::find(2);
        // $news->title = $news->title . '123';
        // $news->content = $news->content . '123';
        // $news->image_url ='123';
        // $news->push();
        

        return 'create';
    }

    public function updateNews($id)
    {
        //         $news = News::all();
        // for($i = 0 ; $i < count($news) ;$i++){
        //     $news[$i]->title = $news[$i]->title . '1234';
        //     $news[$i]->content = $news[$i]->content . '1234';
        //     $news[$i]->image_url ='1234';
        //     $news[$i]->save();
        // }
        News::find($id)->update([
            'title'=>'123',
            'date'=>'2021-01-01',
            'content'=>'aaaaaaaaaaaaaaaaaaaaaaaa',
            'image_url' => '123'
        ]);

        return 'update';
    }

    public function destroyNews($id)
    {
        News::find($id)->delete();

        return 'deleteNews';
    }



    public function contact(Request $request)
    {
        // $data = $request->all();

        // foreach $data as $item {

        // }
        
        Contact::create([
            "name" => $request->name, 
            "phone" => $request->phone, 
            "email" => $request->email, 
            "content" => $request->content,
        ]);


        return '成功';
        //return redirect('/'); 只能走 get
    }
}
