<?php

class Blog
{
    public function __construct($container)
    {
        $this->c = $container;
    }

    public function posts()
    {
        if ($posts = $this->c['db']->getPosts()) {
            foreach ($posts as $post) {
                $date = date('H:i d.m.Y', $post['published_at']);
                $message = chunk_split($post['message'], 40);
                echo <<<POST
# {$post['title']}
----------------------------------------
{$message}
{$date}
----------------------------------------


POST;
            }
        }
    }
}
