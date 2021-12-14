@extends('layouts.template')

@section('main')
<form class="container" action="{{asset('/store-news')}}"  method="POST">
  @csrf
  <div class="form-group">
    <label for="news-title">標題</label>
    <input type="text" class="form-control" id="news-title" name="title" placeholder="請輸入標題">
  </div>
  <div class="form-group">
    <label for="news-date">日期</label>
    <input type="date" class="form-control" id="news-date" name="date" placeholder="請輸入日期">
  </div>
  <div class="form-group">
    <label for="news-image_url">圖片連結</label>
    <input type="text" class="form-control" id="news-image_url" name="image_url" placeholder="請輸入圖片連結">
  </div>
  <div class="form-group">
    <label for="news-content">新聞內容</label>
    <textarea class="form-control" id="news-content" name="content" placeholder="請輸入新聞內容"></textarea>
  </div>
  <input class="btn btn-primary" type="submit" value="送出">
  <a class="btn btn-outline-primary" href="{{asset('/news')}}">回到最新消息</a>
</form>

  
@endsection

@section('js')
    alert('123')
@endsection