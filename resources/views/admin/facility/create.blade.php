@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" />
<style>
    .note-btn.dropdown-toggle:after {
        content: none;
    }

</style>
@endsection

@section('main')
<div class="container">
    {{-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">首頁</a></li>
            <li class="breadcrumb-item"><a href="/admin/news">最新消息管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增消息</li>
        </ol>
    </nav> --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">設施 - 新增</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('facility.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="title" class="col-sm-2 col-form-label">標題</label>
                            <div class="col-sm-10">
                                <input value="aaaaaaaaaaaaaaa" type="text" class="form-control" id="title" name="title" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image_url" class="col-sm-2 col-form-label">圖片</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image_url" name="image_url" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="content" class="col-sm-2 col-form-label">內容</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" id="content" rows="5" required>
                                </textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">新增</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote({
            callbacks: {
                onImageUpload: function(files) {
                    console.log(typeof {{csrf_token()}});
                    let url = "{{route('tool.image_upload')}}";

                    let formData = new FormData();
                    formData.append('_token', '{{csrf_token()}}' );
                    formData.append('img', files[0]);

                    fetch(
                        url,{
                            method:'POST',
                            body: formData
                        }
                    ).then(function(res){
                        return res.text()
                    }).then(function(res){
                        $('#content').summernote('insertImage', res)

                    })
                    // $summernote.summernote('insertNode', imgNode);
                }
            }
        });
    });
</script>
@endsection
