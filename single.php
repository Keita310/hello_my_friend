<?php
/**
 * single.php
 */
?>
<?php get_header(); ?>

<hr style="border-top: 1px solid #000;">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<div class="container">
		<div class="eyecatch">
			<?php the_post_thumbnail('single'); ?>
		</div>
		<div class="content">
			<div class="japanese">
				<?php the_field_value('content_jp'); ?>
			</div>
			<div class="english">
				<?php the_field_value('content_us'); ?>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
