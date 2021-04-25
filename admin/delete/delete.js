function deletecom(sl_no) {
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
            "delete/deletecom.php",
            {
              sl_no: sl_no,
            },
            function (data, status) {
              // reload Users by using readRecords();
  
              if (data == 111) {
                Swal.fire("Deleted!", "Your file has been deleted.", "success");
                viewcompany();
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
  