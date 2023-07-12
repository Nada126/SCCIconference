<?php
    include("user.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="icon" href="imgs/logo.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <title>Table</title>
    <style>
        *
        {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body
        {
            background-image: url("imgs/wallpaperflare.com_wallpaper\ \(7\).jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;

        }

        .container
        {
            width: fit-content !important;
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            margin-top: 6vh;
            margin-bottom: 5vh;
        }

        .container1
        {
            width: fit-content !important;
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            margin-top: 6vh;
            margin-bottom: 5vh;
        }

        @media(max-width:1200px)
        {
            body
            {
                background-image: url("../Conference/imgs/wallpaperflare.com_wallpaper\ \(7\).jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                background-attachment: fixed;
            }
        }

        a
        {
            text-decoration: none;
            color: white; 
        }

        a:hover
        {
            text-decoration: underline; 
            color: #4285F4;
        }

    </style>
</head>
<body>
    <div class="container1">
    <table id="example" class="display" style="width:100%;background-color:white;">
        <thead>
            <tr>
                <th>Conference day </th>
                <th>Startup name</th>
                <th>Teamwork</th>
                <th>Flexability</th>
                <th>Time management</th>
                <th>Commitment</th>
                <th>Respect each other</th>
                <th>Problem solving</th>
                <th>Rate team leader</th>
                <th>Rate president</th>
                <th>Soft skills rate</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
              while($row=mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>".$row['conference_day']."</td>";
                echo "<td>".$row['startup_name']."</td>";
                echo "<td>".$row['team_work']."</td>";
                echo "<td>".$row['flexability']."</td>";
                echo "<td>".$row['time_management']."</td>";
                echo "<td>".$row['commitment']."</td>";
                echo "<td>".$row['respect']."</td>";
                echo "<td>".$row['problem_solving']."</td>";
                echo "<td>".$row['rate_leader']."</td>";
                echo "<td>".$row['rate_president']."</td>";
                echo "<td>".$row['SS']."</td>";
                // echo "<td>".$row['commitment']+$row['communication']+$row['team_work']."</td>";
              echo "</tr>";}
            ?>
        </tbody>
    </table>
    </div>

    <div class="container">
    <table id="example2" class="display" style="width:100%;background-color:white;">
        <thead>
            <tr>
                <th>Conference day </th>
                <th>Startup name</th>
                <th>Technical rate</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
              while($row=mysqli_fetch_array($result2))
              {
                echo "<tr>";
                echo "<td>".$row['conference_day']."</td>";
                echo "<td>".$row['startup_name']."</td>";
                echo "<td>".$row['technical_rate']."</td>";
              echo "</tr>";}
            ?>
        </tbody>
    </table>

</div>

<a style="margin-left:92vh; margin-top:10px;" href="../feedback/form.php">Go back to the form</a>

<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>    
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>