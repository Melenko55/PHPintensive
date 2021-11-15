<?php 
include_once "functions.php"; 

if (!logged_in()) redirect(get_url());

if (isset($_GET['id']) && !empty($_GET['id'])) {
    if (!add_like($_GET['id'])) {
        $_SESSION['error'] = 'Во время добавления лайка что-то пошло не так';
    }
}

redirect(get_url())
?>