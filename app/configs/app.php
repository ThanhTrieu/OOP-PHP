<?php
if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

function getRootFolder()
{
    $rootString = $_SERVER['PHP_SELF'];
    return dirname($rootString);
}

function asset($path='')
{
    return getRootFolder()."/public/{$path}" ;
}

function redirect($path = '')
{
    $arrParams = explode('/', $path);
    if(is_array($arrParams) && $arrParams){
        return getRootFolder()."/".$arrParams[0]."/".$arrParams[1];
    }else{
        return getRootFolder();
    }
}

function getSegment($order = '')
{

    $data = $GLOBALS['fullParams'];
    if($order === ''){
        return $data;
    }
    return (is_numeric($order) && $order >= 0) ? ($data[$order] ?? '') : '' ;
}

function getParamQueryString($praramString = '')
{
    return $_GET[$praramString] ?? '';
}

function loadView($pathView, $data)
{
    if($pathView){
        extract($data);
        require "app/view/".$pathView.".php";
    }
}