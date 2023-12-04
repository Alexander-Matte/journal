<?php

namespace Core;

class Validator
{

    public static function validateEmail($email)
    {
        $clean_email = filter_var($email,FILTER_SANITIZE_EMAIL);
        if ($email == $clean_email && filter_var($email,FILTER_VALIDATE_EMAIL)){
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        } else
        {
            return false;
        }



    }

    public static function validatePassword($password)
    {
        $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/";
        if(!preg_match($password_regex, $password))
        {
            return false;
        }

        return preg_match($password_regex, $password);


    }
}