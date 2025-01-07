<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//generate voters id
		// $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		// $voter = substr(str_shuffle($set), 0, 15);

		$voter = $_POST['voters_id'];
		$sql_check = "SELECT * FROM voters WHERE voters_id = $voter";
		$result = $conn->query($sql_check);
		
		if ($result->num_rows > 0){
			$_SESSION['error'] = 'Voter ID Already exists';
		}
		else{
			
			$sql = "INSERT INTO voters (voters_id, password, firstname, lastname, photo) VALUES ('$voter', '$password', '$firstname', '$lastname', '$filename')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Voter added successfully';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
			
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>