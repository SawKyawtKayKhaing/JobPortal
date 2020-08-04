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

    $arrlist=array();
          //$arr=array("Name"=>$list->get_name(),"Amount"=>$list->get_amount());
         // $add=json_encode($arr);

          $myfile = fopen("j-Provider.txt", "r") or die("Unable to open file!");
          while(!feof($myfile))
            {
                global $arrlist;
            $result=fgets($myfile);
            if($result!="")
            {
               $res=json_decode($result);
               array_push($arrlist,$res) ;
            }
        }

            fclose($myfile);

    ?>
    <h2>Job Provider List</h2><br>
    <table class="table ">
        <thead >
            <tr class="table-active">
            <th>Name</th>
            <th>Type of Company</th>
            <th>City</th>
            <th>Job Vacancy</th>
            <th>Salary</th>
            <th>Experience</th>
            <th>Age</th>
            <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    foreach($arrlist as $arraylist)
                    {
                        echo '<tr>';
                            foreach($arraylist as $info)
                            {
                                echo '<td>'.$info.'</td>'."\t";
                            }
                        echo '</tr>';
                    }
            ?>
            </body>
</html> 