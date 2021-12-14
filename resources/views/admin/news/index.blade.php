@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('main')
  <div class="container">
    <table id="example" class="display" style="width:100%">
      <thead>
          <tr>
              <th>Title</th>
              <th>date</th>
              <th >content</th>
              <th>image_url</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($news as $new)
          <tr>
            <td>{{$new->title}}</td>
            <td>{{$new->date}}</td>
            <td>{{$new->content}}</td>
            <td>
              <img src="{{$new->image_url}}" width="100" alt="">
            </td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>

      </tfoot>
  </table>
  </div>
@endsection

@section('js')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous'></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
@endsection