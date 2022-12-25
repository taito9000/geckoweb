<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @vite('resources/scss/app.scss', 'resources/js/app.js') 
              <title>Geckoweb</title>
 </head>
    <body>
        <header class="header">
           <div class="menuLeoImg">
                <a href="/">
                    <img  class="menuLeoImg__img" src="{{ asset('/photo/leo0002 (2).jpg')}}">
                </a>
            </div>

            <div class="pagesMenu">
                <ul class="pagesMenu__ul">
                    <li class="pagesMenu__item">
                        <a class="pagesMenu__link" href="/intro">INTRO</a>
                    </li>
                    <li class="pagesMenu__item">
                        <a class="pagesMenu__link" href="/howToCare">飼育方法</a>
                    </li>
                    <li class="pagesMenu__item">
                        <a class="pagesMenu__link" href="/morph">品種紹介</a>
                    </li>
                    <li class="pagesMenu__item">
                        <a class="pagesMenu__link" href="/questionBoard">質問板</a>
                    </li>
                </ul>
                <h1 class = "pagesTitle">質問板</h1>
            </div>
        </header>
        <div class="mainQaboard">
            <div class="mainQaboard__qaBoardTextbox">
          

<section class="mt-20 pb-24">
  <div class="w-192 mx-auto">
    <p class="text-left">
      お問い合わせ内容に対する回答は私見であり、それに対するいかなる責任も負いかねます。<br>
      以上のことに同意の上、以下のお問い合わせ内容をご入力の上、ご送信下さい。<br>
    </p>
    <div class="mt-8">
      <!-- ▼▼▼▼エラーメッセージ▼▼▼▼　-->
      @if($errors->any())
        <ul class="errorBox">
            @foreach($errors->all() as $error)
                <li class="errorBox__contents">{{$error}}</li>
            @endforeach
        </ul>
      @endif
      <!-- ▲▲▲▲エラーメッセージ▲▲▲▲　-->

      <form action="{{route('questionBoard')}}" method="POST">
        @csrf
        <div class="mainQaboard__body">
        <input id="title" class="mainQaboard__title" type="text" placeholder="タイトルを入力してください。" name="title" value="{{old('title')}}">
        @if($errors->has('title'))
            <p class="text-red-400">{{$errors->first('title')}}</p>
          @endif
          <p>お問い合わせ内容</p>
         
          <textarea id="body" class="mainQaboard__text" type="text" placeholder="お問い合わせ内容を入力してください。" name="body" ></textarea>
          @if($errors->has('body'))
            <p class="text-red-400">{{$errors->first('body')}}</p>
          @endif
          <button type="submit">送信</button>
       
        </div>
        
      </form>
        <div class="mainQaboard__questionsTitle">
          投稿された質問
        </div>
        <div class="mainQaboard__questions">
        </div>
    </body>
</html>
