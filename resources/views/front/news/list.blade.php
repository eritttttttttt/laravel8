@extends('layouts.template')

@section('css')
@endsection
@section('main')
<div class="container">
  <h2 class="text-center mb-3">最新消息</h2>
  <div class="d-flex justify-content-end">
    <div class="mr-3">資料總筆數：<span class="text-danger">11</span></div>
    <div class="mr-3">每頁筆數：<span class="text-danger">10</span></div>
    <div class="mr-3">總頁數：<span class="text-danger">5</span></div>
    <div>目前頁次：<span class="text-danger">1</span></div>
  </div>
  <hr>
  <a href="{{asset('/create-news')}}" class="btn btn-warning">新增新聞</a>
  <ul>
    @foreach ($news as $new)
      <li class="card flex-md-row mb-3">
        <div class="col-md-3">
          <img style="height: calc(320 / 1920 * 100vw)" class="card-img-top" src="{{$new->image_url}}" alt="Card image cap">
        </div>
        <div class="col-md-9">
          <div class="card-body">
            <button class="btn btn-primary rounded-0 mb-3"> 最新消息 </button>
            <a href="{{ url('news', ['id'=> $new->id]) }}">
            {{-- <a href="{{ asset('/news/'. $new->id) }}"> --}}
              <h5 class="card-title">{{ $new->title }}</h5>
            </a>
            <h6 class="text-danger">{{ $new->date }}</h6>
            <p class="card-text">{{ $new->content }}</p>
            <a class="btn btn-danger" href="{{ url('destroy-news', ['id'=> $new->id])}}"> 刪除消息</a>
          </div>
        </div>
      </li>
    @endforeach


    
  </ul>
</div>


  
@endsection