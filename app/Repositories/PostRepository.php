<?php

namespace App\Repositories;

class PostRepository extends Repository
{
    /**
     * Se especifica model a utilizar
     *
     * @return mixed
     */
    public function model()
    {
        return config('repository.post');
    }

    /**
     * Obtiene los post aprovados de un usuario
     *
     * @param $user_id
     * @return mixed
     */
    public function getApprovedByUser($user_id)
    {
        return $this->model
            ->where('approved', true)
            ->where('user_id', $user_id)
            ->get();
    }

    /**
     * Obtiene el post con mas visitas
     *
     * @return mixed
     */
    public function getMostViewed()
    {
        return $this->model
            ->orderBy('views')->first();
    }
}