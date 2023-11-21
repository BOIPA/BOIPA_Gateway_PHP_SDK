<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$merchantId = "";
$password = "u16q9rZ02bW0jqTjxH8t";
$brandId = "800145000";
$country = "IE";
$currency = "EUR";
//$credit_card_token = "";
$customer_it_token = "CustomerAccount";
$customerFirstName="John";
$customerLastName="Doe";
$customerEmail="BOIPA@BOIPA.com";
$customerPhone="0812365899";

$credit_card_number = "5454545454545454";
$credit_card_expiry_month = "12";
$credit_card_expiry_year = "2025";
$credit_card_cvv = "111";
$credit_card_name = "John Doe";
$paymentSolutionId = "";
$amount = "50.00";
$merchantTxId = 'BOIPA_'.time();

function getSiteDomain() {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $domainName = $_SERVER['HTTP_HOST'];
  return $protocol.$domainName;
}
