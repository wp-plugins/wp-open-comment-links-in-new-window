<?php
/*
Plugin Name: WP Open Comment Links in New Window
Plugin URI: https://github.com/dipakcg/wp-open-comment-links-in-new-window
Description: Opens all the links (URLs) added in the comments and author URL, in a new tab or window.
Author: Dipak C. Gajjar
Version: 1.0
Author URI: http://www.dipakgajjar.com/
*/

function open_in_new_window($text) {
	$return_url = str_replace('<a', '<a target="_blank"', $text);
	return $return_url;
}
add_filter('get_comment_author_link', 'open_in_new_window');
add_filter('comment_text', 'open_in_new_window');

/* End of plugin */
?>