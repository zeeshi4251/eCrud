<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <i class="fa-solid fa-2x fa-gear">&nbsp;</i><span style="font-size:larger;color:#FFC107; ">E-CRUD</span>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="studentsList.php" class="nav-link px-2 text-white">List</a></li>
                <li><a href="edit.php" class="nav-link px-2 text-white">Update</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Services&nbsp;</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Search</button>
                <!-- <button type="button" class="btn btn-warning">Sign-up</button> -->
            </div>
        </div>
    </div>
</header>

<?php include 'partial/_jscdn.php'?>