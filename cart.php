<?php 

include_once 'connection.php';

if(isset($_POST['sub']))
{
   $hid=$_POST['hidden_nm'];
   $hpc=$_POST['hidden_pr'];
   $query="INSERT INTO temp_cart (food_id,price) VALUES('$hid','$hpc')";
if(mysqli_query($conn,$query))
{
   // header("Location: profile.php");
}
}

?>



<html lang="en">

<!-- Mirrored from codenpixel.com/demo/foodpicky/profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Mar 2018 18:36:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Food Delivery service</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>

 <div class="col-xs-12 col-md-12 col-lg-3" align="center" width="500px">
                     <div class="sidebar-wrap">
                        <div class="widget widget-cart">
                           <div class="widget-heading">
                              <h3 class="widget-title text-dark">
                                 Your Shopping Cart
                              </h3>
                              <div class="clearfix"></div>
                           </div>

<?php

$query = mysqli_query($conn,"select * from temp_cart");
while($row = mysqli_fetch_array($query))
{
    $food = $row['food_id'];
    $price=$row['price'];
    // $name = $row['r_name'];

?>


                           <div class="order-row bg-white">
                              <div class="widget-body">
                                 <div class="title-row"><?php echo $food;?> 
                                  <!-- <a href="#"><i class="fa fa-trash pull-right"></i></a> -->
                                    <span><?php echo "  ".$price; ?></span>
                                  </div>
                                 <div class="form-group row no-gutter">
                                    <!-- <div class="col-xs-8">
                                       <select class="form-control b-r-0" id="exampleSelect1">
                                          <option>Size SM</option>
                                          <option>Size LG</option>
                                          <option>Size XL</option>
                                       </select>
                                    </div> -->
                                    <!-- <div class="col-xs-4">
                                       <input class="form-control" type="number" value="2" id="example-number-input"> 
                                    </div -->
                                 </div>
                              </div>
                           </div>

                           <?php
                            }
                           ?>

<?php 
$query = mysqli_query($conn,"SELECT SUM(price) AS price2 FROM temp_cart ");
while($row = mysqli_fetch_array($query))
{
  $sum=$row['price2'];
}
?>


                           <!-- <div class="order-row">
                              <div class="widget-body">
                                 <div class="title-row">Carlsberg Beer <a href="#"><i class="fa fa-trash pull-right"></i></a></div>
                                 <div class="form-group row no-gutter">
                                    <div class="col-xs-8">
                                       <select class="form-control b-r-0">
                                          <option>Size SM</option>
                                          <option>Size LG</option>
                                          <option>Size XL</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-4">
                                       <input class="form-control" value="4" id="quant-input"> 
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                           <!-- end:Order row -->
                           <div class="widget-delivery clearfix">
                              <form>
                                 <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                    <input id="radio4" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                                 </div>
                                 <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                    <input id="radio3" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                                 </div>
                              </form>
                           </div>
                           <div class="widget-body">
                              <div class="price-wrap text-xs-center">
                                 <p>TOTAL</p>
                                 <h3 class="value"><strong><?php echo $sum ;  ?></strong></h3>
                                 <p>Free Shipping</p>
                                 <button onclick="location.href='checkout.php'" type="button" class="btn theme-btn btn-lg">Checkout</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end:Right Sidebar -->
               </div>
               <!-- end:row -->
            </div>



         </body>
         </html>