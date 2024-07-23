<?php get_header(); ?>
<section class="blog">
  <div class="modTtlBox">
    <h2 class="modTitle blog">Blog..</h2>
    <ul class="modBreadCrumb">
      <li><a href="/">Home</a></li>
      <li><a href="/blog">ブログ</a></li>
      <li>
        <?php $url = get_term_link($term, $taxonomy); ?>
        <?php
        $term_object = get_queried_object();
        echo $term_object->name;
        ?>
        カテゴリー
      </li>
    </ul>
  </div>
  <div class="blog__list">

    <p class="blog__listTitle">備忘録：
      <?php
      $term_object = get_queried_object();
      echo $term_object->name;
      ?>
    </p>
    <div class="blog__listInner">
      <div class="blog__listInnerBox">
        <?php
        $term_slug = $term_object->slug;

        $args = array(
          'post_type' => 'blog',
          'taxonomy' => 'blog_category',
          'field' => 'slug',
          'term' => $term_slug,
          'paged' => $paged,
          'posts_per_page' => 4,
          'order' => 'DESC',
        );

        $my_query = new WP_Query($args);
        ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <article class="blog__listInnerArticle">
            <figure class="blog__listInnerArticle--thumb">
              <?php the_post_thumbnail('full'); ?>
            </figure>
            <div class="blog__listInnerArticle--box">
              <p class="blog__listInnerArticle--date"><?php the_time('Y/m/d'); ?></p>
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
              <h2 class="blog__listInnerArticle--title"><?php the_title(); ?></h2>
              <div class="blog__listInnerArticle--text">
                <?php
                $content = get_the_content();
                $trimmed_content = wp_trim_words($content, 100);
                echo $trimmed_content;
                ?>
              </div>
              <p class="blog__listInnerArticle--more">read more</p>
              <a class="blogLink" href="<?php the_permalink(); ?>"></a>
            </div>
          </article>
        <?php endwhile; ?>
        <?php
        $big = 999999999; // need an unlikely integer
        $paged = max(get_query_var('paged'), 1);
        $args = array(
          'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
          'total' => $my_query->max_num_pages /*全ページ数 */,
          'current' =>  $paged/*現在のページ数*/,
          'show_all' => FALSE,
          'end_size' => 1,
          'mid_size' => 2,
          'prev_next' => FALSE,
          'type' => 'array',
        );
        $navs = paginate_links($args);
        ?>
        <?php if ($navs) : ?>
          <div class="pager">
            <ul class="pagination">
              <?php if ($paged > 1) : ?>
                <li class="pre">
                  <?php previous_posts_link('<span>' . "<" . '</span>') ?>
                </li>
              <?php endif; ?>
              <?php
              $i = 1;
              foreach ($navs as $nav) :
              ?>
                <li class="<?php if ($paged == $i) : ?>active<?php endif; ?>">
                  <?php echo '<span>' . $nav . '</span>'; ?>
                </li>
              <?php $i++;
              endforeach; ?>
              <?php if ($paged < $my_query->max_num_pages) : ?>
                <li class="next">
                  <?php next_posts_link('<span>' . ">" . '</span>') ?>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
      </div>

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
  </div>
</section>

</div>

<?php
get_footer();
