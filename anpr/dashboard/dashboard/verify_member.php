<?php
include('../../inc/db/connection_db.php');
		if(isset($_POST['fname'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $profession = $_POST['profession'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $whatsapp = $_POST['whatsapp'];
    $otherContact = $_POST['otherContact'];
    $email = $_POST['email'];
    $keen = $_POST['keen'];
    $kphone = $_POST['kphone'];
    $refer = $_POST['refer'];
  $reason =$_POST['reason'];
  $photo=$_POST['photo'];
  $referphone =$_POST['referPhone'];
  $gender=$_POST['gender'];
  $conn = $pdo->open();
        	$stmt = $conn->prepare("INSERT INTO `membership`(`fname`, `lname`, `profession`, `nationality`, `physical_address`, `whatsapp_contact`, `other_phone`, `email`, `next_of_keen_name`, `next_of_keen_phone`, `photo`, `referral`, `join_reason`,`gender`, `recom_phone`) VALUES (:fname,:lname,:prof,:nation,:padd,:wcontact,:phone,:email,:kname,:kphone,:photo,:refer,:reason,:gender,:recom)
           ");
		$stmt->execute(['fname'=>$fname,'lname'=>$lname,'prof'=>$profession,'nation'=>$nationality,'padd'=>$address,'wcontact'=>$whatsapp,'phone'=>$otherContact,'email'=>$email,'kname'=>$keen,'kphone'=>$kphone,'photo'=>$photo,'refer'=>$refer,'reason'=>$reason,'gender'=>$gender,'recom'=>$referPhone]);
		
$to = "membership@eaoug.org";
$subject = "New Member Registration - EAO";
$txt = "Kindly, check out to follow up on new registrations made via EAO website of new Members who wish to join the Membership team\n".$fname." ".$lname." Wishes to Join Us. Phone Number: ".$whatsapp."\nThanks for Immediate response.";
$headers = "From: info@eaoug.org" . "\r\n" .
"CC: admin@eaoug.org";

mail($to,$subject,$txt,$headers);

		
$to = $email;
$subject = "Congratulations !";
$txt = "Dear <strong>".$fname." ".$lname."</strong>\nThank you for joining Educate An Orphan Uganda. You are kindly reminded to settle your membership committment fee of 10,000 UGX or its equivalent to activate your Membership.\nWe appreciate your generous support towards Orphan Education.\nMay the Almighty Allah reward you in abundance.\nKindly, feel free to contact Us via +256759198910 or membership@eaoug.org\nThank you !";
$headers = "From: info@eaoug.org" . "\r\n" .
"CC: admin@eaoug.org";

mail($to,$subject,$txt,$headers);

		echo '
    <html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>Dear <strong>'.$fname.' '.$lname.'</strong>,'.'<br>We received your  Submission request to join Educate An Orphan Uganda<br/> and your Account has been created but its Currently not active.<br/>Only One step is left to get your account activated</p>
        <p>Kindly Complete the Payment of a commitment fee of 10,000 UGX or its equivalent by clicking on the link below </p><br>
             <p><a href="https://flutterwave.com/pay/cetbgc5lngjn" style=" background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;"><strong>Online Payments Via Flutter Wave</strong></a></p><br>
        <p>** Note that if you choose to pay using offline methods below ,<br> You will have to contact Us on +256759198910 to inform us of the payment made before your account is activated.</p><br><br>
        <p>Direct Mobile Money : 
        <ul>
        <li>0707777111 (AIRTEL MONEY UGANDA)</li>
        <li>0776103594 (MTN MOBILE MONEY UGANDA)</li>
        </ul>
         </p>
        <p>Via Tropical Bank Account - 0010357667 as the A/C</p><br>
    
  
   
      </div>
    </body>
</html>
    ';
    }
else{
    $_SESSION['error']="Process Failed , Kindly Re-fill the form below.\n OR Contact System Administrator on +256789684676";
    header('location: member_registration.php');
}
?>