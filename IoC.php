<?php require __DIR__ . '/vendor/autoload.php';

$c = new ArrayObject;
$c['db'] = new DB;
$c['blog'] = new Blog($c['db']);

$c['blog']->posts();
