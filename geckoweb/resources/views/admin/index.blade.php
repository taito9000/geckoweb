@extends('admin.layouts')



@section('content')

<div class="mainQaboard">
  <div class="mainQaboard__questionsTitle">
  質問一覧
  </div>
  <div class="mainQaboard__questionsWrapper"> 
  <div>
</div>
<script>
//question load
$(function(){
  $.ajax({
    type: "get", 
    url:"{{route('api.questionBoard.index')}}", 
    dataType: 'json'
  })
  .done((res)=>{
    //お問い合わせHTML作成
    res.forEach(threads => {
      let questions = '';
      threads.forEach(question => {
        const question_element = `
          <div class="mainQaboard__question${question.parent?'--child':''}">
            <div class="mainQaboard__questionImageWrapper">
              ${question.image ? 
              `<img class="mainQaboard__questionImage" src="/storage/${question.image}">` : 
              ''}
            </div>
            <div class="mainQaboard__questionTitle">
              ${question.parent? `${question.title}` : 
                `<a href="/admin/question/${question.id}/edit">${question.title}</a>`}
            </div>
            <form action="/admin/question/${question.id}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="mainQaboard__questionDeleteButton">削除</button>
            </form>
          </div>
        `
        questions += question_element;
      });
      $(".mainQaboard__questionsWrapper").append(questions);
    });
  })
  .fail((error)=>{
    console.log(error.statusText)
  })
});
</script>
@endsection
