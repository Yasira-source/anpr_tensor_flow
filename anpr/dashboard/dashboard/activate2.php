<?php
include('inc/db/connection_db.php');
		if(isset($_GET['id'])){
    $id = $_GET['id'];

  $conn = $pdo->open();
        	$stmt = $conn->prepare("UPDATE `admin` SET voting_status=1 WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		
		$_SESSION['success']="Status Activated Successfully";
 header('location: index.php');
    }
else{
    $_SESSION['error']="Process Failed , Kindly try again to activate the Status";
    header('location: index.php');
   
}
?>