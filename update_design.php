<?php include("connection.php");

// echo $_GET['id'];

$id = $_GET['id'];

$query = "SELECT * FROM form_crud1 where id = '$id'"; // * means all

$data = mysqli_query($conn,$query);   // its needs two parameters

// $total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);    // while --> jab tak 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Update Student Details</title>
</head>

<body>

    <div class="container">

        <form action="#" method="POST">

            <div class="title">
                Update Student Details
            </div>

            <div class="form">

                <div class="input_field">
                    <label>First Name </label>
                    <input type="text" name="fname" id="" class="input" required value="<?php echo $result['fname']?>">
                </div>

                <div class="input_field">
                    <label>Last Name </label>
                    <input type="text" name="lname" id="" class="input" required  value="<?php echo $result['lname']?>" >
                </div>

                <div class="input_field">
                    <label>Password </label>
                    <input type="password" name="password" id="" class="input" required  value="<?php echo $result['password']?>">
                </div>

                <div class="input_field">
                    <label>Confirm Password </label>
                    <input type="password" name="conpassword" id="" class="input" required  value="<?php echo $result['cpassword']?>">
                </div>

                <div class="input_field">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select name="gender" id="" required>
                            <option value="">Select</option>

                            <option value="Male"
                            
                            <?php
                            if($result['gender'] == 'Male')
                            {
                                echo "selected";
                            }
                            ?>

                            >                        
                            Male</option>
                            <option value="Female"
                            
                            <?php
                            if($result['gender'] == 'Female')
                            {
                                echo "selected";
                            }
                            ?>

                            >Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>

                <div class="input_field">
                    <label>Email Address </label>
                    <input type="text" name="email" id="" class="input" required  value="<?php echo $result['email']?>">
                </div>

                <div class="input_field">
                    <label>Phone Number </label>
                    <input type="number" name="phone" id="" class="input" required  value="<?php echo $result['phone']?>">
                </div>

                <div class="input_field">
                    <label>Address </label>
                    <textarea name="address" id="" class="textarea" required ><?php echo $result['address']?></textarea>
                </div>

                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" name="" id="" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>

                <div class="input_field">
                    <input type="submit" id="" value="Update Details" class="btn" name ="update">
                </div>
            </div>
        </form>
    </div>



</body>

</html>

<?php             

if(isset($_POST['update']))

{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    // if($fname != "" && $lname != "" && $pwd != "" && $cpwd != "" && $gender != "" && $email != "" && $phone != "" && $address != "")

    // {

        // $query = "INSERT INTO form_crud1 (fname,lname,password,cpassword,gender,email,phone,address) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";

        $query = "UPDATE form_crud1 set fname='$fname',lname='$lname',password='$pwd',cpassword='cpwd',
        gender='$gender',email='$email',phone='$phone',address='$address' WHERE id='$id'";

    $data = mysqli_query($conn,$query);

    if($data)
    {
        // echo "Data Inserted into Database";
        // echo "Record Updated";
        echo "<script>alert('Record Updated')</script>"


        ?>

        <meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />

        <?php

    }
    else
    {
        // echo "Data Insterted Failed";
        echo "Failed to Update";
    }

    }
 
    // else
    // {
    //     // echo "Please fill the form";
    //     echo "<script>alert('Fill the form');</script>";

    // }

// }
    

?>