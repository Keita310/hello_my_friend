<?php
/**
 * page-country.php
 */
?>
<?php get_header(); ?>

<hr class="mb-0" style="border-top: 1px solid #000;">

<div class="balloon-bg">
	<img src="<?php echo get_template_directory_uri(); ?>/img/country-bg.jpg">
	<ul class="balloon-menu">
		<?php
			$categories = get_categories([
				'hide_empty' => false,
				'order' => 'ASC',
				'orderby' => 'term_order',
				'exclude' => '1,9' // 未分類とDiaryを除く
			]);
			foreach ($categories as $category):
		?>
			<li class="<?php echo $category->slug; ?>">
				<a
					style="background:<?php echo get_field('background_color', 'category_' . $category->term_id); ?>;"
					href="<?php echo get_category_link( $category->term_id ); ?>"
				>
					<?php echo $category->name; ?>
				</a>
			</li>
		<?php
			endforeach;
		?>
	</ul>
</div>

<?php get_footer(); ?>
