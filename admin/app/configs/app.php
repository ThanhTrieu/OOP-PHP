<?php
if (!defined('NAME_SAPCE_CONTROLLER')) {die('NOT FOUND REQUEST');}

function getRootFolder(){
    $rootString = $_SERVER['PHP_SELF'];
    return dirname($rootString);
}

function asset($path='')
{
    return getRootFolder()."/public/{$path}" ;
}

function redirect($path = ''){
    $arrParams = explode('/', $path);
    if(is_array($arrParams) && $arrParams){
        return getRootFolder()."/".$arrParams[0]."/".$arrParams[1];
    }else{
        return getRootFolder();
    }
}

function getSegment($order = ''){
    $data = $GLOBALS['params'];
    if($order === ''){
        return $data;
    }
    return (is_numeric($order) && $order < 0) ? '' :  ($data[$order] ?? '');
}
?>