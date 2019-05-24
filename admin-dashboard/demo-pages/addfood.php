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

$rest=$_POST['rest'];
$category=$_POST['category'];
$food=$_POST['food'];
$price=$_POST['price'];


$query="INSERT INTO food(restaurant_name,cat_id,food_name,price) VALUES('$rest','$category','$food','$price')";
   mysqli_query($conn,$query);


}


?>


<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>

  <!-- REQUIRED CSS -->
  <?php include '../link-css.php'; ?>
  <!-- // REQUIRED CSS -->

  <style media="screen">
  /*#btnSubmit:hover{
  background: #f5b120;
  color: white;
  }*/
  </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- NAVBAR -->
    <?php include '../navbar/navbar.php'; ?>
    <!-- // NAVBAR -->

    <!-- sidebar -->
    <?php include '../sidebar/sidebar.php'; ?>
    <!-- // sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Page Header
          <small>Optional description</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="row">
          <!-- left column -->
          <div class="col-md-7 col-md-offset-2">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Add Food</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="addfood.php" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ADD FOOD</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter FOOD NAME" name="food"><br>
               <b> Price</b>       <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter FOOD price" name="price">
                  </div>

                  <div class="box-body">
                    <div class="form-group">

                 <b> Resturant</b>      <select name="rest">
                  <option>Select your Restaurant</option>
  
 <?php


                            include "connection.php";

                            $query=mysqli_query($conn,"SELECT *FROM restaurant")  ;
                            while ($row=mysqli_fetch_array($query)) 
                            {
                                                              
echo "<option value='".$row['r_name']."'>".$row['r_name']."</option>";    }
?>




</select>
</div>



                  </div>




<div class="box-body">
                  <div class="form-group">





                   
                 <b> Category</b>  <select name="category">
                  <option>select your category</option>
  <?php


                            include "connection.php";

                            $query=mysqli_query($conn,"SELECT *FROM category")  ;
                            while ($row=mysqli_fetch_array($query)) 
                            {
                                                              
echo "<option value='".$row['sl']."'>".$row['c_name']."</option>";    }
?>
                                              



                         
</select>
</div>
</div>



                 
                  
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include '../footer/footer.php'; ?>

  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->
  <?php include '../link-js.php'; ?>
  <!-- // REQUIRED JS SCRIPTS -->

</body>
</html>
