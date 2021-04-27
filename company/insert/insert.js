function post_job(email) {
    // var college_code = $("#college_code").val().toUpperCase();
    var job_name = $("#job_name").val().toUpperCase();
    var job_details = $("#job_details").val().toUpperCase();
    var job_code = $("#job_code").val().toUpperCase();
    var job_qua = $("#job_qua").val();
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
console.log(job_qua);
    if (job_qua == null) {
        $("#job_qualification_error").html("Please Select Min qualification");
        check = "";
    } else {
        $("#job_qualification_error").html("");
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
        job_code != ""&&
        job_qua != null
    ) {

        $.post(
            "./insert/add_job.php", {
                job_name,
                job_details,
                email,
                job_code,
                job_qua
            },
            function(data, status) {
                console.log(data);
                if (data == 111) {
                    $("#job_name").val("");
                    $("#job_details").val("");
                    $("#job_code").val("");
                    $("#job_qua").prop('selectedIndex',0);



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








function addtest(comcode) {
    // var college_code = $("#college_code").val().toUpperCase();

    var tname = $("#tname").val().toUpperCase();

    var q1 = $("#q1").val().toUpperCase();
    var a1 = $("#a1").val();
    var a11 = $("#a11").val().toUpperCase();
    var a12 = $("#a12").val().toUpperCase();
    var a13 = $("#a13").val().toUpperCase();
    var a14 = $("#a14").val().toUpperCase();

    var q2 = $("#q2").val().toUpperCase();
    var a2 = $("#a2").val();
    var a21 = $("#a21").val().toUpperCase();
    var a22 = $("#a22").val().toUpperCase();
    var a23 = $("#a23").val().toUpperCase()
    var a24 = $("#a24").val().toUpperCase();

    var q3 = $("#q3").val().toUpperCase();
    var a3 = $("#a3").val();
    var a31 = $("#a31").val().toUpperCase();
    var a32 = $("#a32").val().toUpperCase();
    var a33 = $("#a33").val().toUpperCase();
    var a34 = $("#a34").val().toUpperCase();

    var q4 = $("#q4").val().toUpperCase();
    var a4 = $("#a4").val();
    var a41 = $("#a41").val().toUpperCase();
    var a42 = $("#a42").val().toUpperCase();
    var a43 = $("#a43").val().toUpperCase();
    var a44 = $("#a44").val().toUpperCase();

    var q5 = $("#q5").val().toUpperCase();
    var a5 = $("#a5").val();
    var a51 = $("#a51").val().toUpperCase();
    var a52 = $("#a52").val().toUpperCase();
    var a53 = $("#a53").val().toUpperCase();
    var a54 = $("#a54").val().toUpperCase();
    var check = "";

    // console.log(com_name, email, com_address, com_pincode, com_district, com_ph);
    if (tname == "") {
        $("#tname_error").html("Please enter a Test name");
        check = "";
    } else {
        $("#tname_error").html("");
        check = "ok";
    }

    if (q1 == "") {
        $("#q1_error").html("Please Provide a Question");
        check = "";
    } else {
        $("#q1_error").html("");
        check = "ok";

    }

    if (q2 == "") {
        $("#q2_error").html("Please Provide a Question");
        check = "";
    } else {
        $("#q2_error").html("");
        check = "ok";

    }

    if (q3 == "") {
        $("#q3_error").html("Please Provide a Question");
        check = "";
    } else {
        $("#q3_error").html("");
        check = "ok";

    }

    if (q4 == "") {
        $("#q4_error").html("Please Provide a Question");
        check = "";
    } else {
        $("#q4_error").html("");
        check = "ok";

    }

    if (q5 == "") {
        $("#q5_error").html("Please Provide a Question");
        check = "";
    } else {
        $("#q5_error").html("");
        check = "ok";

    }



    if (a1 == null) {
        $("#a1_error").html("Please Select Answer");
        check = "";
    } else {
        $("#a1_error").html("");
        check = "ok";

    }

    if (a2 == null) {
        $("#a2_error").html("Please Select Answer");
        check = "";
    } else {
        $("#a2_error").html("");
        check = "ok";

    }

    if (a3 == null) {
        $("#a3_error").html("Please Select Answer");
        check = "";
    } else {
        $("#a3_error").html("");
        check = "ok";

    }

    if (a4 == null) {
        $("#a4_error").html("Please Select Answer");
        check = "";
    } else {
        $("#a4_error").html("");
        check = "ok";

    }

    if (a5 == null) {
        $("#a5_error").html("Please Select Answer");
        check = "";
    } else {
        $("#a5_error").html("");
        check = "ok";

    }

    if (a11 == "") {
        $("#a11_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a11_error").html("");
        check = "ok";

    }

    if (a12 == "") {
        $("#a12_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a12_error").html("");
        check = "ok";

    }

    if (a13 == "") {
        $("#a13_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a13_error").html("");
        check = "ok";

    }

    if (a14 == "") {
        $("#a14_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a14_error").html("");
        check = "ok";

    }




    if (a21 == "") {
        $("#a21_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a21_error").html("");
        check = "ok";

    }

    if (a22 == "") {
        $("#a22_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a22_error").html("");
        check = "ok";

    }

    if (a23 == "") {
        $("#a23_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a23_error").html("");
        check = "ok";

    }

    if (a24 == "") {
        $("#a24_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a24_error").html("");
        check = "ok";

    }


    if (a31 == "") {
        $("#a31_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a31_error").html("");
        check = "ok";

    }

    if (a32 == "") {
        $("#a32_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a32_error").html("");
        check = "ok";

    }

    if (a33 == "") {
        $("#a33_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a33_error").html("");
        check = "ok";

    }

    if (a34 == "") {
        $("#a34_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a34_error").html("");
        check = "ok";

    }


    if (a41 == "") {
        $("#a41_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a41_error").html("");
        check = "ok";

    }

    if (a42 == "") {
        $("#a42_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a42_error").html("");
        check = "ok";

    }

    if (a43 == "") {
        $("#a43_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a43_error").html("");
        check = "ok";

    }

    if (a44 == "") {
        $("#a44_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a44_error").html("");
        check = "ok";

    }




    if (a51 == "") {
        $("#a51_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a51_error").html("");
        check = "ok";

    }

    if (a52 == "") {
        $("#a52_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a52_error").html("");
        check = "ok";

    }

    if (a53 == "") {
        $("#a53_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a53_error").html("");
        check = "ok";

    }

    if (a54 == "") {
        $("#a54_error").html("Please Provide a Answer");
        check = "";
    } else {
        $("#a54_error").html("");
        check = "ok";

    }


    if (
        tname!="" &&
        q1 !="" &&
        a11 !="" &&
        a12 !="" &&
        a13 !="" &&
        a14 !="" &&
    
        q2 !="" &&
        a21 !="" &&
        a22 !="" &&
        a23 !="" &&
        a24 !="" &&
    
        q3 !="" &&
        a31 !="" &&
        a32 !="" &&
        a33 !="" &&
        a34 !="" &&
    
        q4 !="" &&
        a41 !="" &&
        a42 !="" &&
        a43 !="" &&
        a44 !="" &&
    
        q5 !="" &&
        a51 !="" &&
        a52 !="" &&
        a53 !="" &&
        a54 !="" &&


        a1!=null &&
        a2 !=null &&
      
        a3 !=null &&
        a4 !=null &&
        a5!=null
    ) {

        $.post(
            "./insert/addtest.php", {
                tname,
                q1 ,
                a11 ,
                a12 ,
                a13 ,
                a14 ,
            
                q2 ,
                a21 ,
                a22 ,
                a23 ,
                a24 ,
            
                q3 ,
                a31 ,
                a32 ,
                a33 ,
                a34 ,
            
                q4 ,
                a41 ,
                a42 ,
                a43 ,
                a44 ,
            
                q5 ,
                a51 ,
                a52 ,
                a53 ,
                a54 ,
                comcode,

                a1,
                a2 ,
              
                a3 ,
                a4 ,
                a5
            },
            function(data, status) {
                console.log(data);
                if (data == 111) {
            $("#q1").val("");
           
$("#a11").val("");
$("#a12").val("");
$("#a13").val("");
$("#a14").val("");
$("#q2").val("");

$("#a21").val("");
$("#a22").val("");
$("#a23").val("");
$("#a24").val("");
$("#q3").val("");

$("#a31").val("");
$("#a32").val("");
$("#a33").val("");
$("#a34").val("");
$("#q4").val("");

$("#a41").val("");
$("#a42").val("");
$("#a43").val("");
$("#a44").val("");
$("#q5").val("");

$("#a51").val("");
$("#a52").val("");
$("#a53").val("");
$("#a54").val("");


$("#a1").prop('selectedIndex',0);
$("#a2").prop('selectedIndex',0);
$("#a3").prop('selectedIndex',0);
$("#a4").prop('selectedIndex',0);
$("#a5").prop('selectedIndex',0);


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
