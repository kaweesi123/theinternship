<?php
header("Content-type:text/plane");

$phone_number - $_POST['phoneNumber'];

$textFromUser - $_POST['text'];

$sessionID = $_POST['sessionId'];

$serviceCode - $_POST['serviceCode'];

if(empty($textFromUser)){

	$textFromUser = "0";

}else{
	$textFromUser - "0*".$textFromUser;

}

$inputArray = explode("*", $textFromUser);

$level - count($inputArray);

switch ($level){

	case 1:

	$response - "CON Welcome to the Climate (U) Limited";

	$response .= "\n 1. Register";

	$response .= "\n 2. Add a tree";

    echo $response;

    break;

    case 2:

    if($inputArray[1]) -- 1) {

	echo "CON What is your name?";


}elseif ($inputArray[1] -- 2) {

}else{
	echo "END Invaild option";

}

break;

case 3:
   


   break;

   default:

   echo"The option selected is not valid";

   break;

}




