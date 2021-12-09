@extends('layouts.template')

@section('main')
<div class="container">

  <h2 class="mb-5">{{$newsDetail->title}}</h2>
  <img src="{{$newsDetail->image_url}}" alt="">
  <p>
    發布日期: <span class="text-danger mr-3">2021-12-08</span>
    瀏覽次數: <span class="text-danger ml-3">117</span>
  </p>
  <hr>
  <p>
    {{$newsDetail->content}}
  </p>
</div>


  
@endsection