<?php
// ** Error Handling and Sanitization (Important!)**
if (empty($_POST['username']) || empty($_POST['phone'])) {
  echo "Error: Username and phone number are required.";
  exit;
}

$user = htmlspecialchars($_POST['username']); // Sanitize username input
$phone_number = preg_replace('/[^0-9+]/', '', $_POST['phone']); // Sanitize phone number (remove non-numeric characters)

// ** Message Construction (Avoid Sending Passwords)**
$message = $_POST['mess'];

// ** SMS Sending Logic Here** (Replace with your actual SMS provider details)
$apiUrl = "https://sms.textsms.co.ke/api/services/sendsms/?"; // Replace with your provider's API URL
$apiKey = "773ad821d26ea1f7f200a994ba5f345a"; // Replace with your API key from your provider
$partnerID = "10289"; // Replace with your partner ID (if applicable)
$shortcode = "TextSMS"; // Replace with your shortcode (if applicable)

// ** cURL Initialization**
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $apiUrl,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => array( // Replace with your provider's required parameters
    "apikey" => $apiKey,
    "partnerID" => $partnerID, // If applicable
    "message" => $message,
    "shortcode" => $shortcode, // If applicable
    "mobile" => $phone_number
  ),
  CURLOPT_SSL_VERIFYPEER => true, // Verify SSL certificate (recommended for security)
  CURLOPT_SSL_VERIFYHOST => 2,  // Verify hostname against certificate (recommended for security)
));

// ** Send SMS and Handle Response**
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "Error sending SMS: " . $err;
   echo "<script>alert('Failed.');</script>";
         echo "<script>window.location.href='sms.php';</script>";
} else {
  //echo "SMS sent successfully.";
   echo "<script>alert('SMS sent successfully.');</script>";
         echo "<script>window.location.href='sms.php';</script>";
}
?>