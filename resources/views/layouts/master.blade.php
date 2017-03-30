<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SGF'ing Vote</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://use.typekit.net/egn3oau.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>

<header>
    <div class="logo">
        <div class="container">
            <img src="/images/sgfingvote.svg" alt="SGFing Vote">
        </div>
    </div>
    <div class="message">
        <div class="container">
            <h1>
                This is Brenda. She graduated high school before you were born. She’s a good neighbor and she votes.
                <strong>So should you.</strong>
            </h1>
            <img src="/images/old-SGFing-lady.png" alt="Old SGFing Lady">
        </div>
    </div>
</header>

@yield('body')

<footer>
    <div class="container">
        <a href="http://sgfflag.org/" target="_blank">
            <img src="/images/sgf-flag.png" alt="SGF Flag">
        </a>
        <h4>
            Made with love by those who SGF'ing care. <br>
            <span>
                We are not endorsed or supported by any candidate or political entity.<br>
                Goodness no. We’re just a group of Springfield creative professionals trying to do a little good.
            </span>
        </h4>
        <h5>Put the "me" in govern<span>me</span>nt</h5>
    </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="/js/app.js"></script>
</body>
</html>
