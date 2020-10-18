<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51HcREYKWWdKqZ7hn6IEYdjm8G1PgOKlAHb5yPVTNIr6SNtAqyvmN8shSKgiQdYCTLDMjKPZvtlKo01MzJKNEsnzY00iLFD4XNQ";
$secretKey="sk_test_51HcREYKWWdKqZ7hns9PwGKMwFvzMw8R3ftVzPAdkIS6Ho4uBNuaupvOjGzTS1BoKCc4MpvHr9URWpsMjCX4EIf1t001dn0dKzx";

\Stripe\Stripe::setApiKey($secretKey);

?>