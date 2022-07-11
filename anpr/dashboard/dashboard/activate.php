<?php
include('inc/db/connection_db.php');
		if(isset($_GET['id'])){
    $id = $_GET['id'];

  $conn = $pdo->open();
        	$stmt = $conn->prepare("UPDATE `candidates` SET status=1 WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		
		$_SESSION['success']="Candidate Activated Successfully";
 header('location: index.php');
    }
else{
    $_SESSION['error']="Process Failed , Kindly try again to activate the Candidate";
    header('location: index.php');
   
}
?>