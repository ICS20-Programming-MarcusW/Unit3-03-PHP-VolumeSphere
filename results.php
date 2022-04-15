<?php
	// get the radius from the text fields
	$base = $_POST['base1'];

	// calculate the volume
	$volume = (4/3) * pi() * ($base ** 3)
?>
<h3>Results:</h3>
The volume of the sphere  is <?php echo number_format($volume, 2) ?>cm<sup>3</sup>.