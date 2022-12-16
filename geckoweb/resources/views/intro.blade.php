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
                    <img src="{{ asset('/photo/whiteMarble (1).jpg')}}">
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
            <div class="mainContents__article">
              僕が、ヒョウモントカゲモドキ（レオパードゲッコー、以下レオパ）を初めて飼育したのは２００５年の
            ７歳の誕生日でした。</br>
</br>それ以来いろんな生き物を飼育し２０１８年からは約３年間レオパのブリーダーの下で働いておりました。</br></br>
              当サイトでは、今までに得た知識を皆様と共有し、レオパの飼育方法をはじめ、爬虫類の飼育についても
            知っていただければと思います。
            </br></br>
            ようこそ！素晴らしき爬虫類の世界へ！！
            </br></br>
            よろしくお願いいたします！
            </div>
        </div>

    </body>
</html>
