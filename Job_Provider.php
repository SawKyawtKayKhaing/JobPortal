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
        <label for="city" class="col-sm-2 col-form-label">City:</label>
            <div class="col-sm-10">
                <input type="text" name="city" id="city"  placeholder="Enter city">

            </div>
    </div><br>
    <div class="form-group row">
        <label for="job" class="col-sm-2 col-form-label">Job Vacancy:</label>
            <div class="col-sm-10">
                <input type="text" name="jobvacancy" id="job"  placeholder="Enter Job Vacancy">
            </div>
    </div><br>
    <div class="form-group row">
        <label for="salary" class="col-sm-2 col-form-label">Salary:</label>
            <div class="col-sm-10">
                <input type="text" name="salary" id="salary"  placeholder="Enter Salary" >
            </div>
    </div><br>
    <div class="form-group row">
        <label for="exp" class="col-sm-2 col-form-label">Experience:</label>
            <div class="col-sm-10">
                <textarea name="experience" id="exp" ></textarea>
            </div>
    </div><br>
    <div class="form-group row">
        <label for="age" class="col-sm-2 col-form-label">Age:</label>
            <div class="col-sm-10">
                <input type="text"  name="age" id="age" placeholder="Enter Age">
            </div>
    </div><br>
    <div class="form-check">
        <label class="form-check-label">Gender:
        <input type="radio" name="gender" value="Male">Male
        <input type="radio"  name="gender" value="Female">Female
        <input type="radio"  name="gender" value="Other">Other
        </label>
    </div><br>
    <div class="form-group row">
        <label for="ss" class="col-sm-2 col-form-label">sid:</label>
            <div class="col-sm-10">
                <input type="text"  name="text" id="ss" placeholder="Enter seekid">
            </div>
    </div><br>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div>

    <?php
     include 'footer.php'
    ?>
</form> 
<?php
include 'j-Provider.php';

            if(isset($_POST['submit']))
            {
                $name = $_POST["name"];
                $companytype = $_POST["companytype"];
                $city = $_POST["city"];
                $jobvacancy = $_POST["jobvacancy"];
                $salary = $_POST["salary"];
                $experience = $_POST["experience"];
                $age = $_POST["age"];
                $gender = $_POST["gender"];
                $sid=$_POST["text"];

            $mylist =new Provide($name, $companytype, $city, $jobvacancy, $salary, $experience, $age, $gender,$sid);
            $mylist->companyInformation();
            $arr = array("Name"=>$mylist->get_name(),"Type of Company"=>$mylist->get_type(),"City"=>$mylist->get_city(),
            "Job Vacanacy"=>$mylist->get_vacancy(),"Salary"=>$mylist->get_salary(),"Experience"=>$mylist->get_experience(),
            "Age"=>$mylist->get_age(),"Gender"=>$mylist->get_gender(),$mylist->get_sid());
            $add = json_encode($arr);

            $myfile = fopen("j-Provider.txt", "a") or die("Unable to open file!");
            fwrite($myfile, $add."\n");
            fclose($myfile);

            $servername ="localhost";
            $username = "root";
            $password = "";
            $dbname = "job";

            $conn =new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO  provider(name,typeOfCompany, city, job_vacancy, salary, experience, age, gender,sid) VALUES ('$name', '$companytype', '$city', '$jobvacancy','$salary','$experience','$age','$gender','$sid')";

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