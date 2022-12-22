<?php
include "partial/_dbconnect.php";

?>
<!doctype html>
<html lang="en">

<head>
    <?php include 'partial/_head.php'; ?>
    <title>E-CRUD</title>
</head>

<body>
    <?php include "partial/_header.php" ?>
    <div class="container py-4">
        <?php
        $sql = "SELECT * FROM `e_students`";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("sorry");
        }

        $num = mysqli_num_rows($result);
        echo '<h2 class="text-center py-2">Total Students : ' . $num . ' </h2>';

        ?>

        <table class="table display" id="myTable">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Cast</th>
                    <th>Address</th>
                    <th colspan="2"> Action</th>
                </tr>
            </thead>

            <?php
            if ($num > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $row['sno'] ?></th>
                            <td><?php echo $row['e_students_F_name'] ?></td>
                            <td><?php echo $row['e_students_L_name'] ?></td>
                            <td><?php echo $row['e_students_email'] ?></td>
                            <td><?php echo $row['e_students_phone'] ?></td>
                            <td><?php echo $row['e_students_city'] ?></td>
                            <td><?php echo $row['e_students_cast'] ?></td>
                            <td><?php echo $row['e_students_address'] ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['sno'] ?>"><i class="fa-solid fa-file-pen" style="color:blue;"></i></a>
                                <a href="delete.php?id=<?php echo $row['sno'] ?>"><i class="fa-sharp fa-solid fa-trash" style="color:red;"></i></a>
                            </td>
                        </tr>
                    </tbody>
            <?php
                }
            }
            ?>
        </table>
    </div>

    <?php include "partial/_footer.php" ?>
    <?php include 'partial/_jscdn.php' ?>
</body>

</html>