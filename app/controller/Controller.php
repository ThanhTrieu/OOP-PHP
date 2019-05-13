<?php 

namespace App\Controller;

if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

class Controller
{
	protected function renderView($path = '', $data = [], $type = false)
	{
		$view = $path;
		if($type){
			extract($data);
		}
		require 'app/view/layout_view.php';
	}
}