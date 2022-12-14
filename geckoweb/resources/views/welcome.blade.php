<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @vite('resources/scss/app.scss', 'resources/js/app.js','resources/scss/topPageMenu.scss','resources/scss/pageTitle.scss')
        <title>Laravel</title>
    </head>
    <body>

            <div class="video-Box">
                <video class="video-box__video" muted autoplay loop playsinline>
                    <source src="/public\storage\video\reptile.mp4" type="video/mp4" >
                </video>
            </div>
            <div class="topPageMenu">
                <div class="topPageMenu__leo">
                    <a href="">
                        <img src="{{ asset('geckoweb\public\storage\photo\leo0002 (2).jpg')}}">
                    </a>
                </div>
                <p><a href="">INTRO</a></p>
                <p><a href="">飼育方法</a></p>
                <p><a href="">品種紹介</a></p>
                <p><a href="">質問板</a></p>
            </div>
        
            <div class=pageTitle>ヒョウモントカゲモドキ<br/>飼育入門</div>
        

            <button class="convince">他の爬虫類の画像見る</div>
  
    </body>
</html>
