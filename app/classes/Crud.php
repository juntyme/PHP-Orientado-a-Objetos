<?php

namespace app\classes;

class Crud
{
    public $field = 'Field Test';
    public $table = 'users';

    public function read()
    {
        var_dump($this->field);
    }

    public function delete()
    {
        // var_dump($this->read());
        return 'deletando';
    }
}
