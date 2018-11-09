<?php

if(isset($_POST['submit'])) {
    
    
 $Task = $_POST['task'];

    
$connection = mysqli_connect('localhost','root','','spurs');    
    
    
 $hart = "INSERT INTO tasks(name)";
    
$hart.= "VALUES('$Task')";


mysqli_query($connection,$hart);
}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task</title>
</head>
<body>
   <form action="task_description.php" method="post">
       <input type="task" name= 'task' placeholder="Enter Task">
       <br>
       <input type="submit" name="submit">
       
       <br>
       
        <?php 
$connection = mysqli_connect('localhost','root','','spurs');            
$data = "SELECT * FROM tasks";
$result = $connection->query($data);

if ($result->num_rows > 0) {

 while ($row = mysqli_fetch_array ($result))  {
       echo "$row[id] . $row[name] <a href='edit.php?edit=$row[0]'>edit </a> <br/>";
      
        
    }
} else {
    echo "0 results";
}
        ?>
       
       
      
       
       
       
   </form>
</body>
</html>