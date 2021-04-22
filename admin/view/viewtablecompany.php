              
<?php
// include Database connection file 
include("../../db.php");




$get_company = "select * from company  order by sl_no";




// Design initial table header 
$data = '   <table class="table table-striped table-advance table-hover">
<tbody>
  <tr>
    <th><i class="icon_profile"></i> sl no</th>
    <th><i class="icon_calendar"></i> Company Name</th>
    <th><i class="icon_mail_alt"></i> Email</th>
    <th><i class="icon_pin_alt"></i> Address</th>
    <th><i class="icon_cogs"></i> District</th>
    <th><i class="icon_cogs"></i> Pincode</th>
    <th><i class="icon_mobile"></i> Mobile</th>
    
  </tr>










';

$i = 0;



$run_company = mysqli_query($con, $get_company);

while ($row_company = mysqli_fetch_array($run_company)) {

  $company_name = $row_company['companyname'];

  $company_email = $row_company['email'];

  $sl_no = $row_company['sl_no'];
  $address = $row_company['address'];
  $district = $row_company['district'];
  $pincode = $row_company['pincode'];
  $phno = $row_company['phno'];

  $i++;
  $data .= '
        <tr>
        <td>' . $sl_no . '</td>
        <td>' . $company_name . '</td>
        <td>' . $company_email . '</td>
        <td>' . $address . '</td>
        <td>' . $district . '</td>
        <td>' . $pincode . '</td>
        <td>' . $phno . '</td>
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






