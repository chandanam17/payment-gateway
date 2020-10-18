<?php
require('config.php');
if(isset($_POST['stripeToken']))
{
\Stripe\Stripe::setVerifySslCerts(false);

$token=$_POST['stripeToken'];

$data=\Stripe\Charge::create(array("amount"=>500,"currency"=>"inr","description"=>"payment gateway using php","source"=>$token));
echo  "<pre>";
print_r($data);
}
?>