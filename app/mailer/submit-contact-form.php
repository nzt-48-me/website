<?php
# Check If Request Is From Ajax & Method Is POST
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && $_SERVER['REQUEST_METHOD'] == 'POST') {

    # Diplay Errors
    # Uncomment when debugging
    /**
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set("log_errors", '1');
    ini_set("error_log", "error.log");
    */

    # Form Data
    $form_json = json_decode($_POST['data'], true);
	# The Name
	$user_name = $form_json['name'];
	# The Email
	$user_email = $form_json['email'];
	# The Phone
	$user_phone = $form_json['phone'];
	# The Message
	$user_message = $form_json['message'];
	
	# Include Swift Mailer Library
    require_once 'swift_mailer/swift_required.php'; 
	
	## Replace With Your SMTP Details !!
	$smtp_server = 'YOUR.SMTP.SERVER';
	$smtp_port = 'YOUR.SMTP.PORT';
	$smtp_username = 'YOUR.SMTP.USERNAME';
	$smtp_pass = 'YOUR.SMTP.PASSWORD';

    # Email template ($responder_template)
    include 'templates/contact-responder.php';

	# The Transport
    $transport = Swift_SmtpTransport::newInstance(
		$smtp_server, 
		$smtp_port
	)
    ->setUsername($smtp_username)
    ->setPassword($smtp_pass);

    #Init
    $mailer = Swift_Mailer::newInstance($transport);
	
	## Replace With Your Details !!!
	$email_to = $user_email;
	$email_to_name = $user_email;
	$email_from = 'FROM.EMAIL';
	$email_from_name = 'FROM.NAME';
	$email_subject = 'Online Contact Form';

	# The Email
	$responder_mail = Swift_Message::newInstance()
        ->setFrom(array($email_from => $email_from_name))
        ->setSubject($email_subject)
        ->setTo(array($email_to => $email_to_name))
		->setBody($responder_template, 'text/html')
    ;

	# Send -> -> ->
	if($mailer->send($responder_mail)){
		#Return Succes JSON for jQuery
		$response_array = array(
			"status" => "success",
			"message" => "Successfully Submitted. Thank You."
		);
	}else{
		#Return Error JSON for jQuery
		$response_array = array(
			"status" => "error",
			"message" => "Error Sending Email."
    	);
	}

	# Return
    header('Content-type: application/json');
    echo json_encode($response_array);
}

#Kill
unset($_POST);
exit();