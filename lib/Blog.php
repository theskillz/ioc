<?php

class Blog
{
    public function posts()
    {
        $db = new DB;
        if ($posts = $db->getPosts()) {
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
