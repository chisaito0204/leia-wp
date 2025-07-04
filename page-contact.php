<?php
/*
Template Name: contact
*/
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="contact">
			<div class="modTtlbg con">
				<div class="modTttlbox">
					<h2 class="modTttlbox--ttl">Contact</h2>
					<p class="modTttlbox--subttl">お問合せ</p>
				</div>
			</div>
			<div class="top__contactForm">
				<p class="top__contactForm__note">
					レッスンに関する質問、その他問い合わせは下記のフォームからお送りください。<br />
					折り返しメールにて担当者からご連絡いたします。メールアドレスは間違いないよう記載ください。<br />
					講師や運営スタッフはレッスン時以外はスタジオには不在のため、下記フォームまたはメールにてご連絡ください。<br />
					体験レッスン、レッスン内容、出張レッスン、近所で教えて欲しいなどご質問・ご意見もお気軽にご連絡ください。<br>
					体験レッスンをご希望の方はこれまでのダンス歴などあればぜひご記入ください。全くの初心者も大歓迎です。
				</p>
				<?php echo apply_shortcodes('[contact-form-7 id="b5a40c5" title="お問い合わせ"]'); ?>

				<!-- <p class="top__contactForm__txt">お名前(必須)<span class="pink">*</span></p>
				<input type="text" name="name" value="" class="" />
				<p class="top__contactForm__txt">メールアドレス(必須)<span class="pink">*</span></p>
				<input type="email" name="mail" value="" class="" />
				<p class="top__contactForm__txt">タイトル</p>
				<input type="text" name="title" value="" class="" />
				<p class="top__contactForm__txt">メッセージ内容</p>
				<textarea name="contents" cols="40" rows="10"></textarea>
				<div class="submit">
					<input type="submit" value="送信" class="wpcf7-form-control wpcf7-submit" /><span class="ajax-loader"></span>
				</div> -->

			</div>

			<div class="modSns">
				<p class="modSns__txt">各SNSで Leia Dance Studioの<br class="sm-only" />最新情報を発信しています。<br />フォロー頂けると嬉しいです！</p>
				<div class="modSnsLinks">
					<a href="https://x.com/leiadancestudio" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/x-color.svg')); ?>" alt="X" width="40" height="40" /></a>
					<a href="https://www.instagram.com/leia_dance_studio/" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/insta-color.svg')); ?>" alt="Instagram" width="43" height="43" /></a>
					<a href="https://www.facebook.com/leia.dance.studio/" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/fb-color.svg')); ?>" alt="facebook" width="46" height="46" /></a>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
