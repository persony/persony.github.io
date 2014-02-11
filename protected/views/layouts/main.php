<?php
/** @var string $content */
/** @var Controller $this */
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/underscore-min.js"></script>
    <script src="/js/theme.js"></script>

    <title>Персони</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="/css/bootstrap-overrides.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/css/theme.css" />

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="/css/lib/animate.css" media="screen, projection" />

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/apple-touch-icon-152x152.png">
</head>
<body class="<?php if($this->id=='site'&& $this->action->id == 'index') echo "pull_top"?>">
<div class="navbar navbar-inverse <?=($this->id=='site'&& $this->action->id == 'index') ? "transparent navbar-fixed-top" : "navbar-static-top"?>">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">
                <strong>ПЕРСОНИ</strong>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li><a href="/all/">ВСІ</a></li>
                    <li><a href="/about/">ПРО ПРОЕКТ</a></li>
                    <li><a href="/contact/">ДОПИСУВАЧУ</a></li>
                    <li><a class="btn-header" href="/sign-up/">Реєстрація</a></li>
                    <li><a class="btn-header" href="/sign-in/">Вхід</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?=$content?>

<!-- starts footer -->
<footer id="footer">
    <div class="container">
        <div class="row credits">
            <div class="span12">
                <div class="row social">
                    <div class="span12">
                        <a href="https://www.facebook.com/persony.persony" class="facebook">
                            <span class="socialicons ico1"></span>
                            <span class="socialicons_h ico1h"></span>
                        </a>
                        <a href="https://twitter.com/PersonyProject" class="twitter">
                            <span class="socialicons ico2"></span>
                            <span class="socialicons_h ico2h"></span>
                        </a>
                        <a href="https://plus.google.com/107673314003532823384/posts" class="gplus">
                            <span class="socialicons ico3"></span>
                            <span class="socialicons_h ico3h"></span>
                        </a>
                        <a href="#" class="vk">
                            <span class="socialicons ico7"></span>
                            <span class="socialicons_h ico7h"></span>
                        </a>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="span12">
                        <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/deed.uk"><img alt="Ліцензія Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />Проект &laquo;<span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Dataset" property="dct:title" rel="dct:type">Персони</span>&raquo; ліцензовано за <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/deed.uk">ліцензією Creative Commons Із зазначенням автора - Розповсюдження на тих самих умовах 4.0 Міжнародна</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>