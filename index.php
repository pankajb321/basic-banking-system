<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic-Banking-System</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <script type="text/javascript" src="./index.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .im{
            width: 850px;
            max-width: 100% ;
            height: 390px;
             margin-left: 14%;
        }

        img {
            vertical-align: middle;
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 680px) {

            .im {
                max-width:100%;
                margin-left:0.7%;
            }
        }
    .bg-4 { 
    background-color: #2f2f2f;
    color: #fff;
    padding-top: 40px;
    padding-bottom: 40px;
  }
    </style>
</head>

<body class="indexPage">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="./index.php">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Services <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./viewusers.php"> Customer Details </a></li>
                        <li><a href="./transactionDetails.php"> Transaction History </a></li>
                    </ul>
                </li>
                <li><a href="./aboutus.html">About Us</a></li>
                
            </ul>
        </div>
    </nav>
    <div class="main">
        <h1 style = "text-transform: capitalize">Basic Banking System</h1>
    </div>
    <div class="container">
        <div class="mySlides">
            <img  src="bank-gif.gif" width="1000px" height="500px" style = "border-radius: 30px"class="im">
            
        </div>
    </div>
    <div class="main">
    <div class="row">
        <div class="col-sm-4" style="background-color:#4682B4;">
        <a href="./viewusers.php" class="btn btn-primary" role="button">View Customer</a>
        </div>
        <div class="col-sm-4" style="background-color:#90EE90;">
        <a href="./viewusers.php" class="btn btn-success" role="button">Send Money</a>
        </div>
        <div class="col-sm-4" style="background-color:#87CEEB;">
        <a href="./transactionDetails.php" class="btn btn-info" role="button">Transaction Details</a>
        </div>
  </div>
</div>
  <footer class="container-fluid bg-4 text-center">
    <p> Copyright © 2021</p>
    <p>Basic-Banking-System</p>
   <p>Powered by The Sparks Foundation</p>
  </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>