<?php
include ('inc/db/session.php');
?>
<?php
if(isset($_GET["transaction_id"]) AND isset($_GET["status"])  AND isset($_GET["tx_ref"])){
    $trans_id = htmlspecialchars($_GET['transaction_id']);
    $trans_status = htmlspecialchars($_GET['status']);
    $trans_ref = htmlspecialchars($_GET['tx_ref']);
$vno = $_GET['vno'];
$route = $_GET['route'];
    //Verify Endpoint
    $url = "https://api.flutterwave.com/v3/transactions/".$trans_id."/verify";

    //Create cURL session
    $curl = curl_init($url);

    //Turn off SSL checker
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

    //Decide the request that you want
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    
    //Set the API headers
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer FLWSECK-db65c77225cca42ee5024d9436873145-X",
        "Content-Type: Application/json"
    ]);

    //Run cURL
    $run = curl_exec($curl);

    //Check for erros
    $error = curl_error($curl);
    if($error){
        die("Curl returned some errors: " . $error);
    }

   //echo"<pre>" . $run . "</pre>";
   //Convert to json obj
   $result = json_decode($run);

  $status = $result->data->status;
  $message = $result->message;
  $id = $result->data->id;
  $reference =  $result->data->tx_ref;
  $amount =  $result->data->amount;
  $charged_amount = $result->data->charged_amount;
  $fullName =  $result->data->customer->name;
  $email =  $result->data->customer->email;
  $phone =  $result->data->customer->phone_number;

  if(($status != $trans_status) OR ($trans_id != $id)){
      $_SESSION['error']="Payment Process failed. Try agin !";
     header("Location: add_toll_payment.php");
     exit;
  }else{
      //Give value
      $conn = $pdo->open();
      $stmt = $conn->prepare("INSERT INTO `toll_payments`
      ( `_user`, `_fnames`, `_phoneno`, `_amount`, `_vno`, `_emailaddress`, `_route`, `_status`, `_ref`, `_transid`, `_charges`) VALUES 
      (:user,:fname,:phone,:amount,:vno,:email,:route,:status,:ref,:trans,:charge)");
  $stmt->execute(['user'=>$admin['_uid'],'fname'=>$fullName,'phone'=>$phone,'amount'=>$amount,'vno'=>$vno,'email'=>$email,'route'=>$route,'status'=>$status,'ref'=>$reference,'trans'=>$id,'charge'=>$charged_amount]);
 $_SESSION['success']="Payment Completed Successfully !";
 header("Location: citizen_toll_payments.php");

  }
  curl_close($curl);

}else{
    $_SESSION['error']="Payment Process failed. Try agin !";
    header("Location: add_toll_payment.php");
     exit; 
}
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rave or Flutterwave Integration in PHP and cURL</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <h1>Rave Verification Page!</h1>
   <hr>
   <div class="container verify">
    <table>
    <tr>
       <th>Full Name</th>
       <th>Phone Number</th>
       <th>Email</th>
       <th>Transaction Status</th>
       <th>Reference</th>
       <th>Transaction Id</th>
       <th>Amount</th>
       <th>Charged Amount</th>
       </tr>
       <tr>
           
       </tr>
    </table>
   </div> 
</body>
</html> -->