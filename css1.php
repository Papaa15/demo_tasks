<!DOCTYPE html>
<html>
<title>Task.template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">


<style>
    
body {font-family: "Raleway", Arial, sans-serif}
.w3-row img {margin-bottom: -8px}
</style>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

  <!-- Header -->
  <header class="w3-container w3-xlarge w3-padding-24">
    <a><i>Tasks</i></a>
    <a href="#about" class="w3-right w3-button w3-white">Tasks</a>
  </header>

  <!-- Photo Grid -->
  <div class="w3-down">
    <div class="w3-half">
      <img src="http://localhost:8012/test/tasks.png" style="width:50%">
      
<!-- End Page Content -->
</div>

<!-- Footer / About Section -->
<footer class="w3-light-grey w3-padding-64 w3-center" id="about">
  <h2>About</h2>
  <form style="margin:auto;width:60%" action="css1.php" method="post">

  
   <br>

    <div>
      <label><b>Tasks</b></label>
      <input class="w3-input w3-border" required name="Tasks">
    </div>
    <button type="submit" name="submit" class="w3-button w3-block w3-dark-grey">Submit</button>
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
  <br>
</footer>
 
</body>
</html>
