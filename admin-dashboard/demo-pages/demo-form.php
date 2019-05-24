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
   $Category=$_POST['cat'];




$querry="INSERT INTO category(c_name) VALUES('$Category')";

mysqli_query($conn,$querry);

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
                <h3 class="box-title">Add Categories</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="demo-form.php" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category" name="cat">
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
