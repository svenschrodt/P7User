<?php declare(strict_types = 1);
/**
 * \P7User\Auth
 *
 * Class for handling user authentification
 *
 * @package P7User
 * @author Sven Schrodt<sven@schrodt-service.net>
 * @version 0.1
 * @since 2020-06-10
 * @link https://github.com/svenschrodt/P7User
 * @license https://github.com/svenschrodt/P7User/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt-service.net>
 */
namespace P7User;

class Auth
{
    protected static $hashAlgo = PASSWORD_DEFAULT ;
    
    /**
     * Creating hash from given password 
     * 
     * @param string $password
     * @return string
     */
    public static function getHashFromPassword(string $password)
    {
        //@TODO implementing several algos
        return password_hash($password, self::$hashAlgo);
    }
    
    /**
     * Verifying password with hash of (stored) password
     * 
     * @param string $password
     * @param string $hash
     * @return boolean
     */
    public static function verifyPassword(string $password, string $hash)
    {
        return password_verify($password, $hash);
    }
}
