<?php
include('conn.php');
error_reporting(0);
  ob_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="imgs/logo.png" rel="shortcut icon"/>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <!-- fonts -->
    <link rel="stylesheet" href="signin.css">
    <title>LOG IN</title>

</head>
<body >

    <h1 class="logheader">
        log in for scci'23
    </h1>

    <center>
    <form action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <label for="">email</label>
                    <input type="email" name="email" id="heademail" placeholder="enter your email" required>
                </div>

                <div class="col-sm-12">
                    <label for="">password</label>
                    <input type="password" name="password" id="headpassword" placeholder="enter your password" required>
                </div>

                <div class="col-sm-12">
                    <input class="btn btn-danger" type="submit" name="login" id="login" value="log in">
                </div>

            </div>
        </div>
    </form>

    </center>


    

    

 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>


<?php
if(isset($_POST['login'])){
    $email=$conn->real_escape_string(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL));
    $pass=$conn->real_escape_string(filter_var($_POST['password'],FILTER_SANITIZE_STRING));
    if(empty($email)){
       echo '<h4 style="color:white;">must enter email</h4>';
    }if(empty($pass)){
       // array_push($error,"password is needed");
       echo '<h4 style="color:white;">must enter password</h4>';
    }
    $select="SELECT * FROM`accounts`WHERE `email`='$email'AND `password`='$pass'";
                $run=mysqli_query($conn,$select);
                $nums=mysqli_num_rows($run);
                if($nums==0){
                    echo ' <div class="alert alert-danger 
                    alert-dismissible fade show" role="alert">
            
                    *Email or Passowrd not found* 
                    <button type="button" class="close"
                        data-dismiss="alert" aria-label="Close"> 
                        <span aria-hidden="true">×</span> 
                    </button> 
                </div>'; 
//    echo "<h5 style='color:red;'> *Email or Passowrd not found, you have to register first*</h5>";
    foreach($error as $er){
        echo "<h2>$er</h2>";
    }
                }else{
                    if($nums>0){
                    $_SESSION['email']=$email;
                    echo ' <div class="alert alert-success 
                    alert-dismissible fade show" role="alert">
            
                    <strong>successfully!</strong> you have logged in. 
                    <button type="button" class="close"
                        data-dismiss="alert" aria-label="Close"> 
                        <span aria-hidden="true">×</span> 
                    </button> 
                </div> '; 

                if( $email=="ACandHRaccount@gmail.com"){
                    header("refresh:3,ACwPART/admin panel/AdminFormIndex.php");
                }
                elseif($email=="startuppresident@gmail.com"){
                    header("refresh:3,ACwPART/admin panel/indexcards.php");
                }
                
                else{
                    echo ' <div class="alert alert-danger 
                    alert-dismissible fade show" role="alert">
            
                    you entered wrong email 
                    <button type="button" class="close"
                        data-dismiss="alert" aria-label="Close"> 
                        <span aria-hidden="true">×</span> 
                    </button> 
                </div>'; 
                }
                    }
                }
    
    
    }
 
 ?>