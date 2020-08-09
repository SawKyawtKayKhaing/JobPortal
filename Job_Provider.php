<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        body{
            background-color: cyan;
            background-image: url('Sales-Jobs.jpg');
            background-size:cover;
            background-repeat:no-repeat;
           
        }
        input{
    margin-left: 10px;
}

       
</style>
</head>
<body>
    <?php
        include 'nav.php';
        include 'database.php';
        $sql="SELECT * FROM company";
        
        $seeker=array();
        

        if($result=$conn->query($sql)){
            while($row=$result->fetch_array(MYSQLI_ASSOC)){
                $seeker[]=$row;
            }
        }
    ?>
    
    <div class="container">
    <h2>Company Information</h2>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                            <div class="form-group">
                                <label for="uname" class="form-label"> Job Name:</label>&nbsp;&nbsp;&nbsp;
                                    <input type="text"  name="name" id="uname" placeholder="Enter Name">
                            </div><br>

                            
                            <div class="form-group">
                                <label for="salary" class="form-label">Salary:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                              
                                     <input type="text" name="salary" id="salary"  placeholder="Enter Salary" >                                   
                            </div><br>

                            <div class="form-group">
                                <label for="exp" class="form-label">Experience:</label>&nbsp;&nbsp;
                                    
                                        <textarea name="experience" id="exp" ></textarea>
                                   
                            </div><br>

                            <div class="form-group">
                                <label for="age" class="form-label">Age:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                        <input type="text"  name="age" id="age" placeholder="Enter Age">
                                   
                            </div><br>

                            <div class="form-group">
                           
                                <label class="form-check-label">Gender:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="gender" value="Male">Male
                                <input type="radio"  name="gender" value="Female">Female
                              
                            </div><br>

                            <div class="form-group">
                                <label for="exp" class="form-label">City:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   
                                    <input type="text" name="city" id="salary"  placeholder="Enter City" >   
                            </div><br>

                            <div class="form-group">
                                <label for="dd" class="form-label">Due Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                   
                                        <input type="date"  name="due" id="dd" placeholder="Enter Date">
                                  
                            </div><br>

                            <div class="form-group">
                                <label for="uname" class="form-label" style="padding:10px;"> CName:</label>&nbsp;&nbsp;
                             
                                    <select name="seeker" id="uname" class="form-control-md">
                                        <?php
                                            if(count($seeker)>0){
                                                foreach($seeker as $seek){
                                                    echo "<option value='".$seek['pid']."'>{$seek['cname']}</option>";
                                                }
                                            }else{
                                                echo "no result";
                                            }
                                        ?>
                                    </select>
                                
                            </div><br>
                            
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </div>
    </form> 
                            
</div>
<?php
include 'j-Provider.php';

            if(isset($_POST['submit']))
            {
                $name = $_POST["name"];
                $salary = $_POST["salary"];
                $experience = $_POST["experience"];
                $age = $_POST["age"];
                $gender = $_POST["gender"];
                $city=$_POST["city"];
                $duedate=$_POST["due"];
                $comid=$_POST["seeker"];
                
            $mylist =new Provide($name, $salary,$experience, $age, $gender,$city,$duedate,$comid);
            $mylist->companyInformation();
            $arr = array("Name"=>$mylist->get_name(),"Salary"=>$mylist->get_salary(),"Experience"=>$mylist->get_experience(),"Age"=>$mylist->get_age(),"Gender"=>$mylist->get_gender(), "City"=>$mylist->get_city(),"DueDate"=>$mylist->get_duedate(),"Company"=>$mylist->get_comid());
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
            $sql = "INSERT INTO  jobpost(job_name,salary,experience,age, gender,city,companyid,due_date) VALUES ('$name', '$salary','$experience','$age','$gender','$city','$comid','$duedate')";
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