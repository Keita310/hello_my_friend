<?php
/**
 * functions.php
 */

/* アイキャッチ
****************************************/
add_theme_support('post-thumbnails');
add_image_size('single', 1200, 800, true);
add_image_size('item', 400, 250, true);


/* カスタムフィールド値取得
****************************************/
function get_field_value($key) {
	$fields = get_field_object($key);
	if (!empty($fields)) {
		if (is_array($fields['value'])) {
			$value = array();
			foreach ($fields['value'] as $key) {
				$value[] = $fields['choices'][$key];
			}
			return $value;
		} else {
			$value = $fields['value'];
			if (isset($fields['choices'])) {
				return $fields['choices'][$value];
			} else {
				return $value;
			}
		}
	} else {
		return null;
	}
}
function the_field_value($key) {
	echo get_field_value($key);
}


/* get_template_partに引数を渡す
****************************************/
function get_template_part_arg($slug, $name = false, $arg) {
	set_query_var('arg', $arg);
	get_template_part($slug, $name);
	set_query_var('arg', null);
}

/* 指定パラメータに対して記事があるか
****************************************/
function have_postss($arg) {
	$query = new WP_Query($arg);
	return ($query->have_posts());
}



