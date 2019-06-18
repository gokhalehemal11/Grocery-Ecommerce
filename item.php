<?php
session_start();

include("connection.php");
error_reporting(0);

$cust= $_SESSION['customer'];
/*$pname= '';*/

    function f($res)
    {
        //real search code goes here
        if($res == 'water_and_beverages'){
            $pname= $res;
            
        }
        if($res == 'fruits_and_vegetables'){
            $pname= $res;
            
        }
        if($res == 'staples'){
            $pname= $res;
            
        }
        if($res == 'branded_food'){
            $pname= $res;
            
        }
        if($res == 'breakfast_and_cereal'){
            $pname= $res;
            
        }
        if($res == 'snacks'){
           $pname= $res;
            
        }
        if($res == 'spices'){
            $pname= $res;
            
        }
        if($res == 'sweets'){
            $pname= $res;
            
        }
        if($res == 'pickle_and_condiment'){
            $pname= $res;
            
        }
        if($res == 'instant_food'){
            $pname= $res;
            
        }
        if($res == 'dryfruit'){
            $pname= $res;
            
        }
        if($res == 'tea_and_coffee'){
           $pname= 'water_and_beverages';
            
        }

        if($res == 'ayurvedic'){
           $pname= $res;
            
        }
        if($res == 'babycare'){
            $pname= $res;
            
        }
        if($res == 'cosmetics'){
            $pname= $res;
            
        }
        if($res == 'deo_and_perfumes'){
            $pname= $res;
            
        }
        if($res == 'haircare'){
            $pname= $res;
            
        }
        if($res == 'oralcare'){
            $pname= $res;
            
        }
        if($res == 'personal_hygiene'){
           $pname= $res;
            
        }
        if($res == 'skincare'){
            $pname= $res;
            
        }
        if($res == 'fashion_accessories'){
            $pname= $res;
            
        }
        if($res == 'grooming_tools'){
            $pname= $res;
            
        }
        if($res == 'shaving_needs'){
            $pname= $res;
            
        }
        if($res == 'sanitary_needs'){
            $pname= $res;
            
        }

        if($res == 'noodles_and_pasta'){
            $pname= $res;
            
        }
        if($res == 'breakfast_cereals'){
            $pname= 'breakfast_and_cereal';
            
        }
        if($res == 'biscuit_and_cookies'){
            $pname= $res;
            
        }
        if($res == 'sauces_and_ketchups'){
            $pname= $res;
            
        }
        if($res == 'chocolates_and_candies'){
            $pname= $res;
            
        }
        if($res == 'frozen_veggies'){
            $pname= $res;
            
        }
        if($res == 'snacks_and_namkeen'){
            $pname= 'snacks';
            
        }
        if($res == 'indian_mithai'){
            $pname= 'sweets';
            
        }

        if($res == 'breads_and_buns'){
            $pname= $res;
            
        }
        if($res == 'dairy'){
            $pname= $res;
            
        }
        if($res == 'cakes_and_pastries'){
            $pname= $res;
            
        }
        if($res == 'rusk_and_khari'){
            $pname= $res;
            
        }
        if($res == 'eggs'){
            $pname= $res;
            
        }
        if($res == 'poultry'){
            $pname= $res;
            
        }
        if($res == 'mutton_and_lamb'){
            $pname= $res;
            
        }
        if($res == 'fish_and_seafood'){
            $pname= $res;
            
        }
        if($res == 'pork_and_others'){
            $pname= $res;
            
        }
        if($res == 'icecream'){
           $pname= $res;
            
        }

        if($res == 'cleaning_accessories'){
           $pname= $res;
            
        }
        if($res == 'cookwear'){
           $pname= $res;
            
        }
        if($res == 'detergents'){
            $pname= $res;
            
        }
        if($res == 'gardening'){
            $pname= $res;
            
        }
        if($res == 'kitchen_and_dining'){
            $pname= $res;
            
        }
        if($res == 'kitchenwear'){
            $pname= $res;
            
        }
        if($res == 'petcare'){
           $pname= $res;
            
        }
        if($res == 'plasticwear'){
            $pname= $res;
            
        }
        if($res == 'pooja_needs'){
            $pname= $res;
            
        }
        if($res == 'safety_accessories'){
            $pname= $res;
            
        }
        if($res == 'festive_decoratives'){
            $pname= $res;
            
        }
        if($res == 'toys_and_gifts'){
            $pname= $res;
            
        }
    }

   //check if the get variable exists
    if (isset($_GET['name']))
    {
        f($_GET['name']);
    }

?>


<!DOCTYPE html>
<html>
<head>
<title>Product Information</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Kitchen" />
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
           <a href="kitchen.php"><img class="first-slide" src="images/ba.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
          <a href="care.php"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
           <a href="hold.php"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->

<!--content-->
<!-- <div class="kic-top ">
    <div class="container ">
    <div class="kic ">
            <h3>Popular Categories</h3>
            
        </div>
        <div class="col-md-4 kic-top1">
            <a href="single.php">
                <img src="images/ki.jpg" class="img-responsive" alt="">
            </a>
            <h6>Dal</h6>
            <p>Dal Desc ... </p>
        </div>
        <div class="col-md-4 kic-top1">
            <a href="single.php">
                <img src="images/ki1.jpg" class="img-responsive" alt="">
            </a>
            <h6>Snacks</h6>
            <p>Snacks Desc ... </p>
        </div>
        <div class="col-md-4 kic-top1">
            <a href="single.php">
                <img src="images/ki2.jpg" class="img-responsive" alt="">
            </a>
            <h6>Spice</h6>
            <p>Spice Desc ... </p>
        </div>
    </div>
</div>
 -->
<!--content-->
        <div class="product">
        <div class="container">
            <div class="spec ">
                <h3>Products</h3>
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

                               $qname= $_GET['name'];
                                $q2= "SELECT * FROM products WHERE product_cat =(SELECT cat_id FROM categories WHERE cat_name='$qname') ";
                                $data2= mysqli_query($conn, $q2);
                                $total2= mysqli_num_rows($data2);
                                
                                while($res2= mysqli_fetch_assoc($data2)){
                        ?>
                            <div class="col-md-3 pro-1">
                                <div class="col-m">                             
                                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img" id="<?php echo $res2['product_id']; ?>">
                                        <?php echo "<img src='images/".$res2['product_image']."'>";?> 
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6>
                                                <?php echo $res2['product_title'];?>
                                            </h6>                           
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> Rs <?php echo $res2['product_price'] +20;?></label><em class="item_price"> Rs <?php echo $res2['product_price'];?></em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php 
                                        $s= "images/";
                                        $ext= $res2['product_image'];
                                        $image= $s.$ext;
                                        ?>
                                        <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b " data-id="<?php echo $res2['product_id']; ?>" data-name= "<?php echo $res2['product_title'];?>"data-summary="summary 1" data-price="<?php echo $res2['product_price'];?>" data-quantity="1" data-image="<?php echo $image; ?>">Add to Cart</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php 
                                }
                                ?>
                           <!--  <div class="col-md-3 pro-1">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                                        <img src="images/of25.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php"> Peach Halves</a>(250 g)</h6>                          
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 5.00</label><em class="item_price"> RS 4.50</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="25" data-name="Peach Halves" data-summary="summary 25" data-price="4.50" data-quantity="1" data-image="images/of25.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pro-1">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                                        <img src="images/of26.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php">Banana</a>(1 kg)</h6>                          
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 4.00</label><em class="item_price"> RS 3.50</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="26" data-name="Banana" data-summary="summary 26" data-price="3.50" data-quantity="1" data-image="images/of26.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pro-1">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                                        <img src="images/of27.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php">Rice</a>(500 g)</h6>                           
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 1.00</label><em class="item_price"> RS 0.80</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="27" data-name="Rice" data-summary="summary 27" data-price="0.80" data-quantity="1" data-image="images/of27.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 pro-1">
                                <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                                        <img src="images/of28.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php">Oil</a>(500 g)</h6>                            
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 7.00</label><em class="item_price"> RS 6.00</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="28" data-name="Oil" data-summary="summary 28" data-price="6.00" data-quantity="1" data-image="images/of28.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pro-1">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                                        <img src="images/of29.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php">Biscuits</a>(250 g)</h6>                           
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 5.00</label><em class="item_price"> RS 4.50</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="29" data-name="Biscuits" data-summary="summary 29" data-price="4.50" data-quantity="1" data-image="images/of29.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pro-1">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                                        <img src="images/of30.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php">Nuts</a>(1 kg)</h6>                            
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 4.00</label><em class="item_price"> RS 3.50</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="30" data-name="Nuts" data-summary="summary 30" data-price="3.50" data-quantity="1" data-image="images/of30.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pro-1">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                                        <img src="images/of31.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php">Rice</a>(500 g)</h6>                           
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 1.00</label><em class="item_price"> RS 0.80</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="31" data-name="Rice" data-summary="summary 31" data-price="0.80" data-quantity="1" data-image="images/of31.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-3 pro-1">
                                <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                                        <img src="images/of32.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php">Noodles</a>(500 g)</h6>                            
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 7.00</label><em class="item_price"> RS 6.00</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="32" data-name="Noodles" data-summary="summary 32" data-price="6.00" data-quantity="1" data-image="images/of32.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pro-1">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                                        <img src="images/of33.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php">Tea</a>(250 g)</h6>                            
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 5.00</label><em class="item_price"> RS 4.50</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="33" data-name="Tea" data-summary="summary 33" data-price="4.50" data-quantity="1" data-image="images/of33.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pro-1">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                                        <img src="images/of34.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php">Seafood</a>(1 kg)</h6>                         
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 4.00</label><em class="item_price"> RS 3.50</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="34" data-name="Seafood" data-summary="summary 34" data-price="3.50" data-quantity="1" data-image="images/of34.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pro-1">
                                <div class="col-m">
                                    <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                                        <img src="images/of35.png" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="single.php">Oats Idli</a>(500 g)</h6>                          
                                        </div>
                                        <div class="mid-2">
                                            <p ><label> RS 1.00</label><em class="item_price"> RS 0.80</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add">
                                           <button class="btn btn-danger my-cart-btn my-cart-b" data-id="35" data-name="Oats Idli" data-summary="summary 35" data-price="0.80" data-quantity="1" data-image="images/of35.png">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="clearfix"></div>
                         </div>
        </div>
    </div>
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

  
  
  
  
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa" id="item_detail">
                                
                            </div>
                        </div>
                    </div>
                </div>

        <script>  
             $(document).ready(function(){  
                  $('.offer-img').click(function(){ 
        /*        console.log("what"); */
                   var id = $(this).attr("id");
                   console.log(id);   
                   $.ajax({  
                        url:"select.php",  
                        method:"post",  
                        data:{id:id},  
                        success:function(data){ 
                             $('#item_detail').html(data);  
                             $('#myModal1').modal("show");  
                            }  
                        });  
                    });  
                });  
        </script>

            <!-- <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of25.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3>Peach Halves(250 g)</h3>
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 10.00</del> RS 9.00</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="25" data-name="Peach Halves" data-summary="summary 25" data-price="9.00" data-quantity="1" data-image="images/of25.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of26.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3>Banana(1 kg)</h3>
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 3.00</del> RS 2.00</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="26" data-name="Banana" data-summary="summary 26" data-price="2.00" data-quantity="1" data-image="images/of26.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of27.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3>Rice(500 g)</h3>
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 4.00</del> RS 3.50</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="27" data-name="Rice" data-summary="summary 27" data-price="3.50" data-quantity="1" data-image="images/of27.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of28.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3>Oil(500 g)</h3>
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 1.00</del> RS 0.70</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="28" data-name="Oil(500 g)" data-summary="summary 28" data-price="0.70" data-quantity="1" data-image="images/of28.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of29.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3>Biscuits(250 g)</h3>
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 1.00</del> RS 0.70</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="29" data-name="Biscuits" data-summary="summary 29" data-price="0.70" data-quantity="1" data-image="images/of29.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of30.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3>Nuts(1 kg)</h3>
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 2.00</del> RS 1.00</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="30" data-name="Nuts" data-summary="summary 30" data-price="1.00" data-quantity="1" data-image="images/of30.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of31.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3>Rice(500 g)</h3>
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 4.00</del> RS 3.50</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="31" data-name="Rice" data-summary="summary 31" data-price="3.50" data-quantity="1" data-image="images/of31.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of32.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3>Noodles(500 g)</h3>
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 2.00</del> RS 1.50</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="32" data-name="Noodles" data-summary="summary 32" data-price="1.50" data-quantity="1" data-image="images/of32.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of33.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                <h3>Tea(250 g)</h3>
                                    
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 1.00</del> RS 0.70</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="33" data-name="Seafood" data-summary="summary 33" data-price="0.70" data-quantity="1" data-image="images/of33.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of34.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                <h3>Seafood(1 kg)</h3>
                                    
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 2.00</del> RS 1.00</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="34" data-name="Oats Idli" data-summary="summary 34" data-price="1.00" data-quantity="1" data-image="images/of34.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <div class="modal-body modal-spa">
                                <div class="col-md-5 span-2">
                                            <div class="item">
                                                <img src="images/of35.png" class="img-responsive" alt="">
                                            </div>
                                </div>
                                <div class="col-md-7 span-1 ">
                                    <h3>Oats Idli(500 g)</h3>
                                    <p class="in-para"> Some attractive header</p>
                                    <div class="price_single">
                                      <span class="reducedfrom "><del> RS 4.00</del> RS 3.50</span>
                                    
                                     <div class="clearfix"></div>
                                    </div>
                                    <h4 class="quick">Quick Overview:</h4>
                                    <p class="quick_desc"> Product Desc ...</p>
                                     <div class="add-to">
                                           <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="35" data-name="product 35" data-summary="summary 35" data-price="3.50" data-quantity="1" data-image="images/of35.png">Add to Cart</button>
                                        </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                
</body>
</html>


