<?php



if (!isset($_SESSION['user'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../loginuser.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];

    $get_usr = "select * from user where email='$username'";
    $result_usr = mysqli_query($con, $get_usr);
    $row_usr=mysqli_fetch_array($result_usr);
    $sl_no=$row_usr['sl_no'];

?>
<script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>

<script src="./view/view.js"></script>
<script src="./eddit/eddit.js"></script>
<script>viewjobs(<?php echo $sl_no; ?>);</script>
<section id="main-content">
      <section class="wrapper">
<div class="row">
          <div class="col-lg-12">
            <section class="panel">

              <header class="panel-heading">
                View Jobs
              </header>
     <div class="form-group">
                <input type="text" class="form-control" id="search" onkeyup="viewjobs(<?php echo $sl_no; ?>);" placeholder="company name/job name/qualification" />
               
              </div>
             <div class="table-section"></div>
            </section>
          </div>
        </div>
        </section></section>
    <?php } ?>