<?php

include("includes/db-config.php");


$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

if (isset($_POST['submit'])) {
  if (isset($_POST['state'])) {
    $state = $_POST['state'];
    $lga = $_POST['lga'];
    
$sql = "insert into statelga (state,lga) values ('$state','$lga')";

$query = mysqli_query($link, $sql);
if ($query) {
 header('Location:userReg.php');

}
else{
  echo "unable to process details";
}

    
  }

}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>State and local Government areas in Nigeria (dropdown)</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    />

    <link rel="stylesheet" type="text/css" href="css/stateAndLga.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   
    <style>

*{
			font-family:Roboto !important;
		}

    @media only screen and (min-width:370px) and (max-width:602px){
   
   .container{
	   width: 100% !important;
	   background-color: #eee !important;
   }

}

@media only screen and (min-width:350px) and (max-width:800px){
   *{
	   box-sizing: border-box; /* Standard */
	   -webkit-box-sizing: border-box; /* Safari and older Chrome */
	   -moz-box-sizing: border-box; /* Firefox */
	   -ms-box-sizing: border-box; /* Older versions of Internet Explorer and Edge */
   }

 .container{
   width: 100% !important;
   min-height: 700px;
   background-color:#eee;
 }

}
  
      .container{
      width: 960px;
      min-height: 600px;
      margin: auto;
      font-family: cursive;
      background-color: #fff;
      background-image: url('../assests/children-rural-communities.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      }
        .firstHeader{
            background-color:black;
            color:white;
            border-radius:40px !important;
        }

    </style>
  </head>
  <body>
    <div class="container h-100">
   <a href="index.php"><button class="btn btn-primary mt-3 " name="submit"> <-- Go Back</button> </a> 
      <div class="row align-items-center h-100">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <center>
            <form  method="post" id="myform" action="<?php echo $_SERVER['PHP_SELF'];?>">
              <h3 class="firstHeader">Please select your state and local government</h3>
              <br>

              <div class="form-group">
                <label class="control-label" style="color:white; background-color:black;">State of Residence</label>
                <select
                  onchange="toggleLGA(this);"
                  name="state"
                  id="state"
                  class="form-control"
                >
                  <option value="" selected="selected">- Select -</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamafara</option>
                </select>
              </div>

              <div class="form-group">
                <label class="control-label" style="color:white; background-color:black;">LGA of Residence</label>
                <select
                  name="lga"
                  id="lga"
                  class="form-control select-lga"
                  required
                >
                </select>
                
                <button type="submit" class="btn btn-primary mt-3 " id="mybutton" name="submit">Submit</button>  
                
              </div>
            </form>
          </center>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/lga.min.js"></script>

    <script>
       $("#mybutton").click(function (e) {
       //  var LGA =  $('#lga').val();
      if ($("#lga").val() == "Select LGA...") {
        alert("please select the local government of residence where this aid is needed!");
        return false;
      } else {
        return true;
      }
    });
    </script>
    
  </body>
</html>

