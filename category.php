<?php
/* category.php *
*/
?>

<?php get_header(); ?>

<?php 
$categories = get_the_category();
$category = $categories[0];
?>

<h2 style="background:<?php echo get_field('background_color', 'category_' . $category->term_id); ?>;">
	<span class="container"><?php echo $category->name; ?></span>
</h2>

<?php
	$arg = [
		'post_status' =>'publish',
		'orderby' => 'date',
		'order' => 'DESC',
		'category__in' => [$category->term_id],
		'posts_per_page' => -1
	];
	get_template_part_arg('loop', false, $arg);
?>

<?php get_footer(); ?>
