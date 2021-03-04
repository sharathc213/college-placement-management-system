function add_college(){
    var college_code = $('#college_code').val().toUpperCase();
    var college_name = $('#college_name').val().toUpperCase();
    var college_email = $('#college_email').val();

    if(college_code != "" && college_name!="" && college_email!=""){


    console.log("asf");
        $.post(
            "./admin/pages/add_college.php",
            {
              college_code,
              college_name,
              college_email
            },
            function (data, status) {
              alert(data);
            }
          );

    }


   
    
}