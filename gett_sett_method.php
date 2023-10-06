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

        return ($this->email == "fredericodulio@gmail.com") && ($this->password == 123) ?
            "Welcome<br>{$this->email}"  :  "your email or password is incorrect\n";
    }
}


$logar = new Login;
$logar->setEmail("fredericodulio@gmail.com");
$logar->setPassword(123);
echo $logar->login_sucess();
