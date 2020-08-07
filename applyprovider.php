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
        
        include 'database.php';
        $sql="SELECT * FROM company";
        
        $provider=array();
        

        if($result=$conn->query($sql)){
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                $provider[]=$row;
            }
        }
    
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <div class="form-group row">
        <label for="uname" class="col-sm-2 col-form-label">Provider Name:</label>
            <select name="provider">
                <?php
                    if(count($provider)>0){
                        foreach($provider as $pro){
                            echo "<option value='".$pro['pid']."'>{$pro['cname']}</option>";
                        }
                    }else{
                        echo "no result";
                    }
                ?>
            </select>
    </div><br>
    
    
</form> 
</body>
</html>