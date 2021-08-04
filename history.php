<?php

	include 'dboperations.php';

	$data = $_REQUEST['category'];

	if(empty($_GET['search']) or empty($_GET['category'])) {
		$result = history();
	}
	else
		$result = liveSearch($data);
		

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<h1 style="color: red;">Page 3 [History]</h1>
	<h2 style="color: red;">Conversion Site</h2>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
		<a href="home.php" style="color: blue;">1. Home</a>
		<a href="conversion-rate.php" style="color: blue;">2. Conversion Rate</a>
		<a href="history.php" style="color: blue;">3. History</a>

		<br><br>

		<input type="text" name="category" id="category" value="<?php if(isset($_REQUEST['category'])) echo $data; ?>" onkeyup="search()">
		<input type="submit" name="search" id="search" value="Search" onclick="">
	</form>

	<div id='result'></div>


	<?php

		echo "<table>";
		echo "<tr>";
		echo "<th>id</th>";
		echo "<th>Category</th>";
		echo "<th>Value</th>";
		echo "<th>Result</th>";
		echo "</tr>";
		for($i = 0; $i<count($result); $i++) {
			echo "<tr>";
			echo "<td>" . $result[$i]["id"] . "</td>";
			echo "<td>" . $result[$i]["category"] . "</td>";
			echo "<td>" . $result[$i]["value"] . "</td>";
			echo "<td>" . $result[$i]["result"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>

</body>
</html>