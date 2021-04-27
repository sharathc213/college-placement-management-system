<?php



if (!isset($_SESSION['company'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open(''../logincompany.php','_self'')</script>";
} else {
    $username = $_SESSION['username'];

?>
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="recent">
                        <center> <mark><h3>Job Information</h3></mark></center>
                    </div>
                    <div id="sendmessage">Job has been posted successfully</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                    <div class="form-group">
                            <input  style="text-transform:uppercase" type="text" name="job code" class="form-control" id="job_code" placeholder="Job Code" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="valid" style="color:red" id="job_code_error"></div>
                        </div>
                        <div class="form-group">
                            <input  style="text-transform:uppercase" type="text" name="job name" class="form-control" id="job_name" placeholder="Job Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="valid" style="color:red" id="job_name_error"></div>
                        </div>
                        <div class="form-group">
                            <select id="job_qua"  class="form-control" >
                            <option selected disabled>Please select a Min Qualification</option>
                            <?php

$get_qua = "select * from qualification ";
$run_qua = mysqli_query($con, $get_qua);

while ($row_qua = mysqli_fetch_array($run_qua)) {

    $qname = $row_qua['qname'];


    $data = '';
    $data .= '
<option value="' . $qname . '" >' . $qname . '</option>';
    echo $data;
}   ?> 
</select>
                            <div class="valid" style="color:red" id="job_qualification_error"></div>
                        </div>
                        <div  class="form-group">
                            <textarea   style="text-transform:uppercase" class="form-control" id="job_details" name="Job Details" rows="3" data-rule="required" data-msg="Please write the About Job" placeholder="Job Details"></textarea>
                            <div class="valid"  style="color:red" id="job_details_error" ></div>
                        </div>


                        <div class="text-center"><button type="button" onclick="post_job('<?php echo $username ?>');" class="btn btn-primary btn-lg">Add Job</button></div>
                    </form>
                </div>


            </div>
        </section>
    </section>
    <?php } ?>