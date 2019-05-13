<?php
// noi dinh nghia cac route tiep nhan va xu ly cac request
require_once 'bootstrap/Autoload.php';
new bootstrap\Autoload;

$uri        = $_SERVER['REQUEST_URI'];
$rootString = $_SERVER['PHP_SELF'];
$rootFolder = dirname($rootString);

$strController = substr($uri,strlen($rootFolder)+1) ;
if(!empty($strController)){
    $arrController = explode('/', $strController);

    $GLOBALS['params'] = $arrController;
    $controller    = ucfirst($arrController[0] ?? 'home');
    $method        = $arrController[1] ?? 'index';
} else {
    $controller = 'Home';
    $method     = 'index';
    $GLOBALS['params'] = [];
}

$obj = NAME_SAPCE_CONTROLLER . "{$controller}Controller";
$checkController = str_replace('\\','/',trim($obj,'\\')).'.php';

if(file_exists($checkController)){
    $request = new $obj;
    $request->$method();
}else {
    header('Location:upgrade.php');
}

