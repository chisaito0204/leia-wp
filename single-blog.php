<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class="blog">
			<div class="modTtlBox">
				<h2 class="modTitle blog">Blog..</h2>
				<ul class="modBreadCrumb">
					<li><a href="/">Home</a></li>
					<li><a href="/blog">ブログ</a></li>
					<li class="detail"><?php the_title(); ?></li>
				</ul>
			</div>
			<div class="blog__list">
				<div class="blog__listInner">
					<article class="articleDetail">
						<h1 class="articleDetailTitle"><?php the_title(); ?></h1>
						<div class="articleDetailCtg">
							<?php

							$terms = get_the_terms($post->ID, 'blog_category');
							if ($terms && !is_wp_error($terms)) {
								foreach ($terms as $term) :
									$url = get_term_link($term, 'blog_category');
							?>
									<p class="blog__listInnerArticle--tag"><?php echo $term->name; ?></p>
							<?php
								endforeach;
							} else {
							}
							?>
							<p class="blog__listInnerArticle--date">posted: <?php the_time('Y/m/d'); ?><br />update: <?php the_modified_date('Y/m/d'); ?></p>
						</div>
						<div class="articleDetailContents--text">
							<?php the_content(); ?>
						</div>
					</article>

					<aside class="blog__listInnerSidebar">
						<form class="searchForm" action="" method="get">
							<button class="searchBtn" type="submit">
								<figure class="icon"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/icon_search.svg')); ?>" width="32" height="32" alt="検索マーク" /></figure>
							</button>
							<input class="searchInput" type="search" value="" name="s" id="s" />
						</form>
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

				<div class="navi naviNP" id="navi">
					<?php
					$prev_post = get_previous_post(); // 前の投稿を取得
					$next_post = get_next_post(); // 次の投稿を取得
					?>
					<?php if ($prev_post || $next_post) : ?>
						<?php if ($prev_post) : // 前の記事 ?>
							<a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
									<path d="M10 3L3.14732 10.2829L10.0271 17.5402" stroke="#000" stroke-width="2" stroke-linecap="round"></path>
								</svg>
								<span class="prevTxt">prev</span>
							</a>
						<?php endif; ?>
						<?php if ($next_post) : // 次の記事 ?>
							<a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
								<span class="nextTxt">next</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
									<path d="M10 17L16.8527 9.71709L9.9729 2.45976" stroke="#000" stroke-width="2" stroke-linecap="round"></path>
								</svg>
							</a>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
