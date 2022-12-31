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
                        <a class="pagesMenu__link" href="/wordDetails">用語等紹介</a>
                    </li>
                    <li class="pagesMenu__item">
                        <a class="pagesMenu__link" href="/questionBoard">質問板</a>
                    </li>
                </ul>
        
                <h1 class = "pagesTitle">用語等紹介</h1>
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

        <div class="mainContents"> 

            <div class="mainContents__right">
                <p class="mainContents__title">保温器具</p>
                    <p class="mainContents__text">
                       重要なことはケージ内の温度を左側：２８度、中央：３０度、右側：３２度のように温度勾配をつけ、生体自身に
                       好きな温度の場所に移動させることです。温度を３０度前後に保つ必要がありますが、日本の夏と冬をエアコン
                       なしで管理することは難しいです。僕はエアコンで室温を年中２５度前後にし、パネルヒーターで一部を３１～３２度
                       にし、その余熱で加温部分の反対側を２８度前後にして管理しています。レオパは冬眠できる種類ですが、それについては
                       「クーリン」項で説明します。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/panelHeater (1).jpg')}}">
                </div>
            </div>

            <div class="mainContents"> 

            <div class="mainContents__right">
                <p class="mainContents__title">床材</p>
                    <p class="mainContents__text">
                    僕は基本的にキッチンペーパーを一番おすすめしています。理由は交換しやすいゆえに
                    清潔に保ちやすく安価だからです。砂は見た目は良いのですが、排泄物が多少
                    は残ってしまうことと、生体が飲み込んでしまうので、あまりお勧めできません。
                    コストコで売っているちょっと高めのキッチンペーパーが一番良いです。
                    僕はその辺で売っているやつを使っていますコストコの会費を会費を考えるとこっちのほうが安いかと思います。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/panelHeater (1).jpg')}}">
                </div>
            </div>
</div>
<div class="mainContents"> 

            <div class="mainContents__right">
                <p class="mainContents__title">シェルター</p>
                    <p class="mainContents__text">
                僕のおすすめは「スドーウェットシェルター M」一択です。似たような全体が素焼きで上部に水を溜めれる
                タイプであれば、そちらもおすすめです。このシェルターは水飲み皿の役割も果たします。上部に入れた水が浸透して、
                シェルター内の壁面をなめると彼らは水分を摂取できるようです。または、夜に上部から直接水を飲んでいます。また、上部に
                水が溜まっている場合、全体に浸透した水がシェルター内の湿度を適度に保ち、素焼きゆえに、面がざらざらしているので、脱皮をかなりスムーズに行えていることを
                確認しています。このMサイズはほとんどの生体にはアダルトでもちょうどいいサイズです。育ちすぎても頭だけかくして尻尾だけ出すのもかわいいですし、
                その観点からもこちらをおすすめします。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/sudowetshelter (1).jpg')}}">
                </div>
            </div>
            </div>
<div class="mainContents"> 
            <div class="mainContents__right">
                <p class="mainContents__title">温度計</p>
                    <p class="mainContents__text">
                初めて飼う方は必須です。１つは暖かいほうに置いてください。レオパは暑さに弱いです。冬眠できることもあり、ある程度の寒さには耐性があるので、
                暑くなりすぎることのほうが心配です。僕は初めて飼ったときは、暖かいほうと冷たいほうと、部屋に温度計があって、それぞれどのように温度に差があるかを
                比べていました。そのほうが後々、管理しやすいと思ったからです。使用している保温器具の能力で室温との差がどれぐらい出るのかは把握しておいたほうがいいように思います。
                特に、真夏と真冬には気をつけてください。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/thermometer (1).jpg')}}">
                </div>
            </div>

            </div>
<div class="mainContents"> 
            <div class="mainContents__right">
                <p class="mainContents__title">水皿</p>
                    <p class="mainContents__text">
                    シェルターの項で説明したようなウェットシェルターがあれば無くてもあっても良いと思います。
                    ないのであれば必須です。ただ、初めて飼う方やベビーにはしっかりと水皿を用意していただきたいです。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/waterbowl (1).jpg')}}">
                </div>
            </div>
            </div>
<div class="mainContents"> 
            <div class="mainContents__right">
                <p class="mainContents__title">サプリメント</p>
                    <p class="mainContents__text">
                    ベビーから購入される方は、必ず購入し、生後１～３か月給餌の際にはほとんど毎回与えてほしいです。
                    レオパは適正なサイズに成長できれば、生後半年ほどで繁殖が可能になります。それ程成長が早いので、
                    小さい時ほど多くのカルシウムを必要とします。多くの個体はカルシウムなしのコオロギだけでもしっかり
                    成長できますが、個体によっては吸収が下手なのか分かりませんが、そうではない個体もおります。それに、
                    この大きさの場合、いずれにせよ多量のカルシウムを必要としているので、ぜひとも、カルシウムもまぶした餌を
                    与えていただきたいです。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/calcium2 (1).jpg')}}">
                </div>
            </div>
            </div>
<div class="mainContents"> 
            <div class="mainContents__right">
                <p class="mainContents__title">脱皮不全</p>
                    <p class="mainContents__text">
                   しっかりと湿度を保っていても、脱皮不全といって、一部だけ脱皮しきれていない部分がある
                   状態になることがあります。指先がなりやすいかと思います。特に冬ですね。そんな時は写真のように、
                   ある程度密閉できるものにキッチンペーパーなどを入れ多めに霧吹きをし、脱皮不全で残った皮をふやかします。そして、取ってあげて下さい。
                   気づくのが遅れると、脱皮不全の上に脱皮不全が重なり、指が飛びます。気を付けましょう。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/calcium2 (1).jpg')}}">
                </div>
            </div>
            </div>
<div class="mainContents"> 
            <div class="mainContents__right">
                <p class="mainContents__title">複数飼育</p>
                    <p class="mainContents__text">
                   基本的には単独飼育してください。例えば、９０ｃｍ以上のようなスペースの多いケージでしたらできるかもしれませんが、少なくとも初心者の方にはお勧めしません。
                   僕はこのような経験があります。１年以上、同じケージにメス３匹と２匹をそれぞれ、約４０ｃｍｘ３０ｃｍｘ１５ｃｍ飼育し、その後、その５匹を個別に飼育し分けて飼育したことがあります。
                   ５匹とも、明らかに良く餌を食べ、体格が良くなり、元気なように見えました。同じケージで飼育していた１年以上の間、彼らはけんかしたことはありませんでした。
                   少なくとも、血が出るようなけがになるけんかはしていませんでしたが、結果的には、相当ストレスがあったと思っています。ということで、僕は
                   複数匹での飼育は全くおすすめしません。オスは殺し合いになるので、不可能です。
                    </p>
                </div>
                <div class="mainContents__img">
                    <img src="{{ asset('/photo/calcium2 (1).jpg')}}">
                </div>
            </div>

            </div>



        </div>
        
    </body>
</html>