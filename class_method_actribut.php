<?php

class Pessoa
{
    public $name;
    public $age;


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function say()
    {
        echo $this->name." de ".$this->age." acabou de falar!\n";
    }
}


$pessoa = new Pessoa("Frederico Dulio", 24);
    echo $pessoa->say();