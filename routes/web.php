<?php
if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

// noi dinh nghia cac route tiep nhan va xu ly cac request
require_once 'bootstrap/Autoload.php';
new App\Bootstrap\Autoload;

$uri        = $_SERVER['REQUEST_URI'];
$rootString = $_SERVER['PHP_SELF'];
$rootFolder = dirname($rootString);

$strController = substr($uri,strlen($rootFolder)+1) ;
if(!empty($strController)){
    $arrController = explode('/', $strController);
    
    $GLOBALS['fullParams'] = $arrController;
    $GLOBALS['paramsQuery'] = array_slice($arrController, 2);

    $controller    = ucfirst($arrController[0] ?? 'home');
    $method        = $arrController[1] ?? 'index';

} else {
    $controller = 'Home';
    $method     = 'index';
    $GLOBALS['fullParams'] = [];
    $GLOBALS['paramsQuery'] = [];
}

$obj = NAME_SAPCE_CONTROLLER . "{$controller}Controller";
$checkController = str_replace('\\','/',trim($obj,'\\')).'.php';

if(file_exists($checkController)){
    $request = new $obj();
    $request->$method(...$paramsQuery);
}else {
    header('Location:upgrade.php');
}

