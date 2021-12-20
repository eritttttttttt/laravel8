@extends('layouts.app')
@section('css')

@endsection

@section('main')
<div class="container">
    <h1>聯絡我們管理</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>姓名</th>
                <th>電話</th>
                <th>Email</th>
                <th>表單</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->content}}</td>
                    <td>
                        <a class="btn btn-danger btn-delete">刪除</a>
                        <form action="{{route('contact.destroy', ['id' => $contact->id])}}" class="d-none"
                                method="POST"
                            >
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous'></script>
<script>
    $('.btn-delete').on('click',function(){
        $(this).next().submit();
    })
    


</script>
@endsection
