function viewjobs(sl_no) {
    var search=$('#search').val();

    if(search===undefined || search==""){
        var quary="select company.email,company.companyname,company.address,company.district,company.pincode,company.phno,job.jobcode,job.jobname,job.qualification,job.sl_no, job.companycode,job.jobdetails from job,company where job.companycode=company.sl_no and job.status=2 ";

    }
else{
    var quary="select company.email,company.companyname,company.address,company.district,company.pincode,company.phno,job.jobcode,job.jobname,job.qualification,job.sl_no, job.companycode,job.jobdetails from job,company where job.companycode=company.sl_no and job.status=2 and (job.jobcode LIKE '%"+search+"%' OR job.jobname LIKE '%"+search+"%' OR job.qualification LIKE '%"+search+"%' OR company.email LIKE '%"+search+"%' OR company.companyname LIKE '%"+search+"%' OR company.district LIKE '%"+search+"%')";
//    var quary="SELECT * FROM job WHERE jobcode LIKE '%"+search+"%' OR jobname LIKE '%"+search+"%' OR qualification LIKE '%"+search+"%'  order by sl_no desc"; 
}

    $.post("view/viewjob.php", {

    sl_no,
    search,
    quary
    }, function(data, status) {
        // close the popup

        $(".table-section").html(data);
    });
}



function attendexam(jobcode,userid,ename) {
   

    $.post("view/attendexam.php", {

   jobcode,userid,ename
    }, function(data, status) {
        // close the popup

        $(".table-section").html(data);
    });
}

function startexam(jobcode,userid,jobid,ename) {
   

    $.post("view/startexam.php", {

   jobcode,userid,ename,jobid
    }, function(data, status) {
        // close the popup

        $(".table-section").html(data);
    });
}

function viewapplication(sl_no) {


    $.post("view/viewapplication.php", {

    sl_no,
  
    }, function(data, status) {
        // close the popup

        $(".table-section").html(data);
    });
}


function SubmitFunction(userid,examid,jobcode,a1,a2,a3,a4,a5){
   
    var  c1 = $("input[name='answer1']:checked").val();
    var  c2 = $("input[name='answer2']:checked").val();
    var  c3 = $("input[name='answer3']:checked").val();
    var c4 = $("input[name='answer4']:checked").val();
    var c5 = $("input[name='answer5']:checked").val();
    var mark=0;
    if(c1==a1){
        mark++;
    }
    if(c2==a2){
        mark++;
    }
    if(c3==a3){
        mark++;
    }if(c4==a4){
        mark++;
    }if(c5==a5){
        mark++;
    }
    $.post("view/fineshexam.php", {

        userid,examid,jobcode,
        mark
      
        }, function(data, status) {
            // close the popup
    
            if(data==111){
                viewapplication(userid);
                $("#display").empty();
                
                Swal.fire({
                    title: 'You Got '+mark+' marks out of 5 in the exam',
                    text: "Please Wate for response from the company",
                    icon: 'sucess',
                    showCancelButton: false,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                  })
                
            }
        });
  

  

}