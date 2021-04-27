function login(e, which) {
    e.preventDefault();
    switch (which) {
        case "user":
            var user_email = $("#user_email").val();
            var user_password = $("#user_password").val();
            var status = validate(which, user_email, user_password);
            if (status) check(which, user_email, user_password);

            break;
        case "company":
            var company_email = $("#company_email").val();
            var company_password = $("#company_password").val();
            var status = validate(which, company_email, company_password);
            if (status) check(which, company_email, company_password);

            break;
        case "admin":
            var admin_email = $("#admin_email").val();
            var admin_password = $("#admin_password").val();
            var status = validate(which, admin_email, admin_password);
            if (status) check(which, admin_email, admin_password);

            break;
    }
}

function validate(which, email, password) {
    if (email != "" && password != "") {
        $(".error_" + which).html("");
        return true;
    } else $(".error_" + which).html("User Name or Password cannot be empty");
}

function check(which, email, password) {
    $.post(
        "login.php", {
            email,
            password,
            which,
        },
        function(data, status) {
            console.log(data);
            if (data) {

                window.location.replace("http://localhost/placement/" + which + "/index.php?dashboard");

            } else $(".error_" + which).html("This user is not Valid");
        }
    );
}



function signup(e) {
    e.preventDefault();

     
            var user_email = $("#user_email").val();
            var user_password = $("#user_password").val();
            var user_name = $("#user_name").val().toUpperCase();
            var status = validatee(user_name,user_email, user_password);
            if (status) checke(user_name,user_email, user_password);

         

}

function validatee(name,email, password) {
    if (email != "" && password != "" && name!="") {
        $(".error_user").html("");
        return true;
    } else $(".error_user").html("User Name or Password cannot be empty");
}

function checke(name, email, password) {
    $.post(
        "signup.php", {
            email,
            password,
            name,
        },
        function(data, status) {
            console.log(data);
            if (data==111) {


                Swal.fire({
                    title: 'Regestraction Sucess',
                    // showDenyButton: true,
                    // showCancelButton: true,
                    confirmButtonText: `Login`,
                    // denyButtonText: `Don't save`,
                  }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.replace("http://localhost/placement/user/index.php?dashboard");
                    } 
                  })

                // window.location.replace("http://localhost/placement/user/index.php?dashboard");

            } else if(data==110){ $(".error_user").html("This user is Already Exist");}
        }
    );
}