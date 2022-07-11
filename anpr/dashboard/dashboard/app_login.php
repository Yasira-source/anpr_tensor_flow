<?php
	include ('inc/db/session.php');
	$conn = $pdo->open();

	if(isset($_GET['phone'])){
		
	
		$phone = $_GET['phone'];
	
		$password = $_GET['password'];
        
		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS nn FROM `users` WHERE _phone=:phone AND _password=:pass");
			$stmt->execute(['phone'=>$phone,'pass'=>$password]);
          $rown = $stmt->fetch();
          if($rown['nn']>0){
              	$stmt1 = $conn->prepare("SELECT * FROM `users` WHERE _uid=:phone");
			$stmt1->execute(['phone'=>$rown['_uid']]);
			 $userArr = array();
        $userArr["data"] = array();
         $userArr["success"] = true;
         $userArr['statusCode']="200";
         $userArr['message']="You've logged in successfully !";
			foreach($stmt1 as $row){
			      $u = array(
                "_uid" => $row['_uid'],
                "_role" => $row['_role'],
                "_email" => $row['_email'],
                "_fullnames" => $row['_fullnames'],
                "_address" => $row['_address'],
                "_phone" => $row['_phone'],
                
            );

            array_push($userArr['data'], $u);
			}
			  http_response_code(200);
        echo json_encode($userArr);
			
          }else{
               $userArr = array();
        $userArr["data"] = array();
         $userArr["success"] = false;
         $userArr['statusCode']="401";
         $userArr['message']="Login failed !";

        http_response_code(200);
        echo json_encode($userArr);
          }
			
		
			
			
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}
      
  
   
			
	}
	else{
	 $userArr = array();
        $userArr["data"] = array();
         $userArr["success"] = false;
         $userArr['statusCode']="401";
         $userArr['message']="Login failed !";

        http_response_code(200);
        echo json_encode($userArr);

	}

	$pdo->close();

// 	exit();

?>