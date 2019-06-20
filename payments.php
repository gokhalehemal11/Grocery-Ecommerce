<?php 
session_start();
$uname= $_SESSION['user'];

if($uname != 'malbok@gmail.com'){
	header("location: vendor.php");
}
?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

    <div class="row">
      	<div class="col-10">
      		<h2>Total Payments</h2>
      	</div>
        <?php 
        include_once("./classes/Database.php");
        $uname= $_SESSION['user'];
        $db = new Database();
        $con = $db->connect();
        $query = $con->query("SELECT vendor_name, SUM(product_price*product_qty) AS total FROM orders  WHERE delivery_status !='Returned' GROUP BY vendor_name;");
        ?>
    </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Vendor</th>
              <th>Total Amount Received</th>
            </tr>
            
            <?php 
            	 if (@$query->num_rows > 0) {
			        while ($row = $query->fetch_assoc()) {
			         ?>
			 <tr>
			 	<td><?php echo $row['vendor_name']; ?></td>
			 	<td><?php echo $row['total']; ?></td>
            </tr>
			         <?php
			        }
			      }

            ?>
          </thead>
          <tbody id="customer_order_list">
           
          </tbody>
        </table>
      </div>

</div>
</div>