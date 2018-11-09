<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task</title>
</head>
<body>
  <?php
    
 $connection = mysqli_connect('localhost','root','','spurs');   
$data = "SELECT * FROM tasks";
$result = mysqli_query($connection, $data);
if(!$result) {
        die("Database connection failed");
}
?>



   <form action="task_update.php" method="post">
       <input type="task" name= 'task' placeholder="Enter Update">
       <br>
       <input type="submit" value="update">
       
       <br>
       
       <select name="" id="">
 <?php 
if (isset ($_POST ['submit'])) {
    
    $task= $_POST['submit'];  
    if(mysqli_query("INSERT INTO tasks  VALUES('$id',$Task')"))
     echo "Sucessful Insertion!";
     else
        echo "Please try again";
}
           
    
    $id = $_POST['id'];   
    
    $query = "UPDATE tasks SET name = 'task' WHERE  id  = $id ";
    

    $result = mysqli_query($connection, $data);      
           
    while ($row = mysqli_fetch_array ($result)) {
        $id =$row ['id'];
     
        echo "$row['id'] . $row['submit']";
            
            
            //"<option value='$id'> $id </option>";
    }
        
?>
        
               
           
       </select>
       
        <br>
         
       
   </form>
</body>
</html>