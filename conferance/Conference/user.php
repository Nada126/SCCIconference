<?php
include("conn.php");
$db= $conn;
$tableName="startups";
$columns= ['conference_day', 'startup_name', 'technical_rate', 'team_work', 'flexability', 'time_management', 'commitment', 'respect', 'problem_solving', 'rate_leader', 'rate_president'];

//$fetchData = fetch_data($db, $tableName, $columns);

 if(empty($db)){
  echo "Database connection error";
  exit;
 }

$query = "SELECT *,(`team_work`+`flexability`+`time_management`+`commitment`+`respect`+`problem_solving`+`rate_leader`+`rate_president`) as SS FROM $tableName  WHERE `tech_or_soft`='ss'";
$result = $db->query($query);

$query = "SELECT * FROM $tableName  WHERE `tech_or_soft`='tc'";
$result2 = $db->query($query);


?>