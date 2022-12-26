<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @vite('resources/scss/app.scss', 'resources/js/app.js') 
              <title>Geckoweb</title>
    </head>
    <body>
    <form action="{{route('admin.questionBoard.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <input id="title" class="mainQaboard__textTitle" type="text" placeholder="タイトルを入力してください。" name="title" value="{{old('title')}}">
        @if($errors->has('title'))
          <p class="mainQaboard__errorBox">{{$errors->first('title')}}</p>
        @endif

        <p class="mainQaboard__letters--contact">お問い合わせ内容</p>
        
      <textarea id="body" class="mainQaboard__textBody" type="text" cols="130" rows="20" placeholder="お問い合わせ内容を入力してください。" name="body"></textarea>
        @if($errors->has('body'))
          <p class="mainQaboard__errorMessage">{{$errors->first('body')}}</p>
        @endif

      <div class="mainQaboard__img">
        <p class="mainQaboard__letters--img">画像</p>
        <input id="image" type="file" accept='image/*' name="image">
        <button type="submit">送信</button>
      </div>
    </form>
    </body>
</html>