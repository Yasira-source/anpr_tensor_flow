<?php
include('inc/db/connection_db.php');
		if(isset($_GET['id'])){
    $id = $_GET['id'];

  $conn = $pdo->open();
        	$stmt = $conn->prepare("UPDATE `hotlist_drivers` SET `_status`=1 WHERE _hot_id=:id");
		$stmt->execute(['id'=>$id]);
		
		$_SESSION['success']="Driver Cleared Successfully";
 header('location: hotlist_individuals.php');
    }
else{
    $_SESSION['error']="Process Failed , Kindly try again to clear the Driver";
    header('location: hotlist_individuals.php');
   
}
?>