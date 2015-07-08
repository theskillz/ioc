<?php require __DIR__ . '/vendor/autoload.php';

$blog = new Blog(new DB);

$blog->posts();
