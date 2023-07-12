<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cards.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tasks</title>
</head>

<body>
    <div class="bg">


        <section class="component">
            <!-- <p>The english quote with english quoation marks.<br><br></p> -->
            <blockquote class="callout quote EN">
                NOTHING IS IMPOSSIBLE THE WORD ITSELF SAYS "I'M POSSIBLE"
                <br>
                <cite> - Audrey Hepburn</cite>
            </blockquote>
        </section>


        <div class="big-title">
            <h2>Appsplash</h2>
            <div class="overlaytext">
                <h3 class="APP">Appsplash</h3>
            </div>
        </div>

        <div class="cards">
            <?php
            include('conn.php');
            $query = mysqli_query($conn, "SELECT * FROM tasks WHERE workshop_name = 'Appsplash';");
            // $acQuery = mysqli_query($conn, "SELECT * FROM admin_info ");
            // $ac = mysqli_fetch_assoc($acQuery);
            while ($row = mysqli_fetch_array($query)) {
                if (!empty($row['conference_day']) && !empty($row['task_description'])) {
            ?>
                    <div class="card app element">
                        <div class="header">
                            <div class="date"><?php echo $row['conference_day']; ?></div>
                            <div class="title"><?php echo $row['task_description']; ?></div>
                            <?php  $row['workshop_name']; ?>
                        </div>
                        <div class="footer">
                            <p>Deadline:<?php echo $row['deadline']; ?> </p>
                            <?php
                                if(isset($_SESSION['email']) && $_SESSION['email']=="ACandHRaccount@gmail.com"){ 
                            ?>
                                <a class="btn btn-outline-dark" href="edit.php?task_description=<?php echo $row['task_description']; ?>">Edit</a>
                                <a class="btn btn-outline-dark" href="delete.php?task_description=<?php echo $row['task_description']; ?>">Delete</a>
                            <?php
                                }
                                else{
                                    ?>
                                    <a ></a>
                                    <a ></a>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>

        <!-- =================================== -->
        <div class="big-title">
            <h2>Devology</h2>
            <div class="overlaytext">
                <h3 class="Dev">Devology</h3>
            </div>
        </div>

        <div class="cards">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM tasks WHERE workshop_name = 'Devology';");
          
            while ($row = mysqli_fetch_array($query)) {
                if (!empty($row['conference_day']) && !empty($row['task_description'])) {
            ?>
                    <div class="card devo element">
                        <div class="header">
                            <div class="date"><?php echo $row['conference_day']; ?></div>
                            <div class="title"><?php echo $row['task_description']; ?></div>
                            <?php  $row['workshop_name']; ?>
                        </div>
                        <div class="footer">
                            <p>Deadline:<?php echo $row['deadline']; ?> </p>
                            <?php

                                if(isset($_SESSION['email']) && $_SESSION['email']=="ACandHRaccount@gmail.com"){
                                    
                            ?>
                                <a class="btn btn-outline-dark" href="edit.php?task_description=<?php echo $row['task_description']; ?>">Edit</a>
                                <a class="btn btn-outline-dark" href="delete.php?task_description=<?php echo $row['task_description']; ?>">Delete</a>
                            <?php
                                }
                                else{
                                    ?>
                                    <a ></a>
                                    <a ></a>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>


        <!-- ============================================== -->
        <div class="big-title">
            <h2>Markative</h2>
            <div class="overlaytext">
                <h3 class="Mark">Markative</h3>
            </div>
        </div>

        <div class="cards">
            <?php

            $query = mysqli_query($conn, "SELECT * FROM tasks WHERE workshop_name = 'Markative';");
            
            while ($row = mysqli_fetch_array($query)) {
                if (!empty($row['conference_day']) && !empty($row['task_description'])) {
            ?>
                    <div class="card mark element">
                        <div class="header">
                            <div class="date"><?php echo $row['conference_day']; ?></div>
                            <div class="title"><?php echo $row['task_description']; ?></div>
                            <?php  $row['workshop_name']; ?>
                        </div>
                        <div class="footer">
                            <p>Deadline:<?php echo $row['deadline']; ?> </p>
                            <?php

                                if(isset($_SESSION['email']) && $_SESSION['email']=="ACandHRaccount@gmail.com"){
                                    
                            ?>
                                <a class="btn btn-outline-dark" href="edit.php?task_description=<?php echo $row['task_description']; ?>">Edit</a>
                                <a class="btn btn-outline-dark" href="delete.php?task_description=<?php echo $row['task_description']; ?>">Delete</a>
                            <?php
                                }
                                else{
                                    ?>
                                    <a ></a>
                                    <a ></a>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>

        <!-- ================================================== -->
        <div class="big-title">
            <h2>Investeneur</h2>
            <div class="overlaytext">
                <h3 class="Inv">Investeneur</h3>
            </div>
        </div>
        <div class="cards">
            <?php

            $query = mysqli_query($conn, "SELECT * FROM tasks WHERE workshop_name = 'Investeneur';");
          
            while ($row = mysqli_fetch_array($query)) {
                if (!empty($row['conference_day']) && !empty($row['task_description'])) {
            ?>
                    <div class="card invest element">
                        <div class="header">
                            <div class="date"><?php echo $row['conference_day']; ?></div>
                            <div class="title"><?php echo $row['task_description']; ?></div>
                            <?php  $row['workshop_name']; ?>
                        </div>
                        <div class="footer">
                            <p>Deadline:<?php echo $row['deadline']; ?> </p>
                            <?php
                                if(isset($_SESSION['email']) && $_SESSION['email']=="ACandHRaccount@gmail.com"){
                                    
                            ?>
                                <a class="btn btn-outline-dark" href="edit.php?task_description=<?php echo $row['task_description']; ?>">Edit</a>
                                <a class="btn btn-outline-dark" href="delete.php?task_description=<?php echo $row['task_description']; ?>">Delete</a>
                            <?php
                                }
                                else{
                                    ?>
                                    <a ></a>
                                    <a ></a>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>


        <!-- ================================== -->
        <div class="big-title">
            <h2>Techsolve</h2>
            <div class="overlaytext">
                <h3 class="Tech">Techsolve</h3>
            </div>
        </div>
        <div class="cards">
            <?php

           
            $query = mysqli_query($conn, "SELECT * FROM tasks WHERE workshop_name = 'techsolve';");
            while ($row = mysqli_fetch_array($query)) {
                if (!empty($row['conference_day']) && !empty($row['task_description'])) {
            ?>
                    <div class="card tech element">
                        <div class="header">
                            <div class="date"><?php echo $row['conference_day']; ?></div>
                            <div class="title"><?php echo $row['task_description']; ?></div>
                            <?php $row['workshop_name']; ?>
                        </div>
                        <div class="footer">
                            <p>Deadline:<?php echo $row['deadline']; ?> </p>
                            <?php

                                if(isset($_SESSION['email']) && $_SESSION['email']=="ACandHRaccount@gmail.com"){
                                    
                            ?>
                                <a class="btn btn-outline-dark" href="edit.php?task_description=<?php echo $row['task_description']; ?>">Edit</a>
                                <a class="btn btn-outline-dark" href="delete.php?task_description=<?php echo $row['task_description']; ?>">Delete</a>
                            <?php
                                }
                                else{
                                    ?>
                                    <a ></a>
                                    <a ></a>
                                <?php
                                }
                            ?>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>



    </div>
</body>

</html>