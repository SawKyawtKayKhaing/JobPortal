<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'seeker.php';
 $sql = "SELECT * FROM region";
 $region = array();
 if ($result = $conn->query($sql)) {
 
     while($row = $result->fetch_array(MYSQLI_ASSOC)) {
             $region[] = $row;
     }
     
 }

?>

<h3>Apply Job Result</h3>
    <label>Apply</label>
    <select id="regionId">
        <option>Select SeekerID</option>
        <?php
        if(count($region)>0){
            foreach($region as $r){
                echo "<option value='".$r['sid']."'>{$r['sid']}</option>";
            }
        }

        ?>
    </select>
    <br>
    <label>Provider</label>
    <select id="provider">

    </select>
</body>
</html>