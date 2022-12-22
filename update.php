<?php
include "partial/_dbconnect.php";

$stu_id = $_POST['sno'];
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$cast = $_POST['cast'];
$address = $_POST['address'];

$sql = "UPDATE `e_students` SET `e_students_F_name`='$fname',`e_students_L_name`='$lname',`e_students_email`='$email',`e_students_phone`='$phone',`e_students_city`='$city',`e_students_cast`='$cast',`e_students_address`='$address' WHERE `e_students`.`sno` = '$stu_id'";

$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Sorry your update query not run";
} else {
    echo "<script>window.location='http://localhost/ecrud/studentsList.php?update=true'</script>";
}
