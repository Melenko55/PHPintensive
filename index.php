<?php 
include_once "includes/functions.php"; 
$posts = get_posts();
$error = get_error_message();
$title = 'Главня страница';

include_once "includes/header.php"; 
include_once "includes/tweet_form.php"; 
include_once "includes/posts.php"; 
include_once "includes/footer.php"; 
?>