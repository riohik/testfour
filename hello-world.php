<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Hello world from Cloud9!';

$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "test2";
$dbport = 3306;

// Create connection
$db = new mysqli($servername, $username, $password, $database, $dbport);

// Check connection
if ($db->connect_error) {
 die("Connection failed: " . $db->connect_error);
} 
echo "Connected successfully (".$db->host_info.")";

?>

</body>
</html>