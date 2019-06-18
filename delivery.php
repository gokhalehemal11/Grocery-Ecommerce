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
    
   <?php include_once("./templates/sidebar.php"); ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Deliveries</h2>
      	</div>
        <div class="col-2">
          <button data-toggle="modal" data-target="#add_category_modal" class="btn btn-primary btn-sm">Add Delivery Contact</button>
        </div>
        <?php 
        include_once("./classes/Database.php");
        $uname= $_SESSION['user'];
        $db = new Database();
        $con = $db->connect();
     
      	$query = $con->query("SELECT product_qty, product_price FROM orders ");
        $total= 0;
        if (@$query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
          $total= $total + $row['product_qty']*$row['product_price'];
        }
      }
        ?>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
            </tr>

            <?php
            if($uname != 'malbok@gmail.com'){ 
            $q2= "SELECT * FROM delivery WHERE pincode= (SELECT pincode from vendors where email='$uname') ";
        }
        else{
        	$q2= "SELECT * FROM delivery";
        }
			$data2= mysqli_query($con, $q2);
			while($res2= mysqli_fetch_assoc($data2)){
            ?>
            <tr>
            	<td><?php echo $res2['username']; ?></td>
            	<td><?php echo $res2['email']; ?></td>
            	<td><?php echo $res2['phone']; ?></td>
            	<td><?php echo $res2['street']."<br>".$res2['city']."<br>".$res2['pincode']; ?></td>
            </tr>
          <?php }?>
          </thead>
          <tbody id="customer_order_list">
           
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<div class="modal fade" id="add_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Delivery Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-category-form" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Delivery Person/Company Name</label>
                <input type="text" name="del_name" class="form-control" placeholder="Enter Person/Company Name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Person/ Company Email</label>
                <input type="text" name="del_email" class="form-control" placeholder="Enter Person/ Company Email">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Street Address</label>
                <input type="text" name="del_street" class="form-control" placeholder="Enter Street Address">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>City</label>
                <input type="text" name="del_city" class="form-control" placeholder="Enter City">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Pincode</label>
                <input type="text" name="del_pincode" class="form-control" placeholder="Enter Pincode">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Phone No.</label>
                <input type="text" name="del_phone" class="form-control" placeholder="Enter Phone No.">
              </div>
            </div>
            <input type="hidden" name="add_category" value="1">
            <div class="col-12">
              <input name="submit" type="submit" class="btn btn-primary add-category" value="Add Contact">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 
if(isset($_POST['submit']))
{
  $name= $_POST['del_name'];
  $email= $_POST['del_email'];
  $street= $_POST['del_street'];
  $city= $_POST['del_city'];
  $pincode= $_POST['del_pincode'];
  $phone= $_POST['del_phone'];

  if($name != "" && $email != "" && $street != "" && $city != "" && $pincode != "" && $phone != "")
  {
     $q2= $con->query("INSERT into delivery (id, username, email, street, city, pincode, phone) VALUES (DEFAULT,'$name','$email','$street','$city','$pincode','$phone')");
     echo "<script type='text/javascript'>window.location.href='customer_orders.php';</script>";
  }
  else{
    echo "<script type='text/javascript'>alert('All fields required');</script>";
  }
}

?>

<?php include_once("./templates/footer.php"); ?>