<?php
require_once 'ph-class.php';
//Get this under API Keys section on https://app.payhero.co.ke/api_keys
$apiUsername = 'Gw96PpQNdJ5p314424Sg';
$apiPassword = '2KYrLgyeLCJc6LkuA51zgo0hrACww4GX68jNvAVw';
$payHeroAPI = new PayHeroAPI($apiUsername, $apiPassword);

/*EXAMPLE USAGE:*/


// 4. Send Customer Mpesa Stk Push: pass in amount, phone number, channel_id, your_reference and callback_url
$sendCustomerMpesaStkPush = $payHeroAPI->SendCustomerMpesaStkPush(1, '254712982944', '245', '1234567890', 'https://starfarm.co.ke/callback.php');
echo $sendCustomerMpesaStkPush;

// 5. Get transaction status: pass in reference
$transactionStatus = $payHeroAPI->getTransactionStatus('c253264d-44eb-4520-9d67-038cdde39a16');
echo $transactionStatus;


