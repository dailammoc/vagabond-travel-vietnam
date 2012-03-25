<?php
class Zend
{
    /**
     * Constructor
     *
     * @param    string $class class name
     */
  public  function __construct($class = NULL)
    {
        // include path for Zend Framework
        // alter it accordingly if you have put the 'Zend' folder elsewhere
        ini_set('include_path', DIR_LIBARAY.'/');
		
        require_once('Zend/Loader.php');
        

        if ($class)
        {
            Zend_Loader::loadClass($class);
            //log_message('debug', "Zend Class $class Loaded");
        }
        else
        {
            //log_message('debug', "Zend Class Initialized");
        }
    }

    /**
     * Zend Class Loader
     *
     * @param    string $class class name
     */

    public function load($class, $dirs = null)
    {
        Zend_Loader::loadClass($class,$dirs);
        //log_message('debug', "Zend Class $class Loaded");
    }
        
    public function loadFile($filename, $dirs = null, $once = false){ 
        Zend_Loader::loadFile($filename, $dirs, $once);
    }
    
    public function isReadable($filename) { 
        Zend_Loader::isReadable($filename); 
    }
                
}

?>  