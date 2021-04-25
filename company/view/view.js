function viewjob(com_code) {
    $.post("view/viewtablejobs.php", {
      com_code

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