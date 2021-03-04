              
<?php
// include Database connection file 
include("../../db.php");




$get_college="select * from college  order by sl_no desc";




// Design initial table header 
$data = '             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>sl_no</th>
        <th>College Name</th>
        <th>College Email</th>
        <th>Eddit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>';

  $i=0;
                        
                          
                            
                            $run_college = mysqli_query($con,$get_college);
      
                            while($row_college=mysqli_fetch_array($run_college)){
                                
                                $college_name = $row_college['college_name'];
                                
                                $college_email = $row_college['email'];
                                
                                $sl_no = $row_college['sl_no'];
                                
                                $i++;
        $data .= '
              <tr><!-- tr begin -->
                            <td>  '.$i.' </td>
                           
                            <td> '.$college_name.'</td>
                            
                            <td> '.$college_email.'</td>
                            
                            <td> 
                                     
                            <button class="btn-warning" onclick="edditcollege('.$sl_no.')">
                            
                               <i class="fa fa-pencil"></i> Eddit
                           
                            </button> 
                            
                       </td>
                       <td> 
                                     
                       <button class="btn-danger" onclick="deletecollege('.$sl_no.')">
                       
                          <i class="fa fa-trash-o"></i> Delete
                      
                       </button> 
                       
                  </td>
                            
                            
                           
                        </tr><!-- tr finish -->';
    
    }


$data .= '  </tbody>
</table>
<script>
$(document).ready(function() {
    $("#dataTables-example").DataTable({
            responsive: true
    });
});
</script>
         ';

echo $data;

?>






