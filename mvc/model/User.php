<?php
namespace model;

use app\Model;

class User extends Model{
	public function ambilUser($username){
		$query = $this->db->prepare("SELECT * FROM user WHERE username=" . $username);
		$query->execute();
		$data = $query->fetchAll();
		return $data;
	}
}

?>