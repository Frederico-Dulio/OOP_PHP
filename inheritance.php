<?php

class Person
{
    public $name;
    public $age;
    public $email;


    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getEmail()
    {
        return $this->email;
    }
}


class Client extends Person
{
    public function buy()
    {
        //$this->age = "22-05-1999"; não faz sentido usar aqui

        $this->age = new DateTime($this->age);
        $to_day = new DateTime();
        $your_age = $this->age->diff($to_day);
        $age = $your_age->y;

        return ($age >= 18) ? "{$this->name} você pode fazer compras:<br> Idade: $age <br> Email: {$this->email}" : "{$this->name} você é menor de idaide:<br> $age";
    }
}

$cliente = new Client;
$cliente->setName("Frederico Dulio");
$cliente->setEmail("exemplo@gmail.com");
$cliente->setAge("24-12-2004");

echo $cliente->buy();