              
<?php
// include Database connection file 
include("../../db.php");

$jobcode=$_POST['jobcode'];
$userid=$_POST['userid'];
$ename=$_POST['ename'];
$jobid=$_POST['jobid'];



$query = "update jobuser set verify=5 where userid= $userid and jobid=$jobid";
if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error());
    echo "some thing is wrong";
} else {


$que="select * from exam where tname='$ename'";
$result_que= mysqli_query($con, $que);
$row_test=mysqli_fetch_array($result_que);
$q1 = $row_test['q1'];
$q2 = $row_test['q2'];
$q3 = $row_test['q3'];
$q4 = $row_test['q4'];
$q5 = $row_test['q5'];


$a1 = $row_test['a1'];
$a2 = $row_test['a2'];
$a3 = $row_test['a3'];
$a4 = $row_test['a4'];
$a5 = $row_test['a5'];

$a11 = $row_test['a11'];
$a12 = $row_test['a12'];
$a13 = $row_test['a13'];
$a14 = $row_test['a14'];


$a21 = $row_test['a21'];
$a22 = $row_test['a22'];
$a23 = $row_test['a23'];
$a24 = $row_test['a24'];

$a31 = $row_test['a31'];
$a32 = $row_test['a32'];
$a33 = $row_test['a33'];
$a34 = $row_test['a34'];

$a41 = $row_test['a41'];
$a42 = $row_test['a42'];
$a43 = $row_test['a43'];
$a44 = $row_test['a44'];

$a51 = $row_test['a51'];
$a52 = $row_test['a52'];
$a53 = $row_test['a53'];
$a54 = $row_test['a54'];
$examid = $row_test['sl_no'];

      


// Design initial table header 
$data ="
   <style>
   
.quiz-container {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);

  overflow: hidden;
}

.quiz-header {
  padding: 4rem;
}

h2 {
  padding: 1rem;
  text-align: center;
  margin: 0;
}

ul {
  list-style-type: none;
  padding: 0;
}

ul li {
  font-size: 1.2rem;
  margin: 1rem 0;
}

ul li label {
  cursor: pointer;
}

button {
  background-color: #8e44ad;
  border: none;
  color: #fff;
  display: block;
  width: 100%;
  cursor: pointer;
  font-size: 1.1rem;
  font-family: inherit;
  padding: 1.3em;
}

button:hover {
  background-color: #732d91;
}

button:focus {
  outline: none;
  background-color: #5e3370;
}

</style>
";


    


           $data .='
           <div class="quiz-container" id="quiz">
           <div class="quiz-header">
             <h2 id="q1">'.$q1.'</h2>
             <ul>
               <li>
                 <input type="radio" value=1 name="answer1" id="a11" class="answer" />
                 <label for="a" id="a_text">'.$a11.'</label>
               </li>
     
               <li>
                 <input type="radio" value=2 name="answer1" id="a12" class="answer" />
                 <label for="b" id="b_text">'.$a12.'</label>
               </li>
     
               <li>
                 <input type="radio" value=3 name="answer1" id="a13" class="answer" />
                 <label for="c" id="c_text">'.$a13.'</label>
               </li>
     
               <li>
                 <input type="radio" value=4 name="answer1" id="a14" class="answer" />
                 <label for="d" id="d_text">'.$a14.'</label>
               </li>
             </ul>
           </div>


           <div class="quiz-header">
           <h2 id="q2">'.$q2.'</h2>
           <ul>
             <li>
               <input type="radio" value=1 name="answer2" id="a21" class="answer" />
               <label for="a" id="a_text">'.$a21.'</label>
             </li>
   
             <li>
               <input type="radio" value=2 name="answer2" id="a22" class="answer" />
               <label for="b" id="b_text">'.$a22.'</label>
             </li>
   
             <li>
               <input type="radio" value=3 name="answer2" id="a23" class="answer" />
               <label for="c" id="c_text">'.$a23.'</label>
             </li>
   
             <li>
               <input type="radio" value=4 name="answer2" id="a24" class="answer" />
               <label for="d" id="d_text">'.$a24.'</label>
             </li>
           </ul>
         </div>


         <div class="quiz-header">
             <h2 id="q3">'.$q3.'</h2>
             <ul>
               <li>
                 <input type="radio" value=1 name="answer3" id="a31" class="answer" />
                 <label for="a" id="a_text">'.$a31.'</label>
               </li>
     
               <li>
                 <input type="radio" value=2 name="answer3" id="a32" class="answer" />
                 <label for="b" id="b_text">'.$a32.'</label>
               </li>
     
               <li>
                 <input type="radio" value=3 name="answer3" id="a33" class="answer" />
                 <label for="c" id="c_text">'.$a33.'</label>
               </li>
     
               <li>
                 <input type="radio" value=4 name="answer3" id="a34" class="answer" />
                 <label for="d" id="d_text">'.$a34.'</label>
               </li>
             </ul>
           </div>


           <div class="quiz-header">
           <h2 id="q1">'.$q4.'</h2>
           <ul>
             <li>
               <input type="radio" value=1 name="answer4" id="a41" class="answer" />
               <label for="a" id="a_text">'.$a41.'</label>
             </li>
   
             <li>
               <input type="radio" value=2 name="answer4" id="a42" class="answer" />
               <label for="b" id="b_text">'.$a42.'</label>
             </li>
   
             <li>
               <input type="radio" value=3 name="answer4" id="a43" class="answer" />
               <label for="c" id="c_text">'.$a43.'</label>
             </li>
   
             <li>
               <input type="radio" value=4 name="answer4" id="a44" class="answer" />
               <label for="d" id="d_text">'.$a44.'</label>
             </li>
           </ul>
         </div>



         <div class="quiz-header">
         <h2 id="q5">'.$q5.'</h2>
         <ul>
           <li>
             <input type="radio" value=1 name="answer5" id="a51" class="answer" />
             <label for="a" id="a_text">'.$a51.'</label>
           </li>
 
           <li>
             <input type="radio" value=2 name="answer5" id="a52" class="answer" />
             <label for="b" id="b_text">'.$a52.'</label>
           </li>
 
           <li>
             <input type="radio" value=3 name="answer5" id="a53" class="answer" />
             <label for="c" id="c_text">'.$a53.'</label>
           </li>
 
           <li>
             <input type="radio" value=4 name="answer5" id="a54" class="answer" />
             <label for="d" id="d_text">'.$a54.'</label>
           </li>
         </ul>
       </div>

       <button onclick="SubmitFunction('.$userid.','.$examid.',`'.$jobcode.'`,'.$a1.','.$a2.','.$a3.','.$a4.','.$a5.');">Submit</button>
      
          
         </div>';

           $data .='       <script>
           function CountDown(duration, display) {
            if (!isNaN(duration)) {
                var timer = duration, minutes, seconds;
                
              var interVal=  setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
                    if (--timer < 0) {
                        timer = duration;
                       SubmitFunction('.$userid.','.$examid.',`'.$jobcode.'`,'.$a1.','.$a2.','.$a3.','.$a4.','.$a5.');
                       $("#display").empty();
                       clearInterval(interVal)
                    }
                    },1000);
            }
        }
        
       
         CountDown(300,$("#display"));
      
           </script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         
     '      ;             



echo $data;
        }    

?>






