<?php declare(strict_types = 1);
/**
 * Bootstrapping for namespace /P7User/
 *  
 * @package P7User
 * @author Sven Schrodt<sven@schrodt-service.net>
 * @version 0.1
 * @since 2020-02-19
 * @link https://github.com/svenschrodt/P7User
 * @license https://github.com/svenschrodt/P7User/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt-service.net>
 */

//@TODO Enabling er accoring to \P7User\Config::debug

// Enabling full error reporting for dev environment
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
                    
define('P7U_NS', '\\P7User');
define('P7U_LIB_DIR', 'P7User');

/**
 * Auto loading for project classes 
 */
spl_autoload_register(function ($className) {
    
    // Check if namespace of class to be instantiated is belonging to us (P7User)
    
    if (substr($className, 0, strlen(P7U_LIB_DIR)) === P7U_LIB_DIR) {
        $file = 'src/' . str_replace('\\', '/', $className) . '.php';

        // Check if destination class file exists
        if (file_exists($file)) {
            require_once $file;
        } else { // throw exception, if not
            throw new Exception("NO_SUCH_FILE_OR_DIRECTORY: {$className}");
        }
    }
    
});



