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
        
                <h1 class = "pagesTitle">品種紹介</h1>
            </div>

        </header>
        <div class="mainContents"> 
        
            <div class="mainContents__right">
                <p class="mainContents__title">タンジェリン</p>
                    <p class="mainContents__text">
                    タンジェリンはハイイエローをオレンジが強くなるように選別交配された品種になります。
                    有名なのは、アメリカの有名なブリーダーJMGReptileが作出した「ブラッドタンジェリン」や全てのタンジェリンのラインを
                    混ぜて、最強のタンジェリンを作ろうと作出された「マンダリンタンジェリン」が有名です。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/leo0002 (2).jpg')}}">
                </div>
            </div>
            <div class="mainContents__right">
                <p class="mainContents__title">タンジェリン</p>
                    <p class="mainContents__text">
                    タンジェリンはハイイエローをオレンジが強くなるように選別交配された品種になります。
                    有名なのは、アメリカの有名なブリーダーJMGReptileが作出した「ブラッドタンジェリン」や全てのタンジェリンのラインを
                    混ぜて、最強のタンジェリンを作ろうと作出された「マンダリンタンジェリン」が有名です。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/leo0002 (2).jpg')}}">
                </div>
            </div>
        </div>
      
    </body>
</html>