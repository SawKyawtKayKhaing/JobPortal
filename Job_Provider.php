<!DOCTYPE html>
<html>
<head>
<style>
input{
    margin-left: 10px;
}
</style>
</head>
<body>

    <style>
        footer {
        text-align: center;

        background-color: black;
        color: white;
        }
        body{
            background-color: cyan;
            background-image: url('jprovider.jpg');
            background-repeat: no-repeat;

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
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div>

    <footer>
  <p>About Job Provider</p>
</footer>
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

            $mylist =new Provide($name, $companytype, $city, $jobvacancy, $salary, $experience, $age, $gender);
            $mylist->companyInformation();
            $arr = array("Name"=>$mylist->get_name(),"Type of Company"=>$mylist->get_type(),"City"=>$mylist->get_city(),
            "Job Vacanacy"=>$mylist->get_vacancy(),"Salary"=>$mylist->get_salary(),"Experience"=>$mylist->get_experience(),
            "Age"=>$mylist->get_age(),"Gender"=>$mylist->get_gender(),);
            $add = json_encode($arr);

            $myfile = fopen("j-Provider.txt", "a") or die("Unable to open file!");
            fwrite($myfile, $add."\n");
            fclose($myfile);

            $servername ="localhost";
            $username = "root";
            $password = "";
            $dbname = "onlinejobportal";

            $conn =new mysqli($servername, $username, $password, $dbname);
            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO  jobportal(Name,TypeOfConpany, City, JobVacancy, Salary, Experience, Age, Gender) VALUES ('$name', '$companytype', '$city', '$jobvacancy','$salary','$experience','$age','$gender')";

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