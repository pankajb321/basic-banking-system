<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $toUser = $_POST['to'];
    $amnt = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the credits are to be transferred.

    $sql = "SELECT * from users where id=$toUser";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

  //if amount that we are gonna deduct from any user is
  // greater than the current credits available then print insufficient balance.
 if($amnt > $sql1['credit']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    
 else if($amnt == 0){
     echo "<script type='text/javascript'>alert('Enter Amount Greater than Zero');
</script>";
 }
    else {
        
        //if not then deduct the credits from the user's account that we selected.
        $newCredit = $sql1['credit'] - $amnt;
        $sql = "UPDATE users set credit=$newCredit where id=$from";
        mysqli_query($conn,$sql);
     


        $newCredit = $sql2['credit'] + $amnt;
        $sql = "UPDATE users set credit=$newCredit where id=$toUser";
        mysqli_query($conn,$sql);
           
        $sender = $sql1['names'];
        $receiver = $sql2['names'];
        $sql = "INSERT INTO `transaction`(`sender`,`receiver`, `amount`) VALUES ('$sender','$receiver','$amnt')";
        $tns=mysqli_query($conn,$sql);
        if($tns){
           echo "<script type='text/javascript'>alert('Transaction Successfull!');
            window.location='transactionDetails.php';
            </script>";
        }
       
        $newCredit= 0;
        $amnt =0;
       
     
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credits Transfer</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
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
    <div class="container">
        <h1 style="color: #c06565">Credits Transfer Process</h1>
        <form method="post" name="tcredit"><br/>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_array($query);
            ?>
            <label style="color: #c06565"> Credits Transfer From: </label><br/>
        <div class="table-responsive">
        <table class="table text-center table-striped table-hover tableStyle ">
            <thead>
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Credits</th>
                </tr>
            </thead>    
            <tr>
                <td><?php echo $rows['id']?></td>
                <td><?php echo $rows['names'] ;?></td>
                <td><?php echo $rows['email'] ;?></td>
                <td><?php echo $rows['credit'] ;?></td>
            </tr>
            
        </table>
              </div>
            <label style="color: #c06565">Credits Transfer To:</label>
        <select class=" form-control" name="to" style="margin-bottom:5%;" required>
            <option value="" disabled selected> To </option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_array($query)) {
            ?>
                <option class="table text-center table-striped " value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['names'] ;?> (Credits: 
                    <?php echo $rows['credit'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
        </select> <br>
            <label style="color: #c06565">Enter Number of CREDITS to be Transferred:</label>
            <input type="number" id="amm" class="form-control" name="amount" min="0" required/> <br/>
                <div class="text-center btn3">
            <button class="btn btn-danger" name="submit" type="submit" >Transfer</button>
            </div>
        </form>
    </div>
    <footer class="container-fluid bg-4 text-center">
    <p> Copyright © 2021</p>
    <p>Basic-Banking-System</p>
   <p>Powered by The Sparks Foundation</p>
  </footer>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>