<!DOCTYPE html>
<?php

include("..\..\connection.php");
session_start();

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>

  <!-- REQUIRED CSS -->
  <?php include '../link-css.php'; ?>
  <!-- // REQUIRED CSS -->

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
          Restaurants List
          <small>Details</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <div class="row">
          <div class="col-xs-10 col-md-offset-1">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Data table of added Restaurants</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- <div class="table-responsive"> -->
                <table id="example" class="table table-bordered table-striped dt-responsive" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Restaurant name</th>
                      <th>Restaurant email</th>
                      <th>Phone No.</th>
                      <th>Open Hours</th>
                      <th>Close Hours</th>
                      <th>Place</th>
                      <th>Open Days</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $phpget = mysqli_query($conn,"select r_name,r_email,r_ph,r_opt,r_clt,r_place,days from restaurant");
                        while($row = mysqli_fetch_array($phpget))
                        {
                          $r_name = $row['r_name'];
                          $r_email = $row['r_email'];
                          $r_ph = $row['r_ph'];
                          $r_opt = $row['r_opt'];
                          $r_clt = $row['r_clt'];
                          $r_place = $row['r_place'];
                          $days = $row['days'];
                          ?>

                          <tr>
                            <td><?php echo $r_name; ?></td>
                            <td><?php echo $r_email; ?></td>
                            <td><?php echo $r_ph; ?></td>
                            <td><?php echo $r_opt; ?></td>
                            <td><?php echo $r_clt; ?></td>
                            <td><?php echo $r_place; ?></td>
                            <td><?php echo $days; ?></td>
                          </tr>
                          <?php }?>
                        </tbody>
              
                  </table>
                  <!-- </div> -->
                  <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
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
