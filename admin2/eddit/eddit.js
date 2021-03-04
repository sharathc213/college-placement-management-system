function edditcollege(sl_no) {
  // Add User ID to the hidden field for furture usage

  $.post(
    "eddit/edditcollege.php",
    {
      sl_no: sl_no,
    },
    function (data, status) {
      // PARSE json data
      $(".hedding_seller").html("Dashboard / Eddit Sellers");
      $(".panel-heading").html("Eddit college");
      $(".panel-body").html(data);
    }
  );
  // Open modal popup
}



function updatecollege(sl_no) {
  // get values
  var college_name = $("#update_college_name").val();
  var seller_adress = $("#update_seller_adress").val();
  var seller_phone = $("#update_seller_phone").val();
  var seller_email = $("#update_seller_email").val();
  var seller_gst = $("#update_seller_gst").val().toUpperCase();

  if (seller_name == "") {
    $("#seller_name_update_small").html(
      "**** !Please Enter The Seller Company Name ****"
    );
  } else {
    $("#seller_name_update_small").html("");
  }
  if (seller_adress == "") {
    $("#seller_adress_update_small").html(
      "**** !Please Enter The Seller Company Adress ****"
    );
  } else {
    $("#seller_adress_update_small").html("");
  }

  if (seller_gst == "") {
    $("#seller_gst_update_small").html(
      "**** !Please Enter The GST Number ****"
    );
  } else {
    $("#seller_gst_update_small").html("");
  }

  if (seller_phone == "") {
    $("#seller_phone_update_small").html(
      "**** !Please Enter The Seller Company phone Number  ****"
    );
  } else if (
    seller_phone.length != 10 ||
    isNaN(seller_phone) == true ||
    seller_phone == 0
  ) {
    $("#seller_phone_update_small").html(
      "**** !Please Enter A Valid  Company phone Number  ****"
    );
  } else {
    $("#seller_phone_update_small").html("");
  }

  if (seller_email == "") {
    $("#seller_email_update_small").html(
      "**** !Please Enter The Seller Company E-mail  ****"
    );
  } else {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(seller_email)) {
      var emailval = "ok";
      $("#seller_email_update_small").html("");
    } else {
      $("#seller_email_update_small").html(
        "**** !Please Enter A Valid  E-mail  ****"
      );
    }
  }

  if (
    seller_name != "" &&
    seller_adress != "" &&
    seller_phone != "" &&
    seller_email != "" &&
    branch_code != "" &&
    seller_phone.length == 10 &&
    isNaN(seller_phone) != true &&
    seller_gst != "" &&
    seller_phone != 0 &&
    branch_code != "" &&
    emailval == "ok"
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
          "eddit/update_seller.php",
          {
            branch_code: branch_code,
            seller_name: seller_name,
            seller_adress: seller_adress,
            seller_phone: seller_phone,
            seller_email: seller_email,
            seller_gst: seller_gst,
            sl_no: sl_no,
          },
          function (data, status) {
            // close the popup

            // read records again
            //   readRecords();
            //   readdata();
            //     readstati();

            // clear fields from the popup

            if (data == 111) {
              $("#update_seller_name").val("");
              $("#update_seller_adress").val("");
              $("#update_seller_phone").val("");
              $("#update_seller_email").val("");
              $("#update_seller_gst").val("");

              viewseller(branch_code);

              Swal.fire({
                position: "center",
                icon: "success",
                title: "UPDATED THIS SELLER",
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
