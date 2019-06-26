 <nav class="navbar navbar-dark  bg-dark flex-sm-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Grocery Store</a>
<!--   <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
 -->  <ul class="navbar-nav px-3">
    
    	<?php
    		if (isset($_SESSION['user'])) {
    			?>
                <li class="nav-item ">
    				<a class="nav-link" href="./vendor-logout.php">Sign out</a>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#change">Change Password</a>
                </li>    
    			<?php
    		}/*else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link" href="../admin/register.php">Register</a>
	    			<?php
    			}else{
    				?>
	    				<a class="nav-link" href="../admin/login.php">Login</a>
	    			<?php
    			


    			
    		}*/

    	?>
   
<div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="update_del" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <div class="col-12">
                <input type="password" name="old_password" placeholder="Enter Current Password"> 
            </div>
            <br>
            <div class="col-12">
                <input type="password" name="new_pass" placeholder="Enter New Password"> 
            </div>
            <br>
            <div class="col-12">
                <input type="password" name="c_new_pass" placeholder="Confirm New Password"> 
            </div>
              </div>
            </div>
            <div class="col-12">
              <input name="ch" type="submit" class="btn btn-primary add-category" value="Change Password">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 
if(isset($_POST['ch']))
{
    include_once("./classes/Database.php");
    $db = new Database();
    $con = $db->connect();

  $uname= $_SESSION['user'];
  $old_pass= $_POST['old_password'];
  $new_pass= $_POST['new_pass'];
  $c_new_pass= $_POST['c_new_pass'];

  if($new_pass == $c_new_pass){
      $q2= $con->query("UPDATE vendors SET password='$new_pass' WHERE email='$uname'");
      echo "<script type='text/javascript'>alert('Password Updated');</script>";
  }
  else{
    echo "<script type='text/javascript'>alert('Passwords Not Matched');</script>";
  }
}

?>
  </ul>
</nav>