<?php
namespace App\Bootstrap;

if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

class Autoload
{
    public function __construct()
    {
        spl_autoload_register(array($this,'_autoload'));
    }

    private function _autoload($file)
    {
        $file = str_replace("\\","/",trim($file,"\\")).'.php';
        if(file_exists($file)){
            require_once $file;
        }
    }
}