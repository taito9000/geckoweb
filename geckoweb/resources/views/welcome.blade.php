<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @vite('geckoweb\resources\scss\app.scss', 'resources/js/app.js')
        <title>Laravel</title>
    </head>
    <body>
        <header class="header">
            <div class="videoBox">
                <video class="videoBox__video" muted autoplay loop playsinline>
                    <source src="{{ asset('/video/reptile.mp4')}}" type="video/mp4" >
                </video>
            </div>

            <div class="topPageMenu">

                <ul class="topPageMenu__ul">
                    <li class="topPageMenu__leo">
                        <a href="">
                            <img  class="topPageMenu__leoimg" src="{{ asset('/photo/leo0002 (2).jpg')}}">
                        </a>
                    </li>
                    <li class="topPageMenu__item">
                        <a class="topPageMenu__link" href="">INTRO</a>
                    </li>
                    <li class="topPageMenu__item">
                        <a class="topPageMenu__link" href="">飼育方法</a>
                    </li>
                    <li class="topPageMenu__item">
                        <a class="topPageMenu__link" href="">品種紹介</a>
                    </li>
                    <li class="topPageMenu__item">
                        <a class="topPageMenu__link" href="">質問板</a>
                    </li>
                </ul>
        
                <h1 class = "pageTitle">ヒョウモントカゲモドキ<br/>飼育入門</h1>
            </div>

        </header>

        <main>
            <button class="convince">他の爬虫類の画像見る</button>
        </main>

    </body>
</html>
