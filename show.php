<?php
session_start();
if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
    header("Location: login.php");
}


include "connection.php";

?>

<!doctype html>


<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="show.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="show.php">Home</a>
                </li>
                <li class="nav-item">
                    <a type="button" class="btn btn-primary nav-link active" href="creat.php">Add New</a>
                    <li><a href="logout.php"><button value="submit" id="btn"class="btn btn-primary nav-link active">logout</button></a>

                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container my-4">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <!-- <th>password</th> -->
            <th>Role</th>
            <th> DATE</th>
            <th>ACTIONS</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "weba");
        if (mysqli_connect_error()) {
            echo "فشل في الاتصال بقاعدة البيانات: " . mysqli_error($conn);
        } else {
            echo "تم الاتصال بقاعدة البيانات بنجاح";
        }

        $sql = "select * from users ";
        $res = mysqli_query($conn, $sql);

        if ($res && $res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {

                ?>

                <?php


                echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[email]</td>
    
      <td>$row[role]</td>

      <td>$row[created]</td>
      <td>
                <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
                <a class='btn btn-danger' href='delet.php?id=$row[id]'>Delete</a>
                <a class='btn btn-success' href='change.php?id=$row[id]'>Changepass</a>

              </td>
    </tr>
    ";
            }
        }
        ?>
        </tbody>
    </table>
</div>


</body>
</html>
