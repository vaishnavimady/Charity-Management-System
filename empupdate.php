
<?php include("connection.php");
$id = $_GET['id'];
$query = "SELECT * FROM employee where eid = '$id'";
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
               Employee Updation form
            </div>
        <div class="form">
            <div class="input_field">
                <label>ename</label>
                <input type="text" value="<?php echo $result['ename']; ?>" class="input" name="ename" required>
            </div>
            <div class="input_field">
                <label>age</label>
                <input type="text" value="<?php echo $result['age'];  ?>" class="input" name="age" required>
            </div>
            <div class="input_field">
                <label>phone</label>
                <input type="text" value="<?php echo $result['phone']; ?>" class="input" name="phone" required>
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
        $ename = $_POST['ename'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $houseno = $_POST['houseno'];
        $locality = $_POST['locality'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];


            $query = "UPDATE employee set ename='$ename',age='$age',phone='$phone',houseno='$houseno',locality='$locality',city='$city',state='$state',pincode='$pincode' WHERE eid='$id' ";
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
