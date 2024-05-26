<?php  
$conn=mysqli_connect("localhost","root","","digital_panchayat");

if(isset($_POST['btn']))
{

    $sql="insert into applicationf(fname,appname,email,mobile,gender,dob,address,city,pincode,state,password,adharcard,pancard,status)values('".$_POST['firstname']."','".$_POST['appname']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['gender']."','".$_POST['dob']."','".$_POST['address']."','".$_POST['city']."','".$_POST['pin']."','".$_POST['state']."','".$_POST['password']."','".$_POST['image']."','".$_POST['image1']."','Pending')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Apply succesfully')</script>";
    }
    else
    {
         echo "<script>alert('Error')</script>";
    }


}
 ?>


<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Responsive Registaration Form</title>
    <link rel="stylesheet" href="./responsiveRegistration.css">
    <script type="text/javascript" lang="javascript" src="./responsiveRegistaration.js"></script>
</head>

<body>
    <form action="apply.php" method="post">
        <h1>kanya Van samriddhi yojan Form</h1>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <label for="fname">First Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="firstname" placeholder="Enter your first name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="lname">App name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="lname" name="appname" placeholder="Enter your app name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="email">Email:</label>
                </div>
                <div class="col-90">
                    <input type="email" id="email" name="email" placeholder="it should contain @,." required>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="mobile">Mobile:</label>
                </div>
                <div class="col-90">
                    <input type="tel" id="mobile" name="mobile" placeholder="only 10 digits are allowed" maxlength="10">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="gender" required>Gender:</label>
                </div>
                <div class="col-90">
                    <input type="radio" id="male" name="gender" value="male" />Male
                    <input type="radio" id="female" name="gender" value="female" />Female
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="dob">Date Of Birth:</label>
                </div>
                <div class="col-90">
                    <input type="Date" id="dob" name="dob">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="city">City:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="city" name="city" maxlength="10">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="pincode">Area PIN:</label>
                </div>
                <div class="col-90">
                    <input type="number" id="pin" name="pin" maxlength="6">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="state">State:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="state" name="state">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="password">Password:</label>
                </div>
                <div class="col-90">
                    <input type="password" id="password" name="password" maxlength="8">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <br>Select Addhar Photo to upload<br>
                    <br><input type="file" name="image"><br>

                 
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-10">
                    Select PanCard to upload<br>
                    <br><input type="file" name="image1" ><br>
                 
                </div>
            </div>
            <div class="row">
                <br><br><input type="submit" value="Apply" name="btn">
            </div>
        </div>
    </form>
</body>

</html>