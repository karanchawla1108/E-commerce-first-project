
<?php
    $name = $_REQUEST["name"]; //get the data from the form
    $address = $_REQUEST['address'];	
    $city = $_REQUEST['city'];
    $postcode = $_REQUEST['postcode'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $description = $_REQUEST['description'];

    $conn=mysqli_connect('localhost','karan.chawla','UVVV6AKH','karanchawla_assignment2');
    $sql="INSERT INTO addresses (name, address, city, postcode, email, phone, description) VALUES ('$name','$address','$city','$postcode','$email','$phone','$description')";
    if (mysqli_connect_errno())
       {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
       }
    if (mysqli_query($conn,$sql)) {
        echo "Record added";
        }
    mysqli_close($conn);				//close connection to database
?>  
    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Information</title>
    <link rel="stylesheet" href="style-for-checkout.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
    echo '<div class="container_checkout">
        <i class="fa-brands fa-cc-mastercard"></i>
            <form action="process.php" method="POST"> 
                <label for="card-number">Card Number:</label><br>
                <input type="text" id="card-number" name="card-number" placeholder="Enter card number" required><br><br>

                <label for="card-holder">Card Holder:</label><br>
                <input type="text" id="card-holder" name="card-holder" placeholder="Enter card holder\'s name" required><br><br>

                <label for="expiration">Expiration Date:</label><br>
                <input type="text" id="expiration" name="expiration" placeholder="MM/YY" required><br><br>

                <label for="cvv">CVV:</label><br>
                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required><br><br>

               
                <button type="submit" class="button" onclick="redirectToThankYou()">Submit</button>
                </form>
    </div>';
    ?>
</body>
<script>
    function redirectToThankYou() {
        window.location.href = "thankyounote.html";
    }
</script>
</html>