@extends('admin.layouts')

@section('content')

<div class="mainQaboard">
  <div class="mainQaboard__questionsTitle">
  質問一覧
  </div>
  <div class="mainQaboard__questionContents">
    <div class="mainQaboard__questionsWrapper">
  </div>
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
          res.forEach(threads => {  //質問の配列をループ
            let questions = ''; 
            threads.forEach(question => { 
              const question_element = 
                question.parent ? '' :`<div class="mainQaboard__question${question.parent?'--child':''}">
                
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
              questions += question_element; //使用して組み立てたHTMLを追加して行く
            });
            $(".mainQaboard__questionsWrapper").append(questions);//ラッパー要素に組み立てたHTMLを追加
          });
        })
        //通信が失敗したとき
        .fail((error)=>{
          console.log(error.statusText)
        })
      });
</script>
@endsection

            <!-- <div class="mainQaboard__questionTitle">
              ${question.parent? `${question.title}` : 
                `<a href="/admin/question/${question.id}/edit">${question.title}</a>`}
            </div> -->