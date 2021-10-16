<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php' ?>

    <?php include 'config.php';

    $sql = "SELECT * FROM transactions";
    $result = $conn->query($sql);
    ?>
    <div class="table-container">
    <table class="table">
        <thead class="table-thead">
            <th>Sender's Name</th>
            <th>Receiver's name</th>
            <th>Amount</th>
            <th>Date</th>
        </thead>
        <?php
 if($result->num_rows>0)
 {
    while($row=$result->fetch_assoc())
    {
?>
<tbody>
<tr>
     
    <td data-label="Sender's name"><?php echo $row['sender']?></td>
    <td data-label="Reciever's name"><?php echo $row['receiver']?></td>
    <td data-label="Amount"><?php echo $row['amount']?></td>
    <td data-label="Date"><?php echo $row['date']?></td>
</tr>
</tbody>
 <?php
      }
?>
    </table>
    </div>
<?php
 }
?>

    <?php include 'footer.php' ?>
</body>
</html>