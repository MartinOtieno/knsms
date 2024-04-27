<?php


if(isset($_POST['submit'])){

    date_default_timezone_set('Africa/Nairobi');

    $adm = $_POST["inputAddress0"]; // New line to retrieve inputAddress0 value

    # access token
    $consumerKey = 'zAu274i2ALV413YFVx2ErlPrVH6ZQkv3'; //Fill with your app Consumer Key
    $consumerSecret = 'ug7Aq8naVTHk7WHy'; // Fill with your app Secret

    # define the variables
    # provide the following details, this part is found on your test credentials on the developer account
    $BusinessShortCode = '174379';
    $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';  

    /*
    This are your info, forbfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919
    $PartyA should be the ACTUAL clients phone number or your phone number, format 2547********
    $AccountRefference, it maybe invoice number, account number etc on production systems, but for test just put anything
    TransactionDesc can be anything, probably a better description of or the transaction
    $Amount this is the total invoiced amount, Any amount here will be 
    actually deducted from a clients side/your test phone number once the PIN has been entered to authorize the transaction. 
    for developer/test accounts, this money will be reversed automatically by midnight.
    */
 $rawPhoneNumber =$_POST['phone']; // Hii ni nambari yako ya simu iliyosindikwa 
$formattedPhoneNumber = $rawPhoneNumber; // Kuweka default

// Iangalia kama nambari ya simu inaanza na 0
if (substr($rawPhoneNumber, 0, 1) == '0') {
    // Ikiwa inaanza na 0, ondoa 0 na ongeza 254
    $formattedPhoneNumber = '254' . substr($rawPhoneNumber, 1);
} 
elseif (substr($rawPhoneNumber, 0, 1) == '2') {
    // Ikiwa inaanza na '+', ondoa '+' na ongeza 254
    $formattedPhoneNumber =$formattedPhoneNumber;
}

$PartyA = $formattedPhoneNumber;

    $AccountReference = ' Needy Student Management System '; // Modified line to set AccountReference to "Hi"
    $TransactionDesc = 'Test Payment';
    $Amount = $_POST['amount'];

    # Get the timestamp, format YYYYmmddhms -> 20181004151020
    $Timestamp = date('YmdHis');    

    # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
    $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);

    # header for access token
    $headers = ['Content-Type:application/json; charset=utf8'];

    # M-PESA endpoint urls
    $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
    $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

    # callback url
    $CallBackURL = 'http://mtoniisecondary.kesug.com/callback.php';  

    $curl = curl_init($access_token_url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_HEADER, FALSE);
    curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);
    $result = curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $result = json_decode($result);
    $access_token = $result->access_token;  
    curl_close($curl);

    # header for stk push
    $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];

    # initiating the transaction
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $initiate_url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header

    $curl_post_data = array(
        //Fill in the request parameters with valid values
        'BusinessShortCode' => $BusinessShortCode,
        'Password' => $Password,
        'Timestamp' => $Timestamp,
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => $Amount,
        'PartyA' => $PartyA,
        'PartyB' => $BusinessShortCode,
        'PhoneNumber' => $PartyA,
        'CallBackURL' => $CallBackURL,
        'AccountReference' => $AccountReference,
        'TransactionDesc' => $TransactionDesc
    );

    $data_string = json_encode($curl_post_data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    $curl_response = curl_exec($curl);
    curl_close($curl);

    // Check if the transaction was initiated successfully
    $response = json_decode($curl_response);
    if(isset($response->ResponseCode) && $response->ResponseCode == '0') {
        // Transaction initiated successfully
        echo "<script>alert('Payment initiated. Please enter M-Pesa PIN.');</script>";
         echo "<script>window.location.href='mpesa.php';</script>";
    } else {
        // Transaction initiation failed or canceled by the user
        echo "<script>alert('Transaction canceled by the user.');</script>";
         echo "<script>window.location.href='mpesa.php';</script>";
    }
}
?>