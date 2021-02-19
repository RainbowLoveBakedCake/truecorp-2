<?php 
$connection = mysqli_connect('172.22.0.2', 'root', 'qwerty','trucorp-db');
$query = "SELECT * FROM users"; 

if(!$connection){
echo "No connect to database";
}

$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){  
echo "ID:" . $row['UsersID'] . " " . "Nama:" . $row['UsersName'] . " " . "Kantor:" . $row['UsersOffice'];
}

mysqli_close($connection);


?>
