<?php 
//require_once 'includes/functions.inc.php';

define("HOST", 'localhost');
define("USERNAME", 'root');
define('PASSWORD', '');
define('DBNAME', 'admin_assistance');

$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
$error_msg = "";


if(isset($_POST['submit'])) {
	if(isset($_POST['service'])){
	$mycheck  =  $_POST['service'];
	$chk="";
	foreach ($mycheck as  $chk1){

		$chk .=$chk1.",";
	}

	$sql = "insert into medical (value) values ('$chk')";

$myquery = mysqli_query($link, $sql);
if($myquery){
	header('Location:state_lga.php');

}
else{
	echo "unable to insert to database";
}

}
else{
	$error_msg = "please select the checkbox for the support you need";
}


if (isset($_POST['mycheck'])) {
	# code...
$checkings = $_POST['mycheck'];
$ch="";
foreach ($checkings as $checked) {
	$ch .= $checked.",";

}
$oursql = " insert into legal (value) values ('$ch')";

$ourquery =mysqli_query($link, $oursql);

if($ourquery){
	header('Location:state_lga.php');
}

else{
	echo "not inserted";
}
}


if (isset($_POST['seecheck'])) {
	$seen = $_POST['seecheck'];
	$seeu ="";
	foreach ($seen as $isee) {
		$seeu .=$isee.",";
	
	}
	$dsql = "insert into supply (value) values ('$seeu')";
	$dquery = mysqli_query($link, $dsql);
	if($dquery){
	header('Location:state_lga.php');
	}
	else{
		echo "unable to enter";
	}
	
}


	


}
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Request Page</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">	

<script type="text/javascript">
  function Reveal(it, box) {
    var vis = (box.checked) ? "block" : "none";
    document.getElementById(it).style.display = vis;
  }

  function Hide(it, box) {
    var vis = (box.checked) ? "none" : "none";
    document.getElementById(it).style.display = vis;
  }
</script>
</head>
<body>
	<div class="container">
		<header>
			<h1>Support Assistance </h1>
		</header>

<nav>
	<p><a href="admin.php">Admin</a></p>
</nav>

		<section>
			<article>
				<div class="support-pic">
			<h1 class="intro-text">Welcome to support Assistance</h1>
			<h1 class="intro-text">connecting you to vital support..</h1>
			</div>

			</article>
			<aside>
				<h1 class="reg-form">Registration Form</h1>
				<form method="post" id="simpleForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">	

 medical<input type="radio" name="mype" required value="medical" onClick="Hide('div2', this); Hide('div3', this); Reveal('didfv1', this)" /><br> 



 legals<input type="radio" name="mype" required value="legal" onClick=" Hide('didfv1', this);Reveal('div2',this); Hide('div3', this)" /><br>               


 supply<input type="radio" name="mype" required	value="ambulance" onClick="Hide('didfv1', this); Hide('div2', this);  Reveal('div3', this)" /> 

<div class="row" id="didfv1" style="display: none">
            <input type="checkbox" name="service[]" value="firstaid" ><label>First Aid </label><br>
           <input type="checkbox" name="service[]" value="ambulance" > <label>Ambulance</label><br>
           <input type="checkbox" name="service[]" value="Paramedics" > <label>Paramedics</label><br>
            <input type="checkbox" name="service[]" value="others"><label>others</label>
  </div>


  <div class="row" id="div2" style="display: none">
           <input  type="checkbox" name="mycheck[]" value="bail"><label>bail from arrest </label><br>
         <input    type="checkbox" name="mycheck[]" value="get a lawyer">   <label>get a lawyer</label><br>
           <input  type="checkbox" name="mycheck[]" value="others"> <label>others</label>

  </div>


  <div class="row" id="div3" style="display: none">
    
              <input type="checkbox" name="seecheck[]" value="food"><label>Food </label><br>
              <input type="checkbox" name="seecheck[]" value="Water"><label>Water</label><br>
              <input type="checkbox" name="seecheck[]" value="Drink"><label>Drink</label><br>
              <input type="checkbox" name="seecheck[]" value="toiletries"><label>toiletries</label><br>
              <input type="checkbox" name="seecheck[]" value="toiletries"><label>others</label>

  </div>
  <br>
  <input type="submit" name="submit"> <br>

  <?php if (!empty($error_msg)): ?>
            <span style="color: red;"><?php echo $error_msg; ?></span>
        <?php endif; ?>

   </form>
</form>
			</aside>
		</section>
	</div>



</body>
</html>

<!-- install...live.http.header -->
