<?php 

define("HOST", 'localhost');
define("USERNAME", 'root');
define('PASSWORD', '');
define('DBNAME', 'admin_assistance');

// define("HOST", 'sql308.infinityfree.com');
// define("USERNAME", 'if0_37882322');
// define('PASSWORD', 'eYQLRbwvQoqKDf');
// define('DBNAME', 'if0_37882322_villagevoicedatabase');

$link = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

