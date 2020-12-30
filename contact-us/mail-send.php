<?php
// var_dump($_FILES);
// die();

include "../mailer/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;


	/*---------*/

	$cont_fname = $_POST["user_name"];
	$cont_lname  = $_POST["user_name1"];
	$cont_email = $_POST["user_email"];
	$cont_p1= $_POST["phone1"];
	$cont_p2 = $_POST["phone2"];	
	$cont_p3 = $_POST["phone3"];
	$cont_draft = $_POST["message2"];
	// $cont_mri = $_POST["cont_mri"];





	$cont_message = $_POST["cont_message"];
	$from_mail = "fe@gmicro.us";
	$doc_mail = "CMCL Contact Form";

	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

				  <tr><td style='font-size:1.3em;' colspan='2'><strong>Appointment details</strong></td></tr>
				   


					 <tr>
					   <td align='left' width='35%'><strong>Name:</strong></td>
					   <td align='left' width='60%'>
					    ".  $cont_fname ." - ".  $cont_lname ."</td>
					 </tr>

					 <tr>
					   <td align='left' width='35%'><strong>Email :</strong></td>
					   <td align='left' width='60%'>
					   ". $cont_email ."</td>
					 </tr>

					 <tr>
					   <td align='left' width='35%'><strong>Telephone:</strong></td>
					   <td align='left' width='60%'>
					    ".  $cont_p1 ." - ".  $cont_p2 ." - ".  $cont_p3 ."</td>
					 </tr>

					 
					 
					

					<tr>
					   <td align='left' width='35%'><strong>Message :</strong></td>
					   <td align='left' width='60%'>
					   ". $cont_draft ."</td>
					 </tr>

					 

					 
				   </table>";


				   

$mail = new PHPMailer(true);

try {
//From email address and name
$mail->From = $from_mail;
$mail->FromName = $doc_mail;

//To address and name
// $mail->addAddress("sccintake@cmclancaster.com", "Origin");
// $mail->addAddress("kalpesh@specialtycareclinics.com", "Tech Head");
$mail->addAddress("content@gmicro.us", "IT Team");
// $mail->addAddress("aarielalmeida88@gmail.com", "IT Team");
// $mail->addAddress("seo@gmicro.us", "IT Team");
	// var_dump($_POST);
	// exit();
// $mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'fe@gmicro.us';                     // SMTP username
$mail->Password   = 'Command55';                               // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;
	 
$mail->isHTML(true);
$mail->Subject = "Referral Form";
$mail->Body = $message;

	$mail->send();
	 // $location = $_POST["location"];

	 
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
		 
				  
		//if(mail("content@gmicro.us, fe@gmicro.us", $subject, $message, $headers))
		echo "Your enquiry has been sent successfully..";
	} catch (Exception $e) {
		echo $e;
		echo "Something went wrong";	 
		}

		
		//$msg = "Your enquiry has been sent successfully.";
		
	
?>