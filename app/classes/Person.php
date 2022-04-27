<?php

namespace app\classes;

class Person
{
    // public string $name;
    // public string $email;

    // PHP8 criar diretamente as propriedades
    public function __construct(public string $name, public string $email)
    {
        // $this->name = $name;
        // $this->email = $email;
    }

    public function info()
    {
        return "Meu nome é {$this->name} e meu email {$this->email}";
    }

    public function teste()
    {
    }
}
