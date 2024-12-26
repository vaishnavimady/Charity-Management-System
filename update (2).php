
<?php include("connection.php");
$id = $_GET['id'];
$query = "SELECT * FROM donor where did = '$id'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styleupdate.css">
        <title>update</title>
    </head>
    <body>
        <div class="container">
            <form action="#" method="POST">
            <div class="title">
               Updation form
            </div>
        <div class="form">
            <div class="input_field">
                <label>fname</label>
                <input type="text" value="<?php echo $result['fname']; ?>" class="input" name="fname" required>
            </div>
            <div class="input_field">
                <label>lname</label>
                <input type="text" value="<?php echo $result['lname']; ?>" class="input" name="lname" required>
            </div>
            <div class="input_field">
                <label>age</label>
                <input type="text" value="<?php echo $result['age'];  ?>" class="input" name="age" required>
            </div>
            
            <div class="input_field">
                <label>gender</label>
                <select class="select" name="gender" required>
                    <option value="">Select</option>

                    <option value="male"
                       <?php
                       if($result['gender'] == 'male') 
                       {
                           echo "selected";
                       }
                       ?>
                    >male</option>
                    <option value="female"
                    <?php
                    if($result['gender'] == 'female') 
                    {
                        echo "selected";
                    }
                    ?>
                    >female</option>
                </select>
            </div>
            <div class="input_field">
                <label>houseno</label>
                <input type="text" value="<?php echo $result['houseno']; ?>" class="input" name="houseno" required>
            </div>
            <div class="input_field">
                <label>locality</label>
                <input type="text" value="<?php echo $result['locality']; ?>" class="input" name="locality" required>
            </div>
            <div class="input_field">
                <label>city</label>
                <input type="text" value="<?php echo $result['city']; ?>"class="input" name="city" required>
            </div>
            <div class="input_field">
                <label>state</label>
                <input type="text" value="<?php echo $result['state']; ?>" class="input" name="state" required>
            </div>
            <div class="input_field">
                <label>pincode</label>
                <input type="text" value="<?php echo $result['pincode']; ?>" class="input" name="pincode" required>
            </div>

            <div class="input_field">
                <label>submit</label>
                <input type="submit" value="Update" class="btn" name="update">
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
     if($_POST['update'])
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


            $query = "UPDATE donor set fname='$fname',lname='$lname',age='$age',gender='$gender',houseno='$houseno',locality='$locality',city='$city',state='$state',pincode='$pincode' WHERE did='$id' ";
            $data = mysqli_query($conn, $query);
            if ($data) 
            {
                echo "Record updated";
            } else 
            {
                echo "failed";
            }
        }
        
     
    ?>
