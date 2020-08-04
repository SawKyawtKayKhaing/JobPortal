
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="onlinejobportal";                     
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection Error");
}

$sql = "SELECT seeker.name,seeker.address,seeker.position from seeker,jobportal where seeker.position = jobportal.JobVacancy and seeker.experience = jobportal.Experience5;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name:". $row['seeker.name']. "Address:" . $row['seeker.address']. "Position:".$row['seeker.position']. "<br>";
  
  }
} else {
  echo "0 results";
}
$conn->close();

?>