<?php
namespace App\Model;

if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

use App\Configs\Database;
use \PDO;

class Model extends Database
{
	public function __construct()
	{
		parent::__construct();
	}
}