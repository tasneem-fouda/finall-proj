
<?php 
  
$conn = mysqli_connect("localhost", "root", "", "weba");
if (mysqli_connect_error()) {
  echo "فشل في الاتصال بقاعدة البيانات: " . mysqli_error($conn);
} else {
  echo "تم الاتصال بقاعدة البيانات بنجاح";
}

    ?>