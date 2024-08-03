<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class="blog">
			<div class="modTtlbg blog">
				<div class="modTttlbox blog">
					<h2 class="modTttlbox--ttl">Blog</h2>
					<p class="modTttlbox--subttl">ブログ</p>
				</div>
			</div>
			<div class="blog__list">
				<div class="blog__listInner">
					<div class="blog__listInnerBox">
						<article class="articleDetail">
							<h1 class="articleDetailTitle"><?php the_title(); ?></h1>
							<div class="articleDetailCtg">
								<div>
									<?php

									$terms = get_the_terms($post->ID, 'blog_category');
									if ($terms && !is_wp_error($terms)) {
										foreach ($terms as $term) :
											$url = get_term_link($term, 'blog_category');
									?>
											<p class="blog__listInnerArticle--tag"><a href="<?php echo $url ?>"><?php echo $term->name; ?></a></p>
									<?php
										endforeach;
									} else {
									}
									?>
								</div>
								<p class="blog__listInnerArticle--date">投稿日: <?php the_time('Y/m/d'); ?><br />更新日: <?php the_modified_date('Y/m/d'); ?></p>
							</div>
							<div class="articleDetailContents--text">
								<?php the_content(); ?>
							</div>
						</article>
						<div class="navi naviNP" id="navi">
							<?php
							$prev_post = get_previous_post(); // 前の投稿を取得
							$next_post = get_next_post(); // 次の投稿を取得
							?>
							<?php if ($prev_post || $next_post) : ?>
								<?php if ($prev_post) : // 前の記事 
								?>
									<a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="articleDetail--btn prev">
										前の記事へ
									</a>
								<?php endif; ?>
								<?php if ($next_post) : // 次の記事 
								?>
									<a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="articleDetail--btn next">
										次の記事へ
									</a>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					</div>

					<aside class="blog__listInnerSidebar">
						<?php get_search_form(); ?>
						<p class="blog__listInnerSidebar--txt">category</p>
						<ul class="blog__listInnerSidebar--cate">
							<?php
							$terms = get_terms('blog_category', 'hide_empty=0');
							foreach ($terms as $term) {
								echo '<li class="blog__listInnerSidebar--cateText"><a href="' . get_term_link($term) . '">' . $term->name . '(' . "$term->count" . ')</a></li>';
							}
							?>
						</ul>
						<p class="blog__listInnerSidebar--txt">archive</p>
						<ul class="blog__listInnerSidebar--cate">
							<?php wp_get_archives('post_type=blog&type=yearly&show_post_count=1'); ?>
						</ul>
					</aside>
				</div>


			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
