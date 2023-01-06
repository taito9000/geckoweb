<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @vite('resources/scss/app.scss', 'resources/js/app.js')
        <title>Geckoweb</title>
    </head>
    <body>
        <header class="header">
            <div class="videoZone">
                <video class="videoZone__video" muted autoplay loop playsinline>
                    <source src="{{ asset('video/leos001.mp4')}}" type="video/mp4" >
                </video>
            </div>
            <div class="menuLeoImg--welcome">
                <a href="/">
                    <img  class="menuLeoImg__img" src="{{ asset('/photo/leo0002 (2).jpg')}}">
                </a>
            </div>
            <div class="topPageMenu">
                <ul class="topPageMenu__ul">                
                    <li class="topPageMenu__item">
                        <a class="topPageMenu__link" href="/intro">INTRO</a>
                    </li>
                    <li class="topPageMenu__item">
                        <a class="topPageMenu__link" href="/howToCare">飼育方法</a>
                    </li>
                    <li class="topPageMenu__item">
                        <a class="topPageMenu__link" href="/morph">品種紹介</a>
                    </li>
                    <li class="topPageMenu__item">
                        <a class="topPageMenu__link" href="/questionBoard">質問板</a>
                    </li>
                </ul>     
                <h1 class = "topPageTitle">ヒョウモントカゲモドキ<br/>飼育入門</h1>
            </div>
        </header>
    </body>
</html>
