              
<?php
// include Database connection file 
include("../../db.php");




$get_job="select * from job  order by sl_no ";




// Design initial table header 
$data = '   <table class="table table-striped table-advance table-hover">
<tbody>
  <tr>
    <th><i class="icon_profile"></i> sl no</th>
    <th><i class="icon_calendar"></i> Job Name</th>
    <th><i class="icon_mail_alt"></i> Job Details</th>
    <th><i class="icon_pin_alt"></i> Company Code</th>
    
    
  </tr>










';

  $i=0;
                        
                          
                            
                            $run_job = mysqli_query($con,$get_job);
      
                            while($row_job=mysqli_fetch_array($run_job)){
                                
                                $job_name = $row_job['jobname'];
                                
                                $job_detail = $row_job['jobdetails'];
                                
                                $sl_no = $row_job['sl_no'];
                                $company_code = $row_job['companycode'];
                               
                                $i++;
        $data .= '
        <tr>
        <td>'.$sl_no.'</td>
        <td>'.$job_name.'</td>
        <td>'.$job_detail.'</td>
        <td>'.$company_code.'</td>
       
        <td>
          <div class="btn-group">
            <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
           
            <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
          </div>
        </td>
      </tr>';
    
    }


$data .= ' </tbody>
</table>

         ';

echo $data;

?>






