<?php
include "db_conn.php";

$sql = "SELECT skill_id, skill_name FROM skills";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $skills = $result->fetch_all(MYSQLI_ASSOC);
} else {
  $skills = [];
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Skills</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  
<div class="container mt-5">
    <h2 class="text-center mb-4">Student Skills</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Skill Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (count($skills) > 0) {
                    foreach ($skills as $skill) {
                        echo "<tr>
                                <td>{$skill['skill_id']}</td>
                                <td>{$skill['skill_name']}</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='2' class='text-center'>No skills found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>



  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>