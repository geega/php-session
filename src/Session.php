<?php
namespace Geega\Session;


class Session {

    /**
     * Start session
     * @return bool
     */
    public static function start()
    {
        if(!headers_sent() && !session_id()){
            if(session_start()){
                session_regenerate_id();
                return true;
            }
        }
        return false;
    }


    /**
     * Set key value to session
     * @param $key
     * @param $value
     */
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }


    /**
     * Check has session value by key
     * @param $key
     * @return bool
     */
    public static function has($key)
    {
        return (bool) static::get($key);
    }


    /**
     * Get session value by key
     * @param $key
     * @return null
     */
    public static function get($key)
    {
        return (isset($_SESSION[$key])) ? $_SESSION[$key] : null;
    }


    /**
     * Delete by key
     * @param $key
     * @return bool
     */
    public static function del($key)
    {
        if(isset($_SESSION[$key])){
            unset($_SESSION[$key]);
            return false;
        }

    }


    /**
     * Destroy session
     */
    public static function destroy()
    {
        if(isset($_SESSION)){
            session_destroy();
        }
    }


    /**
     * @throws \Exception
     */
    public static function dumpPrint()
    {
        if(isset($_SESSION))
        {
            print_r($_SESSION);
            return ;
        }

        throw new \Exception("Session is not initialized");
    }
}
