
<?php



if (!isset($_SESSION['user'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../loginuser.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];

      
$get_com = "select * from user where email='$username'";
$result_com = mysqli_query($con, $get_com);
$row_com=mysqli_fetch_array($result_com);

$sl_no=$row_com['sl_no'];

    $jober="select * from job" ;
    $result_jober=mysqli_query($con,$jober);
    $jober_no=mysqli_num_rows( $result_jober);

    $conf="select * from jobuser where userid=$sl_no and verify=4" ;
    $result_conf=mysqli_query($con,$conf);
    $confno=mysqli_num_rows( $result_conf);

    $t="select * from jobuser where userid=$sl_no and verify=5 or verify=3 or verify=4" ;
    $result_t=mysqli_query($con,$t);
    $tno=mysqli_num_rows( $result_t);

    $a="select * from jobuser where userid=$sl_no" ;
    $result_a=mysqli_query($con,$a);
    $ano=mysqli_num_rows( $result_a);

?><section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count"><?php echo $jober_no; ?></div>
              <div class="title">Total Jobs Avilable</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"><?php echo $ano; ?></div>
              <div class="title">Job Applayed</div>
            </div>
            <!--/.info-box-->
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><?php echo $tno; ?></div>
              <div class="title">Total Exam Attended</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count"><?php echo $confno; ?></div>
              <div class="title">Job Conform</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

     
          <!--/.col-->

        </div>
        <!--/.row-->


    </section>
    <?php } ?>