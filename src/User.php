<?php

class User
{
 
    public function name($name = 'Mohamed')
    {
        return $name;
    }
    public function email($email = 'mohamed@gmail.com')
    {
        return $email;
    }
}

$user = new User;