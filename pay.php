<?php
$username = 'Gw96PpQNdJ5p314424Sg'; // replace with your actual username
$password = '2KYrLgyeLCJc6LkuA51zgo0hrACww4GX68jNvAVw'; // replace with your actual password
$credentials = base64_encode($username . ':' . $password);

// Initialize cURL session
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://backend.payhero.co.ke/api/v2/payments',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode(array(
    "amount" => 1,
    "phone_number" => "254740690592",
    "channel_id" => 245, // Verify this ID with Payhero
    "provider" => "m-pesa",
    "external_reference" => "INV-009",
    "callback_url" => "https://starfarm.co.ke/callback.php"
  )),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic ' . $credentials
  ),
));

// Execute cURL session
$response = curl_exec($curl);




curl_close($curl);
echo $response;
?>
