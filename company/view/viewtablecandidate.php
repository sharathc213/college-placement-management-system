              
<?php
// include Database connection file 
include("../../db.php");




$get_company= "select * from user  order by sl_no";




// Design initial table header 
$data = ' 
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>  <table class="table table-striped table-advance table-hover" id="dataTables-example">
<tbody>
  <tr>
    <th><i class="icon_profile"></i> sl no</th>
    <th><i class="icon_calendar"></i> Name</th>
    <th><i class="icon_mail_alt"></i> Email</th>
   
  
  </tr>










';

  $i = 0;
                        
                          
                            
                            $run_company = mysqli_query($con,$get_company);
      
                            while($row_company=mysqli_fetch_array($run_company)){
                                
                                $company_name = $row_company['name'];
                                
                                $company_email = $row_company['email'];
                                
                                $sl_no = $row_company['sl_no'];
                             
                                
                                $i++;
        $data .= '
        <tr>
        <td>'.$sl_no.'</td>
        <td>'.$company_name.'</td>
        <td>'.$company_email.'</td>
      
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






