<?php
require 'conn.php';


function slot_remaining($name, $con)
{
    $sql =     "select count(distinct sid) from `data` WHERE slot = '$name';";
    $result = mysqli_query($con, $sql);


    if ($result) {
    } else {
        echo "Not Working";
    }


    while ($row = mysqli_fetch_array($result)) {
        // echo $row['sid']; // Print a single column data
        $num =  $row['count(distinct sid)']; // Print a single column data
        // echo print_r($row);       // Print the entire row data
    }

    echo 8 - $num;
}




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
                        <div class="col text-center mb-3">
                            <h2>SignUp Here</h2>
                            <p>OR</p>
                            <a href="admin.php">Go to Admin Page</a>
                        </div>
                    </div>
                    <form class='form_bg' action="signup.php" method="post">

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


                        <script>
                            function slotFun() {
                                console.log('clicked')
                                var time_slot = document.getElementById("time_slot");
                                var selected_slot = time_slot.options[time_slot.selectedIndex].value;
                                const temp_slot = selected_slot.split(" ")[0];
                                document.getElementById("slot").value = temp_slot;


                            }
                            var mon_slot = <?php slot_remaining('monday', $con) ?>;
                            var tuesday_slot = <?php slot_remaining('tuesday', $con) ?>;
                            var wednesday_slot = <?php slot_remaining('wednesday', $con) ?>;
                            var thursday_slot = <?php slot_remaining('thursday', $con) ?>;


                            function slot_check1(){
                                if (mon_slot <= 0) {
                                alert("Slot full,Please select another!")
                            }
                            }

                            function slot_check2(){
                                if (tuesday_slot <= 0) {
                                alert("Slot full,Please select another!")
                            }
                            }
                            function slot_check3(){
                                if (wednesday_slot<= 0) {
                                alert("Slot full,Please select another!")
                            }
                            }

                            function slot_check4(){
                                if (thursday_slot <= 0) {
                                alert("Slot full,Please select another!")
                            }
                            }

                            
                        </script>
                        <div class="form-group mt-3">
                            <label for="time_slot">Select the time slot from here</label>
                            <select multiple class="form-control" onclick=slotFun() id="time_slot">

                                <option onclick="slot_check1()">Monday 10am-12am - <script>
                                        document.write(mon_slot)
                                    </script> seats available</option>

                                <option onclick="slot_check2()" >Tuesday 10am-12am - <script>
                                        document.write(tuesday_slot)
                                    </script> seats available</option>

                                <option onclick="slot_check3()">Thursday 10am-12am - <script>
                                        document.write(wednesday_slot)
                                    </script> seats available</option>
                                    
                                <option onclick="slot_check4()">Wednesday 10am-12am - <script>
                                        document.write(thursday_slot)
                                    </script> seats available</option>
                            </select>
                        </div>


                        <input type="hidden" name="slot" id="slot">


                        <div class="row justify-content-start mt-3 mb-5">
                            <div class="col">

                                <button onclick=fun() class="btn btn-primary mt-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>

</html>