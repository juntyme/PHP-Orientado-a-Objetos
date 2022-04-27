<?php

namespace app\classes;

class Abajur extends Product
{
    public bool $isOn = false;

    public function execute()
    {
        return 'O produto tem o nome ' . $this->name;
    }
}
