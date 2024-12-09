<?php
// Define the API endpoint
$url = "http://ipinfo.io/json"; // Replace 'json' with 'YOUR_TOKEN/json' for more detailed info if you have an API token.

// Fetch data from the IPInfo API
$response = file_get_contents($url);
$details = json_decode($response);

// Extract details
$ip = $details->ip;          // User's IP address
$city = $details->city;      // User's city
$region = $details->region;  // User's state/region
$country = $details->country; // User's country
$postal = isset($details->postal) ? $details->postal : 'Not Available'; // Postal code
$loc = $details->loc;        // Latitude and Longitude

// Display details
$ip_addr = $_SERVER["REMOTE_ADDR"];
echo  $ip_addr . "<br>";  
echo "IP Address: " . $ip . "<br>";
echo "City: " . $city . "<br>";
echo "Region (State): " . $region . "<br>";
echo "Country: " . $country . "<br>";
echo "Postal Code: " . $postal . "<br>";
echo "Location (Lat, Long): " . $loc . "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Ip Details</title>
	<link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    />

    <link rel="stylesheet" type="text/css" href="css/stateAndLga.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>

<a href="index.php"><button class="btn btn-primary mt-3 " name="submit"> <-- Go Back</button> </a> 
</body>
</html>
