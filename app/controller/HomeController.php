<?php
namespace App\Controller;

if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

use App\Controller\Controller;
use App\Model\HomeModel;
use App\Model\CartModel;

class HomeController extends Controller
{
    private $homeModel;
    private $cartModel;
    public function __construct()
    {
        $this->homeModel = new HomeModel();
        $this->cartModel = new CartModel();
    }

    public function index(){
        $data = [];
        $dt1 = $this->homeModel->getAllData();
        $dt2 = $this->cartModel->getDataById(1);
        $data['info'] = 12;
        $data['header'] = [
            'title' => 'Home page',
            'content' => 'demo oop php'
        ];
        $this->renderView('home/index_view',$data);
    }

    public function exp(){
        echo "<pre>";
        var_dump(getParamQueryString('id'));
    }

    private function _error(){
        require 'app/view/error/error_404.php';
    }

    public function __call($method,$arguments){
        return $this->_error();
    }
}