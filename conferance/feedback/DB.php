<?php 
include("connection.php");
$errors = [];
$number = 10;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conference_day =$connection->real_escape_string($_POST["selectday"]);
    $startup_name   =$connection->real_escape_string($_POST["name"]);
    $technical_rate =$connection->real_escape_string($_POST["rate"]);
    $team_work      =$connection->real_escape_string($_POST["team_work"]);
    $flexability  =$connection->real_escape_string($_POST["flexability"]);
    $time_management  =$connection->real_escape_string($_POST["time_management"]);
    $commitment     =$connection->real_escape_string($_POST["commitment"]);
    $respect  =$connection->real_escape_string($_POST["respect"]);
    $problem_solving  =$connection->real_escape_string($_POST["problem_solving"]);
    $rate_leader  =$connection->real_escape_string($_POST["rate_leader"]);
    $rate_president  =$connection->real_escape_string($_POST["rate_president"]);
    $tech_or_soft =$connection->real_escape_string($_POST["t_or_s"]);
   
  if(empty($startup_name) && empty($technical_rate) && empty($team_work) && empty($flexability) && empty($time_management) && empty($commitment) && empty($respect) && empty($problem_solving) && empty($rate_leader) && empty($rate_president))
  {
    $errors [] = "Please Fill All Inputs";
  }elseif(!is_string($startup_name))
  {
    $errors [] = "Your Start Up Name Should be String"; 
  }elseif(!is_numeric($technical_rate) && !is_numeric($team_work) && !is_numeric($flexability) && !is_numeric($time_management) && !is_numeric($commitment) && !is_numeric($respect) && !is_numeric($problem_solving) && !is_numeric($rate_leader) && !is_numeric($rate_president))
  {
    $errors [] = "Enter A Valid Rate ";
  // }elseif($technical_rate > $number){
  //   $errors [] = "Your Rate Must Be Out Of 10";
   }elseif($team_work > $number){ 
  $errors [] = "Your Rate Must Be Out Of 10";
}elseif($flexability > $number){
  $errors [] = "Your Rate Must Be Out Of 10";
}elseif($time_management > $number){
  $errors [] = "Your Rate Must Be Out Of 10";
}elseif($commitment > $number){
  $errors [] = "Your Rate Must Be Out Of 10";
}elseif($respect > $number){
  $errors [] = "Your Rate Must Be Out Of 10";
}elseif($problem_solving > $number){
  $errors [] = "Your Rate Must Be Out Of 10";
}elseif($rate_leader > $number){
  $errors [] = "Your Rate Must Be Out Of 10";
}elseif($rate_president > $number){
  $errors [] = "Your Rate Must Be Out Of 10";
}
}
if(empty($errors)){
  $query = "INSERT INTO `startups`(`conference_day`, `startup_name`, `technical_rate`, `team_work`, `flexability`, `time_management`, `commitment`, `respect`, `problem_solving`, `rate_leader`, `rate_president`, `tech_or_soft`) 
  VALUES ('$conference_day',' $startup_name ','$technical_rate','$team_work ','$flexability','$time_management','$commitment','$respect','$problem_solving','$rate_leader','$rate_president','$tech_or_soft')";
   $result= mysqli_query($connection,$query);
  if($result){
    $_SESSION['success'] = "Your FeedBack Sent Successfully" ; 
    header("location:../Conference/htmlPHP.php");
    die;
      }
}else{
  $_SESSION['errors'] = $errors;
   header("location:form.php");
   die;
}
?>