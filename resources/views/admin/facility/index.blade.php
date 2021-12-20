@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <style>
      td{
        word-wrap:break-word ;
        word-break: break-all ;
      }
    </style>
@endsection

@section('main')
  <div class="container">
    <div class="card">
      <div class="card-header">
        設施管理
      </div>
      <div class="card-body">
        <a href="{{ route('facility.create')}}" class="btn btn-warning">新增設施</a>
        <hr>
        <div class="table-responsive">
          <table id="example" class="table table-border table-striped table-hover text-center align-middle">
            <thead>
                <tr>
                    <th>標題</th>
                    <th width="120">圖片</th>
                    <th>內容</th>
                    <th width="120">操作</th>
                </tr>
            </thead>
            <tbody >
              @foreach ($facilities as $facility)
                <tr>
                  <td>{{$facility->title}}</td>
                  <td>
                    <img src="{{ Storage::url($facility->image_url) }}" width="200" alt="">
                  </td>
                  <td>{{$facility->content}}</td>
                  <td>
                    <a href="{{route('facility.edit', ['id' => $facility->id])}}" class="btn btn-primary ">編輯</a>
                    <button class="btn btn-danger btn-delete">刪除</button>
                    <form class="delete-form d-none" action="{{ route('facility.destroy',['id' => $facility->id]) }}" method="POST">
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