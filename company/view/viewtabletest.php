              
<?php
// include Database connection file 
include("../../db.php");

$comcode=$_POST['comcode'];
// $get_com = "select * from company where email='$email'";
// $result_com = mysqli_query($con, $get_com);
// $row_com=mysqli_fetch_array($result_com);
// $com_code=$row_com['sl_no'];


$get_test="select * from exam   where comcode=$comcode order by sl_no";




// Design initial table header 
$data = '  

 <table class="table table-striped table-advance table-hover" id="dataTables-example">
<thead>
  <tr>
    <th><i class="icon_profile"></i> sl no</th>
    <th><i class="icon_calendar"></i> Test Name</th>

    <th><i class="icon_mail_alt"></i> Eddit/Delete</th>
  
    
    
  </tr></thead><tbody>










';

  $i=0;
                        
                          
                            
                            $run_test = mysqli_query($con,$get_test);
      
                            while($row_test=mysqli_fetch_array($run_test)){


                              $testname = $row_test['tname'];
                   
                                
                                $sl_no = $row_test['sl_no'];
                       
                               
                                $i++;
        $data .= '
        <tr>
        <td>'.$i.'</td>
        <td>'.$testname.'</td>
';

       
        $data .= '    <td>
          <div class="btn-group">
            <a class="btn btn-primary" onclick="eddittest('.$sl_no.','.$comcode.')" href="#">Eddit</a>
           
            <a class="btn btn-danger" onclick="deletetest('.$sl_no.','.$comcode.')" href="#">Delete</a>
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






