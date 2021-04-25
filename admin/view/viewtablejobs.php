              
<?php
// include Database connection file 
include("../../db.php");




$get_job = "select * from job order by status";




// Design initial table header 
$data = '   <table class="table table-striped table-advance table-hover" id="dataTables-example">
<thead>
  <tr>
    <th><i class="icon_profile"></i> sl no</th>
    <th><i class="icon_calendar"></i> Company Name</th>
    <th><i class="icon_calendar"></i> Job Code</th>
    <th><i class="icon_mail_alt"></i> Job Name</th>
    <th><i class="icon_pin_alt"></i> Status</th>

    <th> Info</th>
    
  </tr></thead><tbody>










';

$i = 0;



$run_job = mysqli_query($con, $get_job);

while ($row_job = mysqli_fetch_array($run_job)) {

  $job_name = $row_job['jobname'];
  $job_code = $row_job['jobcode'];
  $sl_no = $row_job['sl_no'];
  $com_code = $row_job['companycode'];
  $status = $row_job['status'];


  $get_com = "select * from company where sl_no=$com_code";
  $run_com = mysqli_query($con, $get_com);
  $row_com = mysqli_fetch_array($run_com);
  $com_name = $row_com['companyname'];

  $i++;
  $data .= '
        <tr>
        <td>' . $i . '</td>
        <td>' . $com_name . '</td>
        <td>' . $job_code . '</td>
        <td>' . $job_name . '</td>';
        if($status==1){
            $data .= '   <td>NOT VERIFIED</td>';
          }else if($status==2){
            $data .= '   <td>VERIFIED</td>';
          }

          $data .= '      <td>
          <div class="btn-group">
            <a class="btn btn-primary" onclick="edditjob('.$sl_no.','.$com_code.')" href="#">Info</a>
           
         
          </div>
        </td>
      </tr>';
}


$data .= ' </tbody>
</table>
<script>
$(document).ready( function () {
  $("#dataTables-example").DataTable();
} );
</script>

         ';

echo $data;

?>






