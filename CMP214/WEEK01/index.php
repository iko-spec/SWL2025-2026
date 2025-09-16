
<?php


/*
$name = "ik"; //string	

$age = 20; // integer
$email = "ikonkarssingh@gmaqil.com"; // string
$height = 5.8; // float
$issingle = true; //boolean
echo $name . " " . $age . " " . $email . " " . $height . " " . $issingle;
*/

/*
$num_01 = $_GET []
$num_02 = $_GET []
$operator = $_GET["op"]; 

if($operator == "add") 

{ 

    $result = $num_01 + $num_02; 

    echo $result. "</br>"; 

} 

else if($operator == "sub") 

{ 

    $result = $num_01 - $num_02; 

    echo $result. "</br>"; 

} 

else if($operator == "mul") 

{ 

    $result = $num_01 * $num_02; 

    echo $result. "</br>"; 

} 

else if($operator == "div") 

{ 

    $result = $num_01 /$num_02; 
} 
    echo "<script>alert('".$result."')</script>"
    
?>

*/


$servername = "127.0.0.1";
$database = "ikDB";
$username = "ikS";
$password = "SSingh123";
  // Create connection
$conn = new mysqli($servername, $username, $password); 

// Check connection 

if ($conn->connect_error) { 

	die("Connection failed: ". $conn->connect_error);

} 

echo "Connected successfully"; 

?>
