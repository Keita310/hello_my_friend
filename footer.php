<?php
/**
 * footer.php
 */
?>
	</main>
	<footer>
		<?php if ( !is_home() && !is_front_page() ) : ?>
			<div class="return-top">
				<i class="fas fa-caret-square-up"></i>
			</div>
		<?php endif; ?>
		<div class="container">
			<div class="d-flex flex-row-reverse align-items-center py-2">
				<ul class="sns d-flex">
					<li class="p-2">
						<a href="https://www.facebook.com/people/Hello-My-Friend/100076060938938" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png">
						</a>
					</li>
					<li class="p-2">
						<a href="https://twitter.com/hellomyfri_end" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png">
						</a>
					</li>
					<li class="p-2">
						<a href="https://www.instagram.com/hellomyfriend_official" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>