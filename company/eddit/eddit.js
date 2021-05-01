function edditjob(sl_no,com_code) {
    // Add User ID to the hidden field for furture usage
  
    $.post(
      "eddit/edditjob.php",
      {
     sl_no,
     com_code
      },
      function (data, status) {
        // PARSE json data
     
        $(".panel-heading").html("Eddit Job");
        $(".table-section").html(data);
      }
    );
    // Open modal popup
  }
  
  
  
  function updatejob(sl_no,com_code) {
    // get values
    var job_name = $("#job_name").val().toUpperCase();
    var job_details = $("#job_details").val().toUpperCase();
    // var job_code = $("#job_code").val().toUpperCase();
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
      
       
        job_qua != null
    ) {

      Swal.fire({
        title: "Are you sure Want to update?",
  
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "red",
        confirmButtonText: "Yes, Update it!",
      }).then((result) => {
        if (result.value) {
          // Add record
          $.post(
            "eddit/updatejob.php",
            {
           
              sl_no,
              job_name,
             job_details,
             job_qua
            },
            function (data, status) {
              // close the popup
  console.log(data);
            
  
              if (data == 111) {

  
             viewjob(com_code);
  
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "UPDATED THIS JOB",
                  showConfirmButton: true,
                  timer: 3000,
                });
              } else if (data == 110) {
                Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Duplicate data is Present!",
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
      });
    }
  
    //  else{
    //     alert("Please Fill All the Fields");
  
    //  }
  }
  
  function changepass(username){
    // get values
   

   var cupass=$("#cupass").val();
   var pass=$("#pass").val();
   var cpass=$("#cpass").val();


    if (cupass == "") {
      $("#cupass_error").html("Please Enter Your Current Password");
      check = "";
  } else {
      $("#cupass_error").html("");
      check = "ok";
  }

  if (pass == "") {
    $("#pass_error").html("Please  Enter Your New Password");
    check = "";
} else {
    $("#pass_error").html("");
    check = "ok";
}

if (cpass == "") {
  $("#cpass_error").html("Please re Enter Your New Password");
  check = "";
} else {
  $("#cpass_error").html("");
  if (pass != cpass) {
    $("#cpass_error").html("Enter Password is not maching");
    check = "";
  } else {
    $("#cpass_error").html("");
    check = "ok";
  }
  check = "ok";
}



   
     


  
    if (pass == cpass &&
      cpass != "" &&
      pass != "" &&
      cupass != ""
    ) {
      Swal.fire({
        title: "Are you sure Want to Change Your Password?",
  
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "red",
        confirmButtonText: "Yes, Update it!",
      }).then((result) => {
        if (result.value) {
          // Add record
          $.post(
            "eddit/changepass.php",
            {
               
              cpass ,
              pass ,
              cupass ,
              username
            },
            function (data, status) {
              // close the popup
  console.log(data);
              // read records again
              //   readRecords();
              //   readdata();
              //     readstati();
  
              // clear fields from the popup
  
              if (data == 111) {


               $("#cupass").val("");
               $("#pass").val("");
               $("#cpass").val("");

  
              //  window.open("index.php?dashboard");
  
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "UPDATED YOUR PASSWORD",
                  showConfirmButton: true,
                  timer: 3000,
                });
              } else if (data == 110) {
                Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Current password is wrong!",
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
      });
    }
  
  }






  function eddittest(sl_no,comcode) {
    // Add User ID to the hidden field for furture usage
  
    $.post(
      "eddit/eddittest.php",
      {
     sl_no,
     comcode
      },
      function (data, status) {
        // PARSE json data
     
        $(".panel-heading").html("Eddit Test");
        $(".table-section").html(data);
      }
    );
    // Open modal popup
  }
  
  


  function updatetest(sl_no,comcode) {
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

      Swal.fire({
        title: "Are you sure Want to update?",
  
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "red",
        confirmButtonText: "Yes, Update it!",
      }).then((result) => {
        if (result.value) {
          // Add record
          $.post(
            "eddit/updatetest.php",
            {
              sl_no,
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
            function (data, status) {
              // close the popup
  console.log(data);
            
  
              if (data == 111) {

  
             viewtest(comcode);
  
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "UPDATED THIS JOB",
                  showConfirmButton: true,
                  timer: 3000,
                });
              } else if (data == 110) {
                Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Duplicate data is Present!",
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
      });
    }
  
    //  else{
    //     alert("Please Fill All the Fields");
  
    //  }
  }






  function updatecom(sl_no) {
    // get values
    var com_name = $("#com_name").val().toUpperCase();

    var com_address = $("#com_address").val().toUpperCase();
    var com_pincode = $("#com_pincode").val();
    var com_district = $("#com_district").val().toUpperCase();
    var com_ph = $("#com_number").val();

    
    var check = "";

    // console.log(com_name, email, com_address, com_pincode, com_district, com_ph);
    if (com_name == "") {
        $("#com_name_error").html("Please enter a company name");
        check = "";
    } else {
        $("#com_name_error").html("");
        check = "ok";

    }


    if (com_address == "") {
        $("#com_address_error").html("Please enter a company address");
        check = "";
    } else {
        $("#com_address_error").html("");
        check = "ok";
    }
    if (com_district == "") {
        $("#com_district_error").html("Please enter a city");
        check = "";
    } else {
        $("#com_district_error").html("");
        check = "ok";
    }


    if (com_pincode == "" || com_pincode.length > 6 || com_pincode.length < 6) {
        $("#com_pincode_error").html("Please enter a pincode");
        check = "";
    } else {
        $("#com_pincode_error").html("");
        check = "ok";
    }





    
    if (com_ph == "" || com_ph.length > 10 || com_ph.length < 10) {
        $("#com_number_error").html("Please enter a phone number");
        check = "";
    } else {
        $("#com_number_error").html("");
        check = "ok";
    }
  
    if (
        com_name  != "" &&
        com_address != "" &&
        com_pincode != "" &&
        com_pincode.length == 6 &&
  
        com_ph.length == 10 &&
      com_ph != "" &&
    
     
      check == "ok"
    ) {
      Swal.fire({
        title: "Are you sure Want to update?",
  
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "red",
        confirmButtonText: "Yes, Update it!",
      }).then((result) => {
        if (result.value) {
          // Add record
          $.post(
            "eddit/updatecom.php",
            {
                com_name,
              sl_no,
                com_address,
                com_pincode,
                com_district,
                com_ph,
           
            },
            function (data, status) {
              // close the popup
  console.log(data);
              // read records again
              //   readRecords();
              //   readdata();
              //     readstati();
  
              // clear fields from the popup
  
              if (data == 111) {

  
           
  
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "UPDATED THIS COMPANY",
                  showConfirmButton: true,
                  timer: 3000,
                });
              } else if (data == 110) {
                Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Duplicate data is Present!",
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
      });
    }
  
    //  else{
    //     alert("Please Fill All the Fields");
  
    //  }
  }
  



  function edditusr(sl_no) {
    // Add User ID to the hidden field for furture usage
  
    $.post(
      "eddit/edditusr.php",
      {
     sl_no,
  
      },
      function (data, status) {
        // PARSE json data
     
        $(".panel-heading").html("Profile");
        $(".table-section").html(data);
      }
    );
    // Open modal popup
  }
  


  function edditapplication(sl_no) {
    // Add User ID to the hidden field for furture usage
  
    $.post(
      "eddit/edditapplication.php",
      {
     sl_no,
  
      },
      function (data, status) {
        // PARSE json data
     
        $(".panel-heading").html("");
        $(".table-section").html(data);
      }
    );
    // Open modal popup
  }






  function updateapplication(userid,jusl,jobcode) {
    // get values
    var option = $("#options").val();
   
    var test=111;
    var check="ok";
    if(option==2){
      test=$("#test").val();
      if(test==null || test==111){
        $("#test_error").html("Please Select a test name");
        check="kjgasdgk";
      }else{
        $("#test_error").html("");
        check="ok";
      }
      
    }else{
      test="not";
    }
   
   console.log(test);
    if (
         check=="ok"&&
         option!=null &&
         (test=="not" ||
         test!=111)

    ) {
      Swal.fire({
        title: "Are you sure Want to update?",
  
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "red",
        confirmButtonText: "Yes, Update it!",
      }).then((result) => {
        if (result.value) {
          // Add record
          $.post(
            "eddit/updateapplication.php",
            {
               userid,
               option,
               test,
               jusl,
               jobcode
           
            },
            function (data, status) {
            
  console.log(data);
            
  
              if (data == 111) {

  
               
  
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "UPDATED",
                  showConfirmButton: true,
                  timer: 3000,
                });
              } else if (data == 110) {
                Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Already assigned this test!",
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
      });
    }
  
 
  }
  
  function verifypdf(cv) {
    // Add User ID to the hidden field for furture usage
  
  //   $.post(
  //     "eddit/viewpdf.php",
  //     {
  //  cv
  //     },
  //     function (data, status) {
  //       // PARSE json data
     var url="../admin/cv/pdfviwer.php?cv="+cv
    
        window.open(url, "_blank");
      // }
    // );
    // Open modal popup
  }
  