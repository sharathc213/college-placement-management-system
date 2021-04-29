function applyjob(job,usr){
    // get values
   



   
     


  
    if (usr!="" && job!=""
    ) {
      Swal.fire({
        title: "Are you sure Want Apply for this job?",
  
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "red",
        confirmButtonText: "Yes, Apply it!",
      }).then((result) => {
        if (result.value) {
          // Add record
          $.post(
            "insert/applyjob.php",
            {
               
          usr,
          job
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

                viewjobs(usr)
             
              //  window.open("index.php?dashboard");
  
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Application Sucess",
                  showConfirmButton: true,
                  timer: 3000,
                });
              } else if (data == 110) {
                Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "You already applyed!",
                });
              } else if (data == 118) {
                Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "You are not a verifed user.Please update your profile!",
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


