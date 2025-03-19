<?php
if (isset($_POST['submit'])) {
    date_default_timezone_set('Africa/Nairobi');

    // Access token
    $consumerKey = ''; //Fill with your app Consumer Key
    $consumerSecret = ''; // Fill with your app Secret

    // Define variables
    $BusinessShortCode = '174379';
    $Passkey = 'fX+Ps1Scu33GrpXUHtuDN8VDM2+Cant+kbIvPUpP6NEbsXc8uQD5rpWUdUpg+2aQ0ag7m6PqywA9qolXRLVuBmPPNGMOa04IobYZ0BHEv4jH4B9uOwUTKqS9ieuDPpy3jHZuZf8q0LSW2Sn4IJpkxi4AtRqJPPyK9zqReqOPcGwoiNIwopsKS1HyP+8EO2BrtKVWASTQ+xnSsk2gp9w+tWjmk4Oq5pVC57W6OfP59FAGIcJiEDt8BtZZlBWH0L1sZwopwau43vLaWJ963g1hwbdlnHmEQC540W/jKozEdhojZpgDjwr5U7mvpFbyFAsdl+cTe6/SwVTCxG5jl0zGSQ==';




 $payload = array(
        "BusinessShortCode" => "4073502",
        "Password" => base64_encode("4073502." . "fX+Ps1Scu33GrpXUHtuDN8
            VDM2+Cant+kbIvPUpP6NEbsXc8uQD5rpWUdUpg+2aQ0ag7m6PqywA9qolXRLVuBmPPNGMOa04IobYZ0BHEv4jH4B9uOw
            UTKqS9ieuDPpy3jHZuZf8q0LSW2Sn4IJpkxi4AtRqJPPyK9zqReqOPc
            GwoiNIwopsKS1HyP+8EO2BrtKVWASTQ+xnSsk2gp9w+tWjmk4Oq5pVC57W6
            OfP59FAGIcJiEDt8BtZZlBWH0L1sZwopwau43vLaWJ963g1hwbdlnHmEQC540W/jKozEdhojZpgDjwr5U7mvpFbyFAsdl+cTe6/SwVTCxG5jl0zGSQ==." . date("YmdHis")),
        // ... other fields ...
    );
    
  












    // Set other variables
    $PartyA = $_POST['phone']; // This is your phone number
    $AccountReference = 'MTONII SECONDARY SCHOOL FEE PAYMENT';
    $TransactionDesc = 'Test Payment';
    $Amount = $_POST['amount'];

    // Get the timestamp
    $Timestamp = date('YmdHis');

    // Get the base64 encoded string for password
    $Password = base64_encode($payload);

    // Set headers for access token
    $headers = ['Content-Type:application/json; charset=utf8'];

    // M-PESA endpoint urls
    $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
    $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';

    // Callback url
    $CallBackURL = 'https://morning-basin-87523.herokuapp.com/callback_url.php';

    // Retry parameters
    $maxRetries = 4;
    $retryCount = 0;

    do {
        // Initialize cURL session
        $curl = curl_init($access_token_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_HEADER, FALSE);
        curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);

        // Execute cURL request
        $result = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result = json_decode($result);
        $access_token = $result->access_token;

        // Close cURL session
        curl_close($curl);

        // Increment retry count
        $retryCount++;
    } while ($retryCount < $maxRetries && empty($access_token));

    // If access token obtained successfully, proceed with initiating the transaction
    if (!empty($access_token)) {
        // Initialize cURL session for initiating transaction
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $initiate_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type:application/json','Authorization:Bearer '.$access_token]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([
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
        ]));

        // Execute cURL request
        $curl_response = curl_exec($curl);
        print_r($curl_response);
        echo $curl_response;
    } else {
        // Handle case where access token could not be obtained after retries
        echo "Failed to obtain access token after $maxRetries retries.";
    }
}

?>
