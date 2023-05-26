<?php
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT p_hash FROM users WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if($res && mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_assoc($res);
        $old_hash = $row["p_hash"];
    } else {
        header('Location: show.php');
        exit();
    }
} else {
    header('Location: show.php');
    exit();
}
?>

<!DOCTYPE html>
<style>
   .hidden_clip {
      clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
      clip: rect(1px, 1px, 1px, 1px);
      position: absolute;
   }
   .form__field__wrapper {
      position: relative;
   }
   .show-hide-password {
      background: 0;
      border: 0;
      cursor: pointer;
      min-height: 60px;
      min-width: 70px;
      padding: 18px;
      position: absolute;
      right: 0;
      top: 14px;
   }
</style>

<html>
<body>
   <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
      <form action="" method="post" enctype="multipart/form-data">
         <legend class="form__legend">
            Password details
         </legend>
         <div class="form__field__wrapper form-item">
            <label for="edit-old-pass" class="text-input__label--floated">Old password <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
            <input class="form-control form-text password__field text-input__field--floated required" name="old" type="password" id="edit-old-pass" name="old_pass" size="60" maxlength="128" aria-required="true">
            <div class="show-hide-password js-showHidePassword" tabindex="0"></div>
         </div>
         <div class="form__field__wrapper form-item">
            <label for="edit-new-pass" class="text-input__label--floated">New password <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
            <input class="form-control form-text password__field text-input__field--floated required" name="new" type="password" id="edit-new-pass" name="new_pass" size="60" maxlength="128" aria-required="true">
            <div class="show-hide-password js-showHidePassword" tabindex="0"></div>
         </div>
         <div class="form__field__wrapper form-item">
            <label for="edit-conf-pass" class="text-input__label--floated">Confirm new password <span class="form-required" aria-hidden="true" title="This field is required.">*</span><span class="hidden_clip">a required field.</span></label>
            <input class="form-control form-text password__field text-input__field--floated required" name="conf" type="password" id="edit-conf-pass" name="conf_pass" size="60" maxlength="128" aria-required="true">
            <button type="submit" name="submit">Submit</button>
         </div>
      </form>
   </div>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
   $old = $_POST["old"];
   $new = $_POST["new"];
   $conf = $_POST["conf"];

   if($new == $conf) {
      $hashed_new = password_hash($new, PASSWORD_DEFAULT);
      $sql = "UPDATE users SET p_hash=? WHERE id=?";
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "si", $hashed_new, $id);
      mysqli_stmt_execute($stmt);

      if (isset($_POST['submit'])) {
        $old = $_POST["old"];
        $new = $_POST["new"];
        $conf = $_POST["conf"];
      
        if (password_verify($old, $old_hash)) { // التحقق من صحة الكلمة القديمة
          if ($new == $conf) {
            $hashed_new = password_hash($new, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET p_hash=? WHERE id=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "si", $hashed_new, $id);
            mysqli_stmt_execute($stmt);
      
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "تم تحديث كلمة المرور بنجاح";
                header('Location: show.php');
                exit();
            } else {
                echo "فشل في تحديث كلمة المرور";
            }
          } else {
            echo "تأكيد كلمة المرور غير متطابقة";
          }
        } 
        
      }
      else {
         echo "الكلمة القديمة غير صحيحة";
       }
    }}
?>
