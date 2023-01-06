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
                    <!-- <li class="pagesMenu__item">
                        <a class="pagesMenu__link" href="/wordDetails">用語等紹介</a>
                    </li> -->
                    <li class="pagesMenu__item">
                        <a class="pagesMenu__link" href="/questionBoard">質問板</a>
                    </li>
                </ul>
                <h1 class = "pagesTitle">投稿が完了しました。</h1>
            </div>
        </header>
        <div class="intro">
          <div class="intro__article">
            お問い合わせいただきありがとうございました。<br>
            できるだけ早くサイト上の掲示板にて返信させていただきます。 <br>
            恐れ入りますが、しばらくお待ちください。 <br>
          </div>
        </div>
    </body>
</html>