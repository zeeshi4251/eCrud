<?php
$showAlert = false;
include "partial/_dbconnect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $cast = $_POST['cast'];
    $address = $_POST['address'];

    $sql = "INSERT INTO e_students (e_students_F_name, e_students_L_name, e_students_email, e_students_phone, e_students_city, e_students_cast, e_students_address) VALUES ('$fname','$lname','$email','$phone','$city','$cast','$address')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Sorry";
    } else {
        $showAlert = true;
    }
}



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
        <h2 class="text-center my-4">Enter Students Detail</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstName" placeholder="Jon" class="form-control" id="firstName" aria-describedby="emailHelp" required="">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastName" placeholder="Butta" class="form-control" id="lastName" aria-describedby="emailHelp" required="">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="abc@gamil.com" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="number" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" placeholder="03xx-xxxxxxx" id="number" name="phone" aria-describedby="emailHelp" required="">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="city" class="form-label">Choose a City</label><br>
                    <input type="text" class="form-control" name="city" id="city" value="Faisalabad" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="Cast" class="form-label">Cast (optional)</label>
                    <input type="text" class="form-control" name="cast" id="Cast" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Address</label><br>
                    <textarea name="address" id="" class="form-control" cols="30" rows="2" style="display:inline;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <!-- <img src="<?php echo $img_folder ?>" alt=""> -->
        </form>
    </div>

    <?php include "partial/_footer.php" ?>
    <?php include 'partial/_jscdn.php' ?>
</body>

</html>