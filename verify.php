<?php 

/**
 *	Codecanon product purchase Code Verfier
 */
class PurchaseVerify
{
	
	protected $tokenBearer = 'FG2yzZckzdhFdvHeH4XJO4Yyf0dACcWe'; // envato Api key

	public function verify($purchaseCode): bool {

		
	    $bearer   = 'bearer ' . $this->tokenBearer;
	    $header   = array();
	    $header[] = 'Content-length: 0';
	    $header[] = 'Content-type: application/json; charset=utf-8';
	    $header[] = 'Authorization: ' . $bearer;
//	    $verifyUrl = 'https://api.envato.com/v3/market/author/sale';  // sale verification
	    $verifyUrl = 'https://api.envato.com/v3/market/buyer/purchase'; // purchase verification

	    $productVerify = curl_init( $verifyUrl . '?code=' . $purchaseCode );
	    curl_setopt( $productVerify, CURLOPT_HTTPHEADER, $header );
	    curl_setopt( $productVerify, CURLOPT_SSL_VERIFYPEER, false );
	    curl_setopt( $productVerify, CURLOPT_RETURNTRANSFER, 1 );
	    curl_setopt( $productVerify, CURLOPT_CONNECTTIMEOUT, 10 );
	    $verificationResponse = curl_exec( $productVerify );
	    curl_close( $productVerify );

	    $jsonResponse = json_decode($verificationResponse, true);

	    // Instead of boolean data type, You can return jsonResponse to see purchase details
	    
	    if (!empty($jsonResponse['error'])) {
	        return false;
	    } 

		return true;
	}

	public function inputValidation($purchaseCode) {

		// Make sure the code looks valid before sending it to Envato
		// if (!preg_match("/^([a-f0-9]{8})-(([a-f0-9]{4})-){3}([a-f0-9]{12})$/i", $purchaseCode)) {
		//     return false;
		// }

		return (!empty($purchaseCode) && strlen($purchaseCode) == 32) ? true : false;
		
	}
	
}


// Check user input 
$purchaseCode = htmlentities(trim(!empty($_POST['PurchaseCode'])? $_POST['PurchaseCode'] : ''));

$obj = new PurchaseVerify;

if ($obj->inputValidation($purchaseCode)) {
	# Call for purchase code verification
	
	echo $obj->verify($purchaseCode) ? "Valid purchase!" : "Invalid purchase code!";
	
} else {
	echo "Please enter valid purchase code";
}

