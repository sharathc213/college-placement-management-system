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