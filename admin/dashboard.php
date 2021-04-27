
<?php



if (!isset($_SESSION['admin'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../loginadmin.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];

    $company="select * from company" ;
    $result_com=mysqli_query($con,$company);
    $com_no=mysqli_num_rows( $result_com);

    $usr="select * from user" ;
    $result_usr=mysqli_query($con,$usr);
    $usr_no=mysqli_num_rows( $result_usr);

    $job="select * from job" ;
    $result_job=mysqli_query($con,$job);
    $job_no=mysqli_num_rows( $result_job);

    $nusr="select * from user where status=1" ;
    $result_nusr=mysqli_query($con,$nusr);
    $nousr_no=mysqli_num_rows( $result_nusr);

?><section id="main-content">
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
              <div class="count"><?php echo $nousr_no; ?></div>
              <div class="title">Verified Users</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><?php echo $com_no; ?></div>
              <div class="title">Total Companies</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-thumbs-o-up"></i>
              <div class="count"><?php echo $usr_no; ?></div>
              <div class="title">Total Job Applicants</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"><?php echo $job_no; ?></div>
              <div class="title">Total Jobs</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->







        <!-- statics end -->




       
              
              </div>


            </div>
          </div>



         

        </div>
        <!-- project team & activity end -->

      </section>
    </section>
    <?php } ?>