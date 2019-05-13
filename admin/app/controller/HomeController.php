<?php
namespace app\controller;

if (!defined('NAME_SAPCE_CONTROLLER')) {die('NOT FOUND REQUEST');}

class HomeController
{
    public function index(){
        var_dump($GLOBALS['params']);
    }

    public function exp(){
        echo "<pre>";
        var_dump(getSegment(4));
    }

    private function _error(){
        require 'app/view/error/error_404.php';
    }

    public function __call($method,$arguments){
        return $this->_error();
    }
}