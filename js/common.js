(function($) {
	$(function(){

		// グリッドレイアウト
		$('.grid').masonry({
			isFitWidth: true,
			itemSelector: '.grid-item',
			columnWidth: 380
		});

		// ページトップへ戻るボタン
		var a = $('.return-top');
		a.hide();
		$(window).on('scroll load', function () {
			var doch = $(document).innerHeight(); //ページ全体の高さ
			var winh = $(window).innerHeight(); //ウィンドウの高さ
			var bottom = doch - winh; //ページ全体の高さ - ウィンドウの高さ = ページの最下部位置
			if (bottom * 0.9 <= $(window).scrollTop()) {
				$('.return-top').fadeIn();
			} else {
				$('.return-top').fadeOut();
			}
		});
		a.click(function() {
			$("body,html").animate({
				scrollTop: 0
			}, 800);
			return false
		});

		// ハンバーガーメニューのカントリーをクリックしたらカントリーメニューを表示
		$('#modal_menu li a[href*=country]').click(function(){
			$('.default-menu').fadeOut(function(){
				$('.country-menu').fadeIn();
			});
			return false;
		});
		// モーダルメニューを閉じたらデフォルトメニューに戻す
		$('#modal_menu').on('hidden.bs.modal', function () {
			$('.default-menu').show();
			$('.country-menu').hide();
		});
	});
})(jQuery);