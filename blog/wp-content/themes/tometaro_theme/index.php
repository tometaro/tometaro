<!doctype html>
<html lang="ja">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="<?php bloginfo('charaset'); ?>">
    <title>
        <?php bloginfo( 'name'); ?>
        <?php wp_title( '-');?>
    </title>
    <link rel="apple-touch-icon" href="touch_icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animsition.min.css">
    <link rel="alternate" type="application/rss+xml" title="RSS フィード" href="<?php bloginfo('rss2_url'); ?>">
    <!--jQuery-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <!--jQuery animsition-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.animsition.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".animsition").animsition({

                inClass: 'fade-in',
                outClass: 'fade-out',
                inDuration: 1500,
                outDuration: 800,
                linkElement: '.animsition-link',
                // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
                loading: true,
                loadingParentElement: 'body', //animsition wrapper element
                loadingClass: 'animsition-loading',
                unSupportCss: ['animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
                //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser. 
                //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

                overlay: false,

                overlayClass: 'animsition-overlay-slide',
                overlayParentElement: 'body'
            });
        });
    </script>
</head>

<body>

    <!--全体囲み-->

    <div id="container" class="animsition" data-animsition-in="fade-in" data-animsition-out="fade-out-down">
        <!--ヘッダー-->
        <div id="header">
            <h1><a href="<?php echo home_url(); ?>">
      <?php bloginfo('name'); ?>
      </a></h1>
            <p id="desc">
                <?php bloginfo( 'description'); ?>
            </p>
        </div>

        <!--ナビゲーション-->
        <div id="nav">
            <ul>
                <li class="topfade"><a href="http://tometaro.com" class="animsition-link">HOME</a>
                </li>
                <li class="topfade"><a href="http://tometaro.com/about.html" class="animsition-link">ABOUT</a>
                </li>
                <li class="topfade"><a href="http://tometaro.com/portfolio.html" class="animsition-link">PORTFOLIO</a>
                </li>
                <li><a href="index.php" class="animsition-link">BLOG</a>
                </li>
                <li class="topfade"><a href="http://tometaro.com/contact.html" class="animsition-link">CONTACT</a>
                </li>
            </ul>
        </div>


        <!--コンテンツ-->
        <div id="content">

            <!--カテゴリーページ-->
            <?php if(is_category()): ?>
            <p id="pagetitle">
                <?php single_cat_title(); ?>
            </p>
            <?php endif; ?>

            <!--月別ページ-->
            <?php if(is_month()): ?>
            <p id="pagetitle">
                <?php single_month_title(); ?>
            </p>
            <?php endif; ?>

            <?php if(have_posts()): while(have_posts()) : the_post(); ?>

            <!--タイトル-->
            <div class="post">
                <h2><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a></h2>
                <?php the_content(); ?>
                <!--本文-->
                <p class="postinfo">
                    <?php echo get_the_date( 'd/n/Y'); ?>
                    <?php the_time( 'H:ia'); ?>| category:
                    <?php the_category( ','); ?>|
                    <a href="<?php comment_link(); ?>">comments<?php comments_number('(0)','(1)','(%)'); ?></a> 
                </p>
            </div>
            <?php if(is_single()): ?>
            <p class="pagelink"> <span class="oldpage">
          <?php previous_post_link(); ?>
          </span>  <span class="newpage">
          <?php next_post_link(); ?>
          </span> 
            </p>
            <?php endif; ?>
            <?php endwhile; endif; ?>
            <?php if(is_home()): ?>
            <p class="pagelink"> <span class="oldpage">
          <?php next_posts_link ('&laquo; OLD'); ?>
          </span>  <span class="newpage">
          <?php previous_posts_link ('NEW &raquo;'); ?>
          </span> 
            </p>
            <?php endif; ?>
            <?php comments_template(); ?>
        </div>

        <!--サイドバー-->
        <div id="sidebar">
            <ul>
                <?php dynamic_sidebar(); ?>
            </ul>
            <!--RSSフィード-->
            <p class="feed">
                <img src="<?php bloginfo('template_url'); ?>/img/feed-icon-28x28.png" alt="RSS" width="28" height="28">
                <a href="<?php bloginfo('rss2_url'); ?>">
                    RSS FEED
                </a>
            </p>
        </div>

        <!--フッター-->
        <div id="footer">
            <p id="name">トメタロ</p>
            <p><small>Copyright &copy; 2014 tometaro. All rights reserved.</small>
            </p>
        </div>

    </div>

    <div class="background"></div>

    <div id="background">
        <ul id="scene" class="scene">
            <li class="layer" data-depth="0.00"></li>
            <li class="layer" data-depth="0.10">
                <div class="noise00"></div>
            </li>
            <li class="layer" data-depth="0.20">
                <div class="noise01"></div>
            </li>
            <li class="layer" data-depth="0.30">
                <div class="noise02"></div>
            </li>
            <li class="layer" data-depth="0.40">
                <div class="noise03"></div>
            </li>
            <li class="layer" data-depth="0.60">
                <div class="noise04"></div>
            </li>
            <li class="layer" data-depth="0.80">
                <div class="noise05"></div>
            </li>
            <li class="layer" data-depth="0.90">
                <div class="noise06"></div>
            </li>
            <li class="layer" data-depth="1.00">
                <div class="noise07"></div>
            </li>
        </ul>
    </div>
    <!--fade out-->
    <script>
        $('head').append('<style type="text/css">#background{display:none;}</style>');
        $(function () {
            $('#background').fadeIn(2000);
            $('a:not(.feed a)').click(function () {
                var url = $(this).attr("href");
                $('.scene,#container').animate({
                    "opacity": 0
                }, 1000, function () {
                    location.href = url;
                });
                return false;
            });
        });
    </script>
    <script>
        $(function () {
            $('.topfade a').click(function () {
                $('.background').fadeIn(1000);
                location.href = url;
            });
            return false;
        });
    </script>
    <!--return-->
    <script>
        $(window).unload(function () {});
    </script>
</body>

</html>
