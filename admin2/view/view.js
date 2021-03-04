function viewcollege() {
  $.post("view/viewtablecollege.php", {


  }, function (data, status) {
    // close the popup

    $(".table-responsive").html(data);
  });
}
