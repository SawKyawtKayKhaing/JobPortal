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
<?php

$name = $companytype = $city = $jobvaccancy = $salary = $experience = $age = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name:   <input type="text" name="name">
    <br><br>
    Type of Company:    <input type="text" name="type" style="margin-left:30px;">
    <br><br>
    City: <input type="text" name="city" style="margin-left:30px;">
    <br><br>
    Job Vaccancy:   <input type="text" name="job">
    <br><br>
    Salary: <input type="text" name="salary">
    <br><br>
    Experience: <input type="text" name="experience">
    <br><br>
    Age:    <input type="text" name="age">
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input type="submit" name="submit" value="Submit">  
  </form>
</body>
</html>