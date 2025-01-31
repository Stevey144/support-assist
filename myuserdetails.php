<?php
session_start(); // Start the session

// Check if admin is logged in, otherwise redirect to admin.php
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin.php"); // Redirect to login page
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3 pt-3" >
<h3 class="text-center">medical request</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>service</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include("includes/db-config.php");
    $query="SELECT * FROM medical";
    $run=mysqli_query($link, $query);
    while($result = mysqli_fetch_array($run)){
    
        ?>
        <tr>
  <td><?php echo $result["id"]?></td>
       
 <td><?php echo $result["value"]?></td>
      </tr>
       <?php }?>
    </tbody>
  </table>
</div>


<div class="container mt-3 pt-3" >
<h3 class="text-center">legal request</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>service</th>
      </tr>
    </thead>
    <tbody>
    <?php

    $myquery="SELECT * FROM legal";
    $ourrun=mysqli_query($link, $myquery);
    while($ourresult = mysqli_fetch_array($ourrun)){
    
        ?>
        <tr>
  <td><?php echo $ourresult["id"]?></td>
       
 <td><?php echo $ourresult["value"]?></td>
      </tr>
       <?php }?>
    </tbody>
  </table>
</div>


<div class="container mt-3 pt-3" >
<h3 class="text-center">supply request</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>service</th>
      </tr>
    </thead>
    <tbody>
    <?php

    $supquery="SELECT * FROM supply";
    $sup=mysqli_query($link, $supquery);
    while($supresult = mysqli_fetch_array($sup)){
    
        ?>
        <tr>
  <td><?php echo $supresult["id"]?></td>
       
 <td><?php echo $supresult["value"]?></td>
      </tr>
       <?php }?>
    </tbody>
  </table>
</div>

<div class="container mt-3 pt-3" >
<h3 class="text-center">state and local government of user</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>state</th>
        <th>local Govt</th>
      </tr>
    </thead>
    <tbody>
    <?php

    $statelg="SELECT * FROM statelga";
    $st=mysqli_query($link, $statelg);
    while($values = mysqli_fetch_array($st)){
    
        ?>
        <tr>
  <td><?php echo $values["id"]?></td>
       
 <td><?php echo $values["state"]?></td>

 <td><?php echo $values["lga"]?></td>

      </tr>
       <?php }?>
    </tbody>
  </table>
</div>

<div class="container mt-3 pt-3" >
<h3 class="text-center">User contact Details</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>email</th>
        <th>phone number</th>
        <th>IP</th>
        <th>city</th>
        <th>region</th>
        <th>country</th>
        <th>postal</th>
        <th>loc</th>
      </tr>
    </thead>
    <tbody>
    <?php

    $connection_string="SELECT * FROM user_details";
    $query=mysqli_query($link, $connection_string);
    while($fetched_result = mysqli_fetch_array($query)){
    
        ?>
        <tr>
<td><?php echo $fetched_result["id"]?></td>
       
 <td><?php echo $fetched_result["email"]?></td>

 <td><?php echo $fetched_result["phonenumber"]?></td>

 <td><?php echo $fetched_result["ip"]?></td>

 <td><?php echo $fetched_result["city"]?></td>

 <td><?php echo $fetched_result["region"]?></td>

 <td><?php echo $fetched_result["country"]?></td>

 <td><?php echo $fetched_result["postal"]?></td>

 <td><?php echo $fetched_result["loc"]?></td>


      </tr>
       <?php }?>
    </tbody>
  </table>
</div>


<div class="row">
  <div class="col-sm-5 offset-sm-5">
    <br>
<a href="logout.php"><div class="btn btn-primary">Log Out</div></a>

</div>
</div>


</body>
</html>