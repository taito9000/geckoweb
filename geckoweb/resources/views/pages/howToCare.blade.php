<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @vite('resources/scss/app.scss', 'resources/js/app.js') 
              <title>Geckoweb</title>
    </head>
    <body>
        <header class="header">
        <!-- <div class="imgBackGround">
                <div class="imgBackGround__img">
                    <img src="{{ asset('/photo/whiteMarble (1).jpg')}}">
                </div>
            </div> -->

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
        
                <h1 class = "pagesTitle">飼育方法</h1>
            </div>

        </header>

        <div class="mainContents"> 
        
            <div class="mainContents__right">
                <p class="mainContents__title">ケージ</p>
                    <p class="mainContents__text">
                        飼育ケージは通気性が良く、観察しやすいものを選びましょう。
                        アダルトでは、４５ｃｍｘ３０ｃｍｘ１５ｃｍ程のものが良いと思います。
                        それ以下のサイズでも、飼育することは可能ですが、ケージが大きいと、より
                        生体の観察を行うことができ、特に、はじめて飼育される方にはおすすめです。高さをも少しとって、
                        流木ななどを入れますと、夜間に活発に動き回っている様子を観察できます。生体が成長するにつれて、あまり動き回るような
                        気がしております。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/desertcage (1).jpg')}}">
                </div>
            </div>
        </div>
    </body>
</html>