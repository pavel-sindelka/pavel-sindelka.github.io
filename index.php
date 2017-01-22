<<<<<<< HEAD
﻿<?php
mb_internal_encoding("UTF-8");

$hlaska = '';
if ($_POST) // V poli _POST něco je, odeslal se formulář
{
    if (isset($_POST['email']) && $_POST['email'] &&
        isset($_POST['subject']) && $_POST['subject'] &&
        isset($_POST['post']) && $_POST['post']
    ) {
        $hlavicka = 'From:' . $_POST['email'];
        $hlavicka .= "\nMIME-Version: 1.0\n";
        $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
        $adresa = 'hypnozc@gmail.com';
        $uspech = mb_send_mail($adresa, "PS-" . $_POST['subject'], $_POST['post'], $hlavicka);
        if ($uspech)
            $hlaska = 'Email byl úspěšně odeslán.';
    } else
        $hlaska = 'Formulář není správně vyplněný!';
    echo "<script type='text/javascript'>alert('$hlaska');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Pavel Šindelka - Web developer, HTML kodér, webdesign.">
    <meta name="keywords" content="Pavel Šindelka, web developer, web design, HTML kodér, tvorba WWW, levně">
    <meta name="author" content="Pavel Šindelka">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="MUdy3jpvLnTYa0Ac-APFna7JYTKVtnTpXH81lG_6MgE"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Pavel Šindelka | Web developer, HTML kodér, designer</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="favicon.png" rel="icon" type="image/png"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="js/jquery.transform2d.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
<div id=loader-page>
    <div class="loader">
        <div class="inner one"></div>
        <div class="inner two"></div>
        <div class="inner three"></div>
    </div>
</div>

<h1>Pavel Šindelka - Web developer, HTML kodér, webdesign</h1>

<div id="mobile">
    <i class="fa fa-bars fa-2x"></i>
</div>

<nav id="header">
    <ul class="top">
        <li><a href="#about" id="aboutMenu" class="menuLink">O MNĚ</a></li>
        <li><a href="#knowledge" id="knowledgeMenu" class="menuLink">ZNALOSTI</a></li>
        <li><a href="#technologies" id="technologiesMenu" class="menuLink">TECHNOLOGIE</a></li>
        <li><a href="#contact" id="contactMenu" class="menuLink">KONTAKT</a></li>
    </ul>
</nav>

<div id="slider" class="slideTop slider">
    <div id="large-header" class="large-header">
        <canvas id="demo-canvas" style="display: none"></canvas>
    </div>
    <script src="js/TweenLite.min.js"></script>
    <script src="js/EasePack.min.js"></script>
    <script src="js/demo-1.js"></script>
    <div class="slideText">
        <img src="img/ps-logo.png" alt="ps-logo">
        <h2>PAVEL ŠINDELKA</h2>
    </div>
</div>

<div id="about" class="about">
    <div class="me"><img src="img/me.jpg" alt="me"></div>

    <h2>NĚCO MÁLO O MNĚ</h2>

    <div class="aboutMe">
        <p>
            Vítejte na mém osobním webu. Jmenuji se <strong>Pavel Šindelka</strong>, je mi 22 let a studoval jsem na
            <strong>SPŠ v Jedovnicích</strong>, kde jsem se účastnil spousty programátorských soutěží. Tato škola mi
            dala dobré základy a ukázala mi životní cestu, která mě naplňuje. Pokročilé znalosti jsem pak získal na
            sociální síti pro IT profesionály - <a href="http://www.itnetwork.cz/" target="_blank">ITnetwork</a>. Od
            roku 2015 pracuji jako programátor webových aplikací. Za dobu svého působení jsem se podílel na velkém
            množství zajímavých projektů, například systém pro řízení workflow ve velkých firmách, informační systém <a
                    href="https://isoh.mzp.cz/" target="_blank">ISOH</a> pro Ministerstvo životního prostředí České
            republiky, právnický systém <a href="https://www.legito.cz/" target="_blank">Legito</a> nebo aplikaci <a
                    href="https://upphoto.cz/login" target="_blank">upPhoto</a> pro automatický upload fotek na server a
            Facebook. Nyní ovládám <strong>HTML 5</strong>, <strong>CSS 3</strong> a <strong>JavaScript</strong> s
            frameworkem <strong>Angular</strong>. V případě dotazů či navázání spolupráce mě prosím kontaktujte na
            e-mail <strong>sindelka95@gmail.com</strong> nebo <strong>kontaktním formulářem</strong> na konci stránky.
        </p>
    </div>
</div>

<div class="container">
    <div id="knowledge" style="padding-top: 10px;">
        <h2>ZNALOSTI</h2>

        <h3><strong>HTML / CSS</strong><br>90%</h3>
        <div class="progress">
            <div id="bar1" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                 aria-valuemax="100"></div>
        </div>

        <h3><strong>JS / Angular</strong><br>80%</h3>
        <div class="progress">
            <div id="bar2" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                 aria-valuemax="100"></div>
        </div>

        <h3><strong>Node / Express</strong><br>40%</h3>
        <div class="progress">
            <div id="bar3" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                 aria-valuemax="100"></div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 hiddenObject">
                <h3><strong>Můj GitHub</strong></h3>
                <a href="https://github.com/pavel-sindelka/" target="_blank">
                    <div class="reference" style="background-image: url(../img/mean.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="technologies" style="padding-top: 10px;">
        <h2>TECHNOLOGIE, KTERÉ PUŽÍVÁM</h2>

        <div class="row">
            <div class="col-md-6 hiddenObject">
                <h3><strong>Angular</strong></h3>
                <a href="https://angularjs.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/angular.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Angular 2</strong></h3>
                <a href="https://angular.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/angular2.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Angular 2 NativeScript</strong></h3>
                <a href="https://www.nativescript.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/angularNativeScript.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Angular 2 Meteor</strong></h3>
                <a href="https://angular-meteor.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/angularMeteor.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Angular CLI</strong></h3>
                <a href="https://cli.angular.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/angularCli.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Webpack</strong></h3>
                <a href="https://webpack.github.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/webpack.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Node</strong></h3>
                <a href="https://nodejs.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/node.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Express</strong></h3>
                <a href="http://expressjs.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/express.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Socket IO</strong></h3>
                <a href="http://socket.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/socketio.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>REST API</strong></h3>
                <a href="https://cs.wikipedia.org/wiki/Representational_State_Transfer" target="_blank">
                    <div class="reference" style="background-image: url(../img/rest.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>NPM</strong></h3>
                <a href="https://www.npmjs.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/npm.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Bower</strong></h3>
                <a href="https://bower.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/bower.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Gulp</strong></h3>
                <a href="http://gulpjs.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/gulp.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Grunt</strong></h3>
                <a href="http://gruntjs.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/grunt.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Babel</strong></h3>
                <a href="https://babeljs.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/babel.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Karma</strong></h3>
                <a href="https://karma-runner.github.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/karma.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Browsersync</strong></h3>
                <a href="https://www.browsersync.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/browserSync.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Git</strong></h3>
                <a href="https://git-scm.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/git.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Bootstrap</strong></h3>
                <a href="http://getbootstrap.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/bootstrap.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>jQuery</strong></h3>
                <a href="https://jquery.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/jquery.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>ES6</strong></h3>
                <a href="http://es6-features.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/es6.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>TypeScript</strong></h3>
                <a href="https://www.typescriptlang.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/typeScript.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>SASS</strong></h3>
                <a href="http://sass-lang.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/sass.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>LESS</strong></h3>
                <a href="http://lesscss.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/less.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="pyrUp"></div>
<div id="respozive" class="slide"></div>
<div class="pyrDown"></div>

<div id="contact" class="container contact">
    <h2>KONTAKT</h2>

    <h3>Facebook: <a href="https://www.facebook.com/sin.pavel/" target="_blank">@sin.pavel</a></h3>

    <h3>LinkedIn: <a href="https://www.linkedin.com/in/pavel-šindelka-780980136/" target="_blank">Pavel Šindelka</a></h3>

    <br>
    <form method="POST">
        <input type="email" class="form-control" name="email" placeholder="Vaše emailová adresa" required><br>
        <input type="text" class="form-control" name="subject" placeholder="Předmět" required><br>
        <textarea class="form-control" rows="10" name="post" placeholder="Vaše zpráva" required></textarea><br>
        <input type="submit" value="ODESLAT" class="sendBtn"/>
    </form>
</div>
</body>
</html>
=======
﻿<?php
mb_internal_encoding("UTF-8");

$hlaska = '';
if ($_POST) // V poli _POST něco je, odeslal se formulář
{
    if (isset($_POST['email']) && $_POST['email'] &&
        isset($_POST['subject']) && $_POST['subject'] &&
        isset($_POST['post']) && $_POST['post']
    ) {
        $hlavicka = 'From:' . $_POST['email'];
        $hlavicka .= "\nMIME-Version: 1.0\n";
        $hlavicka .= "Content-Type: text/html; charset=\"utf-8\"\n";
        $adresa = 'hypnozc@gmail.com';
        $uspech = mb_send_mail($adresa, "PS-" . $_POST['subject'], $_POST['post'], $hlavicka);
        if ($uspech)
            $hlaska = 'Email byl úspěšně odeslán.';
    } else
        $hlaska = 'Formulář není správně vyplněný!';
    echo "<script type='text/javascript'>alert('$hlaska');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Pavel Šindelka - Web developer, HTML kodér, webdesign.">
    <meta name="keywords" content="Pavel Šindelka, web developer, web design, HTML kodér, tvorba WWW, levně">
    <meta name="author" content="Pavel Šindelka">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="MUdy3jpvLnTYa0Ac-APFna7JYTKVtnTpXH81lG_6MgE"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Pavel Šindelka | Web developer, HTML kodér, designer</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="favicon.png" rel="icon" type="image/png"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="js/jquery.transform2d.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
<div id=loader-page>
    <div class="loader">
        <div class="inner one"></div>
        <div class="inner two"></div>
        <div class="inner three"></div>
    </div>
</div>

<h1>Pavel Šindelka - Web developer, HTML kodér, webdesign</h1>

<div id="mobile">
    <i class="fa fa-bars fa-2x"></i>
</div>

<nav id="header">
    <ul class="top">
        <li><a href="#about" id="aboutMenu" class="menuLink">O MNĚ</a></li>
        <li><a href="#knowledge" id="knowledgeMenu" class="menuLink">ZNALOSTI</a></li>
        <li><a href="#technologies" id="technologiesMenu" class="menuLink">TECHNOLOGIE</a></li>
        <li><a href="#contact" id="contactMenu" class="menuLink">KONTAKT</a></li>
    </ul>
</nav>

<div id="slider" class="slideTop slider">
    <div id="large-header" class="large-header">
        <canvas id="demo-canvas" style="display: none"></canvas>
    </div>
    <script src="js/TweenLite.min.js"></script>
    <script src="js/EasePack.min.js"></script>
    <script src="js/demo-1.js"></script>
    <div class="slideText">
        <img src="img/ps-logo.png" alt="ps-logo">
        <h2>PAVEL ŠINDELKA</h2>
    </div>
</div>

<div id="about" class="about">
    <div class="me"><img src="img/me.jpg" alt="me"></div>

    <h2>NĚCO MÁLO O MNĚ</h2>

    <div class="aboutMe">
        <p>
            Vítejte na mém osobním webu. Jmenuji se <strong>Pavel Šindelka</strong>, je mi 22 let a studoval jsem na
            <strong>SPŠ v Jedovnicích</strong>, kde jsem se účastnil spousty programátorských soutěží. Tato škola mi
            dala dobré základy a ukázala mi životní cestu, která mě naplňuje. Pokročilé znalosti jsem pak získal na
            sociální síti pro IT profesionály - <a href="http://www.itnetwork.cz/" target="_blank">ITnetwork</a>. Od
            roku 2015 pracuji jako programátor webových aplikací. Za dobu svého působení jsem se podílel na velkém
            množství zajímavých projektů, například systém pro řízení workflow ve velkých firmách, informační systém <a
                    href="https://isoh.mzp.cz/" target="_blank">ISOH</a> pro Ministerstvo životního prostředí České
            republiky, právnický systém <a href="https://www.legito.cz/" target="_blank">Legito</a> nebo aplikaci <a
                    href="https://upphoto.cz/login" target="_blank">upPhoto</a> pro automatický upload fotek na server a
            Facebook. Nyní ovládám <strong>HTML 5</strong>, <strong>CSS 3</strong> a <strong>JavaScript</strong> s
            frameworkem <strong>Angular</strong>. V případě dotazů či navázání spolupráce mě prosím kontaktujte na
            e-mail <strong>sindelka95@gmail.com</strong> nebo <strong>kontaktním formulářem</strong> na konci stránky.
        </p>
    </div>
</div>

<div class="container">
    <div id="knowledge" style="padding-top: 10px;">
        <h2>ZNALOSTI</h2>

        <h3><strong>HTML / CSS</strong><br>90%</h3>
        <div class="progress">
            <div id="bar1" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                 aria-valuemax="100"></div>
        </div>

        <h3><strong>JS / Angular</strong><br>80%</h3>
        <div class="progress">
            <div id="bar2" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                 aria-valuemax="100"></div>
        </div>

        <h3><strong>Node / Express</strong><br>40%</h3>
        <div class="progress">
            <div id="bar3" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                 aria-valuemax="100"></div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 hiddenObject">
                <h3><strong>Můj GitHub</strong></h3>
                <a href="https://github.com/pavel-sindelka/" target="_blank">
                    <div class="reference" style="background-image: url(../img/mean.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="technologies" style="padding-top: 10px;">
        <h2>TECHNOLOGIE, KTERÉ PUŽÍVÁM</h2>

        <div class="row">
            <div class="col-md-6 hiddenObject">
                <h3><strong>Angular</strong></h3>
                <a href="https://angularjs.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/angular.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Angular 2</strong></h3>
                <a href="https://angular.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/angular2.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Angular 2 NativeScript</strong></h3>
                <a href="https://www.nativescript.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/angularNativeScript.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Angular 2 Meteor</strong></h3>
                <a href="https://angular-meteor.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/angularMeteor.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Angular CLI</strong></h3>
                <a href="https://cli.angular.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/angularCli.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Webpack</strong></h3>
                <a href="https://webpack.github.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/webpack.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Node</strong></h3>
                <a href="https://nodejs.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/node.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Express</strong></h3>
                <a href="http://expressjs.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/express.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Socket IO</strong></h3>
                <a href="http://socket.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/socketio.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>REST API</strong></h3>
                <a href="https://cs.wikipedia.org/wiki/Representational_State_Transfer" target="_blank">
                    <div class="reference" style="background-image: url(../img/rest.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>NPM</strong></h3>
                <a href="https://www.npmjs.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/npm.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Bower</strong></h3>
                <a href="https://bower.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/bower.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Gulp</strong></h3>
                <a href="http://gulpjs.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/gulp.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Grunt</strong></h3>
                <a href="http://gruntjs.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/grunt.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Babel</strong></h3>
                <a href="https://babeljs.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/babel.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Karma</strong></h3>
                <a href="https://karma-runner.github.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/karma.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Browsersync</strong></h3>
                <a href="https://www.browsersync.io/" target="_blank">
                    <div class="reference" style="background-image: url(../img/browserSync.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Git</strong></h3>
                <a href="https://git-scm.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/git.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>Bootstrap</strong></h3>
                <a href="http://getbootstrap.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/bootstrap.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>jQuery</strong></h3>
                <a href="https://jquery.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/jquery.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>ES6</strong></h3>
                <a href="http://es6-features.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/es6.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>TypeScript</strong></h3>
                <a href="https://www.typescriptlang.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/typeScript.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>SASS</strong></h3>
                <a href="http://sass-lang.com/" target="_blank">
                    <div class="reference" style="background-image: url(../img/sass.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 hiddenObject">
                <h3><strong>LESS</strong></h3>
                <a href="http://lesscss.org/" target="_blank">
                    <div class="reference" style="background-image: url(../img/less.png);">
                        <div class="info">
                        <span class="fa-stack fa-3x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-link fa-stack-1x"></i>
                        </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="pyrUp"></div>
<div id="respozive" class="slide"></div>
<div class="pyrDown"></div>

<div id="contact" class="container contact">
    <h2>KONTAKT</h2>

    <h3>Facebook: <a href="https://www.facebook.com/sin.pavel/" target="_blank">@sin.pavel</a></h3>

    <h3>LinkedIn: <a href="https://www.linkedin.com/in/pavel-šindelka-780980136/" target="_blank">Pavel Šindelka</a></h3>

    <br>
    <form method="POST">
        <input type="email" class="form-control" name="email" placeholder="Vaše emailová adresa" required><br>
        <input type="text" class="form-control" name="subject" placeholder="Předmět" required><br>
        <textarea class="form-control" rows="10" name="post" placeholder="Vaše zpráva" required></textarea><br>
        <input type="submit" value="ODESLAT" class="sendBtn"/>
    </form>
</div>
</body>
</html>
>>>>>>> b8ad6a9708d240e89388634cc91e98ba1430b335