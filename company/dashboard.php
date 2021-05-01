<?php



if (!isset($_SESSION['company'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../logincompany.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];

  
$get_com = "select * from company where email='$username'";
$result_com = mysqli_query($con, $get_com);
$row_com=mysqli_fetch_array($result_com);

$sl_no=$row_com['sl_no'];

    $jober="select * from job where companycode=$sl_no" ;
    $result_jober=mysqli_query($con,$jober);
    $jober_no=mysqli_num_rows( $result_jober);

    $q="select * from exam where comcode=$sl_no" ;
    $qn=mysqli_query($con,$q);
    $q_no=mysqli_num_rows( $qn);

    $j="select jobuser.jobid,job.jobname from job,jobuser where job.companycode=$sl_no and job.sl_no=jobuser.jobid and jobuser.verify=4" ;
    $ja=mysqli_query($con,$j);
    $ja_no=mysqli_num_rows( $ja);

    $r="select jobuser.jobid,job.jobname from job,jobuser where job.companycode=$sl_no and job.sl_no=jobuser.jobid" ;
    $ra=mysqli_query($con,$r);
    $ra_no=mysqli_num_rows( $ra);
?>
<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cloud-download"></i>
              <div class="count"><?php echo $jober_no; ?></div>
              <div class="title">Posts</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count"><?php echo $ja_no; ?></div>
              <div class="title">Job approved</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count"><?php echo $q_no; ?></div>
              <div class="title">Exam</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"><?php echo $ra_no; ?></div>
              <div class="title">Total Applications</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


      

      </section>
     
    </section>

    <?php } ?>