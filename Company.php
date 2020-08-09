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
            background-image: url('jobprovider.jpg');
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
        <label for="uname" class="col-sm-2 col-form-label">Name:</label>
            <div class="col-sm-10">
                <input type="text"  name="name" id="uname" placeholder="Enter Name">
            </div>
    </div><br>

    <div class="form-group row">
        <label for="type" class="col-sm-2 col-form-label">Type of Company:</label>
            <div class="col-sm-10">
                <input type="text" name="companytype" id="type" placeholder="Enter Type of Company">

            </div>
    </div><br>
    <div class="form-group row">
        <label for="qty" class="col-sm-2 col-form-label">Employee Qty:</label>
            <div class="col-sm-10">
                <input type="text" name="qty" id="type" placeholder="Enter Employee Qty">

            </div>
    </div><br>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div> 
</form> 
        <?php
            include 'footer.php';
        ?>
<?php
include 'companyfun.php';

            if(isset($_POST['submit']))
            {
                $name = $_POST["name"];
                $companytype = $_POST["companytype"];
                $qty=$_POST["qty"];
                
            $mylist =new Provide($name, $companytype,$qty);
            $mylist->companyInformation();
            $arr = array("Name"=>$mylist->get_name(),"Type of Company"=>$mylist->get_type(),"Employee_qty"=>$mylist->get_qty());
            
            $servername ="localhost";
            $username = "root";
            $password = "";
            $dbname = "job";

            $conn =new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO  company(cname,typeOfCompany,employee_qty) VALUES ('$name', '$companytype','$qty')";

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