              
<?php
// include Database connection file 
include("../../db.php");

$com_code=$_POST['comcode'];
// $get_com = "select * from company where email='$email'";
// $result_com = mysqli_query($con, $get_com);
// $row_com=mysqli_fetch_array($result_com);
// $com_code=$row_com['sl_no'];


$get_usr="select jobuser.jobid,jobuser.verify,jobuser.sl_no,job.jobcode,job.jobname,user.name,userdetails.qualification from jobuser,job,user,userdetails where job.companycode=$com_code and jobuser.jobid=job.sl_no and  userdetails.userid=jobuser.userid and user.sl_no=jobuser.userid order by jobuser.sl_no desc  ";




// Design initial table header 
$data = '  

 <table class="table table-striped table-advance table-hover" id="dataTables-example">
<thead>
  <tr>
    <th><i class="icon_profile"></i> sl no</th>
    <th><i class="icon_calendar"></i> Job Code</th>
    <th><i class="icon_calendar"></i> Job Name</th>
    <th><i class="icon_calendar"></i>Applicant Name</th>
 
    <th><i class="icon_calendar"></i> Qualification</th>
    <th><i class="icon_calendar"></i> Status</th>
    
   
    <th><i class="icon_mail_alt"></i> View</th>
  
    
    
  </tr></thead><tbody>










';

  $i=0;
                        
                          
                            
                            $run_usr = mysqli_query($con,$get_usr);
      
                            while($row_usr=mysqli_fetch_array($run_usr)){


                              $jobid = $row_usr['jobid'];
                              $jobcode = $row_usr['jobcode'];
                              $jobname = $row_usr['jobname'];
                              $qua = $row_usr['qualification'];
                              $name = $row_usr['name'];
                              $status = $row_usr['verify'];
                                
                       
                                
                                $sl_no = $row_usr['sl_no'];
                     
                                // $qname = $row_job['qualification'];
                             
                               
                                $i++;

                           
        $data .= '
        <tr>
        <td>'.$i.'</td>
        <td>'.$jobcode.'</td>
        <td>'.$jobname.'</td>
        <td>'.$name.'</td>
        <td>'.$qua.'</td>
        <td>'.$status.'</td>
      ';
      

       
        $data .= '    <td>
          <div class="btn-group">
            <a class="btn btn-primary" onclick="edditapplication('.$sl_no.')" href="#">View</a>
           
         
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






