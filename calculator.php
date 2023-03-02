<!DOCTYPE html>
<html>
<head>
	<title>Replacement Window Cost Calculator</title>
</head>
<body>

	<?php

	// Define variables for window dimensions and cost
	$width = $_POST['width'];
	$height = $_POST['height'];
	$price = 250; // price per square foot

	// Calculate the area of the window
	$area = $width * $height;

	// Calculate the total cost of the replacement window
	$total_cost = $area * $price;

	// Display the result to the user
	echo "<h2>Replacement Window Cost Calculator</h2>";
	echo "<p>The total cost for a replacement window with dimensions $width\" x $height\" is: $".number_format($total_cost, 2)."</p>";

	?>

	<form method="post">
		<label for="width">Width (inches):</label>
		<input type="number" name="width" required><br>
		<label for="height">Height (inches):</label>
		<input type="number" name="height" required><br>
		<input type="submit" value="Calculate">
	</form>

</body>
</html>
