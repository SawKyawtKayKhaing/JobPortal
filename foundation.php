<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <title>Document</title>
  <style>
table {
  border-collapse: collapse;
  width:50%;
}

th, td {
  text-align: left;
  padding: 3px;
}

tr:nth-child(odd) {background-color: #f2f2f2;}
</style>
</head>
<body>
  
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="job";                     
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection Error");
}

$sql = "SELECT applyjob.jid, seeker.name, provider.cname,seeker.gender FROM ((applyjob INNER JOIN seeker ON applyjob.seekerid = seeker.id) INNER JOIN provider ON applyjob.provider_id = provider.pid)";
echo "<table><thead><tr ><th>Id</th><th>Seeker Name</th><th>Company Name</th><th>Gender</th></tr></thead><tbody>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>"."<td>". $row["jid"]. "</td>"."<td>". $row["name"]."</td>". "<td>".$row["cname"]."</td>"."<td>".$row["gender"]."</td>"."</tr>"."<br>";
    
  
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>