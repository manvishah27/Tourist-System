<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

require_once $_SERVER['DOCUMENT_ROOT']."/travel/db/config.php";
session_start();
error_reporting(0);
$email = $_SESSION['login'];

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";

		$ORDERID = $_POST['ORDERID'];
		$TXNID = $_POST['TXNID'];
		$TXNAMOUNT = $_POST['TXNAMOUNT'];

		$sql = "UPDATE booking SET order_id=$ORDERID, transaction_id=$TXNID, TotalPrice=$TXNAMOUNT WHERE email=$email";
            mysqli_query($conn, $sql);
            alert('Transaction successful');

		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";

		$sql = "DELETE from booking WHERE email=$email";
            mysqli_query($conn, $sql);
            alert('Transaction unsuccessful');

	}

	echo '<br>ORDERID='.$_POST['ORDERID'];
	echo '<br>TXNID='.$_POST['TXNID'];
	echo '<br>TXNAMOUNT='.$_POST['TXNAMOUNT'];
	
}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>