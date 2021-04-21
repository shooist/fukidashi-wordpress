<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=1.1">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&amp;display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <meta name="keywords" content="ホームページ,制作,作成,稲沢,一宮,羽島,愛西,あま,愛知,Fukidashi,フキダシ">
    <meta name="description" content="稲沢市・一宮市の中小企業のホームページ制作ならFukidashi（フキダシ）にお任せください。Webサイト制作から、IT周りのご相談まで、皆さまのお困りごとを手広くサポートいたします。Webを活用した集客のサポートのご相談も承ります。">
    <?php wp_head(); ?>
  </head>
  <body>
<?php if( ! is_page('tech') && ! is_tax('tag_tech') && ! is_singular( 'tech-blog' ) ): ?>
    <div class="Header js-firstView-01">
      <div class="Header__inner"> 
        <h1 class="Header__logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Common/logo.png" alt="稲沢・一宮のホームページ制作ならフキダシ"></a></h1>
        <nav class="Header__navi">
          <ul class="Header__naviList">
  <?php if(is_front_page()): ?>
            <li class="Header__naviMenu"> <a href="#aboutus">私たちについて</a></li>
            <li class="Header__naviMenu"> <a href="#service">私たちにできること</a></li>
            <li class="Header__naviMenu"> <a href="#price">料金</a></li>
  <?php else: ?>
            <li class="Header__naviMenu"> <a href="<?php echo home_url('/#aboutus'); ?>">私たちについて</a></li>
            <li class="Header__naviMenu"> <a href="<?php echo home_url('/#service'); ?>">私たちにできること</a></li>
            <li class="Header__naviMenu"> <a href="<?php echo home_url('/#price'); ?>">料金</a></li>
  <?php endif; ?>
            <li class="Header__naviMenu"> <a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
          </ul>
        </nav>
        <div class="Header__humbager"></div>
      </div>
    </div>
<?php else: ?>
    <div class="TechBlogHeader"> 
      <h1 class="TechBlogHeader__title"><a href="<?php echo home_url('/tech'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/TechBlog/TechBlog__title.png" alt="フキダシ　テックブログ"></a></h1>
    </div>
<?php endif; ?>