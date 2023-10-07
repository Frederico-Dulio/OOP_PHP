<?php

class Login_contruct
{
    private $email;
    private $name;
    private $password;

    public function __construct($email, $name, $password)
    {
        $this->setEmail($email);
        $this->setName($name);
        $this->setPassword($password);
    }

    //Setters methods
    public function setEmail($email)
    {
        $this->email = strtolower(filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    public function setName($name)
    {
        $this->name = trim(stripslashes($name));
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    //Getters Methods

    public function getEmail()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function login_success()
    {
        return ($this->email == "exemplo@gmail.com") && ($this->name == "Frederico Dulio") && ($this->password == 123) ?
            "Welcome<br>{$this->getName()}" : "Incorret password or email";
    }
}

$login = new Login_contruct("exemplo@gmail.com","Frederico Dulio",123);

echo $login->login_success();
