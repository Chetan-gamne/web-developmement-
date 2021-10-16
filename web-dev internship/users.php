<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php
    include 'config.php';

    $sql = "SELECT * FROM customers";
    $result=$conn->query($sql);
    ?>

    <div class="content">
        <table>
            <thead>
                <th>S.no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Balance</th>
                <th>Transfer money</th>
            </thead>
            <?php

            if($result !== false && $result->num_rows > 0)
            {
                while($row=$result->fetch_assoc()){
            
            ?>
            <tr>
                <td data-label= "s.no"><?php echo $row["sno"];?></td>
                <td data-label= "Name"><?php echo $row["name"];?></td>
                <td data-label= "Email"><?php echo $row["email"];?></td>
                <td data-label= "Phone"><?php echo $row["phone"];?></td>
                <td data-label= "Balance"><?php echo $row["Balance"];?></td>
                <td><a href="transfer.php?sno=<?php echo $row['sno'];?>"><button type="button" class="transfer-btn">Transfer Money</button></a></td>
             </tr>
            <?php
                } ?>
        
        </table>
        <?php }
        ?>
        
    </div>
    <?php include 'footer.php' ?>
</body>
</html>
