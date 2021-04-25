              
<?php
// include Database connection file 
include("../../db.php");




$get_can= "select * from user  order by sl_no";




// Design initial table header 
$data = '   <table class="table table-striped table-advance table-hover" id="dataTables-example">
<thead>
  <tr>
    <th><i class="icon_profile"></i> sl no</th>
    <th><i class="icon_calendar"></i> Name</th>
    <th><i class="icon_mail_alt"></i> Email</th>
    <th><i class="icon_mail_alt"></i> Status</th>
    <th> View</th>
   
  
  </tr>


</thead><tbody>







';

  $i = 0;
                        
                          
                            
                            $run_can = mysqli_query($con,$get_can);
      
                            while($row_can=mysqli_fetch_array($run_can)){
                                
                                $can_name = $row_can['name'];
                                
                                $can_email = $row_can['email'];
                                
                                $sl_no = $row_can['sl_no'];
                                $status = $row_can['status'];
                             
                                
                                $i++;
        $data .= '
        <tr>
        <td>'.$i.'</td>
        <td>'.$can_name.'</td>
        <td>'.$can_email.'</td>';
        if($status==2){
          $data .= '   <td>NOT VERIFIED</td>';
        }else if($status==1){
          $data .= '   <td>VERIFIED</td>';
        }

       
      
      $data .= '     <td>
          <div class="btn-group">
            <a class="btn btn-primary" onclick="eddituser('.$sl_no.',`'.$can_name.'`,`'.$can_email.'`,'.$status.');" href="#"><i class="icon_plus_alt2"></i></a>
           
        
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






