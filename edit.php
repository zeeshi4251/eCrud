<?php
if (!isset($_GET['id'])) {
    echo "<script>window.location='index.php'</script>";
}

$showAlert = false;

?>
<!doctype html>
<html lang="en">

<head>
    <?php include 'partial/_head.php'; ?>
    <title>E-CRUD</title>
</head>

<body>
    <?php include "partial/_header.php" ?>

    <div class="container">
        <?php
        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Students data insert successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <h2 class="text-center my-4">Update Students Detail</h2>
        <?php
        include "partial/_dbconnect.php";

        $stud_id = $_GET['id'];

        $sql = "SELECT * FROM e_students WHERE e_students.sno = $stud_id";
        $result = mysqli_query($conn, $sql);

        if ($row = mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="hidden" name="sno" value="<?php echo $row['sno'] ?>" placeholder="Jon" class="form-control" id="firstName" aria-describedby="emailHelp" required="">
                            <input type="text" name="firstName" value="<?php echo $row['e_students_F_name'] ?>" placeholder="Jon" class="form-control" id="firstName" aria-describedby="emailHelp" required="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" name="lastName" placeholder="Butta" value="<?php echo $row['e_students_L_name'] ?>" class="form-control" id="lastName" aria-describedby="emailHelp" required="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row['e_students_email'] ?>" id="email" placeholder="abc@gamil.com" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="number" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" placeholder="03xx-xxxxxxx" value="<?php echo $row['e_students_phone'] ?>" id="number" name="phone" aria-describedby="emailHelp" required="">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="city" class="form-label">Choose a City</label><br>
                            <input type="text" class="form-control" name="city" id="city" value="<?php echo $row['e_students_city'] ?>" value="Faisalabad" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="Cast" class="form-label">Cast (optional)</label>
                            <input type="text" class="form-control" name="cast" id="Cast" value="<?php echo $row['e_students_cast'] ?>" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label><br>
                            <input type="text" class="form-control" name="address" id="address" value="<?php echo $row['e_students_address'] ?>" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary col-md-1">Update</button>
                    </div>
                </form>

        <?php
            }
        }
        ?>
    </div>
    <?php include "partial/_footer.php" ?>
    <?php include 'partial/_jscdn.php' ?>
</body>

</html>