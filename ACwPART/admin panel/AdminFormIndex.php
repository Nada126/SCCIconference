<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Task Insertion</title>
</head>
<body>
<div class="login-box">
  <h2>Admin Form</h2>
  <form action="AdminFormBsl.php" method="post">
    <div class="user-box">
      <input type="text" name="workshop_name" id="workshop" required>
      <label>Workshop Name</label>
    </div>
    <div class="user-box">
        <label>Deadline</label><br>
      <input type="datetime-local" name="deadline" id="deadline" required>
    </div>
    <div class="">
        <label style="color: white">Conference Day</label>
         <select name="conference_day" id="day" required>
            <div class="content">
                <option value=""></option>
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
    <textarea id="task" name="task_description"rows="6" cols="33" required ></textarea>
    
    <label>Task Describtion</label>
    </div>
    <button type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </button>

    <br>
    <br>

    <div class="links"> <a style="color: white; font-size:20px;" href="indexcards.php">show tasks</a> <br> <br> <a style="color: white; font-size:20px;" href="../../conferance/conferance/Conference/htmlPhp.php">enter feedback</a></div>
  </form>
</div>
</body>
</html>