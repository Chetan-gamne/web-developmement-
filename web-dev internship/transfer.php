<?php include 'navbar.php';
?>

<?php
    include 'config.php';
    if(isset($_POST['submit']))
    {
        $from = $_GET['sno'];
        $to=$_POST['user'];
        $amount=$_POST['amount'];
        $sql = "SELECT * FROM customers where sno= '$to'";
        $query=mysqli_query($conn,$sql);
        $sql1=mysqli_fetch_array($query);
     
        $sql="SELECT * FROM customers where sno='$from'";
        $query=mysqli_query($conn,$sql);
        $sql2=mysqli_fetch_array($query);
       if(($amount)<0)
       {
           echo '<script type="text/JavaScript"> 
                alert("Amount cannot be negative");
                </script>';
           
       }
       else if($amount==0)
       {
         echo '<script type="text/JavaScript"> 
              alert("Value must be greater than zero.");
              </script>';
         
       }
       else if($amount > $sql2['Balance'])
       {
         echo '<script type="text/JavaScript"> 
              alert("Insufficient Blance.");
              </script>';
       }
       else{
           $newbalance=$sql1['Balance'] + $amount;
           $sql="UPDATE customers SET Balance=$newbalance WHERE sno='$to'";
           mysqli_query($conn,$sql);
     
           $newbalance=$sql2['Balance'] - $amount;
           $sql="UPDATE customers SET Balance=$newbalance WHERE sno='$from'";
           mysqli_query($conn,$sql);
     
           $sender=$sql2['name'];
           $receiver=$sql1['name'];
           $sql="INSERT INTO `transactions`(`sender`,`receiver`,`amount`,date) VALUES ('$sender','$receiver','$amount',current_timestamp())";
           $query=mysqli_query($conn,$sql);
           if($query){
             echo '<script type="text/JavaScript"> 
              alert("Transaction Successful");
              </script>';
           }  
           $newbalance=0;
           $amount=0; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/transfer.css">
</head>
<body>
    <?php
    $sid=$_GET['sno'];
    $sql="SELECT * FROM customers WHERE sno='$sid'";
    $result=$conn->query($sql);
    $row=mysqli_fetch_assoc($result);
     ?>
<table>
    <thead>
    <tr>
        <th>S.NO</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>BALANCE (RS.)</th>
    <tr>
    </thead>
    <tr>
        <td data-label="S.NO"><?php echo $row['sno'];?></td>
        <td data-label="Name"><?php echo $row['name'];?></td>
        <td data-label="EMAIL"><?php echo $row['email'];?></td>
        <td data-label="BALANCE"><?php echo $row['Balance'];?></td>
    </tr>
    </table>
    <div class="form">
    <form method="post">
        Recepient's Name:
        <br>
        <select id="user" name="user">
            <option value="" selected disabled>Choose</option>
        <?php
           $sql="SELECT * FROM customers WHERE sno!='$sid'";
           $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
        ?>
           <option value="<?php echo $row["sno"];?>"><?php echo $row["name"];?></option>
           <?php
            }
        }
        ?>
        </select>
        <br>
        Transfer Amount(Rs.):
        <br>
        <input type="text" name="amount" required>
        <br>
        <input type="submit"  name="submit" value="Transfer">
    </form>
</div>
    <?php include 'footer.php'; ?>
</body>
</html>