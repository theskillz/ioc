<?php

class Blog
{
    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    public function posts()
    {
        if ($posts = $this->db->getPosts()) {
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
