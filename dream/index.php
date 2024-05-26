<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css"></link>

     <title>DREAM</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../img/2.png" type="../image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/responsive.css">
  </head>
  <body>
  	<div class="container">
  			<?php
					if ($file = fopen("generated_l_ed.txt", "r")) {
					    while(!feof($file)) {
					        $myArray = [];
					        $line = fgets($file);
					        array_push($myArray, $line);

					        for($i = 0; $i < 2; $i++) {
					        	$line = fgets($file);
					        	array_push($myArray, $line);
					        }

					        echo('<div style="display:block; text-align: center;">'.$myArray[0].'</div>');
					        echo('<div class="row">');
					        echo('<div class="col">');
					        echo('<span class="row justify-content-center align-self-center" style="color: blue;">'.$myArray[1].'</span>');
					        echo('</div>');
					        echo('<div class="col">');
					        echo('<span class="row justify-content-center align-self-center" style="color: violet;">'.$myArray[2].'</span>');
					        echo('</div>');
					        echo('</div>');
					    }
					    fclose($file);
					}
				?>
		</div>
 </body>
</html>