function add_company() {
    // var college_code = $("#college_code").val().toUpperCase();
    var com_name = $("#com_name").val().toUpperCase();
    var email = $("#com_email").val();
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
      
    } else {
        $("#com_number_error").html("");
    
    }




    if (

        com_name  != "" &&
        com_address != "" &&
        com_pincode != "" &&
        com_pincode.length == 6 &&
        email != "" &&
        com_ph.length == 10 &&
      com_ph != "" &&
     
      check == "ok"
    ) {

        $.post(
            "./insert/add_company.php", {
                com_name,
                email,
                com_address,
                com_pincode,
                com_district,
                com_ph
            },
            function(data, status) {
                if (data == 111) {
                    $("#com_name").val("");
                    $("#com_address").val("");
                    $("#com_email").val("");
                    $("#com_pincode").val("");
                    $("#com_district").val("");
                    $("#com_number").val("");


                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "NEW COMPANY IS ADDED",
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