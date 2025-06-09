<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MUSIC ON THE MOVE</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="MUSIC ON THE MOVE">
    <meta property="og:image" content="<?php echo $root; ?>assets/media/share.jpg">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>assets/media/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/media/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $root; ?>assets/media/favicon/favicon-96x96.png">
    <link rel="manifest" href="<?php echo $root; ?>assets/media/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/media/favicon/safari-pinned-tab.svg" color="#3C2631">
    <meta name="msapplication-TileColor" content="#eae8d8">
    <meta name="theme-color" content="#eae8d8">

    <!-- CSS:WP -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/navigation_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/gallery_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/plugins/contact-form-7/styles.css" type="text/css" media="all">
    <!-- CSS:LIBRARY -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/jquery-ui-effect.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <!-- CSS:CONFIG -->
    <link rel="stylesheet" href="https://use.typekit.net/ooe0nyh.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/font.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-rwd.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-wp.css?v=<?php echo time(); ?>">
    <!-- JS:LIBRARY -->
    <script src="<?php echo $root; ?>assets/js/library/modernizr-custom.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery.easing.1.3.min.js"></script>

    <!-- web by ::* www.plaimanas.com -->
</head>

<?php /* echo (in_array($page, ['about.php', 'career.php', 'news-single.php', 'career-apply-form.php', "page.php"])) ? 'no-scrollbar' : '';  */ ?>

<body>
    <div id="page" class="<?php if ($page == '404.php') {
                                echo 'error-page';
                            } ?>">
        <?php
        if ($page_index) {
            include($root . "include/sc-index-intro.php");
        }
        ?>

        <?php include($root . "include/el-cursor.php"); ?>

        <header id="header">
            <div class="header-nav">
                <!-- Logo -->
                <div class="header-brand">
                    <a class="brand" href="<?php echo $root; ?>index.php">
                        <img class="logo" src="<?php echo $root; ?>assets/media/design/logo.svg" alt="">
                    </a>
                </div>

                <!-- Intro -->
                <?php if ($page_index) { ?>
                    <div class="header-intro letter-spacing-sm">
                        <img src="./assets/media/design/logo-large.svg" alt="" class="intro-logo">

                        <div class="intro-text">
                            <p class="size-tagline">16-20 JULY 2025</p>
                            <p class="size-tagline">AT Hotel Labaris Khao Yai</p>
                        </div>
                    </div>
                <?php
                }
                ?>

                <!-- Menu -->
                <div class="header-menu">
                    <div class="panel-overlay"></div>
                    <div class="panel">
                        <div class="panel-wrapper">
                            <div class="panel-scroll" data-lenis-prevent>
                                <div class="panel-body">
                                    <div class="menu-header">
                                        <div class="menu-logo">
                                            <img src="<?php echo $root; ?>assets/media/design/logo.svg" alt="">
                                        </div>

                                        <div class="menu-ttl">
                                            <h2 class="size-h3 uppercase">
                                                Music On The Move 2025
                                            </h2>
                                        </div>

                                        <div class="menu-subttl">
                                            <p>A one-of-a-kind music camp by PGVIM, offering an immersive chamber music experience that goes far beyond the concert hall.</p>
                                        </div>

                                        <div class="menu-cta">
                                            <a class="button" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdVLiMcGUV-IRLqFLf281iqP7qLRq4CTcfhQILhWbWFMc81Iw/viewform">
                                                APPLY NOW
                                            </a>
                                        </div>
                                    </div>


                                    <div class="menu-body">
                                        <ul class="menu">
                                            <li><a href="<?php echo $root; ?>accommodation.php" class="button">VENUES & ACCOMMODATION</a></li>
                                            <li><a href="<?php echo $root; ?>team.php" class="button">OUR TEAM</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <div class="panel-footer">
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/MusicontheMovebyPGVIM" target="_blank" class="clickable"><i class="ic ic-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/music.onthemove/" target="_blank" class="clickable"><i class="ic ic-instagram"></i></a></li>
                                    <li><a href="https://lin.ee/gT5W0Vd1" target="_blank" class="clickable"><i class="ic ic-line"></i></a></li>
                                    <li><a href="https://www.youtube.com/@PGVIMChannel" target="_blank" class="clickable"><i class="ic ic-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <?php include($root . "include/el-header-cta.php"); ?>

                <!-- Menu Control -->
                <?php include($root . "include/el-header-menu-ctrl.php"); ?>
        </header>