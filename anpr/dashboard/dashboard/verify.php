<?php
	include ('inc/db/session.php');
	$conn = $pdo->open();

	if(isset($_POST['submit'])){
		
		$code = $_POST['code'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE _phone = :phone");
			$stmt->execute(['phone'=>$phone]);
			$row = $stmt->fetch();
			if($row['numrows'] == 1){
				
					if($password==$row['_password']){
					    if($row['_role']==1){
							$_SESSION['admin'] = $row['_uid'];
					    }else if($row['_role']==2){
					        $_SESSION['officer'] = $row['_uid'];
					    }else if($row['_role']==3){
					        $_SESSION['citizen'] = $row['_uid'];
					    }else{
					        $_SESSION['error'] = 'System role does not exist';
					    }
					}
					else{
						$_SESSION['error'] = 'Incorrect Password';
					}
			
			} 
		
				else{
					
					$_SESSION['error'] = 'Invalid Phone Number';
				}
			
			
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Input login credentails first';
	}

	$pdo->close();

	header('location: login.php');
// 	exit();

?>