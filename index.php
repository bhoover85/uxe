<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>UX Entertainment | We are UXE</title>
        <meta name="description" content="Inspired by music, sports, and culture. We live to tell stories. Ones that are uniquely fueled by thought and passion, captured by live action or animation. Each project in its purest form emerges from a collaboration of minds to evoke the senses. We are UXE.">
        <!-- <meta name="viewport" content="width=device-width"> -->

        <!-- Facebook Open Graph Info -->
        <meta property="og:title" content="UX Entertainment | We are UXE" />
        <meta property="og:url" content="http://uxentertainment.com" />
        <meta property="og:description" content="Inspired by music, sports, and culture. We live to tell stories. Ones that are uniquely fueled by thought and passion, captured by live action or animation. Each project in its purest form emerges from a collaboration of minds to evoke the senses. We are UXE." />
        <meta property="og:image" content="http://uxentertainment.com/img/og_image.jpg" />
        <!-- End Facebook Open Graph Info -->

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="/easybox/styles/default/easybox.min.css" type="text/css" media="screen" />
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="home"></div>

        <div id="container">

			<!-- header -->
            <?php include 'includes/header.php'; ?>
            <!-- header -->

            <!-- carousel -->
            <?php include 'includes/carousel.php'; ?>
            <!-- carousel -->

            <!-- inspired -->
            <?php include 'includes/inspired.php'; ?>
            <!-- inspired -->

            <div id="portfolio"><a name="section1" class="section"></a></div>

            <!-- featured -->
            <?php include 'includes/featured.php'; ?>
            <!-- featured -->

            <!-- commercials -->
            <?php include 'includes/commercials.php'; ?>
            <!-- commercials -->

            <!-- branded entertainment -->
            <?php include 'includes/branded.php'; ?>
            <!-- branded entertainment -->

            <!-- tv -->
            <?php include 'includes/tv.php'; ?>
            <!-- tv -->

            <!-- film -->
            <?php include 'includes/film.php'; ?>
            <!-- film -->

            <!-- websites -->
            <?php include 'includes/websites.php'; ?>
            <!-- websites -->

            <!-- music -->
            <?php include 'includes/music.php'; ?>
            <!-- music -->

            <!-- events -->
            <?php include 'includes/events.php'; ?>
            <!-- events -->

            <!-- mobile -->
            <?php include 'includes/mobile.php'; ?>
            <!-- mobile -->

            <!-- radio -->
            <?php include 'includes/radio.php'; ?>
            <!-- radio -->

            <div id="press"><a name="section3" class="section"></a></div>

            <!-- press -->
            <?php include 'includes/press.php'; ?>
            <!-- press -->

            <div id="about_contact"><a name="section4" class="section"></a></div>

            <!-- about + contact -->
            <?php include 'includes/about_contact.php'; ?>
            <!-- about + contact -->

            <!-- team -->
            <?php include 'includes/team.php'; ?>
            <!-- team -->

            <!-- instagram -->
            <?php include 'includes/instagram.php'; ?>
            <!-- instagram -->

            <div id="divider">
                <img src="img/divider.jpg"/>
            </div>

            <!-- footer -->
            <?php include 'includes/footer.php'; ?>
            <!-- footer -->

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/matchMedia.js"></script>
        <script src="js/jquery.instagram.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- concatenated -->
        <script type="text/javascript" src="/easybox/distrib.min.js"></script>

        <!-- seperate files -->
        <script type="text/javascript" src="/easybox/easybox.min.js"></script>
        <script type="text/javascript" src="/easybox/handlers.min.js"></script>
        <script type="text/javascript" src="/easybox/extras/autoload.min.js"></script>

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-39292464-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        
    </body>
</html>
