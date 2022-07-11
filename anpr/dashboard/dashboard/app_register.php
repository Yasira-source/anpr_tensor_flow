<?php
	include ('inc/db/session.php');
	$conn = $pdo->open();

	if(isset($_GET['name'])){
		
		$names = $_GET['name'];
		$code = "+256";
		$phone = $_GET['phone'];
		$email = $_GET['email'];
		$address = "";
		$password = $_GET['password'];
        
		try{

			$stmt = $conn->prepare("INSERT INTO `users`
            (`_phone`, `_email`, `_password`, `_fullnames`, `_role`, `_address`, `code`) VALUES 
            (:phone,:email,:pass,:names,:role,:address,:code)");
			$stmt->execute(['phone'=>$phone,'code'=>$code,'email'=>$email,'address'=>$address,'pass'=>$password,'role'=>3,'names'=>$names]);
            // $_SESSION['success'] = 'Registered Successfully !';
          
			
		
			
			
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}
      
   $userArr = array();
        $userArr["data"] = array();
         $userArr["success"] = true;
         $userArr['statusCode']="200";
         $userArr['message']="You've registered successfully !";
  
        http_response_code(200);
        echo json_encode($userArr);
    
   
			
	}
	else{
	 $userArr = array();
        $userArr["data"] = array();
         $userArr["success"] = false;
         $userArr['statusCode']="401";
         $userArr['message']="Registration failed !";

        http_response_code(200);
        echo json_encode($userArr);

	}

	$pdo->close();

// 	exit();

?>