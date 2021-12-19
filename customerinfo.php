<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Spark Banking System</title>
  <link rel="stylesheet" href="css/style.css">

  <!-- Font-awesome -->
  <script src="https://use.fontawesome.com/07d62e5a9f.js"></script>

  <!-- icon -->
  <link rel="icon" href="icon.jpg" alt="icon">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">

</head>
<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM customersdata";
    $result = mysqli_query($conn,$sql);
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top">
        <a class="navbar-brand">SPARK BANKING SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto pr-4">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#footerdiv">Contact Us</a>
            </li>
         </ul>
        </div>
      </nav>

<br>
<br>
<br>
<hr>
      <div class="container-fluid main--body">
            <div class="row">
                <div class="col">
                    <div class="table-responsive-lg">
                    <table class="table table-hover table-lg">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">Account no.</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="text-center py-2"><?php echo $rows['id'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['Name']?></td>
                        <td class="text-center py-2"><?php echo $rows['Account no.']?></td>
                        <td class="text-center py-2"><?php echo $rows['Email']?></td>
                        <td class="text-center py-2"><?php echo $rows['Balance']?></td>
                    
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

         <br><br><br>
      <div class="text-center">
      <a href="addcustomer.php" type="button" class="btn btn-success " >Add Customer</a>        
      </div>
<br>
<br>
<hr>

<footer class="footersection" id="footerdiv">
        <div class="container">
          <div class="row">
            <div class="col-lg 4 col-md-6 col-12 footerdiv"> 
              <div>
                  <h3>ABOUT Us</h3>
                  <p><h5>SPARK BANK<br>visit us @ East-Andheri,Mumabai,Maharastra</h5></p>
              </div>
            </div>
    
            <div class="col-lg 4 col-md-6 col-12 footerdiv text-center"> 
              <div>
                  <h3>NAVIGATION LINKS</h3>
                  <ul><a href="transfer.php">Transfer Money</a></ul>
                  <ul><a href="customerinfo.php">Customer History</a></ul>
                  <ul><a href="transactionhistory.php">Transaction History</a></ul>   
              </div>
            </div>
    
    <br>
    <br>
    
            <div class="col-lg 4 col-md-6 col-12 footerdiv"> 
              <div>
                  <h3>CONTACT US</h3>
                     <div class="container">
                      <div class="row">
                        <div class="col-lg-12  col-2">
                            <li><a href="#">sfbank@gmail.com</a></li>
                            <i class="social-icon fa fa-twitter" aria-hidden="true"></i>
                            <i class="social-icon fa fa-facebook-square" aria-hidden="true"></i>
                            <i class="social-icon fa fa-instagram" aria-hidden="true"></i>
                            <i class="social-icon fa fa-envelope" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
    
              </div>
            </div>
    
          </div>
          <div class="mt-5 text-center">
            <p>Copyright @2021 All right resrved</p>
          </div>

        </div>
      </footer>

</body>
</html>
