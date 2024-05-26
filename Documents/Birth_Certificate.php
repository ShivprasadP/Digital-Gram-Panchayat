<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="/CSS/User/Register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 100%;
            padding: 20px;
        }

        .btn {
            display: flex;
            margin-left: 44%;
            justify-content: center;
            align-items: center;
        }
    </style>
    <title>Birth Certificate</title>
</head>

<body>

    <div class="container-fluid">
        <div class="wrapper">
            <center>
                <h2>Birth Certificate</h2>
                <p>Please fill this form to apply for birth certificate</p>
            </center>
            <form action="" method="POST">
                <div class="form-group">
                    <label>Full Name of Child: </label>
                    <input type="text" placeholder="Enter full name of child..." name="fname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Name of Mother:</label>
                    <input type="text" placeholder="Enter full name of mother..." name="uname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Name of Father:</label>
                    <input type="text" placeholder="Enter full name of Father..." name="uname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <textarea name="address" placeholder="Enter permanent address of parents..." cols="30" rows="6" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label>Date of Birth:</label>
                    <input type="date" name="dob" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Gender:</label>
                    <label><input type="radio" name="gender" class="form-control" value="Male">Male</label>
                    <label><input type="radio" name="gender" class="form-control" value="Female">Female</label>
                </div>
                <div class="form-group">
                    <label>Place of Birth:</label>
                    <input type="text" placeholder="Enter Place of Birth..." name="uname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Name of Applicant & Signature:</label>
                    <input type="text" placeholder="Enter name of applicant..." name="fname" class="form-control" required><br>
                    <input type="file" name="pic" required>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <script src="<?php echo $server; ?>js/script.js"></script>
</body>

</html>