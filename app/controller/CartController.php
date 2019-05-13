<?php
namespace App\Controller;

if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

use App\Controller\Controller;

class CartController extends Controller
{
    public function index(){
        //var_dump($GLOBALS['fullParams']);
        $data['info'] = 12;
        $this->renderView('cart/index_view',$data, true);
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