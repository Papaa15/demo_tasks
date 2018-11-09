<?php


if (isset ($_POST ['name']))
{
    $name = $_POST['name'];
    if (mysql_query("INSERT INTO tasks VALUES ('','$name')"))
        echo "successful Insertion";
    else
        echo "Please try again";
}

$connection = mysqli_connect('localhost','root','','spurs');   
$data = "SELECT * FROM tasks";
$result = mysqli_query($connection, $data);

?>


<form action="Task.php" method="post">
Name: <input type="task" name="task"><br />
   <input type="submit" value ="submit">
</form>
<h1>List of Tasks</h1>
<?php

 while ($row = mysqli_fetch_array ($result)) 
       echo "$row[id] . $row[name] <a href='edit.php?edit=$row[0]'>edit </a> <br/>";
        ?>
        
