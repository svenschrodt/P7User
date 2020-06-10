<?php declare(strict_types = 1);
/**
 * \P7User\Config
 *
 * Class for configuration
 *
 * - magical interceptors for READONLY access to class members
 * - explicit setter functions for validation purposes
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

class Config
{
    // Enabling full error reporting for dev environment
    const debug = true;
    
    /**
     * Constructor function 
     * 
     * @todo optional parameters
     */
    public function __construct()
    {
        
    }
    
    /**
     * Magical interceptor for public access to class members
     * 
     * @param string $name
     * @return NULL|string
     */
    public function __get(string $name)
    {
        $return = null;
        switch(strtolower($name)) {
            case  'adaptor' :
                $return = $this->adaptor;
                break;
                
            case  'test' :
                $return = 'FOO 42!';
                break;
                
            default:
                $return  = (isset($this->$name)) ? $this->$name : null;
                
        }
        
        return $return;
    }
 
}
