<?php
namespace Core;


class Authenticator
{
    public static function authenticateUser($userEmail, $password)
    {
        $db = new Database();
        //Check database if user exists
        return $db->query("SELECT * FROM `users` WHERE email = :email AND password = :password", [
            "email" => $userEmail,
            "password" => $password
        ])->findOrFail();

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