<?php 
session_start();
/**
 * 
 */
class Customers
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getCustomers(){
		
		$uname= $_SESSION['user'];
		if($uname != 'malbok@gmail.com'){
			$query = $this->con->query("SELECT username, email, phone, street, city, pincode FROM customers WHERE  pincode = (SELECT pincode FROM vendors WHERE email='$uname') AND email IN (SELECT buyer_email FROM orders WHERE vendor_name='$uname')");
			$ar = [];
			if (@$query->num_rows > 0) {
				while ($row = $query->fetch_assoc()) {
					$ar[] = $row;
				}
				return ['status'=> 202, 'message'=> $ar];
			}
			return ['status'=> 303, 'message'=> 'no customer data'];
		}
		else{
			$query = $this->con->query("SELECT `username`, `email`, `phone`, `street`, `city`, `pincode` FROM `customers`");
			$ar = [];
			if (@$query->num_rows > 0) {
				while ($row = $query->fetch_assoc()) {
					$ar[] = $row;
				}
				return ['status'=> 202, 'message'=> $ar];
			}
			return ['status'=> 303, 'message'=> 'no customer data'];
		}
	}


	public function getCustomersOrder(){

		$uname= $_SESSION['user'];
		if($uname != 'malbok@gmail.com'){
		$query = $this->con->query("SELECT product_image,product_title, product_qty, product_price, payment_id, payment_status, order_date, vendor_name, shipping_method, delivery_status FROM orders o WHERE vendor_name='$uname'");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no orders yet'];
	}
	else{
		$query = $this->con->query("SELECT product_image,product_title, product_qty, product_price, payment_id, payment_status, order_date, vendor_name, shipping_method, delivery_status FROM orders");
		$ar = [];
		if (@$query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				$ar[] = $row;
			}
			return ['status'=> 202, 'message'=> $ar];
		}
		return ['status'=> 303, 'message'=> 'no orders yet'];
	}
}
	

}


/*$c = new Customers();
echo "<pre>";
print_r($c->getCustomers());
exit();*/

if (isset($_POST["GET_CUSTOMERS"])) {
	if (isset($_SESSION['user'])) {
		$c = new Customers();
		echo json_encode($c->getCustomers());
		exit();
	}
}

if (isset($_POST["GET_CUSTOMER_ORDERS"])) {
	if (isset($_SESSION['user'])) {
		$c = new Customers();
		echo json_encode($c->getCustomersOrder());
		exit();
	}
}


?>