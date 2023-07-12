<?php 
include('connection.php');
error_reporting(0);
if(isset($_SESSION['email']) && $_SESSION['email']=="ACandHRaccount@gmail.com"){
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="../Conference/imgs/logo.png">
    <title>form</title>
    

    <style>
        a
        {
            text-decoration: none;
            color: black; 
        }

        a:hover
        {
            text-decoration: underline !important; 
            color: #4285F4 !important;
        }
    </style>
</head>
<body>

    <div class="box" id="box">
        <span class="borderline"></span>
            <img src="logo.png" alt="scci logo">
            

        

        <form method="POST" action="DB.php">
            <h2> enter your Feedback</h2>
            <?php 
                        
                        if(isset($_SESSION['errors'])): 
                        foreach($_SESSION['errors'] as $error) :
                        
                    ?>
                            <div class="alert alert-danger text-center" style="color: red; font-size:20px"> <?php echo $error; ?></div>
                        <?php
                        endforeach;
                        unset($_SESSION['errors']); 
                        endif; 
                        
                    ?>
                                    <?php if(isset($_SESSION['success'])):    ?>
                            <div class="alert alert-danger text-center"> <?php echo $_SESSION['success']; ?></div>
                        <?php
                        unset($_SESSION['success']); 
                        endif;  ?>
            <div class="select1">
                <h4><span>softskills or technincal</span></h4>
            <select name="t_or_s"  class="s1" id="selectid" onclick="showquestions()">
                <option value="ss">Soft skills </option>
                <option value="tc"> Technical </option>
            </select>
            </div>
            
            <div class="select2">
                <h4 class="h2s2">conference day </h4>
                <select class="s2" name="selectday">
                    <option value="d1">day1</option>
                    <option value="d2">day2</option>
                    <option value="d3">day3</option>
                    <option value="d4">day4</option>
                    <option value="d5">day5</option>
                    <option value="d6">day6</option>
                </select>
            </div>


            <div class="inputbox">
            
                <input type="text" id="startup" name="name" placeholder="enter start-up name">
                <label for="startup"> startup name </label>
                <i></i>
            </div>
            


            <div class="inputbox" style="display:none;" id="tr">
                <input type="float" id="tr" name="rate" placeholder="enter rate out of 10">
                <label for="technical-rate">technical rate</label>
                <i></i>
            </div> 
            
            <div class="inputbox" style="display: block;" id="team_work">
                <input type="float" id="team_work" name="team_work" placeholder="enter rate out of 10">
                <label for="teamwork">Teamwork</label>
                <i></i>
            </div>

            <div class="inputbox" style="display: block;" id="flexability">
                <input type="float" id="flexability" name="flexability" placeholder="enter rate out of 10">
                <label for="flexability">Flexability</label>
                <i></i>
            </div>

            <div class="inputbox" style="display: block;" id="time_management">
                <input type="float" id="time_management" name="time_management" placeholder="enter rate out of 10">
                <label for="time_management">Time management</label>
                <i></i>
            </div>

            <div class="inputbox"style="display: block;" id="commitment">
                <input type="float" id="commitment" name="commitment" placeholder="enter rate out of 10">
                <label for="commitment">Commitment</label>
                <i></i>
            </div>

            <div class="inputbox"style="display: block;" id="respect">
                <input type="float" id="respect" name ="respect" placeholder="enter rate out of 10">
                <label for="respect">Respect each other</label>
                <i></i>
            </div>

            <div class="inputbox"style="display: block;" id="problem_solving">
                <input type="float" id="problem_solving" name="problem_solving" placeholder="enter rate out of 10">
                <label for="problem_solving">Problem solving</label>
                <i></i>
            </div>

            <div class="inputbox" style="display:block;" id="rate_leader">
                <input type="float" id="rate_leader" name="rate_leader" placeholder="enter rate out of 10">
                <label for="rate_leader">Rate team leaders</label>
                <i></i>
            </div>

            <div class="inputbox"style="display: block;" id="rate_president">
                <input type="float" id="rate_president" name="rate_president" placeholder="enter rate out of 10">
                <label for="rate_president">Rate president</label>
                <i></i>
            </div>

        
            <button>
                <span></span>
                <span></span>
                <span></span>
                <span></span> submit
            </button>

            <a style="align-items:center; margin-top:20px;" href="../Conference/htmlPhp.php">Show feedback</a>
            

        </form>
    </div>
<script>
 function showquestions(){
  
  if(document.getElementById('selectid').value == "tc") {
   //Do something
   document.getElementById("tr").style.display = "block";
   document.getElementById("team_work").style.display = "none";
   document.getElementById("flexability").style.display = "none";
   document.getElementById("time_management").style.display = "none";
   document.getElementById("commitment").style.display = "none";
   document.getElementById("respect").style.display = "none";
   document.getElementById("problem_solving").style.display = "none";
   document.getElementById("rate_leader").style.display = "none";
   document.getElementById("rate_president").style.display = "none";
   document.getElementById("box").style.height="100vh";
   document.getElementById("box").style.marginBottom="65vh";
  }

   else
   {
      document.getElementById("tr").style.display = "none";
      document.getElementById("team_work").style.display = "block";
      document.getElementById("flexability").style.display = "block";
      document.getElementById("time_management").style.display = "block";
      document.getElementById("commitment").style.display = "block";
      document.getElementById("respect").style.display = "block";
      document.getElementById("problem_solving").style.display = "block";
      document.getElementById("rate_leader").style.display = "block";
      document.getElementById("rate_president").style.display = "block";
      document.getElementById("box").style.height = "1104px";
    }
}
</script>
</body>
</html>

<?php 
 }


else {
    echo ' <div class="alert alert-danger 
    alert-dismissible fade show" role="alert" style="display: flex;
    justify-content: center;
    align-items: center;
    background-color: royalblue;
    border-radius: 20px;font-size:30px;font-weight:bold;width:fit-content;padding:30px 30px;">

    you must have login first 
 
</div>'; 
    header("refresh:2,../../../../index.php");
    exit;
  }?>