<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return User::class;
    }

    /**
     * Summary of findEmail
     *
     * @param string $email
     * @return mixed
     */
    public function findEmail(string $email)
    {
        $query = $this->model->whereEmail($email);
        return $query->first();
    }
}
