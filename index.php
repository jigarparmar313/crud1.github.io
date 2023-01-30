<?php include("connection.php")?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Php Crud Operation</title>
</head>

<body>

    <div class="container">

        <form action="#" method="POST">

            <div class="title">
                Registration form
            </div>

            <div class="form">

                <div class="input_field">
                    <label>First Name </label>
                    <input type="text" name="fname" id="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Last Name </label>
                    <input type="text" name="lname" id="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Password </label>
                    <input type="password" name="password" id="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Confirm Password </label>
                    <input type="password" name="conpassword" id="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select name="gender" id="" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>

                <div class="input_field">
                    <label>Email Address </label>
                    <input type="text" name="email" id="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Phone Number </label>
                    <input type="number" name="phone" id="" class="input" required>
                </div>

                
                <div class="input_field">
                    <label style='margin-right:100px;'>Caste</label>
                    <input type="radio" name="c1" value="General" required><label style='margin-left:5px;'>General</label>
                    <input type="radio" name="c1" value="BOX" required><label style='margin-left:5px;'>OBC</label>
                    <input type="radio" name="c1" value="SC" required><label style='margin-left:5px;'>SC</label>
                    <input type="radio" name="c1" value="ST" required><label style='margin-left:5px;'>ST</label>
                </div>

                <div class="input_field">
                    <label style='margin-right:85px;'>Languages</label>
                    <input type="checkbox" name="lang[]" value="Gujarati" ><label style='margin-left:5px;'>Gujarati</label>
                    <input type="checkbox" name="lang[]" value="Hindi" ><label style='margin-left:5px;'>Hindi</label>
                    <input type="checkbox" name="lang[]" value="English" ><label style='margin-left:5px;'>English</label>
                    <input type="checkbox" name="lang[]" value="Punjabi" ><label style='margin-left:5px;'>Punjabi</label>
                </div>

                <div class="input_field">
                    <label>Address </label>
                    <textarea name="address" id="" class="textarea" required></textarea>
                </div>

                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" name="" id="" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>

                <div class="input_field">
                    <input type="submit" id="" value="Register" class="btn" name ="register">
                </div>
            </div>
        </form>
    </div>



</body>

</html>

<?php             

if(isset($_POST['register']))

{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $caste = $_POST['c1'];
    $lang = $_POST['language'];
    $address = $_POST['address'];

    echo $lang;

    // if($fname != "" && $lname != "" && $pwd != "" && $cpwd != "" && $gender != "" && $email != "" && $phone != "" && $address != "")

    // {

        $query = "INSERT INTO form_crud1 (fname,lname,password,cpassword,gender,email,phone,caste,address) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$caste','$address')";

    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "Data Inserted into Database";
    }
    else
    {
        echo "Data Insterted Failed";
    }

    }
 
    // else
    // {
    //     // echo "Please fill the form";
    //     echo "<script>alert('Fill the form');</script>";

    // }

// }
    

?>