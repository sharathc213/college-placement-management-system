function viewcompany() {
    $.post("view/viewtablecompany.php", {


    }, function(data, status) {
        // close the popup

        $(".table-section").html(data);
    });
}

function viewcandidate() {
    $.post("view/viewtablecandidate.php", {


    }, function(data, status) {
        // close the popup

        $(".table-section").html(data);
    });
}