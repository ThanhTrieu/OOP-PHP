<?php
const APP_ROOT_PATH = 'index.php';

// tuy chinh theo ten folder cua ban
const NAME_SAPCE_CONTROLLER = "app\controller\\";
const NAME_SAPCE_MODEL = "app\model\\";
const NAME_SAPCE_VIEW = "app\view\\";

if(file_exists('routes/web.php')){
    require_once 'app/configs/constant.php';
    require_once 'app/configs/app.php';
    require_once 'routes/web.php';
} else {
    die('system updating ...');
}
