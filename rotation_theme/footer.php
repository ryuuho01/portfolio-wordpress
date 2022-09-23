<footer id="footer">
  <div class="footer-content">
    <div class="footer_icon">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/rot.png" alt="rot">
      </a>
    </div>
    <div class="footer-about">
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
    </div>
  </div>
  <div class="small">
    <small>Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All Rights Reserved.</small>
  </div>
  <button class="scroll-top" id="button">
    <i class="fas fa-angle-up"></i>
  </button>

</footer>
<?php wp_footer(); ?>
</div>
</body>


</html>