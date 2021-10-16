<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms.css">
    <title>Document</title>
</head>
<body>
    <?php
        include 'config.php';
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $balance = $_POST['balance'];
            $sql = " INSERT INTO `customers` (name, email, phone, Balance, date) VALUES ('$name','$email', '$phone', '$balance', current_timestamp())";

            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<script> alert('New Customer created');
                                window.location='users.php';
                    </script>";
            }
        }
    ?>


<?php include 'navbar.php' 
?>
        <div class="form-site">
            <form  method="post">
                <h2 class="main-heading">REGISTER NEW USER HERE!</h2>
                <hr class="hr-main">
                <p>Name: <input type="text" name='name' required></p>
                <p>Email: <input type="email" name='email' required></p>
                <p>Phone: <input type="phone" name='phone' required></p>
                <p>Balance: <input type="number" name='balance' required></p>
                <div class="btn-grp">
                    <input type="submit" value="CREATE" name="submit"></input>
                    <input type="reset" value="RESET" name="reset"></input>
                </div>
            </form>
        </div>

<?php include 'footer.php' ?>
</body>
</html>