<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
<div class="top-contact">
  <div class="top-anime-left"></div>
  <div class="top-anime-right"></div>
  <h2>Contact</h2>
  <h3>-お問い合わせ-</h3>
</div>
<main>
  <p class="contact-des">
    コースの受講にあたり、面談による無料相談を実施しております。コース受講希望の方、もしくは面談による質問対応が必要な方も、以下のフォームよりお問い合わせください。もちろん、面談後に受講を辞退することも可能です。
  </p>
  <form method="post">
    <?php echo do_shortcode('[contact-form-7 id="23" title="お問い合わせフォーム"]'); ?>
  </form>
  <div class="to-policy">
    <a href="<?php echo esc_url(home_url('/policy')); ?>">プライバシーポリシー</a>
  </div>
  <div id="q-openclose1"></div>
  <div id="q-openclose2"></div>
  <div id="q-openclose3"></div>
  <div id="q-openclose4"></div>
  <div id="q-openclose5"></div>
  <div id="container-top"></div>
  <div id="service"></div>
  <div id="course"></div>
  <div id="contact"></div>
</main>
<?php get_footer(); ?>