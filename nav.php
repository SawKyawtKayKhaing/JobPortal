<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Document</title>
    <script>
        function myFunction()
        {
        alert("Welcome! This is new employee list");
        }
</script>
    <body>
    <nav class="navbar navbar-expand-sm bg-info text-dark">
        
        <a href="register.php" class="btn btn-outline-danger" role="button">Job Seeker</a>&nbsp;&nbsp;
        <a href="Company.php" class="btn btn-outline-danger" role="button"> About Company</a>&nbsp;&nbsp;
        <a href="pregister.php" class="btn btn-outline-danger" role="button">Job Provider</a>&nbsp;&nbsp;
        <a href="providerlist.php" class="btn btn-outline-danger" role="button"> Company List</a>&nbsp;&nbsp;
        <a href="foundation.php"class="btn btn-outline-danger" role="button" onclick="myFunction()">Apply</a>          
        
    </nav>
    </body>
</html>