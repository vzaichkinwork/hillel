<?php
    require_once 'model/posts.php';

    if(!isset($_GET['id'])) {
        header('location: /hillel/homework3');
    }

    $post = post($_GET['id']);

    require_once 'view/post.php';