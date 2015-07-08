<?php require __DIR__ . '/vendor/autoload.php';

$c = new ArrayObject;
$c['db'] = new DB;

$blog = new Blog($c);

$blog->posts();
