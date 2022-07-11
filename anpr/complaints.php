<?php
	include ('dashboard/dashboard/inc/db/session.php');
	$conn = $pdo->open();

	if(isset($_POST['submit'])){
		
        $names = $_POST['first_name'];
        $city = $_POST['state_name'];
        $tel = $_POST['tel'];
        $address = $_POST['text-844'];
        $message = $_POST['textarea-960'];
        // $names = $_POST['first_name'];
$descri = "";
		try{

			$stmt = $conn->prepare("INSERT INTO `complaints`
            (`_names`, `_message`, `_description`,`city`,`phone`,`address`) VALUES 
            (:names,:message,:descri,:city,:phone,:address)");
			$stmt->execute(['phone'=>$tel,'names'=>$names,'message'=>$message,'descri'=>$descri,'city'=>$city,'phone'=>$tel,'address'=>$address]);
		
            $_SESSION['success'] = 'Complaint Submitted Successfully !';
			
		
				
			
			
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Kindly fill the complaints form first !';
	}

	$pdo->close();

	header('location: index.php');
// 	exit();

?>