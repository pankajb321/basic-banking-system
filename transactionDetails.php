<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Details</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
       

        h2{
            margin-top:30px;
            color: #0A6F6B;
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
        <div class="container divStyle">
        <h2 class="text-center">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table text-center table-striped table-hover tableStyle ">
            <thead>
            <tr>
            <th>Id</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Credits</th>
        
            </tr>
        </thead>
        <tbody>
            <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
                ?>
            <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['amount']; ?> </td>
                
            <?php
            }

            ?>
            


        </tbody>
    </table>
    </div>
        </div>
        <footer class="container-fluid bg-4 text-center">
    <p> Copyright © 2021</p>
    <p>Basic-Banking-System</p>
   <p>Powered by The Sparks Foundation</p>
  </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>