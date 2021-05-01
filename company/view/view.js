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

function viewtest(comcode) {
    $.post("view/viewtabletest.php", {

    comcode
    }, function(data, status) {
        // close the popup

        $(".table-section").html(data);
    });
}


function viewapplication(comcode) {
    $.post("view/viewapplication.php", {

    comcode
    }, function(data, status) {
        // close the popup

        $(".table-section").html(data);
    });
}


function viewtd(value,comcode) {
    if(value==2){
    $.post("view/viewtd.php", {

    comcode
    }, function(data, status) {
        // close the popup

        $(".testd").html(data);
    });
}
}