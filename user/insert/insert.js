function add_cv() {
    // var college_code = $("#college_code").val().toUpperCase();
    var cv_name = $("#cv_name").val().toUpperCase();
    var cv_address = $("#cv_address").val().toUpperCase();
    var cv_pincode = $("#cv_pincode").val();
    var cv_district = $("#cv_district").val().toUpperCase();
    var cv_ph = $("#cv_ph").val();
    var cv_ed = $("#cv_ed").val().toUpperCase();
    var bday = $("#bday").val();
    var formfile = $("#formfile").val();
    var check = "";


    if (cv_name == "") {
        $("#cv_name_error").html("Please enter the id");
        check = "";
    } else {
        $("#cv_name_error").html("");
        check = "ok";

    }
    if (cv_address == "") {
        $("#cv_address_error").html("Please enter the address");
        check = "";
    } else {
        $("#cv_address_error").html("");
        check = "ok";

    }

    if (formfile == "") {
        $("#formfile_error").html("Please enter the file");
        check = "";
    } else {
        $("#formfile_error").html("");
        check = "ok";

    }


    if (cv_district == "") {
        $("#cv_district_error").html("Please enter a city");
        check = "";
    } else {
        $("#cv_district_error").html("");
        check = "ok";
    }
    if (cv_ed == "") {
        $("#cv_ed_error").html("Please enter the details");
        check = "";
    } else {
        $("#cv_ed_error").html("");
        check = "ok";
    }

    if (cv_pincode == "" || cv_pincode.length > 6 || cv_pincode.length < 6) {
        $("#cv_pincode_error").html("Please enter a pincode");
        check = "";
    } else {
        $("#cv_pincode_error").html("");
        check = "ok";
    }
    if (cv_ph == "" || cv_ph.length > 10 || cv_ph.length < 10) {
        $("#cv_ph_error").html("Please enter a phone number");
        check = "";
    } else {
        $("#cv_ph_error").html("");
        check = "ok";
    }
    if (bday == "") {
        $("#bday_error").html("Please enter the date of birth");
        check = "";
    } else {
        $("#bday_error").html("");
        check = "ok";
    }
    if (check == "ok") {

        $.post(
            "./insert/add_cv.php", {
                cv_name,
                cv_address,
                formfile,
                bday,
                cv_ed,
                cv_pincode,
                cv_district,
                cv_ph
            },
            function(data, status) {
                if (data == 111) {
                    $("#cv_name").val("");
                    $("#cv_address").val("");
                    $("#bday").val("");
                    $("#cv_pincode").val("");
                    $("#cv_district").val("");
                    $("#cv_ph").val("");
                    $("#cv_ed").val("");
                    $("#formfile").val("");


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