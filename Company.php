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
    ?>
    <h2>Company Information</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <div class="form-group row">
        <label for="uname" class="col-sm-2 col-form-label"> Company Name:</label>
            <div class="col-sm-10">
                <input type="text"  name="cname" id="uname" placeholder="Enter Name">
            </div>
    </div><br>
    
    <div class="form-group row">
        <label for="type" class="col-sm-2 col-form-label">Company Type:</label>
            <div class="col-sm-10">
                <input type="text" name="type" id="type"  placeholder="Enter Type" >
            </div>
    </div><br>
    <div class="form-group row">
        <label for="qty" class="col-sm-2 col-form-label">Employee Qty:</label>
            <div class="col-sm-10">
                <textarea name="qty" id="qty" ></textarea>
            </div>
    </div>
    
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div>
    
    <?php
     include 'footer.php';
    ?>    
</form>
<?php
include 'j-Provider.php';

            if(isset($_POST['submit']))
            {   
                $name = $_POST["cname"];
                $type=$_POST["type"];
                $qty=$_POST["qty"];
                
            //$mylist =new Provide($name, $type,$qty);
            //$mylist->companyInformation();
           

            include 'database.php';
            
            $sql = "INSERT INTO  company(cname,typeOfCompany,employee_qty) VALUES ('$name', '$type', '$qty')";
            $servername ="localhost";
            $username = "root";
            $password = "";
            $dbname = "job";

            $conn =new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            //$sql = "INSERT INTO  jobpost(job_name,salary,experience,age, gender,due_date) VALUES ('$name', '$salary','$experience','$age','$gender','$duedate')";


                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

            $conn->close();
            }
         ?> 
</body>
</html>
