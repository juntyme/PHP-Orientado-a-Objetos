<?php

namespace app\models;

class User extends Model
{
    public string $table = 'user';

    public function allUsersWithIsAdmin()
    {
        return 'Todos os Administradores';
    }
}
