<?php

namespace App\Repositories;

class PostRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return \App\Post::class;
    }
}