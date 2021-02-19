$connection = mysqli_connect('172.22.0.2', 'root', 'qwerty','trucorp-db');
$query = "SELECT * FROM users"; 

$echo "Total data :"

if(!$connection){
echo "No connect to database";
}

$index = 0;

$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)){  
$index++;
}

echo $index;
mysqli_close($connection);
