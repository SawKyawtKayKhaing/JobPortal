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
  width:90%;
  margin-left:30px;
  background-color: lightblue;
}

th, td {
  text-align: left;
  padding: 5px;
}


</style>
</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <?php include 'footer.php';
    ?>
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
$sql="SELECT seeker.name,provider.pname,seeker.position,applyjob.Apply_date,seeker.city,seeker.gender,provider.pduedate FROM seeker join applyjob join provider where seeker.id=applyjob.sid and applyjob.provider_id=provider.pid and seeker.position=provider.pjob_vacancy and seeker.experience=provider.pexperience and seeker.gender=provider.pgender;";
echo "<table><thead><tr ><th>Seeker Id</th><th>Seeker Name</th><th>Company Name</th><th>Position</th><th>ApplyDate</th><th>City</th><th>Gender</th><th>Duedate</th></tr></thead><tbody>";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>"."<td>". $row["id"]. "</td>"."<td>". $row["name"]."</td>". "<td>".$row["pname"]."</td>"."<td>".$row["position"]."</td>"."<td>".$row["Apply_date"]."</td>"."<td>".$row["city"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["pduedate"]."</td>"."</tr>"."<br>";
    
  
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>