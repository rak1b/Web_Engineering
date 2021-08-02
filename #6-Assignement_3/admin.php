<?php
require 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require 'links.php';

    ?>
</head>

<body>

    <div class="container admin_container">



        <h2 class="text-center mt-5 mb-5">List of students</h2>

        <table class="table table-bordered table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">SID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Slot</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql =     "select * from data";
                $result = mysqli_query($con, $sql);


                if ($result) {
                    // echo "Working";
                } else {
                    echo "Not Working";
                }


                while ($row = mysqli_fetch_array($result)) {
                    // echo $row['sid']; // Print a single column data
                    // $num =  $row['count(distinct sid)']; // Print a single column data
                    // echo print_r($row);       // Print the entire row data

                ?>
                
                <tr>
                    <th scope="row"><?php echo $row['sid'];?></th>
                    <th scope="row"><?php echo $row['fname'];?></th>
                    <th scope="row"><?php echo $row['lname'];?></th>
                    <th scope="row"><?php echo $row['email'];?></th>
                    <th scope="row"><?php echo $row['slot'];?></th>
                    <td><a href="edit.php?id=<?php echo $row['sid'] ;?>"><i class='bx bxs-edit'></i></a></td>
                    <td><a href="delete.php?id=<?php echo $row['sid'] ;?>"><i class="bx bxs-trash"></i></a></td>
                </tr>
            <?php 




            }

            ?>

            </tbody>
        </table>

    </div>

</body>

</html>