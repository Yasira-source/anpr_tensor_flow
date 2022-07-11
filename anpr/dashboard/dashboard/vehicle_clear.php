<?php
include('inc/db/connection_db.php');
		if(isset($_GET['id'])){
    $id = $_GET['id'];

  $conn = $pdo->open();
        	$stmt = $conn->prepare("UPDATE `hotlist_vehicles` SET `status`=1 WHERE hotlist_id=:id");
		$stmt->execute(['id'=>$id]);
		
		$_SESSION['success']="Vehicle Cleared Successfully";
 header('location: hotlist.php');
    }
else{
    $_SESSION['error']="Process Failed , Kindly try again to clear the Vehicle";
    header('location: hotlist.php');
   
}
?>