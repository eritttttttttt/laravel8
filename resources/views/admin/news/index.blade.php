@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('main')
  <div class="container">
    <div class="card">
      <div class="card-header">
        最新消息管理
      </div>
      <div class="card-body">
        <a href="{{ route('news.create') }}" class="btn btn-warning">新增最新消息</a>
        {{-- <a herf="{{ asset('/admin/news/create') }}" class="btn btn-warning">新1增最新消息</a> --}}
        <hr>
        <div class="table-responsive">
          <table id="example" class="table table-border table-striped table-hover text-center align-middle">
            <thead>
                <tr>
                    <th>標題</th>
                    <th>日期</th>
                    <th style="width:200px; background-color:pink">圖片</th>
                    <th>content</th>
                    <th width="120">操作</th>
                </tr>
            </thead>
            <tbody >
              @foreach ($news as $new)
                <tr>
                  <td>{{$new->title}}</td>
                  <td>{{$new->date}}</td>
                  <td>
                    <img src="{{$new->image_url}}" width="200" alt="">
                  </td>
                  <td>{{$new->content}}</td>
                  <td>
                    {{-- <a href="{{asset("admin/news/$news->id/edit")}}" class="btn btn-primary">編輯1</a> --}}
                    {{-- <a href="{{asset('admin/news/'. $new->id .'/edit')}}" class="btn btn-primary">編輯2</a> --}}
                    <a href="{{route('news.edit', ['id'=> $new->id])}}" class="btn btn-primary">編輯route</a>
                    {{-- <a href="{{route('news.destroy',['id'=> $new->id])}}" class="btn btn-danger">刪除</a> --}}
                    <button class="btn btn-danger btn-delete">刪除</button>
                    <form class="delete-form d-none" action="{{ route('news.destroy',['id' => $new->id]) }}" method="POST">
                      @csrf
                      @method("DELETE")
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>

            </tfoot>
          </table>
        </div>
      </div>
    </div>
    
  </div>
@endsection

@section('js')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous'></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable();
        
        $('.btn-delete').on('click', function(){
          $(this).next().submit();
        })
      } );
    </script>
@endsection