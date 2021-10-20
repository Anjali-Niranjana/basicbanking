<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
</head>

<body>

<?php
  include 'navbar.php';
?>
<br><br>
	<div class="container">
        <h2 style="color:black" class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div style="background-color:yellow" class="table-responsive-sm">
    <table style="border:2px solid black;" class="table table-hover table-striped table-condensed table-bordered">
        <thead style="border:2px solid black;">
            <tr style="border:2px solid black;">
                <th style="border:2px solid black;" class="text-center">S.No.</th>
                <th style="border:2px solid black;" class="text-center">Sender</th>
                <th style="border:2px solid black;" class="text-center">Receiver</th>
                <th style="border:2px solid black;" class="text-center">Amount</th>
                <th style="border:2px solid black;" class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="border:2px solid black;">
            <td style="border:2px solid black;" class="py-2"><?php echo $rows['sno']; ?></td>
            <td style="border:2px solid black;" class="py-2"><?php echo $rows['sender']; ?></td>
            <td style="border:2px solid black;" class="py-2"><?php echo $rows['receiver']; ?></td>
            <td style="border:2px solid black;" class="py-2"><?php echo $rows['balance']; ?> </td>
            <td style="border:2px solid black;" class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>