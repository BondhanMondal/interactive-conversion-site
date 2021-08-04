<?php 

	include 'dbconnect.php';

	function liveSearch( $name) {
		$conn = connect();

		// $stmt = $conn->prepare("SELECT id, username FROM USERS WHERE username  LIKE username = ?");
		// $stmt->bind_param("s", $name,);
		// $records = $stmt->get_result();
		// return $records->fetch_all(MYSQLI_ASSOC);


		$sql = "select * from history where username like '%{$name}%'";
		$result = mysqli_query($conn, $sql);
		return $result->fetch_all(MYSQLI_ASSOC);



	}

	function addConversionRate($category, $unit, $rate){
		$conn = connect();
		$stmt = $conn->prepare("INSERT INTO category (category, unit, rate)
			Values(?, ?, ? )");

		$stmt->bind_param("sii", $category, $unit, $rate);

		return $stmt->execute();
	}


	function history() {
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM history");
		$stmt->execute();
		$records = $stmt->get_result();
		return $records->fetch_all(MYSQLI_ASSOC);		
	}

?>