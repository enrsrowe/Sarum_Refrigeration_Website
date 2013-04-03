<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "media@gmtspas.com";
    $email_subject = "Email enquiry from SarumRefrigeration.co.uk";
     
     
    function died($error) {
        // Error messages
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['company']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $company = $_POST['company']; // not required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $subject = $_POST['subject']; // not required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }

  //$time = date("l, F d, Y h:i" ,time()); //Get the current date and time.
  $time = new DateTime(null, new DateTimeZone('Europe/London'));
  $email_message .= "A new message has arrived from SarumRefrigeration.co.uk. \n";    
  $email_message .= "Message Submitted on: ".$time->format('d-m-Y H:i:s')."\n\n";

  //Setup Email
  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }
  $email_message .= "First Name : ".clean_string($first_name)."\n";
  $email_message .= "Last Name  : ".clean_string($last_name)."\n";
  $email_message .= "Company    : ".clean_string($company)."\n";
  $email_message .= "Email      : ".clean_string($email_from)."\n";
  $email_message .= "Telephone  : ".clean_string($telephone)."\n\n";

  $email_message .= "Subject: ".clean_string($subject)."\n\n";
  $email_message .= clean_string($message)."\n";
  $email_message .= "\n\n";
  $email_message .= "\n\n";
  $email_message .= "Web form system created by Sam Rowell 2013.";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- Success Message -->
 
Thank you for contacting us. We will be in touch with you very soon. You will now be redirected to the home page.
<script>
setTimeout(function(){
  window.location = "index.html";
}, 3000);
</script>
 
<?php
}
?>