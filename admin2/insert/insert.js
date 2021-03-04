function add_college() {
  var college_code = $("#college_code").val().toUpperCase();
  var college_name = $("#college_name").val().toUpperCase();
  var college_email = $("#college_email").val();

  if (college_code == "") {
    $("#college_code_error").html("Please enter a college code");
  } else {
    $("#college_code_error").html("");
  }
  if (college_name == "") {
    $("#college_name_error").html("Please enter a college name");
  } else {
    $("#college_name_error").html("");
  }

  if(college_email ==""){
    $("#college_email_error").html("**** !Please enter the E-mail  ****");
}
    else{
        
         var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(regex.test(college_email)) {
      var check = "ok"
    $("#college_email_error").html("");
  }else{
     $("#college_email_error").html("**** !Please Enter A Valid  E-mail  ****");
  }
        
       
    }




  if (
    college_code != "" &&
    college_name != "" &&
    college_email != "" &&
    check =="ok"
  ) {
    $.post(
      "./insert/add_college.php",
      {
        college_code,
        college_name,
        college_email,
      },
      function (data, status) {
        if (data == 111) {
          $("#college_code").val("");
          $("#college_name").val("");
          $("#college_email").val("");


          Swal.fire({
            position: "center",
            icon: "success",
            title: "NEW COLLEGE IS ADDED",
            showConfirmButton: true,
          });
        } else if (data == 110) {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Duplicate Data Is Fount!",
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
