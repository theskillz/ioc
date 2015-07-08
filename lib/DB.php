<?php 

class DB
{
    public function getPosts()
    {
        return [
            [
                'title' => 'My First Post',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'published_at' => strtotime('2015-07-01 15:21'),
            ],[
                'title' => 'My Second Post',
                'message' => 'Nostrum incidunt maxime hic, officiis libero facilis repellat, placeat tempora blanditiis laboriosam quas sint, illo assumenda veniam? Odit reiciendis at inventore officiis.',
                'published_at' => strtotime('2015-07-01 15:41'),
            ],
        ];
    }
}