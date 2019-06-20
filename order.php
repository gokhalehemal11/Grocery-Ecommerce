<?php 
session_start();
/*ini_set('display_errors', 1);*/
include("connection.php");
error_reporting(0);


$cust= $_SESSION['customer'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Order Page</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Personal Care" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<a href="offer.php"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.php"><b>T<br>H<br>E</b>Grocery Store<span>The Best Supermarket</span></a></h1>
			</div>
			
			<?php 
			if(isset($_SESSION['customer']))
			{
				
			?>
			<div class="header">
				<b>Welcome </b><b style="color: green;"><?php echo $cust; ?></b>
			</div>

			<div class="head-t">
				<ul class="card">
					<li><a href="order.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Orders</a></li>
					<li><a href="vendor-index.php" ><i class="fa fa-user" aria-hidden="true"></i>Vendor Login</a></li>
					<li><a href="about.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>About Us</a></li>
					<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
					<li><a href="cust-logout.php" ><i class="fa fa-user" aria-hidden="true"></i>Logout</a></li>
				</ul>	
			</div>

			<?php
			}

			else{
				?>

			<div class="head-t">
				<ul class="card">
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="vendor-index.php" ><i class="fa fa-user" aria-hidden="true"></i>Vendor Login</a></li>
					<li><a href="about.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>About Us</a></li>
					<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>	
			</div>	 

			<?php
			}

			?>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<?php include_once("top.php"); ?>
					
				</div>
					
				</div>			
</div>
  <!---->
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="care.php"><img class="first-slide" src="images/ba1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
          <a href="kitchen.php"><img class="second-slide " src="images/ba.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="hold.php"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div>
    <!-- /.carousel -->

		<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Order Page</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class=" con-w3l agileinf">
							<?php 
								/*$q = "SELECT v.email from vendors v JOIN  customers c ON v.pincode= c.pincode WHERE c.email='$cust'";
								$data= mysqli_query($conn, $q);
								$total= mysqli_num_rows($data);
								while($res= mysqli_fetch_assoc($data)){
								if($total > 0){
									$vendor= $res['email'];
								}*/

								/*echo $vendor;*/
								$q2= "SELECT * FROM orders WHERE buyer_email= '$cust' ORDER BY order_id DESC";
								$data2= mysqli_query($conn, $q2);
								$total2= mysqli_num_rows($data2);

								while($res2= mysqli_fetch_assoc($data2)){
									$ven= $res2['vendor_name'];
									$q4= "SELECT * FROM vendors WHERE email= '$ven'";
									$data4= mysqli_query($conn, $q4);
									while($res4= mysqli_fetch_assoc($data4)){
										$ven_ph= $res4['phone'];
										$ven_name= $res4['username'];
										$ven_address= $res4['street'].", ".$res4['city'].", ".$res4['pincode'];
									}

									$del= $res2['delivery_status'];
									if($del != 'ND' && $del != 'Returned'){
									$q3= "SELECT * FROM delivery WHERE username= '$del'";
									$data3= mysqli_query($conn, $q3);
									while($res3= mysqli_fetch_assoc($data3)){
										$sdel= $res3['email'];
										$sdel2= $res3['phone'];
									
						?>
							<div class="col-md-3 pro-1">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['order_id']; ?>">
										<?php echo "<img src='".$res2['product_image']."'>";?> 
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>
												<?php echo $res2['product_title'];?>
											</h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price"> Price <?php echo $res2['product_price'];?></em></p>
											<div class="clearfix"></div>
										</div>
										<div class="mid-3">
											<p ><em class="item_qty"> Qty <?php echo $res2['product_qty'];?></em></p>
											<div class="del_name"><b>Delivery Name:</b> <?php echo $del; ?></div>
											<div class="del_ph"><b>Delivery Phone:</b> <?php echo $sdel2; ?></div>
											<div class="clearfix"></div>
										</div>
										<div class="mid-2">
											<p ><em class="pay_id"> <b>Order ID: </b> <?php echo $res2['payment_id'];?></em></p>
											<p ><em class="pay_stat"> <b>Payment Status: </b> <?php echo $res2['payment_status'];?></em></p>
											<p ><em class="ven_name"> <b>Vendor Name: </b> <?php echo $ven_name;?></em></p>
											<p ><em class="ven_ph"> <b>Vendor Phone No: </b> <?php echo $ven_ph;?></em></p>
											<p ><em class="ven_address"> <b>Vendor Address: </b> <?php echo $ven_address;?></em></p>
											<div class="clearfix"></div>
										</div>
										<button class="btn btn-danger" id="<?php echo $res2['order_id']; ?>">Return Order</button>
									</div>
								</div>
							</div>
							<?php 
							}
								}
								elseif ($del == 'Returned') { ?>
									<div class="col-md-3 pro-1">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['order_id']; ?>">
										<?php echo "<img src='".$res2['product_image']."'>";?> 
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>
												<?php echo $res2['product_title'];?>
											</h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price"> Price <?php echo $res2['product_price'];?></em></p>
											<div class="clearfix"></div>
										</div>
										<div class="mid-3">
											<p ><em class="item_qty"> Qty <?php echo $res2['product_qty'];?></em></p>
											<div class="del_name"><b>Delivery Name:</b> Order Returned </div>
											<div class="del_ph"><b>Delivery Phone:</b> Order Returned </div>
											<div class="clearfix"></div>
										</div>
										<div class="mid-2">
											<p ><em class="pay_id"> <b>Order ID: </b> <?php echo $res2['payment_id'];?></em></p>
											<p ><em class="pay_stat"> <b>Payment Status: </b>Order Returned </em></p>
											<p ><em class="ven_name"> <b>Vendor Name: </b> <?php echo $ven_name;?></em></p>
											<p ><em class="ven_ph"> <b>Vendor Phone No: </b> <?php echo $ven_ph;?></em></p>
											<p ><em class="ven_address"> <b>Vendor Address: </b> <?php echo $ven_address;?></em></p>
											<div class="clearfix"></div>
										</div>
										<button class="btn btn-secondary" id="">Order Returned</button>
									</div>
								</div>
							</div>

								<?php }
								else{
									?>
									<div class="col-md-3 pro-1">
								<div class="col-m">								
									<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['order_id']; ?>">
										<?php echo "<img src='".$res2['product_image']."'>";?> 
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>
												<?php echo $res2['product_title'];?>
											</h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price"> Price <?php echo $res2['product_price'];?></em></p>
											<div class="clearfix"></div>
										</div>
										<div class="mid-3">
											<p ><em class="item_qty"> Qty <?php echo $res2['product_qty'];?></em></p>
											<div class="women"><b>Delivery Name:</b> Yet to Deliver</div>
											<div class="women"><b>Delivery Status:</b> Yet to Deliver</div>
											<div class="clearfix"></div>
										</div>
										<div class="mid-2">
											<p ><em class="pay_id"> <b>Order ID: </b> <?php echo $res2['payment_id'];?></em></p>
											<p ><em class="pay_stat"> <b>Payment Status: </b> <?php echo $res2['payment_status'];?></em></p>
											<p ><em class="ven_name"> <b>Vendor Name: </b> <?php echo $ven_name;?></em></p>
											<p ><em class="ven_ph"> <b>Vendor Phone No: </b> <?php echo $ven_ph;?></em></p>
											<p ><em class="ven_address"> <b>Vendor Address: </b> <?php echo $ven_address;?></em></p>
											<div class="clearfix"></div>
										</div>
										<button class="btn btn-danger" id="<?php echo $res2['order_id']; ?>">Cancel Order</button>
									</div>
								</div>
							</div>

									<?php
								}
							}
							?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

<!-- <div class="text-center text-danger mb-5" style="padding-bottom: 20px;">
			<a href="#" data-toggle="modal" data-target="#return_order" class="btn btn-danger btn-md">Return Order</a>
	</div> -->

<!-- Modal -->

<script>  
	 $(document).ready(function(){  
	      $('.btn-danger').click(function(){ 
	      	if(confirm("Are you sure?")){
	           var id = $(this).attr("id");
	           //console.log(id);   
	           $.ajax({  
	                url:"return-order.php",  
	                method:"post",  
	                data:{id:id},  
	                success:function(data){ 
	                    alert("Order Cancelled");
	                    window.location.reload();
	                	}  
			        });
		        }  
		    });  
	    });  
</script>



<!--footer-->
<?php include_once("footer.php"); ?>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>
</body>
</html>