<?php 
include("connection.php");
error_reporting(0);


require './phpmailer/PHPMailerAutoload.php';

function send_email($sid, $svendor, $stitle, $sprice, $sqty, $spay_id, $spay_status, $sdel_status, $sship, $scust, $scust_ph, $scust_add, $scust_name){
$mail = new PHPMailer;

$htmlversion= "Order Cancel Request <br> Order ID: <b>".$spay_id."</b> <br> Product Name: <b>".$stitle."</b> <br> Product Price: <b>".$sprice."</b> <br> Product Qty: <b>".$sqty."</b> <br> Vendor Name: <b>".$svendor."</b> <br> Payment Status: <b>".$spay_status."</b> <br> Delivery Status: <b>".$sdel_status."</b> <br> Customer Name: <b>".$scust_name."</b> <br> Customer Phone No: <b>".$scust_ph."</b> <br> <br> Customer Email: <b>".$scust."</b> <br> Customer Address <b>".$scust_add."</b> ";
$textversion= 'Order Cancel Request';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rfidlibrarypccoe@gmail.com';                 // SMTP username
$mail->Password = '14785269';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('rfidlibrarypccoe@gmail.com', 'Grocery Store');
$mail->addAddress('gokhalehemal11@gmail.com');               // Name is optional

$mail->isHTML(true);

$mail->Subject = 'Order Cancelled';
$mail->Body    = $htmlversion;
$mail->AltBody = $textversion;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    /*echo 'Message has been sent';*/
}
}

if(isset($_POST["id"])){

	$q = "SELECT * FROM orders WHERE order_id = '".$_POST["id"]."'";
	$data= mysqli_query($conn, $q);
	while($row = mysqli_fetch_array($data)){

		$svendor= $row['vendor_name'];
		$sid= $row['order_id'];
		$stitle= $row['product_title'];
		$sprice= $row['product_price'];
		$sqty= $row['product_qty'];
		$spay_id= $row['payment_id'];
		$spay_status= $row['payment_status'];
		$sdel_status= $row['delivery_status'];
		$sship= $row['shipping_method'];
		$scust= $row['buyer_email'];
		$scust_name= $row['buyer_name'];
		$scust_ph= $row['buyer_phone'];
		$scust_add= $row['buyer_address'];

		if($sdel_status == 'ND'){
			if($spay_status == 'Cod'){
				$q = "DELETE FROM orders WHERE order_id ='$sid'";
				$data= mysqli_query($conn, $q);
				send_email($sid, $svendor, $stitle, $sprice, $sqty, $spay_id, $spay_status, $sdel_status, $sship, $scust, $scust_ph, $scust_add, $scust_name);

			}
			else{
				$q = "UPDATE orders SET delivery_status='Returned' WHERE order_id ='$sid'";
				$data= mysqli_query($conn, $q);
				send_email($sid, $svendor, $stitle, $sprice, $sqty, $spay_id, $spay_status, $sdel_status, $sship, $scust, $scust_ph, $scust_add, $scust_name);
			}
		}
		else{
			$q = "UPDATE orders SET delivery_status='Returned' WHERE order_id ='$sid'";
			$data= mysqli_query($conn, $q);
			send_email($sid, $svendor, $stitle, $sprice, $sqty, $spay_id, $spay_status, $sdel_status, $sship, $scust, $scust_ph, $scust_add, $scust_name);
		}
	}

}


?>
