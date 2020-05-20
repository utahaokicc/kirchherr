<?php
	/*【表示カスタマイズ】アイキャッチ画像の有効化 */
add_theme_support( 'post-thumbnails' );

	/**
 * 投稿のアーカイブページを設定
 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/*
	一覧本文抜粋
*/
function custom_excerpt_length( $length ) {
     return 40;	
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
	return '....';
}
add_filter('excerpt_more', 'new_excerpt_more');


/*
	記事本文からPタグ除去
*/
add_action('init', function() {
    remove_filter('the_title', 'wptexturize');
    remove_filter('the_content', 'wptexturize');
    remove_filter('the_excerpt', 'wptexturize');
    remove_filter('the_title', 'wpautop');
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('the_editor_content', 'wp_richedit_pre');
});
 
add_filter('tiny_mce_before_init', function($init) {
    $init['wpautop'] = false;
    $init['apply_source_formatting'] = ture;
    return $init;
});

/**
 * ダッシュボードウィジェットを削除します。(管理者以外)
 */
function remove_dashboard_widget() {
	if ( ! current_user_can( 'administrator' ) ) {
	 	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // アクティビティ
	 	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // クイックドラフト
	 	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPressニュース
	}
} 
add_action('wp_dashboard_setup', 'remove_dashboard_widget' );

//予約投稿機能を無効化
add_action('save_post', 'futuretopublish', 99);
add_action('edit_post', 'futuretopublish', 99);
function futuretopublish()
{
global $wpdb;
$sql = 'UPDATE `'.$wpdb->prefix.'posts` ';
$sql .= 'SET post_status = "publish" ';
$sql .= 'WHERE post_status = "future"';
$wpdb->get_results($sql);
}

// URLからドメイン部分を削除したURLを返す
function delete_domain_from_url( $url ) {
    if ( preg_match( '/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
        $url = $match[2];
    }
    return $url;
}