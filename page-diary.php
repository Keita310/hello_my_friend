<?php
/**
 * page-diary.php
 */
?>
<?php get_header(); ?>

<h2><span class="container"><?php the_title(); ?></span></h2>

<div class="item-content-show">
<?php
	get_template_part_arg('loop', false,[
		'post_status' =>'publish',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => -1
	]);
?>
</div>

<?php get_footer(); ?>
