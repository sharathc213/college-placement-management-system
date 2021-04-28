              
<?php
// include Database connection file 
include("../../db.php");


// $get_com = "select * from company where email='$email'";
// $result_com = mysqli_query($con, $get_com);
// $row_com=mysqli_fetch_array($result_com);
// $com_code=$row_com['sl_no'];


$get_usr="select * from user where status=1  order by sl_no ";




// Design initial table header 
$data = '  

 <table class="table table-striped table-advance table-hover" id="dataTables-example">
<thead>
  <tr>
    <th><i class="icon_profile"></i> sl no</th>
    <th><i class="icon_calendar"></i> Name</th>
 
    <th><i class="icon_calendar"></i> Qualification</th>

    
   
    <th><i class="icon_mail_alt"></i> View</th>
  
    
    
  </tr></thead><tbody>










';

  $i=0;
                        
                          
                            
                            $run_usr = mysqli_query($con,$get_usr);
      
                            while($row_usr=mysqli_fetch_array($run_usr)){


                              $name = $row_usr['name'];
                                
                       
                                
                                $sl_no = $row_usr['sl_no'];
                     
                                // $qname = $row_job['qualification'];
                             
                               
                                $i++;

                                $get_qua="select * from userdetails where userid=$sl_no ";
                                $run_qua = mysqli_query($con,$get_qua);
                                $row_qua=mysqli_fetch_array($run_qua);
                                $qua = $row_qua['qualification'];
        $data .= '
        <tr>
        <td>'.$i.'</td>
        <td>'.$name.'</td>
        <td>'.$qua.'</td>
      ';
      

       
        $data .= '    <td>
          <div class="btn-group">
            <a class="btn btn-primary" onclick="edditusr('.$sl_no.')" href="#">View</a>
           
         
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






