
<?php

 $conn=mysqli_connect("localhost","root","","digital_panchayat");

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="card">
        <div class="card-header">
            View Appications
        </div>
        <div class="card-body">
            <h5 class="card-title">Appications</h5>


            <table class="table table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">App name</th>
                        <th scope="col">Email</th>
                        <th scope="col">mobile</th>
                         <th scope="col">gender</th>
                          <th scope="col">dob</th>
                           <th scope="col">Address</th>
                            <th scope="col">city</th>
                             <th scope="col">pincode</th>
                              <th scope="col">state</th>
                               <th scope="col">Adhar card</th>
                                <th scope="col">Pancard</th>
                                <th scope="col">Status</th>
                                
                    </tr>
                </thead>
                <input type="hidden" name="id" value="">
                <tbody>
                    <?php 
                   
                    $sql=mysqli_query($conn,"select * from applicationf where status='confirm'");
                    while($data=mysqli_fetch_assoc($sql))
                    {

                    echo '<tr>
                    <form action="application_view.php" method="post">
                      <td>'.$data['id'].'</td>
                       <input type="hidden" name="id" value="'.$data['id'].'">
                        <td>'.$data['fname'].'</td>
                        <td>'.$data['appname'].'</td>
                        <td>'.$data['email'].'</td>
                        <td>'.$data['mobile'].'</td>
                        <td>'.$data['gender'].'</td>
                        <td>'.$data['dob'].'</td>
                        <td>'.$data['address'].'</td>
                        <td>'.$data['city'].'</td>
                        <td>'.$data['pincode'].'</td>
                        <td>'.$data['state'].'</td>
                        <td>'.$data['pincode'].'</td>
                        <td>'.$data['pincode'].'</td>
                        <td>'.$data['status'].'</td>
                     

                       
                      
                        </form>
                        <tr>';
                    }

                   ?>


                </tbody>
            </table>
        </div>
    </div>

</body>

</html>