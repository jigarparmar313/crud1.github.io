<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        body{
            background: #D071F9;
        }

        table{
            background: white;
        }

        .update,.delete{
            background: green;
            color:white;
            border:0;
            outline:none;
            border-radius:5px;
            height:22px;
            width:80px;
            font-weight:bold;
            cursor:pointer;
            /* margin-left:5px; */
        }

        .delete{
            background: red;
        }
    </style>
</head>
<body>
    

<?php

include("connection.php");  // it will remove the shown error

error_reporting(0);

$query = "SELECT * FROM form_crud1"; // * means all

$data = mysqli_query($conn,$query);   // its needs two parameters

$total = mysqli_num_rows($data);

// $result = mysqli_fetch_assoc($data);

// echo $result;                 // here fname,lname je pan 6 e badha mysql na jem j lakhvanu 
// echo $result['fname']." ";   
// echo $result['lname']." ";
// echo $result['gender']." ";
// echo $result['email']." ";
// echo $result['phone']." ";
// echo $result['address']." ";

echo $result['fname']." ".$result['lname']." ".$result['gender']." ".$result['email']." ".$result['phone']." ".$result['address'];

// echo $total;


if($total != 0)  // if total is not equal to 0 then
{
    // echo " Tables are found ";
    ?>

    <h2 align="center"><mark>Displaying All Records</mark></h2>
<center>

    <table border=1 cellspacing=7 cellpadding=0 width="100%">
<tr>
    <th width="5%">Sr No</th>
    <th width="8%">First Name</th>
    <th width="8%">Last Name</th>
    <th width="10%">Gender</th>
    <th width="20%">Email Address</th>
    <th width="10%">Phone Number</th>
    <th width="1%">Caste</th>
    <th width="24%">Address</th>
    <th width="15%">Operations</th>
</tr>

<?php
    while($result = mysqli_fetch_assoc($data))    // while --> jab tak 
    {
       
        echo "<tr>
                  <td>".$result['id']."</td>
                  <td>".$result['fname']."</td>
                  <td>".$result['lname']."</td>
                  <td>".$result['gender']."</td>
                  <td>".$result['email']."</td>
                  <td>".$result['phone']."</td>
                  <td>".$result['caste']."</td>
                  <td>".$result['address']."</td>
                  <td align='center'><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>

                 <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return check_delete()'></a></td>

             </tr>
             ";

        // echo $result['fname']." ".$result['lname']." ".$result['gender']." ".$result['email']." ".$result['phone']." ".$result['address']."<br>";

    }

}
else
{
    echo "No tables found";
}

?>

</table>
</center>

<script>

    function check_delete()
    {
        return confirm('Are you sure, you want to delete this record ?');
    }

</script>

</body>
</html>