<?php
/* 404.php *
　リンク先のページがなかった場合に表示されるエラー画面。
 */
?>
<!-- 404.php start -->
<?php get_header(); ?>

<div id="main">

<h2>ページが見つかりません</h2>

	<p>大変申し訳ございません。<br />
    お探しのページは削除されたか、名前が変更されたか、一時的に利用できない可能性があります。
      <br />
    以下のURLをクリックして、このブログのトップページにお戻りください。</p>
	<p><a href="<?php echo get_settings('home'); ?>/"><?php echo get_settings('home'); ?>/</a></p>

</div><!-- /#main -->

<?php get_sidebar();?>

<?php get_footer(); ?>
<!-- 404.php end -->