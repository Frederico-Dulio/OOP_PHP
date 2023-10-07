<?php

class Login
{
    private $email;
    private $password;

    public function setEmail($email)
    {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return strtolower(filter_var($this->email, FILTER_SANITIZE_EMAIL));
    }

    public function login_sucess()
    {

        return ($this->email == "exemplo@gmail.com") && ($this->password == 123) ?
            "Welcome<br>{$this->email}"  :  "incorret password or email<br>";
    }
}


$logar = new Login;
$logar->setEmail("exemplo@gmail.com");
$logar->setPassword(123);
echo $logar->login_sucess();
