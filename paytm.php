<?php

$name=$_POST["Name"];
$name1=$_POST["Name1"];
$name2=$_POST["Name2"];
$ph=$_POST["Phone"];
$email=$_POST["Email"];
$cost=$_POST["ticket"];
$total=16000*$cost;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_ZOt9n5CnF4YG2Z", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $_POST["pay"]=$total;?> ", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "MovieKraze", //your business name
    "description": "Test Transaction",
    "image": "img2.png",
     //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        //"name": "Gaurav Kumar", //your customer's name
        //"email": "gaurav.kumar@example.com",
        //"contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "MovieKraze"
    },
    "theme": {
        "color": "#0DF0DF"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
<script src="">

</script>
</body>
</html>
