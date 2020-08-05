<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
function myFunction() {
  alert("Welcome! This is new employee list");
}
</script>

    
</head>
    <title>Document</title>
</head>
<body style="background-image:url('jobportal.png');background-repeat:no-repeat;background-size:cover;">
    <h2>Online Job Portal System</h2><br><br>
        <a href="register.php"class="btn btn-outline-info" role="button">Job Seeker</a>&nbsp;
        <a href="sinfo.php"class="btn btn-outline-secondary" role="button"> Seeker List</a>&nbsp;
        <a href="pregister.php" class="btn btn-outline-success" role="button">Job Provider</a>&nbsp;
        <a href="providerlist.php"class="btn btn-outline-primary" role="button"> Company List</a>&nbsp;
        <a href="foundation.php"class="btn btn-outline-dark" role="button" onclick="myFunction()">Apply</a>
<div>
    <?php 
        include 'footer.php';
    ?>
</div>
         
</body>
</html>