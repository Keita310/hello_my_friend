<?php
/**
 * page-diary.php
 */
?>
<?php get_header(); ?>

<h2><span class="container"><?php the_title(); ?></span></h2>

<?php
	get_template_part_arg('loop', false,[
		'post_status' =>'publish',
		'category__in' => [9], // Diaryのみ
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => -1
	]);
?>

<?php get_footer(); ?>
