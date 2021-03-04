<?php



if (!isset($_SESSION['admin'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open('../../index.php#login','_self')</script>";
} else {
    $username = $_SESSION['username'];

?>
<script src="./js/jquery.min.js"></script>

<script src="./view/view.js"></script>
<script src="./eddit/eddit.js"></script>

    <script>
       viewcollege();
    </script>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    View Colleges
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">

                    </div>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->




    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
   


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

<?php } ?>