              
<?php
// include Database connection file 
include("../../db.php");

$com_code=$_POST['com_code'];
// $get_com = "select * from company where email='$email'";
// $result_com = mysqli_query($con, $get_com);
// $row_com=mysqli_fetch_array($result_com);
// $com_code=$row_com['sl_no'];


$get_job="select * from job   where companycode=$com_code order by sl_no";




// Design initial table header 
$data = '  

 <table class="table table-striped table-advance table-hover" id="dataTables-example">
<thead>
  <tr>
    <th><i class="icon_profile"></i> sl no</th>
    <th><i class="icon_calendar"></i> Job Code</th>
    <th><i class="icon_calendar"></i> Job Name</th>
    <th><i class="icon_calendar"></i> Min Qualification</th>
    <th><i class="icon_mail_alt"></i> Job Details</th>
    
    <th><i class="icon_mail_alt"></i> Status</th>
    <th><i class="icon_mail_alt"></i> Eddit/Delete</th>
  
    
    
  </tr></thead><tbody>










';

  $i=0;
                        
                          
                            
                            $run_job = mysqli_query($con,$get_job);
      
                            while($row_job=mysqli_fetch_array($run_job)){


                              $job_code = $row_job['jobcode'];
                                
                                $job_name = $row_job['jobname'];
                                
                                $job_detail = $row_job['jobdetails'];
                                
                                $sl_no = $row_job['sl_no'];
                                $status = $row_job['status'];
                                $qname = $row_job['qualification'];
                             
                               
                                $i++;
        $data .= '
        <tr>
        <td>'.$i.'</td>
        <td>'.$job_code.'</td>
        <td>'.$job_name.'</td>
        <td>'.$qname.'</td>
        <td>'.$job_detail.'</td>';
        if($status==1){
          $data .= '  <td>NOT VERIFIED</td>';
        }else if($status==2){
        $data .= '  <td>VERIFIED</td>';
        }else if($status==3){
          $data .= '  <td>RESUBMITED</td>';
          }
       
        $data .= '    <td>
          <div class="btn-group">
            <a class="btn btn-primary" onclick="edditjob('.$sl_no.','.$com_code.')" href="#">Eddit</a>
           
            <a class="btn btn-danger" onclick="deletejob('.$sl_no.','.$com_code.')" href="#">Delete</a>
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






