              
<?php
// include Database connection file 
include("../../db.php");




$get_company= "select * from user  order by sl_no";




// Design initial table header 
$data = '   <table class="table table-striped table-advance table-hover">
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

         ';

echo $data;

?>






