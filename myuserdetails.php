<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3 pt-3" >
<h1 class="text-center">medical request</h1>
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
<div class="row">
  <div class="col-sm-4 offset-sm-4">
<a href="admin.php"><div class="btn btn-primary">goback</div></a>
</div>
</div>

<div class="container mt-3 pt-3" >
<h1 class="text-center">legal request</h1>
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
<div class="row">
  <div class="col-sm-4 offset-sm-4">
<a href="admin.php"><div class="btn btn-primary">goback</div></a>
</div>
</div>


<div class="container mt-3 pt-3" >
<h1 class="text-center">supply request</h1>
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
<div class="row">
  <div class="col-sm-4 offset-sm-4">
<a href="admin.php"><div class="btn btn-primary">goback</div></a>
</div>
</div>




<div class="container mt-3 pt-3" >
<h1 class="text-center">state and local government of user</h1>
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
<div class="row">
  <div class="col-sm-4 offset-sm-4">
<a href="admin.php"><div class="btn btn-primary">goback</div></a>
</div>
</div>



</body>
</html>