<h1>With Ajax</h1>
<?php
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$pincode = $_POST['pincode'];
$card_number = $_POST['card_number'];
echo "<div> Hi,".$name."</div>";
echo "<div>Your email is: ".$email."</div>";
echo "<div>Your address is: ".$address."</div>";
echo "<div>Your pincode is: ".$pincode."</div>";
echo "<div>Your card number is: ".$card_number."</div>";
?>