<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

//  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

if (25<5) {echo "65 is greater 23";}

    
elseif( 20<=12) {
  echo "of course twenty is greater than twelve";   }

    
    else {
        echo "I love PHP";
    } 
for ($mate = 23; $mate < 34; $mate++ ){
    
    echo $mate . "<br>";
}    

//	Step 2: Make a forloop  that displays 10 numbers


//	Step 3 : Make a switch Statement that test againts one condition with 5 cases



	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>