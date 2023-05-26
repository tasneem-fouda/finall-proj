
<!doctype html>




<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="welcom.php">Home</a>
            </li>
            <li class="nav-item">
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
        <th>Role</th>
        <th> DATE</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include "connection.php";


   
$sql = "select * from users ";
$res=mysqli_query($conn,$sql);

if($res&&$res->num_rows>0){
  while($row = $res->fetch_assoc()){
   
?>

      <?php
   

    echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[email]</td>
      <td>$row[role]</td>

      <td>$row[created]</td>
     
    </tr>
    ";
  }}
    ?>
  </tbody>
</table>
    </div>


  
    
  </body>
</html>
