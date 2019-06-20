<?php session_start();
ini_set('display_errors', 1);
  if (!isset($_SESSION['user'])) {
  header("location:vendor.php");
}
 ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Orders</h2>
      	</div>
        <?php 
        include_once("./classes/Database.php");
        $uname= $_SESSION['user'];
        $db = new Database();
        $con = $db->connect();
        if($uname != 'malbok@gmail.com'){
        $query = $con->query("SELECT product_qty, product_price FROM orders WHERE vendor_name='$uname' AND  delivery_status !='Returned'");
        $total= 0;
        if (@$query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
          $total= $total + $row['product_qty']*$row['product_price'];
        }
      }
    }
    else{
      $query = $con->query("SELECT product_qty, product_price, shipping_method FROM orders WHERE delivery_status !='Returned'");
        $total= 0;
        if (@$query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
          if($row['shipping_method'] == 'Normal'){$var= 50;}
          elseif ($row['shipping_method'] == 'Express') {$var= 100;}
          $total= $total + $row['product_qty']*$row['product_price'] + $var;
        }
      }
    }
        ?>
       <div class="col-1">
          <h2>Total <?php echo $total; ?></h2>
        </div>
      </div>

<?php
require './phpmailer/PHPMailerAutoload.php';

function send_email($del, $uname, $name, $phone){
$mail = new PHPMailer;

$htmlversion= "You have received an delivery request <br> Vendor Name: <b>".$name."</b><br> Vendor Email: <b>".$uname."</b> <br> Vendor Phone No: <b>".$phone."</b>";
$textversion= 'Delivery Request Arrived';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rfidlibrarypccoe@gmail.com';                 // SMTP username
$mail->Password = '14785269';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('rfidlibrarypccoe@gmail.com', 'Grocery Store');
$mail->addAddress($del);               // Name is optional

$mail->isHTML(true);

$mail->Subject = 'Delivery Request';
$mail->Body    = $htmlversion;
$mail->AltBody = $textversion;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    /*echo 'Message has been sent';*/
}
}
?>      

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Order Id</th>
              <th>Payment Status</th>
              <th>Order Date</th>
              <th>Vendor Name</th>
              <th>Buyer Name</th>
              <th>Buyer Phone</th>
              <th>Shipping Method</th>
              <th>Delivery Status</th>
            </tr>
          </thead>
          <tbody id="customer_order_list">
           
          </tbody>
        </table>
        <?php if($uname != 'malbok@gmail.com'){?>
        <div class="text-center text-danger mb-5">
          <form method="post">
        <button name="deliver" class="btn btn-success" onclick="deliver()">Request Delivery</button>
        <a href="#" data-toggle="modal" data-target="#update" class="btn btn-info btn-md">Update Delivery</a>
      </form>
      </div>
        <?php }?> 
      </div>
    </main>
  </div>
</div>

<?php
$q3= "SELECT * FROM vendors WHERE email='$uname'";
$data3= mysqli_query($con, $q3);
while($res3= mysqli_fetch_assoc($data3)){
  $sname= $res3['username'];
  $sphone= $res3['phone'];
}
if(isset($_POST['deliver'])){
  $q2= "SELECT * FROM delivery WHERE pincode= (SELECT pincode from vendors where email='$uname') ";
  $data2= mysqli_query($con, $q2);
  while($res2= mysqli_fetch_assoc($data2)){
    $del= $res2['email'];
    send_email($del, $uname, $sname, $sphone);
  }
}
?>
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Delivery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="update_del" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Select Order ID</label>
                <select class="form-control brand_list" name="order_id">
                  <?php $q2= "select distinct(payment_id) from orders where vendor_name='$uname' and delivery_status = 'ND'";
                  $data2= mysqli_query($con, $q2);
                  while($res2= mysqli_fetch_assoc($data2)){
                ?>
                  <option value=<?php echo $res2['payment_id']; ?>><?= $res2['payment_id']; ?></option>
                <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Select Delivery Boy/Company</label>
                <select class="form-control brand_list" name="del_guy">
                  <?php $q2= "SELECT * FROM delivery WHERE pincode= (SELECT pincode from vendors where email='$uname')";
                  $data2= mysqli_query($con, $q2);
                  while($res2= mysqli_fetch_assoc($data2)){
                ?>
                  <option value=<?php echo $res2['username']; ?>><?= $res2['username']; ?></option>
                <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-12">
              <input name="deli" type="submit" class="btn btn-primary add-category" value="Update Delivery">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 
if(isset($_POST['deli']))
{
  $order_id= $_POST['order_id'];
  $name= $_POST['del_guy'];

  $q2= $con->query("UPDATE orders SET delivery_status='$name' WHERE payment_id='$order_id' AND vendor_name='$uname'");
  echo "<script type='text/javascript'>alert('Delivery Updated');</script>";
}

?>


<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/customers.js"></script>