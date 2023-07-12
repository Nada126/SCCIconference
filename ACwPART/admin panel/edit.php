<?php
include('conn.php');
$desc = $_GET['task_description'];
$query = mysqli_query($conn, "select * from tasks where task_description= '$desc' ");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Edit Task</title>
</head>
<body>
<div class="login-box">
  <h2> EDIT </h2>
  <form action="update.php?task_description=<?php echo $desc; ?>" method="post">
    <div class="user-box">
      <input type="text" value="<?php echo $row['workshop_name']; ?>" name="workshop_name" id="workshop_name" required>
      <label>Workshop Name</label>
    </div>
    <div class="user-box">
        <label>Deadline</label><br>
      <input type="datetime-local" value="<?php echo $row['deadline']; ?>" name="deadline" id="deadline" required>
    </div>
    <div class="">
        <label style="color: white">Conference Day</label>
          <select name="conference_day" id="day" required>
            <div class="content">
                <option value="<?php echo $row['conference_day']; ?>"></option>
                <option value="day1">Day 1</option>
                <option value="day2">Day 2</option>
                <option value="day3">Day 3</option>
                <option value="day4">Day 4</option>
                <option value="day5">Day 5</option>
                <option value="day6">Day 6</option>
                </div>
            </select>


    </div>
    <div class="araf">
    <textarea id="task_description" value="<?php echo $row['task_description']; ?>" name="task_description" rows="6" cols="33" required ></textarea>
    
    <label>Task Describtion</label>
    </div>
    <button type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Update
    </button>
  </form>
</div>
</body>
</html>