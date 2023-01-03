@extends('admin.layouts')

@section('pageTitle')
質問詳細
@endsection

@section('content')

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

<div class="mainQaboard__questionsTitle">
      投稿された質問
</div>
<div class="mainQaboard__questionsWrapper">

</div>

<div class="mainQaboard__questionsTitle">
      回答を作成
</div>

<form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <input type="hidden" name="parent" value="{{$question->id}}">
    <input id="title" class="mainQaboard__textTitle" type="text" placeholder="タイトルを入力してください。" name="title" value="{{old('title')}}">
    @if($errors->has('title'))
      <p class="mainQaboard__errorBox">{{$errors->first('title')}}</p>
    @endif

    <p class="mainQaboard__letters--contact">回答内容</p>

  <textarea id="body" class="mainQaboard__textBody" type="text" cols="130" rows="20" placeholder="回答内容を入力してください。" name="body">{{old('body')}}</textarea>
    @if($errors->has('body'))
      <p class="mainQaboard__errorMessage">{{$errors->first('body')}}</p>
    @endif

  <div class="mainQaboard__img">
    <p class="mainQaboard__letters--img">画像</p>
    <input id="image" type="file" accept='image/*' name="image">
    <button type="submit">送信</button>
  </div>
</form>
</div>
<script>
    //question load
    $(function(){
      $.ajax({
        type: "get", //HTTP通信の種類
        url:"{{route('api.questionBoard.show', $question->id)}}", //通信したいURL
        dataType: 'json'
      })
      //通信が成功したとき
      .done((res)=>{
        //お問い合わせHTML作成
        res.forEach(question => {
          const question_element = `
            <div class="mainQaboard__question${question.parent?'--child':''}">
              <div class="mainQaboard__questionImageWrapper--large">
                ${question.image ? 
                `<img class="mainQaboard__questionImage" src="/storage/${question.image}">` : 
                ''}
              </div>
              // <div class="mainQaboard__questionTitle">
              //   ${question.title}
              // </div>
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
@endsection