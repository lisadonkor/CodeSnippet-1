<?php
$conn = mysqli_connect('localhost','pgeverytime','','tutorial');//establishing connection with server
if(!$conn){//checking connection
    die("Failed to connect: ". mysqli_connect_error());
}
$query = "SELECT * FROM `test` WHERE lastname = 'Adams'"; //query
$result = mysqli_query($conn,$query);


while ($row = mysqli_fetch_array($result)) { //displaying data of each row
    echo "".$row["firstname"]." ".$row["lastname"]. " ".$row["email"]." ".$row["telephone"]."<br>";
}

?>