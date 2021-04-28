function viewjobs(sl_no) {
    var search=$('#search').val();

    if(search===undefined || search==""){
        var quary="select company.email,company.companyname,company.address,company.district,company.pincode,company.phno,job.jobcode,job.jobname,job.qualification from company,job where company.sl_no ="+sl_no+" and job.companycode="+sl_no;

    }
else{
    var quary="select company.email,company.companyname,company.address,company.district,company.pincode,company.phno,job.jobcode,job.jobname,job.qualification from company,job where company.sl_no ="+sl_no+" and job.companycode="+sl_no+" and (job.jobcode LIKE '%"+search+"%' OR job.jobname LIKE '%"+search+"%' OR job.qualification LIKE '%"+search+"%' OR company.email LIKE '%"+search+"%' OR company.companyname LIKE '%"+search+"%' OR company.district LIKE '%"+search+"%')";
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