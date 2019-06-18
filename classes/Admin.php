<?php
session_start();

/**
 * 
 */
class Admin
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getAdminList(){
		$query = $this->con->query("SELECT `username`, `email`, `phone`, `street`, `city`, `pincode`  FROM `vendors` WHERE `email` != 'malbok@gmail.com' ");
		$ar = [];
		if ($query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'No Admin'];
	}


}


if (isset($_POST["GET_ADMIN"])) {
	if ($_SESSION['user'] == 'malbok@gmail.com') {
		$a = new Admin();
		echo json_encode($a->getAdminList());
		exit();
	}
	
}

?>