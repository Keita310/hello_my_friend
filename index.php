<?php
/**
 * index.php
 */
?>
<?php get_header(); ?>

<h2><span class="container">Latest Stories</span></h2>
<div>
<?php
	get_template_part_arg('loop', false,[
		'post_status' =>'publish',
		'category__not_in' => [9], // Diaryを除く
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => 15
	]);
?>
</div>

<?php get_footer(); ?>