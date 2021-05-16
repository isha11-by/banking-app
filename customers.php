<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="style.css">

   
</head>
<body class="bg">
<div class="topnav">
        <a href="homepage.html">Home</a>
        <a class="active" href="customers.php">Customer Details</a>
        <a href="contact.html">Contact</a>
        <a href="about.html">About</a>
        <a href="transactionhis.php">Transaction History</a>
      </div>
      

<?php
    include 'config.php';
    $sql = "SELECT * FROM `details`    ";
    $result = mysqli_query($link,$sql);
?>


<div class="container">
      <center>  <h2>Transfer Money</h2></center>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table>
                        
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2"> Account Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        
                    
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td class="transact"><a href="viewdetails.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">PayTo</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         
         
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>