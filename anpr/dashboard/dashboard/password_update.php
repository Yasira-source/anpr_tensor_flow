<?php
	include '../../inc/db/session.php';


	if(isset($_POST['submit'])){
		$email = $_POST['email'];

	
			$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM admin WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();

			if($row['numrows'] == 1){
				$password = mt_rand(1000,9999);

				try{
					$stmt = $conn->prepare("UPDATE admin SET password=:password WHERE id=:id");
					$stmt->execute(['password'=>$password, 'id'=>$row['id']]);

 $to      = $email;
    $subject = 'Educate An Orphan Uganda - Password Reset';
    $message = 'Your Temporary Password is '.$password.'<br>Kindly , Use It to login and Update to desired Password Under Edit Profile on the Dashboard';
    $headers = 'From: admn.eaoug@gmail.com '       . "\r\n" .
                 'Reply-To: admn.eaoug@gmail.com ' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
					$_SESSION['success'] = 'Password successfully reset<br>Temporary Password has been Sent to your Email<br>Use It to login and Update your Password Under Edit Profile Option.';
					header('location: admin_login.php');
				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
					header('location: password_reset.php');
				}
			}
			else{
				$_SESSION['error'] = 'Sorry , You Must use a registered Email Address<br>Try Again - OR <br>Contact System Admin on +256702146392';
				header('location: password_reset.php');
			}

			$pdo->close();
		

	}
	else{
		$_SESSION['error'] = 'Kindly Enter Valid Email Address';
		header('location: password_reset.php');
	}

?>