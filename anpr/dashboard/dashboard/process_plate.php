<?php
include ('inc/db/session.php');

$region = $_GET['region'];
$country = $_GET['country'];
// CREATE FILE READY TO UPLOAD WITH CURL
$file = realpath('../assets/np/'.$_GET['file']);
if (function_exists('curl_file_create')) { // php 5.5+
  $cFile = curl_file_create($file);
} else {
  $cFile = '@' . realpath($file);
}

//ADD PARAMETER IN REQUEST LIKE regions
$data = array(
    'upload' => $cFile, // Optional
);

// Prepare new cURL resource
$ch = curl_init('https://api.platerecognizer.com/v1/plate-reader/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2TLS);

// Set HTTP Header for POST request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Token f6640cd58c380d9bc962d0fbc4b61acd008f136e"  //API KEY
    )
);
  //Run cURL
  // // Submit the POST request and close cURL session handle
// $result = curl_exec($ch);
// var_dump($result);exit;
// curl_close($ch);
  $run = curl_exec($ch);

 //Check for erros
 $error = curl_error($ch);
 if($error){
     die("Curl returned some errors: " . $error);
 }

//echo"<pre>" . $run . "</pre>";
//Convert to json obj
$result = json_decode($run,true);

$processing_time = $result['processing_time'];
$no_plate = $result['results'][0]['plate'];
$type = $result['results'][0]['vehicle']['type'];
$xmin = $result['results'][0]['vehicle']['box']['xmin'];
$ymin = $result['results'][0]['vehicle']['box']['ymin'];
$xmax = $result['results'][0]['vehicle']['box']['xmax'];
$ymax = $result['results'][0]['vehicle']['box']['ymax'];
$make = "";
$model = "";
$color = "";
$orientation = "";
$time_stamp = $result['timestamp'];
$accurancy = $result['results'][0]['score'];

$to_crop_array = array('x' =>$xmin , 'y' => $ymin, 'width' => $xmax, 'height'=> $ymax);
$src = imagecreatefromjpeg('../assets/np/'.$_GET['file']);
$no_image = imagecrop($src, $to_crop_array);

// if(($status != $trans_status) OR ($trans_id != $id)){
//    $_SESSION['error']="Payment Process failed. Try agin !";
//   header("Location: processed_plates.php");
//   exit;
// }else{
   //Give value
   $conn = $pdo->open();
   $stmt = $conn->prepare("INSERT INTO `demos`(`names`, `country`, `image`, `region`, `no_plate`, `make`, `model`, `color`, `other_options`, `processing_time`, `no_image`, `accurancy`, `time_stamp`) VALUES 
   (:names,:country,:image,:region,:no_plate,:make,:model,:color,:others,:duration,:no_image,:accurancy,:time_stamp)");
$stmt->execute(['names'=>$admin['_fullnames'],'country'=>$country,'image'=>$_GET['file'],'region'=>$region,'no_plate'=>$no_plate,'make'=>$make,'model'=>$model,'color'=>$color,'others'=>$orientation,'duration'=>$processing_time,'no_image'=>$no_image,'accurancy'=>$accurancy,'time_stamp'=>$time_stamp]);
$_SESSION['success']="Detection Completed Successfully !";
header("Location: processed_plates.php");

// }
curl_close($curl);

?>