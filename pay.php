<?php
session_start();
/*ini_set('display_errors', 1);*/

$cust_name= $_POST['cust_name'];
$allvalues= $_SESSION['kela'];
$total= $_POST['total_price'];
$delivery= $_POST['delivery'];
$pay_type= $_POST['pay_type'];

//print_r($cust_name);

$some= json_decode($allvalues);
//print_r($some);

$sent= array();

$items = array();
		foreach($some as $arr) {
		    foreach($arr as $key => $value) {
		        $items[$key] = $value;
		    }
		    /*print_r($items);
		    echo "<br />";*/
		}
if($delivery == 1){
	$total= $total + 50;
}
elseif($delivery == 2) {
			$total= $total + 150;
		}

$_SESSION['del']= $delivery;

if($pay_type ==1){
	include("./instamojo/Instamojo.php");
	$api = new Instamojo\Instamojo('test_1893cda3724555853115c973acd', 'test_e5f0906c73a453e3cc3283ff86a','https://test.instamojo.com/api/1.1/');

	try {
	    $response = $api->paymentRequestCreate(array(
	        "purpose" => "Grocery Store",
	        "amount" => $total,
	        "send_email" => true,
	        "email" => $cust_name,
	        "allow_repeated_payments" => false,
	        "redirect_url" => "http://localhost/big_store/web/pay_success.php",
	        ));
	    print_r($response);
	    $pay_url=$response['longurl'];
	    header("location:$pay_url");
	}
	catch (Exception $e) {
	    print('Error: ' . $e->getMessage());
	}
}
else{
	header("location:order_success.php");
}
?>