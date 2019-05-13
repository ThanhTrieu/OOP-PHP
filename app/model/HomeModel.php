<?php 
namespace App\Model;

if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

use App\Model\Model;
use \PDO;

class HomeModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllData()
	{
		$data = [];
		$sql = "SELECT * FROM tivishow";
		$stmt = $this->db->prepare($sql);
		if($stmt){
			if($stmt->execute()){
				if($stmt->rowCount() > 0){
					$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		return $data;
	}
}