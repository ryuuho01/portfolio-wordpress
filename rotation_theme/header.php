<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- SNSのアイコン呼び出し -->
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <!-- 蛍火 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- google font1 -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <!-- google font2 -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
  <!-- google font3 -->
  <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
  <!-- google font4 -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="rgba" onclick="">
    <header class="article-nav">

      <!-- ハンバーガーメニュー -->
      <nav class="nav" id="nav">
        <ul>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">
              トップページ
            </a>
          </li>
          <li>
            <span onclick="about()">私たちについて</span>
          </li>
          <li>
            <span onclick="service()">サービス</span>
          </li>
          <li>
            <span onclick="course()">コース</span>
          </li>
          <li>
            <span onclick="contact()">お問い合わせ</span>
          </li>
        </ul>
      </nav>
      <div class="menu_fixed">
        <a class="s-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri('/'); ?>/img/rot.png" alt="rot"></a>
      </div>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">
              トップページ
            </a>
          </li>
          <li>
            <span onclick="about()">私たちについて</span>
          </li>
          <li>
            <span onclick="service()">サービス</span>
          </li>
          <li>
            <span onclick="course()">コース</span>
          </li>
          <li>
            <span onclick="contact()">お問い合わせ</span>
          </li>
        </ul>
      </nav>

      <div class="menu" id="menu">
        <span class="menu__line--top"></span>
        <span class="menu__line--middle"></span>
        <span class="menu__line--bottom"></span>
      </div>
      <div id="modal"></div>
    </header>