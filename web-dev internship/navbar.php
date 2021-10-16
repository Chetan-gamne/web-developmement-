<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
</head>
<body>
    <nav id="navbar">
        <div class="nav-center">
            <div class="nav-header">
                <a href="home.php"><img src="./images/bank-svg.svg" id = "logo" alt=""></a>
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <ul class="links">
                <li><a href="home.php">Home</a></li>
                <li><a href="Create_user.php">Create User</a></li>
                <li><a href="users.php">View All Users</a></li>
                <li><a href="history.php">Transaction History</a></li>
            </ul>
        </div>
    </nav>
    <!-- javascript -->
    <script src="js/app.js"></script>
</body>
</html>