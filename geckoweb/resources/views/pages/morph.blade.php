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
        
        
                <h1 class = "pagesTitle">品種紹介</h1>
            </div>
        </header>

        <div class="mainContents"> 
            <div class="mainContents__title">
                タンジェリン
            </div>
            <div class="mainContents__text">
                <div class="mainContents__img">
                    <img class="mainContents__imgContents" src="{{ asset('/photo/tantornade (1).jpg')}}">
                </div>
            タンジェリンはハイイエローをオレンジが強くなるように選別交配された品種になります。
            有名なのは、アメリカの有名なブリーダーJMGReptileが作出した「ブラッドタンジェリン」や全てのタンジェリンのラインを
            混ぜて、最強のタンジェリンを作ろうと作出された「マンダリンタンジェリン」が有名です。
            </div>
        </div>

        <div class="mainContents"> 
            <div class="mainContents__title">
                ジェムスノー
            </div>
            <div class="mainContents__text">
            <div class="mainContents__img">
                    <img class="mainContents__imgContents" src="{{ asset('/photo/gemsnow (2).jpg')}}">
                </div>
            優性遺伝（優性遺伝）のスノーでマックスノーよりも白くなり黄色みが少ない気がします。同じ親から生まれた個体に
    でも黄色が強い個体と弱い個体の差がマックスノーよりも激しく、スーパースノーのような見た目の個体もいます。
            </div>
            
        </div>


        <div class="mainContents"> 
            <div class="mainContents__title">
                レッドダイヤモンド
            </div>
            <div class="mainContents__text">
            <div class="mainContents__img">
                    <img class="mainContents__imgContents" src="{{ asset('/photo/rd (1).jpg')}}">
            </div>
               写真のように、中央オレンジのストライプと２本の白いストライプがしっかりと表現されるように、選別交配された
               モルフです。アダルトに成長してからも、濃いオレンジに白という、成長につれて無くなりやすい色がしっかりと残る
               ところがこのモルフの１つの魅力です。
               トレンパーアルビノ中では一番好きなラインで、僕の好きなモルフです。
            </div>
            
        </div>

        <div class="mainContents"> 
            <div class="mainContents__title">
                ホワイトアンドイエロー（ｗ＆ｙ）
            </div>
            <div class="mainContents__text">
            <div class="mainContents__img">
                    <img class="mainContents__imgContents" src="{{ asset('/photo/wyraptor (1).jpg')}}">
            </div>
            写真はｗ＆ｙラプター（トレンパーエクリプス）です。ｗ＆ｙは、体の側面が真っ白になるホワイトサイドと
            かけ合わせたモルフの色をより強めるという特徴がある品種です。いろいろな他のモルフと組み合わさって、それぞれを
            より、派手にしてくれるので、僕の好きなモルフです。遺伝的に神経障害のある子もいますので、購入を考えられる際には
            歩いてるところを実際に見せてもらい、そのような症状がないかどうか確認しましょう。
            </div>
            
        </div>

        <div class="mainContents"> 
            <div class="mainContents__title">
                ブラックナイト
            </div>
            <div class="mainContents__text">
            <div class="mainContents__img">
                    <img class="mainContents__imgContents" src="{{ asset('/photo/blacknight (1).jpg')}}">
            </div>
            オランダのFerry Zulmond氏によって、２０年ほど黒のみを追求して選別交配された品種で、非常に高価です。
            メラニスティック系統のモルフとしては最高峰だと思います。真っ黒だけでなく、模様のある個体もおり、そちらのほうが
            好きという方もいらっしゃいます。真っ黒い個体でも、うっすらと模様が見える期間があったりと上がり下がりがある個体もおります。
            生後半年はハイイエローのようなのに、生後２年頃に急に真っ黒になった個体を見たことがあります。その、逆もあるので、
            購入される際は慎重に選んでいただきたいです。
            </div>
            
        </div>
    </body>
</html>