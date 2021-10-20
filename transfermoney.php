<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: black;
        font-weight:bold;
      }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>
<br><br>
<div class="container">
        <h2 style="color:black" class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div  style="background-color:yellow" class="table-responsive-sm">
                    <table style="border:2px solid black;" class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead  style="border:2px solid black;" >
                            <tr  style="border:2px solid black;" >
                            <th  style="border:2px solid black;" scope="col" class="text-center py-2">Id</th>
                            <th  style="border:2px solid black;" scope="col" class="text-center py-2">Name</th>
                            <th  style="border:2px solid black;" scope="col" class="text-center py-2">E-Mail</th>
                            <th  style="border:2px solid black;" scope="col" class="text-center py-2">Balance</th>
                            <th  style="border:2px solid black;" scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="border:2px solid black;" >
                        <td  style="border:2px solid black;" class="py-2"><?php echo $rows['id'] ?></td>
                        <td  style="border:2px solid black;" class="py-2"><?php echo $rows['name']?></td>
                        <td  style="border:2px solid black;" class="py-2"><?php echo $rows['email']?></td>
                        <td  style="border:2px solid black;" class="py-2"><?php echo $rows['balance']?></td>
                        <td style="border:2px solid black;" ><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button style="background-color:white; border:1.5px solid black;" type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>