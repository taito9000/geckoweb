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

    <p class="mainQaboard__letters--contact">回答内容</p>

    <textarea id="body" class="mainQaboard__textBody" type="text" cols="130" rows="20" placeholder="回答内容を入力してください。" name="body">{{old('body')}}</textarea>
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
 document.getElementById("mainQaboard__image").addEventListener('change', e => {
    const previewImageNode = document.getElementById('mainQaboard__previewImage')
    const fileReader = new FileReader()
    fileReader.onload = () => previewImageNode.src = fileReader.result
    if (e.target.files.length > 0) {
      fileReader.readAsDataURL(e.target.files[0])
    }else{
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
            ${question.image ? 
            `<img class="mainQaboard__questionImage" src="/storage/${question.image}">` : 
            ''}
          </div>

          ${question.parent?`<div class="mainQaboard__questionTitle">
          
          </div>`:`
          <div class="mainQaboard__questionTitle">
          ${question.title}
          </div>`}
        
          <div class="mainQaboard__questionBody">
            ${question.body.replace(/\r?\n/g, '<br>')}
          </div>

          <form action="/admin/question/${question.id}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="mainQaboard__questionDeleteButton">削除</button>
          </form>

        </div>
      `
      $(".mainQaboard__questionsWrapper").append(question_element);
    });
  })
  .fail((error)=>{
    console.log(error.statusText)
  })
});
</script>
@endsection