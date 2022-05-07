<?php 

if (isset($_POST['submit'])) {
	$dept = $_POST['dept'];
	$year = $_POST['year'] ?? "";
	$board = $_POST['board'] ?? "";
	$roll = $_POST['roll'];
	$reg = $_POST['reg'];


	if (empty($dept) || empty($year) || empty($board) || empty($roll) || empty($reg)) {
		header("location:./?error=All Fields Are Required !");
    } 
	else {
        $data = $connection->query("SELECT * FROM studentinfo  WHERE roll='$roll' AND reg='$reg' AND dept='$dept' AND year='$year' AND board='$board'");
        $student_data = $data->fetch_object();
	}
}

?>