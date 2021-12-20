@extends('layouts.template')

@section('main')
<div class="container">
  
  <ul>
    @foreach ($facilities as $facility)
      <li>
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="{{ Storage::url($facility->image_url) }}" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{ $facility->title }}</h5>
                <p class="card-text">{{ $facility->content }}</p>
              </div>
            </div>
          </div>
        </div>
      </li>
    @endforeach
  </ul>

</div>


  
@endsection