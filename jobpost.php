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
</head>
<body>
<?php
        include 'nav.php';
    ?>
    
    <div class="container">
    <h2>Job Post</h2>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <div class="form-group row">
        <label for="uname" class="col-sm-2 col-form-label">Job Name:</label>
            <div class="col-sm-10">
                <input type="text"  name="name" id="uname" placeholder="Enter JOb Name">
            </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
        </div>
    </div>

    </form>
</div>
<?php
     include 'footer.php';
    ?>

<?php   
    class Cat
    {
        public $jobname;
        public function __construct($jobname)
        {
            $this->jobname=$jobname;
        }
        function set_jobname($jobname)
        {
          $this->jobname=$jobname;
        }
        function get_jobname()
        {
        return $this->jobname;
        }
        public function Info()
        {
          echo "Name= {$this->jobname}";
        }
    }
    if(isset($_POST['submit']))
        {
        
            $jobname =$_POST["name"];
            $list=new Cat($jobname);
            $list->Info();

            $arr=array("Job Name"=>$list->get_jobname());

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "job";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO jobcategory (catname)
            VALUES ('$jobname')";

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