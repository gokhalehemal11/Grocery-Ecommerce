<?php 
include("connection.php");
error_reporting(0);

if(isset($_POST["id"])){

	$output = '';  
    $q = "SELECT * FROM products WHERE product_id = '".$_POST["id"]."'"; 
							
	$data= mysqli_query($conn, $q);

	while($row = mysqli_fetch_array($data)){
		$pro_id    = $row['product_id'];
		$pro_cat   = $row['product_cat'];
		$pro_brand = $row['product_brand'];
		$pro_title = $row['product_title'];
		$pro_price = $row['product_price'];
		$pro_image = $row['product_image'];
		$pro_desc = $row['product_desc'];


		echo "
			<div class='col-md-5 span-2'>
											<div class='item'>
												<img src='images/$pro_image' class='img-responsive' alt=''>
											</div>
								</div>
								<div class='col-md-7 span-1'>
									<h3>$pro_title</h3>
									<p class='in-para'>$pro_desc </p>
									<div class='price_single'>
									  <span class='reducedfrom'><del></del> Rs $pro_price</span>
									
									 <div class='clearfix'></div>
									</div>
									<h4 class='quick'>Quick Overview:</h4>
									<p class='quick_desc'> $pro_desc </p>
								
									 <div class='add-to'>
										   <button class='btn btn-danger my-cart-btn my-cart-btn1' data-id='$pro_id' data-name='$pro_title' data-summary='summary' data-price='$pro_price' data-quantity='1' data-image='images/$pro_image'>Add to Cart</button>
										</div>
								</div>
								<div class='clearfix'> </div>
		";  
	}
}  


?>

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