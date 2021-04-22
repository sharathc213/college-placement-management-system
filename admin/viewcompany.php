<?php



if (!isset($_SESSION['admin'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../loginadmin.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];

?>
<script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>

<script src="./view/view.js"></script>
<!-- <script src="./eddit/eddit.js"></script> -->
<script>viewcompany();</script>
<section id="main-content">
      <section class="wrapper">
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                View Company
              </header>

             <div class="table-section"></div>
            </section>
          </div>
        </div>
        </section></section>
    <?php } ?>