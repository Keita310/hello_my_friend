<?php
/**
 * loop.php
 */
?>
<div style="max-widht:1300px!important;">
	<article class="items grid">
		<?php
			$query = new WP_Query($arg);
			if ($query->have_posts()):
			while ($query->have_posts()) : $query->the_post();
		?>
			<div class="item grid-item">
				<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('item'); ?>
				<?php endif; ?>
					<span class="content">
						<?php the_field_value('content_jp'); ?>
					</span>
				</a>
			</div>
		<?php
			endwhile;
			else:
		?>
			<p>記事がありません</p>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</article>
</div>
