<!DOCTYPE html>
<html>
<head>
  <title>نموذج تسجيل الدخول</title>
  <style>
:root{
    --error-font:'Montserrat', sans-serif;
    --input-font:'Mulish', sans-serif;
    --heading-background: linear-gradient(to left, rgb(23, 186, 195),rgb(164, 146, 205));
    --submit-background:linear-gradient(to right, rgb(23, 186, 195), rgb(164, 146, 205))
}
*{
    margin:0px;
    padding:0px;
}
body{background-color: rgb(209, 255, 255);}
.sigup-form{
    width: calc(100vw - 60vw);
    margin:8vh auto;
    background-color:#fff;
    box-shadow: 1px 1px 5px rgb(185, 185, 185);
    border-radius:5px;
}
.form-header{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-image:var(--heading-background);
    padding:.8em;
    text-align: center;
    text-transform: uppercase;
}
.form-action label{
    font-family: var(--input-font);
    font-size: 1.3rem;
    display: inline-block;
}
.form-action small{
    font-family:var(--error-font);
    font-size: 1rem;
    color:black;
}
.form-action{
    position:relative;
    margin:.8em 3em;
    padding:.5em 0em;
}
.form-action input{
    width: 100%;
    font-size: 1rem;
    height: 2em;
    margin:.5em 0em;
}
.form-action input:focus{
    outline: 0;
    border: 2px solid rgba(0, 217, 255, 0.856);
}
.form-action li{
    position: absolute;
    top: 55px;
    right: 3px;
    visibility: hidden;
}
.form-action small{
    color:red;
    font-weight: bold;
    visibility: hidden;
}

/* It is executed when javaScript is add */
/* When form is sucess */
.sucess input{
    border: 2px solid green;
}
.sucess .fa-circle-check{
    visibility: visible;
    color:green;
}
.sucess small{
    visibility: hidden;
}

/* when error comes */
.error input{
    border:2px solid red;
}
.error .fa-circle-exclamation{
    visibility: visible;
    color:red;
}
.error small{
    visibility: visible;
}
/* Java script class terminate */

.submit{
    margin:1em 3em;
}
#submitted{
    width:100%;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 1.2rem;
    text-transform: uppercase;
    padding:.5em;
    background-image: var(--heading-background);
    border:none;
    margin:2em 0em;
    color:white;
}
#btn{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 1.2rem;
    text-transform: uppercase;
    padding:.5em;
    background-image: var(--heading-background);
    border:none;
    margin:2em 0em;
    color:white;
    margin-left: 50%;

}
#submitted:hover{
    background-image: var(--submit-background);
}


/* Responsive design */
@media screen and (max-width:1000px) {
    .sigup-form{
        width: calc(100vw - 30vw);
    }
}
@media screen and (max-width:602px) {
    .sigup-form{
        width: calc(100vw - 15vw);
    }
}

</style>
<style>
  header {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
  }
  
  h1 {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  
  nav ul li {
    display: inline-block;
    margin-right: 10px;
  }
  
  nav ul li a {
    text-decoration: none;
    color: #666;
  }
  .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}

.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>

<header>
  <h1>Page Title</h1>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="login.php"><button value="submit" id="btn">login</button></a>

    </ul>
  </nav>
</header>

<body>
    <form action="?php" class="sigup-form" method="post">
        <div class="form-header">
            <h2>Sign Up</h2>
        </div>
        <div class="form-action">

        </div>
        <div class="form-action">
            <label for="username">Username</label>
            <input type="text" id="username" autocomplete="off"name="username">
            <li class="fa-solid fa-circle-check"></li>
            <li class="fa-solid fa-circle-exclamation"></li>
            <small></small>
        </div>
        <div class="form-action">
            <label for="email">Email</label>
            <input type="email" id="email" autocomplete="off"name="email">

            <li class="fa-solid fa-circle-check"></li>
            <li class="fa-solid fa-circle-exclamation"></li>
            <small></small>
        </div>
        <div class="form-action">
            <li class="fa-solid fa-circle-check"></li>
            <li class="fa-solid fa-circle-exclamation"></li>
            <small></small>
        </div>
        <div class="form-action">
            <label for="password">Password</label>
            <input type="password" id="password" autocomplete="off"name="password">
            <li class="fa-solid fa-circle-check"></li>
            <li class="fa-solid fa-circle-exclamation"></li>
            <small></small>
        </div>
        <div class="form-action">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" autocomplete="off"name="conf">
            <li class="fa-solid fa-circle-check"></li>
            <li class="fa-solid fa-circle-exclamation"></li>
            <small></small>
        </div>
        <div class="submit">
            <input type="submit" value="submit" id="submitted"name="submit">
        </div>


    </form>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>




</body>
</html>

<?php
$errors=[];
$username='';
$email='';
$password='';
$conf='';

$conn=mysqli_connect("localhost","root","","weba");
if(mysqli_connect_error()){
    echo "failed".mysqli_error_list($conn);
}
else{
  
  
    // echo "successed";
    if(isset($_POST['submit'])){

        if($_POST['username']==''){
            $errors[]='please enter name';
        }
        else{
            $username=$_POST['username'];
        }

        if($_POST['email']==''){
            $errors[]='please enter email';
        }
        else{
            if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))  
            {$errors[]='please enter a valid email';}
           else  $email=$_POST['email'];
        }


        if ($_POST['password'] == '') {
          $errors[] = 'الرجاء إدخال كلمة المرور';
      } else {
          if (strcmp($_POST['password'], $_POST['conf']) !== 0) {
              $errors[] = 'كلمة المرور وتأكيد كلمة المرور غير متطابقين';
          }
      
          if (strlen($_POST['password']) < 8) {
              $errors[] = 'يجب أن تتكون كلمة المرور من 8 أحرف على الأقل';
          } else {
              $password = $_POST['password'];
          }
      }
      
          
        //    if(count($errors)>0){
           if(sizeof($errors)>0){
                echo "<ul class='text-danger'>";
                    foreach($errors as $error){
                        echo "<li>$error</li>";
                    }
                echo "</ul>";
           }
           else{
                $rolee=2;

        
                $sql="insert into users set name=?, email=?, p_hash=? ,role=? ";
                $sql=mysqli_prepare($conn,$sql);
                $hashe=md5($password);
                mysqli_stmt_bind_param($sql,"sssi",$username, $email, $hashe, $rolee);
                if (mysqli_stmt_execute($sql)) {
                  $affected_rows = mysqli_stmt_affected_rows($sql);
                  echo "تم تخزين الاسم بنجاح. عدد الصفوف المتأثرة: " . $affected_rows;
              } else {
                  echo "حدث خطأ أثناء تخزين الاسم: " . mysqli_error($conn);
              }
              
              // إغلاق الاتصال بقاعدة البيانات
              mysqli_stmt_close($sql);
              mysqli_close($conn);
           
        }

      }}
?>