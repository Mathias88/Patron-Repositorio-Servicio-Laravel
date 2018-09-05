<?php


namespace App\Repositories;


class UserRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return config('repository.user');
    }
}