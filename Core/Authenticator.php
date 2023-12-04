<?php
namespace Core;


class Authenticator
{
    public static function authenticateUser($email, $password)
    {
        $db = new Database();
        //Check database if user exists
        $result = $db->query("SELECT * FROM `users` WHERE email = :email", [
            "email" => $email,
        ])->findOrFail();

        if(!password_verify($password, $result['password']))
        {
            return false;
        }

       return $result;
    }

    public static function email($email)
    {
        $db = new Database();
        //Check database if user exists
        return $db->query("SELECT * FROM `users` WHERE email = :email", [
            "email" => $email,
        ])->findOrFail();
    }
}