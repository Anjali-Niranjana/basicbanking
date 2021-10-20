<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3 style="color:black; font-size:30px;">Welcome to</h3>
                  <h1 style="color:black; font-size:40px; font-weight:bold;">ANJALI BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/Free_Sample_By_Wix-modified.png" border-radius="20%" width="50%" height="50%" class="img-fluid pt-2">
              </div>
            </div>
<br>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act"><br>
                    <img src="img/72590071-user-sign-illustration-black-icon-with-flat-style-shadow-path-on-yellow-background-.jpg" width="35%" height="50%" class="img-fluid">
                    <br><br>
                    <a href="createuser.php"><button style="background-color:black; font-size:18px; border:2px solid yellow;">Create a User</button></a>
                  </div>
                  <div class="col-md act"><br>
                    <img src="img/53528835-money-black-and-yellow-modern-glossy-web-icon.jpg" width="45%" height="50%" class="img-fluid">
                    <br><br>
                    <a href="transfermoney.php"><button style="background-color:yellow; border:1.5px solid black;"><h6 style="color:black; font-size:24px;">Make a Transaction</h6></button></a>
                  </div>
                  <div class="col-md act"><br>
                    <img src="img/yellow-graph-icon-trendy-flat-600w-1874532820.jpg" width="33%" height="50%" class="img-fluid">
                    <br><br>
                    <a href="transactionhistory.php"><button style="background-color:black; font-size:18px; border:2px solid yellow;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2020. Made by <b>Anjali Niranjana</b> <br>Web Development Intern at The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>