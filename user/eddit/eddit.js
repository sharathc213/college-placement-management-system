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


