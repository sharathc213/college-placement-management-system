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





  function updateusr(userid){
    // get values
   

   var name=$("#name").val().toUpperCase();
   var dob=$("#dob").val();
   var qua=$("#qua").val();
   var address=$("#address").val().toUpperCase();
   var district=$("#district").val().toUpperCase();
   var pincode=$("#pincode").val().toUpperCase();
   var phno=$("#number").val().toUpperCase();

   var cvname = $("#cv").val();

   var cv= $("#cv").prop("files")[0];
 // get values

//  var cv = $("#cv").prop("files")[0];
//  var cvn = $("#cv").val().toUpperCase();

 var fil=$("#fil").html();
 var form_data = new FormData();
//  form_data.append("cv", cv);
 form_data.append("sl_no", userid);





 var ext= cvname.split('.').pop().toLowerCase();
 let validate;


//  var ext= cv.split('.').pop().toLowerCase();
//  let validate;





 // console.log(com_name, email, com_address, com_pincode, com_district, com_ph);
 if (name == "") {
  $("#name_error").html("Please enter  name");
  check = "";
} else {
  $("#name_error").html("");
  form_data.append("name", name);
  check = "ok";

}


if (address == "") {
  $("#address_error").html("Please enter a  address");
  check = "";
} else {
  $("#address_error").html("");
  form_data.append("address", address);
  check = "ok";
}
if (district == "") {
  $("#district_error").html("Please enter a city");
  check = "";
} else {
  $("#district_error").html("");
  form_data.append("district", district);
  check = "ok";
}

if (qua == null) {
  $("#qualification_error").html("Please select your qualification");
  check = "";
} else {
  $("#qualification_error").html("");
  form_data.append("qua", qua);
  check = "ok";
}

if (dob == "") {
  $("#dob_error").html("Please select your dob");
  check = "";
} else {
  $("#dob_error").html("");
  form_data.append("dob", dob);
  check = "ok";
}


if (pincode == "" || pincode.length > 6 || pincode.length < 6) {
  $("#pincode_error").html("Please enter a pincode");
  check = "";
} else {
  $("#pincode_error").html("");
  form_data.append("pincode", pincode);
  check = "ok";
}






if (phno == "" || phno.length > 10 || phno.length < 10) {
  $("#number_error").html("Please enter a phone number");
  check = "";
} else {
  $("#number_error").html("");
  form_data.append("phno", phno);
  check = "ok";
}


if (fil == "") {
  $("#cv_error").html("Please Select a cv ");
   validate =1;
  
}else{
$("#cv_error").html("");
validate =0;
}
if(cvname!=""){ 
 if ($.inArray(ext, ["pdf"]) == -1) {
  $("#cv_error").html("Only pdf file is allowed");
  validate =1;
} else if(($("#cv")[0].files[0].size)>2000000){
  validate =1;
  $("#cv_error").html("file must lessthan 2MB");
} else{
  $("#cv_error").html("");
  form_data.append("cv", cv);
validate=0;
}
}



 if (name != "" &&
 address != ""&&
 district != ""&&
 qua != null &&
 dob != ""&&
 pincode != "" && pincode.length == 6  &&
 phno != "" && phno.length ==10 && validate==0
){ 

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
       $.ajax({
         url: './eddit/updatecv.php', 
         type: 'post',
         data: form_data,
         dataType: 'text',
         contentType: false,
         processData: false,
         success: function (data) {
           console.log(data);
           // close the popup
     //   readdata();
           //     readstati();

           // clear fields from the popup

           if (data == 111) {
  
            window.location.href = "index.php?profile";
             Swal.fire({
               position: "center",
               icon: "success",
               title: "UPDATED THIS CV",
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
       }
       );
     }
   });
 }
  
  
  }

  // function verifypdf(path){
 
  //   // window.open("../admin/demo.php?url="+path, "_blank");
  //   window.location.href = '../admin/cv/'+path;
  //  };
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



 
  
  
  