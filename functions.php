<?php
function change_posts_per_page($query)
{
  if (is_admin() || !$query->is_main_query())
    return;


  if ($query->is_home()) {
    $query->set('posts_per_page', '10');
  }
}
add_action('pre_get_posts', 'change_posts_per_page');
?>
<?php
function post_has_archive($args, $post_type)
{
  if ("post" == $post_type) {
    $args["rewrite"] = true;
    $args["has_archive"] = "post-archive"; //記事一覧ページのスラッグ名
  }
  return $args;
}
add_filter("register_post_type_args", "post_has_archive", 10, 2);
?>


<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');
});
