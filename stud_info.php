<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Student Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stud_info.php">Students Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="course_list.php">Course List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="skill.php">Skill</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="stud_skill.php">Student Skill</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
  
<div class="container">
    <?php
        if (isset($_GET["msg"])) {
            $msg = $_GET["msg"];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        ?>
        <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Student No</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
                <th scope="col">Contact No</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
                <th scope="col">Major</th>
                <th scope="col">Year</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";

                $sql = "SELECT * FROM `stud_info`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row["id"] ?></th>
                    <td><?php echo $row["student_no"] ?></td>
                    <td><?php echo $row["last_name"] ?></td>
                    <td><?php echo $row["first_name"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row["age"] ?></td>
                    <td><?php echo $row["contact_no"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["dept"] ?></td>
                    <td><?php echo $row["major"] ?></t>
                    <td><?php echo $row["year"] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
</div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>