


<?php
$servername="localhost";
$username="root";
$password="";
$db="food_db";

$conn=mysqli_connect($servername,$username,$password,$db);
if($conn->connect_error)

{
   die(mysqli_error());
}

if($_SERVER['REQUEST_METHOD']=="POST")
{
   $name1=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $url_input=$_POST['url_input'];
   $opt=$_POST['opt'];
   $clt=$_POST['clt'];
   $place=$_POST['place'];
   $checkbox1=$_POST['techno']; 
   $image=$_FILES['image']['name'];

   $name = ''; $type = ''; $size = ''; $error = '';
   function compress_image($source_url, $destination_url, $quality) {

     $info = getimagesize($source_url); 

     if ($info['mime'] == 'image/jpeg')
       $image = imagecreatefromjpeg($source_url);

    elseif ($info['mime'] == 'image/gif')
       $image = imagecreatefromgif($source_url);

    elseif ($info['mime'] == 'image/png')
       $image = imagecreatefrompng($source_url);

    imagejpeg($image, $destination_url, $quality);
    return $destination_url;
 }

 $chk="";  
 foreach($checkbox1 as $chk1)  
 {  
   $chk .= $chk1.",";  
}  

$img = $_FILES['image']['name'];

   // $in_ch=mysqli_query($con,"insert into infor(image) values ('$chk')");  

$url = 'upload/' . $img;
$filename = compress_image($_FILES["image"]["tmp_name"], $url, 50);

$query="INSERT INTO restaurant (image,r_name,r_email,r_ph,r_url,r_opt,r_clt,r_place,days) VALUES('$image','$name1','$email','$phone','$url_input','$opt','$clt','$place','$chk')";
mysqli_query($conn,$query);
if($query==1)  
{  
   echo'<script>alert("Inserted Successfully")</script>';  
} 
   // else  
   // {  
   //    echo'<script>alert("Failed To Insert")</script>';  
   // }  



?>
<script type="text/javascript">
   alert("data inserted successfully!")
</script>
<?php


}




?>



<!DOCTYPE html>
<html lang="en">
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
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <!--header starts-->
      <header id="header" class="header-scroll top-header headrom">
         <!-- .navbar -->
         <nav class="navbar navbar-dark">
            <div class="container">
               <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
               <a class="navbar-brand" href="index-2.php"> <img class="img-rounded" src="images/food-picky-logo.png" alt=""> </a>
               <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                  <ul class="nav navbar-nav">
                     <li class="nav-item"> <a class="nav-link active" href="index-2.php">Home <span class="sr-only">(current)</span></a> </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Food</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="food_results.php">Food results</a> <a class="dropdown-item" href="map_results.php">Map results</a></div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Restaurants</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="restaurants.php">Search results</a> <a class="dropdown-item" href="profile.php">Profile page</a></div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="pricing.php">Pricing</a> <a class="dropdown-item" href="contact.php">Contact</a> <a class="dropdown-item" href="submition.php">Submit restaurant</a> <a class="dropdown-item" href="registration.php">Registration</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="checkout.php">Checkout</a> 
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <!-- /.navbar -->
      </header>
      <div class="page-wrapper">
         <div class="breadcrumb">
            <div class="container">
               <ul>
                  <li><a href="#" class="active">Home</a></li>
                  <li><a href="#">Search results</a></li>
                  <li>Profile</li>
               </ul>
            </div>
         </div>
         <section class="contact-page inner-page">
            <div class="container">
               <div class="row">
                  <!-- REGISTER -->
                  <div class="col-md-8">
                     <div class="widget">
                        <div class="widget-body">
                          


                           <form method="post" action="submition.php" enctype="multipart/form-data">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Restaurant</label>
                                 <input class="form-control" type="text" placeholder="Enter name of your restaurant" id="example-text-input" name="name"> 
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Email address</label>
                                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"> 
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Phone number</label>
                                 <input class="form-control" type="text" value="" id="example-tel-input" name="phone"> 
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">URL</label>
                                 <input class="form-control" type="text" value="http://codenpixel.com" id="example-url-input" name="url_input"> 
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Open Hours</label>
                                 <input class="form-control" value="" type="text" name="opt"> 
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Closing Hours</label>
                                 <input class="form-control" value="" type="text" name="clt"> 
                              </div>

                              <div class="form-group">
                                 <label for="exampleInputEmail1">Place</label>
                                 <input class="form-control" value="" name="place" type="text"> 
                              </div>
                              <div class="form-group">
                                 <label>Open days</label>
                                 <br>
                                 <div class="btn-group" data-toggle="buttons">
                                    <label class="btn theme-btn active">
                                       <input type="checkbox" name="techno[]" value="Mon" checked>Mon </label>
                                       <label class="btn theme-btn active">
                                          <input type="checkbox" name="techno[]" value="Tue"> Tus </label>
                                          <label class="btn theme-btn active">
                                             <input type="checkbox" name="techno[]" value="Wed"> Wed </label>
                                             <label class="btn theme-btn active">
                                                <input type="checkbox" name="techno[]" value="Thu"> Thu </label>
                                                <label class="btn btn-secondary" name="techno[]">
                                                   <input type="checkbox" name="techno[]" value="Fri"> Fri </label>
                                                   <label class="btn btn-secondary">
                                                      <input type="checkbox" name="techno[]" value="Sat"> Sat </label>
                                                      <label class="btn btn-secondary">
                                                         <input type="checkbox" name="techno[]" value="Sun"> Sun </label>
                                                      </div>
                                                   </div>



                                                   <div class="form-group">
                                                      <label for="exampleInputFile">File input</label>
                                                      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="image"> 
                                                   </div>
                                                   <p>
                                                      <button type="submit" id="btnSubmit1" name="btnSubmit1" class="btn theme-btn">Submit</button>
                                                   </p>
                                                </form>
                                             </div>
                                          </div>
                                          <!-- end: Widget -->
                                       </div>
                                       <!-- /REGISTER -->
                                       <!-- WHY? -->
                                       <div class="col-md-4">
                                          <h4>Registration is fast, easy, and free.</h4>
                                          <p>Once you"re registered, you can:</p>
                                          <hr>
                                          <img src="images/Local.png" alt="" class="img-fluid">
                                          <p></p>
                                          <div class="panel">
                                             <div class="panel-heading">
                                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false"><i class="ti-info-alt" aria-hidden="true"></i>Can I viverra sit amet quam eget lacinia?</a></h4>
                                             </div>
                                             <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                                                <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum ut erat a ultricies. Phasellus non auctor nisi, id aliquet lectus. Vestibulum libero eros, aliquet at tempus ut, scelerisque sit amet nunc. Vivamus id porta neque, in pulvinar ipsum. Vestibulum sit amet quam sem. Pellentesque accumsan consequat venenatis. Pellentesque sit amet justo dictum, interdum odio non, dictum nisi. Fusce sit amet turpis eget nibh elementum sagittis. Nunc consequat lacinia purus, in consequat neque consequat id. </div>
                                             </div>
                                          </div>
                                          <!-- end:panel -->
                                          <div class="panel">
                                             <div class="panel-heading">
                                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle" href="#faq2" aria-expanded="true"><i class="ti-info-alt" aria-hidden="true"></i>Can I viverra sit amet quam eget lacinia?</a></h4>
                                             </div>
                                             <div class="panel-collapse collapse" id="faq2" aria-expanded="true" role="article">
                                                <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum ut erat a ultricies. Phasellus non auctor nisi, id aliquet lectus. Vestibulum libero eros, aliquet at tempus ut, scelerisque sit amet nunc. Vivamus id porta neque, in pulvinar ipsum. Vestibulum sit amet quam sem. Pellentesque accumsan consequat venenatis. Pellentesque sit amet justo dictum, interdum odio non, dictum nisi. Fusce sit amet turpis eget nibh elementum sagittis. Nunc consequat lacinia purus, in consequat neque consequat id. </div>
                                             </div>
                                          </div>
                                          <!-- end:Panel -->
                                          <h4 class="m-t-20">Contact Customer Support</h4>
                                          <p> If you"re looking for more help or have a question to ask, please </p>
                                          <p> <a href="contact.php" class="btn theme-btn m-t-15">contact us</a> </p>
                                       </div>
                                       <!-- /WHY? -->
                                    </div>
                                 </div>
                              </section>
                              <section class="app-section">
                                 <div class="app-wrap">
                                    <div class="container">
                                       <div class="row text-img-block text-xs-left">
                                          <div class="container">
                                             <div class="col-xs-12 col-sm-6  right-image text-center">
                                                <figure> <img src="images/app.png" alt="Right Image"> </figure>
                                             </div>
                                             <div class="col-xs-12 col-sm-6 left-text">
                                                <h3>The Best Food Delivery App</h3>
                                                <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                                                <div class="social-btns">
                                                   <a href="#" class="app-btn apple-button clearfix">
                                                      <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                                      <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                                   </a>
                                                   <a href="#" class="app-btn android-button clearfix">
                                                      <div class="pull-left"><i class="fa fa-android"></i> </div>
                                                      <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              <!-- start: FOOTER -->
                              <footer class="footer">
                                 <div class="container">
                                    <!-- top footer statrs -->
                                    <div class="row top-footer">
                                       <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                                          <a href="#"> <img src="images/food-picky-logo.png" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> 
                                       </div>
                                       <div class="col-xs-12 col-sm-2 about color-gray">
                                          <h5>About Us</h5>
                                          <ul>
                                             <li><a href="#">About us</a> </li>
                                             <li><a href="#">History</a> </li>
                                             <li><a href="#">Our Team</a> </li>
                                             <li><a href="#">We are hiring</a> </li>
                                          </ul>
                                       </div>
                                       <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                                          <h5>How it Works</h5>
                                          <ul>
                                             <li><a href="#">Enter your location</a> </li>
                                             <li><a href="#">Choose restaurant</a> </li>
                                             <li><a href="#">Choose meal</a> </li>
                                             <li><a href="#">Pay via credit card</a> </li>
                                             <li><a href="#">Wait for delivery</a> </li>
                                          </ul>
                                       </div>
                                       <div class="col-xs-12 col-sm-2 pages color-gray">
                                          <h5>Pages</h5>
                                          <ul>
                                             <li><a href="#">Search results page</a> </li>
                                             <li><a href="#">User Sing Up Page</a> </li>
                                             <li><a href="#">Pricing page</a> </li>
                                             <li><a href="#">Make order</a> </li>
                                             <li><a href="#">Add to cart</a> </li>
                                          </ul>
                                       </div>
                                       <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                                          <h5>Popular locations</h5>
                                          <ul>
                                             <li><a href="#">Sarajevo</a> </li>
                                             <li><a href="#">Split</a> </li>
                                             <li><a href="#">Tuzla</a> </li>
                                             <li><a href="#">Sibenik</a> </li>
                                             <li><a href="#">Zagreb</a> </li>
                                             <li><a href="#">Brcko</a> </li>
                                             <li><a href="#">Beograd</a> </li>
                                             <li><a href="#">New York</a> </li>
                                             <li><a href="#">Gradacac</a> </li>
                                             <li><a href="#">Los Angeles</a> </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <!-- top footer ends -->
                                    <!-- bottom footer statrs -->
                                    <div class="row bottom-footer">
                                       <div class="container">
                                          <div class="row">
                                             <div class="col-xs-12 col-sm-3 payment-options color-gray">
                                                <h5>Payment Options</h5>
                                                <ul>
                                                   <li>
                                                      <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                                   </li>
                                                   <li>
                                                      <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                                   </li>
                                                   <li>
                                                      <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                                   </li>
                                                   <li>
                                                      <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                                   </li>
                                                   <li>
                                                      <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                                   </li>
                                                </ul>
                                             </div>
                                             <div class="col-xs-12 col-sm-4 address color-gray">
                                                <h5>Address</h5>
                                                <p>Concept design of oline food order and deliveye,planned as restaurant directory</p>
                                                <h5>Phone: <a href="tel:+080000012222">080 000012 222</a></h5>
                                             </div>
                                             <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                                <h5>Addition informations</h5>
                                                <p>Join the thousands of other restaurants who benefit from having their menus on TakeOff</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- bottom footer ends -->
                                 </div>
                              </footer>
                              <!-- end:Footer -->
                           </div>
                           <!-- end:page wrapper -->
                        </div>
                        <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
     ================================================== -->
     <script src="js/jquery.min.js"></script>
     <script src="js/tether.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/animsition.min.js"></script>
     <script src="js/bootstrap-slider.min.js"></script>
     <script src="js/jquery.isotope.min.js"></script>
     <script src="js/headroom.js"></script>
     <script src="js/foodpicky.min.js"></script>
  </body>
  </html>