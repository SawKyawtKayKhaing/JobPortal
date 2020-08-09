<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
input{
    margin-left: 10px;
}
</style>
</head>
<body>

    <style>
        body{
            background-color: cyan;
            background-image: url('jprovider.jpg');
            background-size:cover;
            background-repeat:no-repeat;
        }
</style>
</head>
<body>
    <?php
        include 'nav.php';
        include 'database.php';
        $sql="SELECT * FROM Seeker";        
        $seeker=array();        

        if($result=$conn->query($sql)){
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                $seeker[]=$row;
            }
        }    
    ?>
    <h2>Company Information</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div>
        <label class="col-sm-1">Apply date:</label>
        <input type="date" name="date">
    </div><br>

    <div>
        <?php
            include 'applyprovider.php';
        ?>
    </div><br>

    <div class="form-group row">
        <label for="uname" class="col-sm-2 col-form-label">Seeker Name:</label>
            <select name="seeker">
                <?php
                    if(count($seeker)>0){
                        foreach($seeker as $seek){
                            echo "<option value='".$seek['sid']."'>{$seek['name']}</option>";
                        }
                    }else{
                        echo "no result";
                    }
                ?>
            </select>
    </div><br>  
    
    <div class="form-group row">
        <button type="submit" class="btn btn-primary" name="submit">Sign in</button>        
    </div>
    </form>

    <?php
        
        if(isset($_POST['submit']))
        {   
            $date=$_POST["date"];
            $pid=$_POST["provider"];
            $sid=$_POST["seeker"];           
            //$result=new Apply($date,$pid,$sid);
            //$result->Info();       
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="job";                     
    $conn =new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

            $sql="INSERT INTO apply(duedate,cid,seekid)VALUES ('$date','$pid','$sid')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
            $conn->close();
        }
    ?>

    <?php
     include 'footer.php';
    ?>    
 
</body>
</html>