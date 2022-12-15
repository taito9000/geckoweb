<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @vite('resources/scss/app.scss', 'resources/js/app.js') 
              <title>Geckoweb</title>
    </head>
    <body>
        <header class="header">
            <div class="imgBackGround">
                <div class="imgBackGround__img">
                    <img src="{{ asset('/photo/desertLandscape (1).jpg')}}">
                </div>
            </div>

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
        
                <h1 class = "pagesTitle">INTRO</h1>
            </div>

        </header>

            <div class="mainContents">
            当サイトでは、レオパの飼育法を紹介しています。並びにそれを通して、爬虫類飼育全般に共通する事柄
            を知っていただけたらと思っております！
            僕が、ヒョウモントカゲモドキ（レオパードゲッコー）（以下、レオパ）を初めて飼育したのは１７年前です。
            それ以来、いろんな爬虫類を飼育しています。先ほど申し上げたように、飼育方法のところをクリックしていた
            だければ、レオパの飼育方法を紹介しています！
            ようこそ！素晴らしき爬虫類の世界へ！！
            よろしくお願いいたします！
            </div>

    </body>
</html>
