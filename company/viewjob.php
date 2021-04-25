<?php



if (!isset($_SESSION['company'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../logincompany.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];
    $get_com = "select * from company where email='$username'";
$result_com = mysqli_query($con, $get_com);
$row_com=mysqli_fetch_array($result_com);
$com_code=$row_com['sl_no'];

?>
<script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>

<script src="./view/view.js"></script>
<!-- <script src="./edit/edit.js"></script> -->
<script>viewjob('<?php echo $com_code; ?>');</script>
<section id="main-content">
      <section class="wrapper">
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                View Job
              </header>

             <div class="table-section"></div>
            </section>
          </div>
        </div>
        </section></section>
    <?php } ?>