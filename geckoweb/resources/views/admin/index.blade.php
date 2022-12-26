<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @vite('resources/scss/app.scss', 'resources/js/app.js') 
              <title>Geckoweb</title>
    </head>
    <body>
       helloworld
       @extends('layouts.admin')

@section('content')

        <div class="py-4 bg-white rounded">
            <form action="{{route('admin.blogs.store')}}" method="POST" enctype="multipart/form-data">
            @csrf    
            <div class="">
                    <h3 class="">ブログ登録</h3>
                        <button type="submit" class="">保存</button>
                </div>

                <div class="">
                    <!-- ▼▼▼▼エラーメッセージ▼▼▼▼　-->
                    @if($errors->any())
                        <div class="">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="qaBoard__errorMessage">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- ▲▲▲▲エラーメッセージ▲▲▲▲　-->
                    <div class="mb-6">
                        <label class="" for="title">タイトル</label>
                        <input id="title" class="" type="text" name="title" value="{{old('title',$blog->title)}}">
                    </div>

                    <div class="mb-6">
                        <label class="" for="image">画像</label>
                        <div class="flex items-end">
                            <img id="previewImage" src="{{asset('storage/'.$blog->image)}}" data-noimage="{{asset('storage/'.$blog->image)}}" alt="" class="rounded shadow-md w-64">
                            <input id="image" class="" type="file" accept='image/*' name="image">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label class="" for="body">本文</label>
                        <textarea id="body" class="" name="body" rows="5">{{old('body',$blog->body)}}</textarea>
                    </div>
                </div>
            </form>
        </div>


    </body>
</html>