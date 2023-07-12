<?php
include "conn.php";
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $workshop = $_POST["workshop_name"];
    $deadline = $_POST["deadline"];
    $day = $_POST["conference_day"];
    $description = $_POST["task_description"];

        $query = "INSERT INTO `tasks` VALUES ('$workshop','$day','$description','$deadline')";

        if (mysqli_query($conn, $query)) {
            echo "task added successfully!";
            header("refresh:2,indexcards.php");
        } else {
            echo "error";
        }
    }
