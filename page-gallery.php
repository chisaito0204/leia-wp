<?php
/*
Template Name: gallery
*/
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="media">
			<div class="modTttlbox">
				<h2 class="modTttlbox--ttl">Dance Gallery</h2>
				<p class="modTttlbox--subttl">ダンスギャラリー</p>
				<p class="modTttlbox--txt">
					見て感じる、ダンスの世界。<br>
					<a href="https://leia-dance.jp/instructor/"><span class="pink borderPink">講師・河野麻耶</span></a>の作品を中心に、情熱あふれる舞台の魅力を映像と写真でお届けします。<br>
					生徒さんの出演も順次追加予定です。
				</p>
			</div>

			<div class="tab-container">
				<div class="tab active">写真</div>
				<div class="tab">動画</div>
			</div>

			<div>
				<?php if (CFS()->get('gallery_photo')) : ?>
					<ul class="media__contents grid show">
						<?php
						$photos = CFS()->get('gallery_photo');
						foreach ($photos as $photo) :
							$alt_text = isset($photo['gallery_photo_alt']) ? esc_attr($photo['gallery_photo_alt']) : '';
						?>
							<li class="item">
								<a href="<?php echo esc_url($photo['gallery_photo_image']); ?>" class="luminous">
									<img src="<?php echo esc_url($photo['gallery_photo_image']); ?>" alt="<?php echo $alt_text; ?>" width="800" height="533">
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>

				<div class="media__contents">
					<?php if (CFS()->get('gallery_video')) : ?>
						<?php
						$videos = CFS()->get('gallery_video');
						foreach ($videos as $video) :
						?>
							<iframe width="335" height="210" src="<?php echo esc_url($video['gallery_video_url']); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>

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
