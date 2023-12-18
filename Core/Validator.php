<?php

namespace Core;

/**
 * Responsible for validating email and password inputs
 */
class Validator
{

    /**
     * Sanitizes email and returns false if fails sanitation and returns the email if it passes
     * @param string $email
     * @return false|mixed
     */
    public static function validateEmail(string $email)
    {
        $clean_email = filter_var($email,FILTER_SANITIZE_EMAIL);
        if ($email == $clean_email && filter_var($email,FILTER_VALIDATE_EMAIL)){
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        } else
        {
            return false;
        }
    }

    /**
     * Checks password strength. Returns false if not strong enough and password if passes.
     * @param string $password
     * @return false|int
     */
    public static function validatePassword(string $password)
    {
        $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/";
        if(!preg_match($password_regex, $password))
        {
            return false;
        }
        return preg_match($password_regex, $password);
    }
}