<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 */

?>

</div><!-- #content -->

<!--footer-->
<div class="pagetop">
  <a href="#top"><img src="/assets/img/common/pagetop.svg" alt="" width="9" height="29"></a>
</div>
<footer class="footerSub">
  <a href="" class="footerSub__link" target="_blank"><span>メルマガの登録はこちらから</span></a>
</footer>
<footer class="footer">
  <div class="footer__contents">
    <div class="footer__logo">
      <a href="/">
        <figure class="logo">
          <img src="/assets/img/common/lds_logo-white.png" alt="" width="247" height="55">
        </figure>
      </a>
    </div>

    <div class="footer__navList">
      <ul class="footer__navList__list">
        <li class="footer__navList__item"><a href="/">Home</a></li>
        <li class="footer__navList__item"><a href="/about">About</a></li>
        <li class="footer__navList__item"><a href="/class">クラス</a></li>
        <li class="footer__navList__item"><a href="/teacher">教師</a></li>
        <li class="footer__navList__item"><a href="/contact">Contact</a></li>
        <li class="footer__navList__item"><a href="/blog">Blog</a></li>
        <li class="footer__navList__item"><a href="/faq">Faq</a></li>
        <li class="footer__navList__item"><a href="/gallery">ダンスギャラリー</a></li>
      </ul>

      <div class="footer__navLink">
        <div class="footer__navLinkOuter">
          <a href="https://studio-leia.jp/" target="_blank">運営Studio Leia</a>
        </div>
        <div class="footer__navLinkSns">
          <a href="https://x.com/leiadancestudio" target="_blank"><img src="/assets/img/common/x.svg" alt="X" width="20" height="22"></a>
          <a href="https://www.instagram.com/leia_dance_studio/" target="_blank"><img src="/assets/img/common/instagram.svg" alt="Instagram" width="24" height="24"></a>
          <a href="https://www.facebook.com/leia.dance.studio/" target="_blank"><img src="/assets/img/common/facebook.svg" alt="facebook" width="24" height="24"></a>
        </div>
      </div>

      <div class="footer__navMail">
        MAIL<br>info ＠ studio-leia.jp <span>@マークを半角英文字に置き換えてお送り下さい</span>
      </div>
    </div>
  </div>

  <small class="copyright">© 2024 Leia Dance Studio, All Rights Reserved.</small>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="module" src="<?php echo esc_url(get_theme_file_uri('/assets/js/jquery-3.7.1.min.js')); ?>"></script>
<script type="module" src="<?php echo esc_url(get_theme_file_uri('/assets/js/script.js')); ?>"></script>
<script type="module" src="<?php echo esc_url(get_theme_file_uri('/assets/js/gsap.min.js')); ?>"></script>
<script type="module" src=" <?php echo esc_url(get_theme_file_uri('/assets/js/ScrollTrigger.min.js')); ?>"></script>
<script type="module" src="<?php echo esc_url(get_theme_file_uri('/assets/js/swiper-bundle.min.js')); ?>"></script>
<script type="module" src="<?php echo esc_url(get_theme_file_uri('/assets/js/simplebar.min.js')); ?>"></script>
</body>

</html>