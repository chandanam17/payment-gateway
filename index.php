<!DOCTYPE html>
<html>
<head>
<style>
body{
background-image:url("https://image.shutterstock.com/image-vector/abstract-polygonal-pattern-luxury-dark-260nw-1129454882.jpg");
background-repeat:no-repeat;
hight:100vh;
background-size:cover;
background-position:center;
}
</style>
</head>
<body>

<h1 style="color:white; font-size:300%; font-family:courier;">Payment gateway</h1>

<h2 style="color:white;font-family:courier;">Spark Foundation</h2>

<?php
require('config.php');
?>
<form action="submit.php" method="post">
<script
 src="https://checkout.stripe.com/checkout.js" class="stripe-button"
data-key="pk_test_51HcREYKWWdKqZ7hn6IEYdjm8G1PgOKlAHb5yPVTNIr6SNtAqyvmN8shSKgiQdYCTLDMjKPZvtlKo01MzJKNEsnzY00iLFD4XNQ"
data-amount="500"
data-name="intern payment gateway"
data-description="Sparks Foundation"
data-image="https://i.pinimg.com/236x/c6/87/31/c68731649754edf33eb3e2871119c19d.jpg"
data-email="chandanam1900@gmail.com"
>
</script>

</form>

</body>
</html>
