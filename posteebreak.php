<?php
/**
* Plugin Name: posteebreak
* Plugin URI: https://github.com/bortsparkle/posteebreak
* Description: Breaks plaintext posts from Postie into paragraph blocks at blank lines
* Version: 0.0.2022.02.27.1142
* Author: Someone Else
* Author URI: https://github.com/bortsparkle
**/

function posteebreak_filter_postie($post) {
    //do something here like update $post['post_content']

    $filtered = "filtered by posteebreak\n";
    $filtered .= $post['text'];
    $filtered .= "\nand now it is done filtering";

    $post['text'] = $filtered;

    return $post;
}

add_filter('postie_post_pre', 'posteebreak_filter_postie');

?>
