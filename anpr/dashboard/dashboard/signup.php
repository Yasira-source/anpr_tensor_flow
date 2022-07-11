<?php
	include ('inc/db/session.php');
	$conn = $pdo->open();

	if(isset($_POST['submit'])){
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$code = $_POST['code'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];
        $names = $fname.' '.$lname;
		try{

			$stmt = $conn->prepare("INSERT INTO `users`
            (`_phone`, `_email`, `_password`, `_fullnames`, `_role`, `_address`, `code`) VALUES 
            (:phone,:email,:pass,:names,:role,:address,:code)");
			$stmt->execute(['phone'=>$phone,'code'=>$code,'email'=>$email,'address'=>$address,'pass'=>$password,'role'=>3,'names'=>$names]);
            $_SESSION['success'] = 'Registered Successfully !';
			
			
		
			
			
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}
        header('location: login.php');

	}
	else{
		$_SESSION['error'] = 'Fill the form first !';
	header('location: register.php');

	}

	$pdo->close();

// 	exit();

?>