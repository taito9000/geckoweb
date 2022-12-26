<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="utf-8">
      @vite('resources/scss/app.scss', 'resources/js/app.js') 
            <title>Geckoweb</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
          <!-- ▼▼▼▼エラーメッセージ▼▼▼▼　-->
          @if($errors->any())
            <div class="mainQaboard__errorBox">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
              </div>
          @endif
          <!-- ▲▲▲▲エラーメッセージ▲▲▲▲　-->

    <p class="mainQaboard__letters--first">
      お問い合わせ内容に対する回答は私見であり、それに対するいかなる責任も負いかねます。<br>
      以上のことに同意の上、以下のお問い合わせ内容をご入力後、ご送信下さい。<br>
    </p>
    <form action="{{route('questionBoard')}}" method="POST">
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
    <div class="mainQaboard__questionsTitle">
      投稿された質問
    </div>
    <div class="mainQaboard__questions">
      <div>qusetions</div>
    </div>

    <div class="mainQaboard__questions">
      <div>qusetions</div>
    </div> 
    <div class="mainQaboard__questions">
      <div>qusetions</div>
    </div> 
    <div class="mainQaboard__questions">
      <div>qusetions</div>
    </div>
    <script>
    // ねこちゃんたち追加
    $('#js-pulldown').select2();

    // 画像プレビュー
    document.getElementById('image').addEventListener('change', e => {
        const previewImageNode = document.getElementById('previewImage')
        const fileReader = new FileReader()
        fileReader.onload = () => previewImageNode.src = fileReader.result
        if (e.target.files.length > 0) {
            fileReader.readAsDataURL(e.target.files[0])
        } else {
            previewImageNode.src = previewImageNode.dataset.noimage
        }
    })
</script>
    </body>
</html>