<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Calculating Volume of Sphere, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Marcus Wehbi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="icon" href="./fav_index/favicon.ico">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Volume of a Sphere in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Volume of a Sphere in PHP</h1>";
			echo "<h3>This program will calculate the volume of a sphere.</h3>";
		?>
		<!-- form to get the radius from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblBase">Radius (cm):</label>
      <input type="text" id="base1" placeholder="Enter the radius (cm)" name="base1"><br><br>
      <input type="submit" value="Calculate Volume">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The volume of the sphere is  " + $volume + cm<sup>3</sup>
	    </iframe>
	</body>
</html>