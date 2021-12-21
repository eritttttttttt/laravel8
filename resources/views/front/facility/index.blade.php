@extends('layouts.template')
@section('css')
  <style>
    .img{
      min-height: 250px;
      background-size: cover;
      background-position: center center;
      
    }
  </style>
    
@endsection
@section('main')
<div class="container">
  
  <ul>
    @foreach ($facilities as $facility)
      <li>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <div class="img" style="background-image: url({{ Storage::url($facility->image_url) }})"></div>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{ $facility->title }}</h5>
                <div class="card-text">{!! $facility->content !!}</div>
              </div>
            </div>
          </div>
        </div>
      </li>
    @endforeach
  </ul>

</div>


  
@endsection