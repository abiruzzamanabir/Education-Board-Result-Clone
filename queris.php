<?php 

if (isset($_GET['submit'])) {
	$dept = $_GET['dept'];
	$year = $_GET['year'] ?? "";
	$board = $_GET['board'] ?? "";
	$roll = $_GET['roll'];
	$reg = $_GET['reg'];


	if (empty($dept) || empty($year) || empty($board) || empty($roll) || empty($reg)) {
		$msg = "<p class=\"alert alert-danger d-flex justify-content-between\">All Fields Are Required ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
    } 
	else {
        $data = $connection->query("SELECT * FROM studentinfo  WHERE roll='$roll' AND reg='$reg'");
        $student_data = $data->fetch_object();
        $id = $student_data->id ?? "";
        $deptt = $student_data->dept ?? "";
        $yearr = $student_data->year ?? "";
        $boardd = $student_data->board ?? "";
        $rollno = $student_data->roll ?? "";
        $regno = $student_data->reg ?? "";

        if($roll==$rollno && $reg==$regno && $deptt==$dept && $year==$yearr && $board==$board){
            header("location:./search.php?id=$id");
        }
       else{
        $msg = "<p class=\"alert alert-danger d-flex justify-content-between\">Data Not Matched ! <button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
       }

	}
}

?>