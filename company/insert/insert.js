function post_job(email) {
    // var college_code = $("#college_code").val().toUpperCase();
    var job_name = $("#job_name").val().toUpperCase();
    var job_details = $("#job_details").val().toUpperCase();
    var job_code = $("#job_code").val().toUpperCase();
    var check = "";

    // console.log(com_name, email, com_address, com_pincode, com_district, com_ph);
    if (job_name == "") {
        $("#job_name_error").html("Please enter a job name");
        check = "";
    } else {
        $("#job_name_error").html("");
        check = "ok";

    }
    if (job_code == "") {
        $("#job_code_error").html("Please enter a job Code");
        check = "";
    } else {
        $("#job_code_error").html("");
        check = "ok";

    }



    if (job_details == "") {
        $("#job_details_error").html("Please enter a job details");
        check = "";
    } else {
        $("#job_details_error").html("");
        check = "ok";
    }



    if (
        job_name != ""&&
        check == "ok" &&
        job_details != ""&&
        email !="" &&
        job_code != ""
    ) {

        $.post(
            "./insert/add_job.php", {
                job_name,
                job_details,
                email,
                job_code
            },
            function(data, status) {
                console.log(data);
                if (data == 111) {
                    $("#job_name").val("");
                    $("#job_details").val("");
                    $("#job_code").val("");



                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "NEW JOb IS POSTED",
                        showConfirmButton: true,
                    });
                } else if (data == 110) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Duplicate Data Is FounD!",
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                    });
                }
            }
        );
    }
}