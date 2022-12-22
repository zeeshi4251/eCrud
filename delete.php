<?php
include "partial/_dbconnect.php";

$stu_ids = $_GET['id'];

$sql = "DELETE  FROM e_students WHERE e_students.sno = '$stu_ids'";
$result = mysqli_query($conn,$sql);
if(!$result){
    echo "Sorry Delete.php";
}
else{
    echo "<script>window.location='http://localhost/ecrud/studentsList.php?delete=true'</script>";
}




?>