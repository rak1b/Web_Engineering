<?php
    require 'conn.php';

    $slot_date = "monday";

    $sql=     "select count(distinct sid) from `data` WHERE slot = '$slot_date';";
    $result=mysqli_query($con,$sql); 

    // while($row = mysqli_fetch_array($result)) {
    //     echo $row['column_name']; // Print a single column data
    //     echo print_r($row);       // Print the entire row data
    // }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <?php include('links.php'); ?>

</head>

<body>
    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                    <div class="row">
                        <div class="col text-center">
                            <h1>Signup</h1>
                        </div>
                    </div>
                    <form action="signup.php" method="post">

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="text" id='fname' name='fname' class="form-control" placeholder="First Name">
                            </div>
                            <div class="col">
                                <input type="text" id='lname' name='lname' class="form-control" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="text" id='sid' name='sid' class="form-control" placeholder="Sid">
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="email" id='email' name='email' class="form-control" placeholder="Email">
                            </div>
                        </div>


                        <div class="form-group mt-3">
                            <label for="time_slot">Select the time slot from here</label>
                            <select multiple class="form-control" onclick=slotFun() id="time_slot">

                                <option>Monday 10am-12am - 8 seats available</option>
                                <option>Tuesday 10am-12am - 8 seats available</option>
                                <option>Thursday 10am-12am - 8 seats available</option>
                                <option>Wednesday 10am-12am - 8 seats available</option>
                            </select>
                        </div>


                        <input type="hidden" name="slot" id="slot">


                        <div class="row justify-content-start mt-4">
                            <div class="col">

                                <button onclick=fun() class="btn btn-primary mt-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>