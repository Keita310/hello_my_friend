<?php
/**
 * page-story.php
 */
?>
<?php get_header(); ?>

<h2><span class="container"><?php the_title(); ?></span></h2>

<?php
	// 人気記事順で記事IDを取得
	$wppArgs = [
		'range' => 'weekly', // day|weekly|month
		'order_by' => 'views',
		'limit' => -1
	];
	$wppQuery = new WPP_Query($wppArgs);
	$wppPosts = $wppQuery->get_posts();
	$postIds = [];
	if ($wppPosts) {
		foreach ($wppPosts as $wppPost) {
			$postIds[] = intval($wppPost->id);
		}
	}

	get_template_part_arg('loop', false,[
		'post_status' =>'publish',
		'post__in' => $postIds,
		'category__not_in' => [9], // Diaryを除く
		'orderby' => 'post__in',
		'order' => 'DESC',
		'posts_per_page' => -1
	]);
?>

<?php get_footer(); ?>