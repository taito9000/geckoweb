<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @vite('resources/scss/app.scss', 'resources/js/app.js') 
        <title>Geckoweb</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
                        <a class="pagesMenu__link" href="{{route('admin.index')}}">質問一覧</a>
                    </li>
                </ul>
                <h1 class = "pagesTitle">質問一覧</h1>
            </div>
        </header>
        <!-- フラッシュメッセージ -->
        @if (session('success'))
            <div class="flashMessage">
                <div class="flashMessage__success">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @yield('content')
    </body>
</html>