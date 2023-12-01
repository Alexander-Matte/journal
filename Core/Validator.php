<?php

namespace Core;

class Validator
{

    public static function validateEmail($email)
    {
        $errors = [];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return false;
        }

        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validatePassword($password)
    {
        $errors = [];
        $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/";
        if(!preg_match($password_regex, $password))
        {
            return false;
        }

        return preg_match($password_regex, $password);


    }
}