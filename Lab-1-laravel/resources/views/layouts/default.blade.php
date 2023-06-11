<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/time.js" defer></script>
    <script src="js/history_accounting.js" defer></script>
</head>
<body id="body--main" background="img/9.jpg">

<div class="container">
    <header class="header">
        <h1>@yield('title')</h1>
        <time class="time">10.08.2019 </time>
        <nav class="nav">
            <a href="/main">главная</a>
            <a href="/about">обо мне</a>
            <a href="/interests">мои интересы</a>
            <a href="/learning">учеба</a>
            <a href="/gallery">фотографии</a>
            <a href="/contacts">контакты</a>
            <a href="/test">тест</a>
            <a href="/history">история просмотра</a>
        </nav>
    </header>
    <main class="main">
        <section class="section section--main">
            @yield('content')
        </section>
    </main>
</div>

<footer>

</footer>
</body>
</html>
