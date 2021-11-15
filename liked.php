<?php 
include_once "includes/functions.php"; 
if (!logged_in()) redirect();
$posts = get_liked_posts();
$title = 'Понравившиеся твиты';
$error = get_error_message();

include_once "includes/header.php"; 
include_once "includes/posts.php"; 
include_once "includes/footer.php"; 
?>
