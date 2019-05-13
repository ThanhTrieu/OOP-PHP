<?php
namespace App\Configs;

if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');}

use \PDO;

class Database
{
	protected $db;

	public function __construct()
	{
		$this->db = $this->connection();
	}

	private function connection()
	{
		try {
		    $dbh = new PDO('mysql:host=localhost;dbname=tvt3h;charset=utf8', 'root', '');
		    return $dbh;
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	public function __destruct()
	{
		// ngat ket noi
		$this->db = null;
	}
}