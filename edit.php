<?php
 $connection = mysqli_connect('localhost','root','','spurs');   

 if(isset ($_GET['edit'])) { 
    $id=$_GET['edit']; 
    $data = ("SELECT * FROM tasks WHERE id='$id'");
    $result = mysqli_query($connection, $data);
    $row= mysqli_fetch_array($result);
    
}

if( isset($_POST['newName'])){
    $newName = $_POST['newName'];
    $id= $_POST['id'];
    $query= "UPDATE tasks SET name = '$newName' WHERE  id  = '$id' ";
    $result= mysqli_query($connection,$query) or die ("Could not update".mysqli_error);
    echo "<meta http-equiv= 'refresh' content='0; url=task_description.php'>"; 
    // redirect to tasks.php

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>headache</title>
</head>
<body>

    <form action="edit.php" method="POST">

    Task name: <input type="text" name="newName" value="<?php echo @$row[1];?>">
    <input type="hidden" name="id" value="<?php echo @$row[0];?>">  
    <input type="submit" value="update">
  
        
    </form>
</body>
</html>