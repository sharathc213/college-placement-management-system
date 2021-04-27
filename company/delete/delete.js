function deletejob(sl_no,com_code) {
    if (sl_no != "") {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.value) {
          $.post(
            "delete/deletejob.php",
            {
               sl_no,
            },
            function (data, status) {
              // reload Users by using readRecords();
  
              if (data == 111) {
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
                viewjob(com_code);
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
    } else {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
      });
    }
  }
  




  function deletetest(sl_no,comcode) {
    if (sl_no != "") {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.value) {
          $.post(
            "delete/deletetest.php",
            {
               sl_no,
            },
            function (data, status) {
              // reload Users by using readRecords();
  
              if (data == 111) {
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
                viewtest(comcode);
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
    } else {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
      });
    }
  }
  