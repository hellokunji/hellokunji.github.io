<?php
	#FORM DATA
	$name= $_POST['name'];
	$phone= $_POST['phone'];
	$email= $_POST['email'];
	$message= $_POST['message'];

	#RECIPIENT EMAIL
	$recipient_email= "hellokunjimeena@gmail.com";

    $boundary= md5("sanwebe");
    #HEADERS
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "From:".$email."\r\n"; 
	$headers .= "Content-Type: multipart/mixed; boundary=\"".$boundary."\"";

    #BODY MESSAGE
    $body_msg= "Hello Deepak, "."\r\n";
    $body_msg.= "Client Name - ".$name."\r\n";
    $body_msg.= "Client Phone - ".$phone."\r\n";
    $body_msg.= "Client Email - ".$email."\r\n";
    $body_msg.= "Client Message - ".$message."\r\n";
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
    $body .= chunk_split(base64_encode($body_msg)); 

    #SUBJECT
    $subject= "Client Email From ".$name;

	$sendMail = @mail($recipient_email, $subject, $body, $headers);

	$resObject = new stdClass();
	$message;

	if($sendMail){
		$message= "no_error";
	}
	else{
		$message= "some_error";
	}
	$resObject->message= $message;
	echo json_encode($resObject);
?>