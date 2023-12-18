<?php
namespace Core;
/**
 * Authenticates user and email within a database
 */
class Authenticator
{
    /**
     * Checks if user is in DB then checks if given password matches DB. Returns user array if
     * given password matches with DB and false if not found
     * @param string $email
     * @param string $password
     * @return mixed
     */
    public static function authenticateUser(string $email, string $password)
    {
        // selects user based on email
        $user = self::email($email);

        if(!password_verify($password, $user['password']))
        {
            return false;
        }
       return $user;
    }

    /**
     * Query's DB if email already exists. Returns user array if it does, and false if it doesn't find given email
     * @param string $email
     * @return mixed
     */
    public static function email(string $email)
    {
        $db = new Database();
        //Check database if user exists
        return $db->query("SELECT * FROM `users` WHERE email = :email", [
            "email" => $email,
        ])->findOrFail();
    }
}