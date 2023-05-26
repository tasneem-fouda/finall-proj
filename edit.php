<?php
  $id="";
  $name="";
  $email="";
  $hashe="";
  $errors=[];
  $success="";
  $conn = mysqli_connect("localhost", "root", "", "weba");
  if (mysqli_connect_error()) {
    echo "فشل في الاتصال بقاعدة البيانات: " . mysqli_error($conn);
  } else {
    echo "تم الاتصال بقاعدة البيانات بنجاح";
  }
  
    if(!isset($_GET['id'])){
      header("location:show.php");
      exit;
    
    }else{
    //مطلوب 2كويري وحدة تعرضلي لبيانات ووحدة تحدث
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id='$id'";
    $res = $conn->query($sql);
    if($res&&$res->num_rows>0){
        $row = $res->fetch_assoc();
        
        $name = $row["name"];
        $email = $row["email"];
        $password = $row["p_hash"];
        $role = $row["role"];
        $date = $row["created"];
        //value بعطيهم قيمة هناك
    }
    while(!$row){
      header("location: show.php");
      exit;
    }
    
}
  
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Add New</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control"> <br>

 <label> PASSWORD: </label>
 <input type="text" name="password" value="<?php echo $password; ?>" class="form-control"> <br>
 <label> ROLE: </label>
 <input type="text" name="role" value="<?php echo $role; ?>" class="form-control"> <br>
 <label>  DATE: </label>
 <input type="text" name="date" value="<?php echo $date; ?>" class="form-control"> <br>



 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="show.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>
<?php

    if(isset($_POST['submit'])){
        
        $id = $_POST["id"];
        $name=$_POST["name"];
        $role=$_POST["role"];
        $date=$_POST["date"];
        
    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))  
    {
        echo'please enter a valid email';
    }
   else {
    $email=$_POST['email'];


   } 

  

    
                
     $sql = "update users set name='$name', email='$email',role='$role',created='$date' where id='$id'";
     $res = mysqli_query($conn,$sql);
     if (mysqli_affected_rows($conn) > 0) {
        echo "تم التحديث بنجاح";
     }
     if (!$row) {
        header("location: show.php");
        exit;
      }}
    
   
    
    // إغلاق الاتصال بقاعدة البيانات
    mysqli_close($conn);

        
     ?>
     
