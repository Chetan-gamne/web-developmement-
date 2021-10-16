<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<?php include 'navbar.php';?>
<body>
    
    <main>
        <section class="grp1">
            <div class="text">
                <marquee behavior="alternaet" direction="down"><p>Welcome to National Bank</p></marquee>
            </div>
            <div class="symbol">
                <img src="./images/online_payment.svg" alt="">
            </div>
        </section>

        <section class="grp2">
                <h3>Our Services</h3>
                <div class="image-grp">
                    <a href="create_user.php"><img src="images/bank-svg.svg" alt=""><h5>Create_user</h5></a>
                    <a href="users.php"><img src="images/bank.svg" alt=""><h5>View All users</h5></a>
                    <a href="history.php"><img src="./images/transaction_history.svg" alt=""><h5>Show all transactions</h5></a>
                </div>
        </section>
    </main>

<?php include "footer.php" ?>
</body>
</html>