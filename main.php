<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
        function myFunction()
        {
        alert("Welcome! This is new employee list");
        }
</script>

    

    <title>Document</title>
</head>
<body style="background-image:url('jobportal.png');background-repeat:no-repeat;background-size:cover;">
<div>
<div>
        
    <i class="fa fa-google" style="font-size:20px;color:red;float:right;margin-top:3px;margin-right:70px;"></i>
    <i class="fa fa-linkedin" style="font-size:20px;color:blue;float:right;margin-top:3px;margin-right:10px;"></i>
    <i class="fa fa-twitter" style="font-size:20px;color:blue;float:right;margin-top:3px;margin-right:5px;"></i>
    <i class="fa fa-instagram" style="font-size:20px;color:red;float:right;margin-top:3px;margin-right:3px;"></i>
    <i class="fa fa-facebook-f" style="font-size:20px;color:blue;float:right;margin-top:3px;margin-right:1px;"></i>
    
    </div>
    <h1 style="text-align:center;">Online Job Portal System</h1><br><br>
    <a href="register.php"class="btn btn-outline-info" role="button">Job Seeker</a>&nbsp;
    <a href="Company.php"class="btn btn-outline-secondary" role="button"> Company</a>&nbsp;
    <a href="pregister.php" class="btn btn-outline-success" role="button">Job Post</a>&nbsp;
    <a href="providerlist.php"class="btn btn-outline-primary" role="button"> Company List</a>&nbsp;
    <a href="foundation.php"class="btn btn-outline-danger" role="button" onclick="myFunction()">Apply</a>

    </div>
     
    <div>
    <?php 
        include 'footer.php';
    ?>
    </div>
         

</body>
</html>