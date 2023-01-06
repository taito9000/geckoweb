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
      <div class="mainQaboard__questionsTitle">
        投稿された質問
      </div>
      <div class="mainQaboard__questionsWrapper">
        
      </div>

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
        以上のことに同意の上、以下の必須項目の入力後にご送信下さい。<br>
      </p>
      <form action="{{route('questionBoard.store')}}" method="POST">
        @csrf
        <input type="hidden" name="parent" value="{{$question->id}}">
        <p class="mainQaboard__letters--contact">返信内容（必須）</p>     
        <textarea id="body" class="mainQaboard__textBody" type="text" cols="130" rows="20" placeholder="返信内容を入力してください。" name="body">{{old('body')}}</textarea>
        @if($errors->has('body'))
          <p class="mainQaboard__errorMessage">{{$errors->first('body')}}</p>
        @endif
        <div class="mainQaboard__img">
          <p class="mainQaboard__letters--img">画像</p>
          <input id="mainQaboard__image" type="file" accept='image/*' name="image">
          <img id="mainQaboard__previewImage">
          <button type="submit" id="mainQaboard__submit">送信</button>
      </div>
    </form>
</div>
    <script>

      const questionId = {{$question->id}};

      // 画像プレビュー
      document.getElementById('mainQaboard__image').addEventListener('change', e => {
        const previewImageNode = document.getElementById('mainQaboard__previewImage')
        const fileReader = new FileReader()
        fileReader.onload = () => previewImageNode.src = fileReader.result
        if (e.target.files.length > 0) {
            fileReader.readAsDataURL(e.target.files[0])
        } else {
            previewImageNode.src = previewImageNode.dataset.noimage
        }
      })

      //question load
      $(function(){
      $.ajax({
        type: "get", 
        url:"{{route('api.questionBoard.show', $question->id)}}", 
        dataType: 'json'
      })
      .done((res)=>{
        //お問い合わせHTML作成
        res.forEach(question => {
          const question_element = 
          `
            <div class="mainQaboard__question${question.parent?'--child':''}">
              
            <div class="mainQaboard__questionImageWrapper--large">
              ${question.image? 
                `<img class="mainQaboard__questionImage" src="/storage/${question.image}">`: 
                ''}
              </div>

              ${question.parent?`<div class="mainQaboard__questionTitle">
          
              </div>`:`
              <div class="mainQaboard__questionTitle">
              ${question.title}
              </div>
              `}

              <div class="mainQaboard__questionBody">
                ${question.body.replace(/\r?\n/g, '<br>')}
              </div> 
             
            </div>
          `
          $(".mainQaboard__questionsWrapper").append(question_element);
        });
      })
      //通信が失敗したとき
      .fail((error)=>{
        console.log(error.statusText)
      })
    });
    </script>
  </body>
</html>
