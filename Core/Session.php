<?php

namespace Core;

/**
 * Handles session operations
 */
class Session
{
    /**
     * Checks if key is currently in session super global variable. Returns true if key is present
     * and false if key is not found
     * @param $key
     * @return bool
     */
    public static function has($key): bool
    {
        return (bool) static::get($key);
    }

    /**
     * Sets key value pair in session super global variable
     * @param $key
     * @param $value
     * @return void
     */
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Returns a user requested key value pair from session super global either stored in temp _flash
     * or direct on super global variable
     * @param $key
     * @param $default
     * @return mixed|null
     */
    public static function get($key, $default = null)
    {
        return $_SESSION['_flash'][$key] ?? $_SESSION[$key] ?? $default;
    }

    /**
     * Sets key value pair in temp _flash session super global variable
     * @param $key
     * @param $value
     * @return void
     */
    public static function flash($key, $value)
    {
        $_SESSION['_flash'][$key] = $value;
    }

    /**
     * Unsets anything stores in _flash within the session super global
     * @return void
     */
    public static function unflash()
    {
        unset($_SESSION['_flash']);
    }

    /**
     * Clears whole session super global array to empty
     * @return void
     */
    public static function flush()
    {
        $_SESSION = [];
    }

    /**
     * Destroys session
     * @return void
     */
    public static function destroy()
    {
        static::flush();

        session_destroy();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
}