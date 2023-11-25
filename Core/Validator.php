<?php

namespace Core;

class Validator
{

    public static function validateEmail($email)
    {
        $errors = [];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            array_push($errors, "Email is invalid");
            return $errors;
        }

        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validatePassword($password)
    {
        $errors = [];
        $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/";
        if(!preg_match($password_regex, $password))
        {
            array_push($errors, "password is not strong enough!");
            return $errors;
        }

        return preg_match($password_regex, $password);


    }
}