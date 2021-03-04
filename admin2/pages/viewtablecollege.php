              
<?php
// include Database connection file 
include("../../db.php");
if( isset($_POST['quary']) ){



$get_stock=$_POST['quary'];




// Design initial table header 
$data = '              <table class="table table-hover table-striped table-bordered"><!-- table table-hover table-striped table-bordered begin -->
                    
                    <thead><!-- thead begin -->
                      
                        <tr><!-- th begin -->
                       
                            <th> Sl no: </th>
                            <th> Product: </th>
                            <th> TON: </th>
                            <th> CFT: </th>
                        
                        </tr><!-- th finish -->
                        
                    </thead><!-- thead finish -->
                    
                    <tbody><!-- tbody begin -->';

  $i=0;
                        
                          
                            
                            $run_stock = mysqli_query($con,$get_stock);
      
                            while($row_stock=mysqli_fetch_array($run_stock)){
                                
                                $TON = $row_stock['TON'];
                                
                                $product_name = $row_stock['product_name'];
                                
                                $CFT = $row_stock['CFT'];
                                
                                $i++;
        $data .= '
              <tr><!-- tr begin -->
                            <td>  '.$i.' </td>
                           
                            <td> '.$product_name.'</td>
                            
                            <td> '.$TON.'</td>
                            
                            <td> '.$CFT.'</td>
                            
                           
                        </tr><!-- tr finish -->';
    
    }


$data .= '</tbody><!-- tbody finish -->
                    
                </table><!-- table table-striped table-bordered table-hover finish -->
         ';

echo $data;
}
?>






