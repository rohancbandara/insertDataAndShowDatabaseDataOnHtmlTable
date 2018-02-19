<?php

require_once 'inc/connection.php';


$query="SELECT * FROM customer ";
$result= mysqli_query($con, $query);

$id='REG ID';

echo "<table border=1> ";
echo "<tr><td>reg id</td><td>First Name</td><td>Last Name</td><td>Sex</td><td>Email</td><td>Contact Number</td></tr>";
while ($row = mysqli_fetch_array($result)) {
  
    echo "<tr><td>".$row['id']. "</td><td>".$row['fname']."</td><td>".$row['lname']. "</td><td>".$row['gender']. "</td><td>".$row['email']. "</td><td>".$row['tel']. "</td></tr>";
}
echo "</table>";