<?php
/**
* Plugin Name: posteebreak
* Plugin URI: https://github.com/bortsparkle/posteebreak
* Description: Breaks plaintext posts from Postie into paragraph blocks at blank lines
* Version: 0.0.2022.02.27.1220
* Author: Someone Else
* Author URI: https://github.com/bortsparkle
**/

function posteebreak_filter_postie($post) {

    // $post['text'] is the plaintext version of the message
    // we're going to replace runs of blank lines with a single blank line
    // and join all other lines into a single line.
    // this will break markdown processing later for things like bullet lists

    // first we'll split the content into an array of lines

    $lines = preg_split("/\R/", $post['text']);

    foreach ($lines as &$line) {
    	$line = rtrim($line);
    }
    unset($line); // break the reference with the last element


    $filtered = join($lines, ")\n--line bork--\n(");

    $post['text'] = $filtered;

    return $post;
}

add_filter('postie_post_pre', 'posteebreak_filter_postie');

?>
