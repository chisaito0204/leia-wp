<?php

function my_custom_post_blog()
{
    $labels = array(
        'name' => _x('ブログ', 'post type 名称'),
        'singular_name' => _x('ブログ', 'post type シングル item 複数'),
        'add_new' => _x('新規', '新しい登録'),
        'add_new_item' => __('新規追加'),
        'edit_item' => __('編集'),
        'new_item' => __('新規_ブログ'),
        'all_items' => __('一覧'),
        'view_item' => __('確認'),
        'search_items' => __('検索'),
        'not_found' => __('登録されているブログはありません'),
        'not_found_in_trash' => __('ゴミ箱にはブログはありません'),
        'parent_item_colon' => '',
        'menu_name' => 'ブログ',
    );
    $args = array(
        'labels' => $labels,
        'description' => 'ブログ',
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'has_archive' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        //'taxonomies'=> array('post_tag'),
        //'rewrite'       => array( 'slug'  => 'news', 'with_front'  => true ),
    );
    register_post_type('blog', $args);
    //wp_enqueue_style('cus-admin-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', false);

}

add_action('init', 'my_custom_post_blog');

function add_blog_posts_columns( $columns) {
    $columns['private_flg'] = '公開状態';
    return $columns;
}
add_filter( 'manage_blog_posts_columns', 'add_blog_posts_columns' );

//投稿一覧に追加した項目に値を表示する
function custom_blog_posts_column( $column_name, $post_id ) {
    switch ( $column_name ) {
        case 'private_flg':
            $private_flg = get_post_meta( $post_id, 'private_flg', true );
            if ( $private_flg ) {
                echo '裏公開';
            } else {
                echo ''; //値が無い場合の表示
            }
            break;
    }
}
add_action( 'manage_blog_posts_custom_column' , 'custom_blog_posts_column', 10, 2 );

function my_taxonomies_blog()
{
    $labels = array(
        'name' => _x('カテゴリ', 'taxonomy 名称'),
        'singular_name' => _x('カテゴリ', 'taxonomy 単数名称'),
        'search_items' => __('カテゴリ検索'),
        'all_items' => __('全てカテゴリ'),
        'parent_item' => __('親カテゴリ'),
        'parent_item_colon' => __('親カテゴリ：'),
        'edit_item' => __('カテゴリ編集'),
        'update_item' => __('カテゴリ更新'),
        'add_new_item' => __('カテゴリ追加'),
        'new_item_name' => __('新カテゴリ'),
        'menu_name' => __('カテゴリ'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_in_rest' => true,
    );
    register_taxonomy('blog_category', 'blog', $args);
}
add_action('init', 'my_taxonomies_blog', 0);

function admin_custom_posttype_order($wp_query) {
    if( is_admin() ) {
      $post_type = $wp_query->query['post_type'];
      if($post_type == 'blog') {
        $wp_query->set('orderby','date');
        $wp_query->set('order','DESC');
      }
    }
  }
  add_filter('pre_get_posts', 'admin_custom_posttype_order');
