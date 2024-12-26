<?php include("connection.php");?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>update</title>
    </head>
    <body>
        <div class="container">
            <form action="#" method="POST">
            <div class="title">
               updation form
            </div>
        <div class="form">
            <div class="input_field">
                <label>fname</label>
                <input type="text" class="input" name="fname">
            </div>
            <div class="input_field">
                <label>lname</label>
                <input type="text" class="input" name="lname">
            </div>
            <div class="input_field">
                <label>age</label>
                <input type="text" class="input" name="age">
            </div>
            
            <div class="input_field">
                <label>gender</label>
                <select name="gender">
                    <option>male</option>
                    <option>female</option>
                </select>
            <div class="input_field">
                <label>houseno</label>
                <input type="text" class="input" name="houseno">
            </div>
            <div class="input_field">
                <label>locality</label>
                <input type="text" class="input" name="locality">
            </div>
            <div class="input_field">
                <label>city</label>
                <input type="text" class="input" name="city">
            </div>
            <div class="input_field">
                <label>state</label>
                <input type="text" class="input" name="state">
            </div>
            <div class="input_field">
                <label>pincode</label>
                <input type="text" class="input" name="pincode">
            </div>

            <div class="input_field">
                <label>submit</label>
                <input type="submit" value="register" class="btn" name="register">
            </div>
            </div>
            </div>
            </div>

        </div>
</form>
        </div>
    </body>
    </html>

    <?php
     if($_POST['register'])
     {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $houseno = $_POST['houseno'];
        $locality = $_POST['locality'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];

        if ($fname != "" && $lname != "" && $age != "" && $gender != "" && $houseno != "" && $locality != "" && $city != "" && $state != "" && $pincode != "") {

            $query = "INSERT INTO donor values('','$fname','$lname','$age','$gender','$houseno','$locality','$city','$state','$pincode')";
            $data = mysqli_query($conn, $query);
            if ($data) {
                echo "data inserted into database";
            } else {
                echo "failed";
            }
        }
        else
        {
            echo "<script>alert('Fields are empty');</script>";
        }
     }
    ?>


