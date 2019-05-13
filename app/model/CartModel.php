<?php 
namespace App\Model;

if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

use App\Model\Model;
use \PDO;

class CartModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getDataById($id = null)
	{
		$data = [];
		$sql = "SELECT * FROM tivishow AS a WHERE a.id = :id";
		$stmt = $this->db->prepare($sql);
		if($stmt){
			$stmt->bindParam(':id',$id, PDO::PARAM_INT);
			if($stmt->execute()){
				if($stmt->rowCount() > 0){
					$data = $stmt->fetch(PDO::FETCH_ASSOC);
				}
			}
			$stmt->closeCursor();
		}
		return $data;
	}
}