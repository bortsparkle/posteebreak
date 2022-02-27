<?php
/**
* Plugin Name: posteebreak
* Plugin URI: https://github.com/bortsparkle/posteebreak
* Description: Breaks plaintext posts from Postie into paragraph blocks at blank lines
* Version: 0.0.2022.02.27.1033
* Author: Someone Else
* Author URI: https://github.com/bortsparkle
**/

function posteebreak_filter_postie_post($post) {
    //do something here like update $post['post_content']
    return $post;
}

add_filter('postie_post_before', 'posteebreak_filter_postie_post');

?>
