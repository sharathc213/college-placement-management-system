function edditcom(sl_no) {
    // Add User ID to the hidden field for furture usage
  
    $.post(
      "eddit/edditcom.php",
      {
        sl_no: sl_no,
      },
      function (data, status) {
        // PARSE json data
     
        $(".panel-heading").html("Eddit company");
        $(".table-section").html(data);
      }
    );
    // Open modal popup
  }
  
  
  
  function updatecom(sl_no) {
    // get values
    var com_name = $("#com_name").val().toUpperCase();
    var email = $("#com_email").val();
    var com_address = $("#com_address").val().toUpperCase();
    var com_pincode = $("#com_pincode").val();
    var com_district = $("#com_district").val().toUpperCase();
    var com_ph = $("#com_number").val();
    var com_password = $("#com_password").val();
    
    var check = "";

    // console.log(com_name, email, com_address, com_pincode, com_district, com_ph);
    if (com_name == "") {
        $("#com_name_error").html("Please enter a company name");
        check = "";
    } else {
        $("#com_name_error").html("");
        check = "ok";

    }
    if (com_password == "") {
        $("#com_password_error").html("Please enter a login password");
        check = "";
    } else {
        $("#com_password_error").html("");
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


    if (email == "") {
        $("#com_email_error").html("**** !Please enter the E-mail  ****");
    } else {

        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (regex.test(email)) {
            check = "ok";
            $("#com_email_error").html("");
        } else {
            $("#com_email_error").html("**** !Please Enter A Valid  E-mail  ****");
            check = "";
        }


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
        email != "" &&
        com_ph.length == 10 &&
      com_ph != "" &&
      com_password!="" &&
     
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
                com_password
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

  
                viewcompany(sl_no);
  
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
  

  function eddituser(sl_no,name,email,status) {
    // Add User ID to the hidden field for furture usage
  
    $.post(
      "eddit/eddituser.php",
      {
        sl_no,
        name,
        email,
        status
      },
      function (data, status) {
        // PARSE json data
     
        $(".panel-heading").html(" User Details");
        $(".table-section").html(data);
      }
    );
    // Open modal popup
  }
  
 function verifyusr(sl_no,value){
    // get values
   

   

   
console.log("hai");

   
     


  
    if (
value!=""
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
            "eddit/verifyusr.php",
            {
               
              sl_no,
                value
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

  
                viewcandidate();
  
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
  
  }


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
     
        $(".panel-heading").html("Verify Job");
        $(".table-section").html(data);
      }
    );
    // Open modal popup
  }
  
  function verifyjob(sl_no,value){
    // get values
   

   

   


   
     


  
    if (
value!=""
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
            "eddit/verifyjob.php",
            {
               
              sl_no,
                value
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

  
                viewjobs();
  
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
  
  }
  // function verifypdf(path){
  //   console.log("hai");
  //   window.open("demo.php?url="+path, "_blank");
  //  };



  
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