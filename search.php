<?php
include_once './db.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];
    $data = $connection->query("SELECT * FROM studentinfo  WHERE roll='$id'");
    $student_data = $data->fetch_object();
	$bn=	gpa($student_data->bn);
	$en=	gpa($student_data->en);
	$math=	gpa($student_data->math);
	$ict=	gpa($student_data->ict);
	$reli=	gpa($student_data->reli);
} else {
    header('location:./');
}

function grade($marks){

	if($marks>=80 && $marks<=100){
		echo "A+";
	}
	else if($marks>=70 && $marks<=79){
		echo "A";
	}
	else if($marks>=60 && $marks<=69){
		echo "A-";
	}
	else if($marks>=50 && $marks<=59){
		echo "B";
	}
	else if($marks>=40 && $marks<=49){
		echo "C";
	}
	else if($marks>=33 && $marks<=39){
		echo "D";
	}
	else if($marks>=0 && $marks<=32){
		echo "F";
	}
	}
	function gpa($marks){

		if($marks>=80 && $marks<=100){
			return "5.00";
		}
		else if($marks>=70 && $marks<=79){
			return "4.00";
		}
		else if($marks>=60 && $marks<=69){
			return "3.50";
		}
		else if($marks>=50 && $marks<=59){
			return "3.00";
		}
		else if($marks>=40 && $marks<=49){
			return "2.00";
		}
		else if($marks>=33 && $marks<=39){
			return "1.00";
		}
		else if($marks>=0 && $marks<=32){
			return "0.00";
		}
		}

		function cgpa($bn,$en,$math,$ict,$reli){
			$total= $bn+$en+$math+$ict+$reli;
			echo $total/5;
			
			}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Bangladesh</title>
	<link rel="stylesheet" href="assets/css/syle.css">

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/bd_logo.png">
</head>
<body>
	

	<div class="wraper">
		<div class="w-top">
			<div class="logo">
				<img src="assets/images/bd_logo.png" alt="">
			</div>
			<div class="banner">
				<h3>Ministry of Education</h3>
				<hr>
				<h4>Intermediate and Secondary Education Boards Bangladesh</h4>
			</div>
		</div>
		<div class="w-main">


				<div class="student-info">
					<div class="student-photo">
						<img src="photo/<?php echo $student_data->photo; ?>" alt="">
					</div>
					<div class="student-details">
						<table>
							<tr>
								<td>Name</td>
								<td><?php echo $student_data->name; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td><?php echo $student_data->roll; ?></td>
							</tr>
							<tr>
								<td>Reg.</td>
								<td><?php echo $student_data->reg; ?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td><?php echo $student_data->board; ?></td>
							</tr>
							<tr>
								<td>Institute</td>
								<td><?php echo $student_data->inst; ?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td><?php if ($bn>0 && $en>0 && $math>0 && $ict>0 && $reli>0 ) {
									echo 'Pass';
								}
								else{
									echo 'Fail';
								} ?></td>
							</tr>
						</table>
					</div>

				</div>

				<div class="student-result">
					<table>
						<tr>
							<td>Subject</td>
							<td>Marks</td>
							<td>Grade</td>
							<td>GPA</td>
							<td>CGPA</td>
						</tr>
						<tr>
							<td>Bangla</td>
							<td><?php echo $student_data->bn; ?></td>
							<td><?php grade($student_data->bn) ?></td>
							<td><?php echo gpa($student_data->bn) ?></td>
							<td rowspan="6"><?php if ($bn>0 && $en>0 && $math>0 && $ict>0 && $reli>0 ) {
									cgpa($bn,$en,$math,$ict,$reli);
								}
								else{
									echo 'Fail';
								} ?></td>
						</tr>
						<tr>
							<td>English</td>
							<td><?php echo $student_data->en; ?></td>
							<td><?php grade($student_data->en) ?></td>
							<td><?php echo gpa($student_data->en) ?></td>
						</tr>
						<tr>
							<td>Math</td>
							<td><?php echo $student_data->math; ?></td>
							<td><?php grade($student_data->math) ?></td>
							<td><?php echo gpa($student_data->math) ?></td>
						</tr>
						<tr>
							<td>ICT</td>
							<td><?php echo $student_data->ict; ?></td>
							<td><?php grade($student_data->ict) ?></td>
							<td><?php echo gpa($student_data->ict) ?></td>
						</tr>
						<tr>
							<td>Religion</td>
							<td><?php echo $student_data->reli; ?></td>
							<td><?php grade($student_data->reli) ?></td>
							<td><?php echo gpa($student_data->reli) ?></td>
						</tr>
					</table>
				</div>




		</div>
		<div class="w-footer">
			<div class="f-left">
				<p>©2005-<?php echo DATE('Y') ?> Ministry of Education, All rights reserved.</p>
			</div>
			<div class="f-right">
				<span>Powered by</span>
				<img src="assets/images/tbl_logo.png" alt="">
			</div>
		</div>
	</div>
	<div class="bottom">
		<img src="assets/images/play.png" alt="">
	</div>

	

	
</body>
</html>