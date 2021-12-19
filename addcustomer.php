<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <!-- Font-awesome -->
  <script src="https://use.fontawesome.com/07d62e5a9f.js"></script>

    <!-- icon -->
   <link rel="icon" href="icon.jpg" alt="icon">
    <title>Spark Banking System</title>

</head>
<body>

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


<section class="my-5">
  <div class="py-5">
            <h2 class="text-center">Add Customer</h2>
            <div class="w-50 m-auto">
            <form action="submit.php" method="post">


                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="Name" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                  <label>Account no.</label>
                  <input type="text" name="Account" autocomplete="off" class="form-control">
                </div>


                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="Email" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                  <label>Balance </label>
                  <input type="text" name="Balance" autocomplete="off" class="form-control">
                </div>
            

                <button type="submit" class="btn btn-success"> Submit</button>
            </form>
            </div>
  </div>
</section>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/4.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
