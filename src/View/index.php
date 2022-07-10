<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie PHP</title>
    <!--=========== FAVICON ===========-->
    <link rel="shorcut icon" href="webroot/assets/miyu-sakura.png" type="image/x-icon">

    <!--=========== REMIXICONS ===========-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=========== CSS ===========-->
    <!-- <link rel="stylesheet" href="webroot/css/styles.css"> -->
    <link rel="stylesheet" href="webroot/css/style.css">
</head>

<body>
    <header class="hero container">
        <!-- Theme Button -->
        <i class="ri-moon-line change-theme" id="theme-btn"></i>
        <i class="ri-bear-smile-line home" id="color-theme" onClick="history.back()"></i>
        <div class="hero__container grid">
            <div class="hero__data">
                <div class="hero__border">
                    <div class="hero__picture" onClick="location.href='/W-PHP-502-MAR-2-1-PiePHP-jennifer.kadri/User'">
                        <i class="ri-home-heart-fill" id="home"></i>
                    </div>
                </div>

                <h2 class="hero__name">Welcome to Pie PHP</h2>
                <h3 class="hero__info">This is a PHP - MVC Framework</h3>
                <small class="hero__credit">Made by Jennifer Kadri</small>
            </div>
        </div>
    </header>

    <?= $view ?>

    <!--=========== FOOTER ===========-->
    <footer class="footer">
        <span class="footer__copy">
            &#169;Miyuna. All rights reserved
        </span>
    </footer>

    <!--=========== COLOR THEME JS ===========-->
    <script src="assets/js/colorTheme.js"></script>

    <!--=========== SCROLL REVEAL ===========-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=========== MAIN JAVASCRIPT ===========-->
    <script src="webroot/js/main.js"></script>
    <script src="webroot/js/theme.js"></script>
</body>

</html>