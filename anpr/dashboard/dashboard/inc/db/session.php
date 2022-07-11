<?php
session_start();
	include 'connection_db.php';
	
	if(isset($_SESSION['admin']) && $_SESSION['admin']!==""){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM users WHERE _uid=:id");
			$stmt->execute(['id'=>$_SESSION['admin']]);
			$admin = $stmt->fetch();
// 			$_SESSION['success']="SESSION SET";
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}
	else if(isset($_SESSION['officer']) && $_SESSION['officer']!==""){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM users WHERE _uid=:id");
			$stmt->execute(['id'=>$_SESSION['officer']]);
			$admin = $stmt->fetch();
// 			$_SESSION['success']="SESSION SET";
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	} 	else if(isset($_SESSION['citizen']) && $_SESSION['citizen']!==""){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM users WHERE _uid=:id");
			$stmt->execute(['id'=>$_SESSION['citizen']]);
			$admin = $stmt->fetch();
// 			$_SESSION['success']="SESSION SET";
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	} 

	else{
	    $_SESSION['error']="You need to login first !";
	}
?>