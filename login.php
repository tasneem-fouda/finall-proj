<?php
session_start();


$errors = [];
$email = '';
$password = '';




include "connection.php";

if (isset($_POST['submit'])) {

    if ($_POST['email'] == '') {
        $errors[] = 'يرجى إدخال البريد الإلكتروني';
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'يرجى إدخال بريد إلكتروني صالح';
        } else {
            $email = $_POST['email'];
        }
    }
    if ($_POST['password'] == '') {
        $errors[] = 'يرجى إدخال كلمة المرور';
    }  else {
            $password = $_POST['password'];
        }
    }

    if (sizeof($errors) > 0) {
        echo "<ul class='text-danger'>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";

    } else {


        $hashe = md5($password);
        $sql = "SELECT * FROM users WHERE email=? AND p_hash=? ";

// تحضير البيانات
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $email,$hashe);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            
            if($row['role'] == 1){
                echo 
                $_SESSION['login'] = $row['email'];
                header("location: show.php");
                exit();
            } elseif ($row['role'] == 2) {
                $_SESSION['login'] = $row['email'];
                header("location: first.php");
                exit();
            }

        } else {
            // بيانات الاعتماد غير صحيحة
            $errors[] = 'بيانات الاعتماد غير صحيحة';
            echo "<ul class='text-danger'>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        
        
        }
        // تسجيل الدخول بنجاح

// }else{
//   echo"pass faild ";
// }
//        $eadmin="admin.t@gmail.com";
//        $padmin= "0192023a7bbd73250516f069df18b500";
//
//        $sql2 = "SELECT * FROM users WHERE email=? AND p_hash=?";
//
//        $stmt2 = $conn->prepare($sql2);
//        $stmt2->bind_param("ss",$eadmin,$padmin);
//        $stmt2->execute();
//        $result = $stmt2->get_result();
//        $row = $result->fetch_assoc();
//
//        if ($_POST['password'] == $padmin) {
//            $_SESSION['login'] = $eadmin;
//
//
//
//            header("Location: show.php"); // تحويل لصفحة الواجهة الأخرى
//            exit();}}}
}
    
?>
<!DOCTYPE html>

<html>
<head>
    <title>نموذج تسجيل الدخول</title>
</head>
<body>
<style>
    body {
        background-color: #A8A8A8;
        font-family: 'Roboto', sans-serif;
    }

    .container {
        /*border:1px solid white;*/
        width: 600px;
        height: 350px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: inline-flex;
    }

    .backbox {
        background-color: #404040;
        width: 100%;
        height: 80%;
        position: absolute;
        transform: translate(0, -50%);
        top: 50%;
        display: inline-flex;
    }

    .frontbox {
        background-color: white;
        border-radius: 20px;
        height: 100%;
        width: 50%;
        z-index: 10;
        position: absolute;
        right: 0;
        margin-right: 3%;
        margin-left: 3%;
        transition: right .8s ease-in-out;
    }

    .moving {
        right: 45%;
    }

    .loginMsg, .signupMsg {
        width: 50%;
        height: 100%;
        font-size: 15px;
        box-sizing: border-box;
    }

    .loginMsg .title,
    .signupMsg .title {
        font-weight: 300;
        font-size: 23px;
    }

    .loginMsg p,
    .signupMsg p {
        font-weight: 100;
    }

    .site-footer {
        background-color: #26272b;
        padding: 45px 0 20px;
        font-size: 15px;
        line-height: 24px;
        color: #737373;
    }

    .site-footer hr {
        border-top-color: #bbb;
        opacity: 0.5
    }

    .site-footer hr.small {
        margin: 20px 0
    }

    .site-footer h6 {
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        margin-top: 5px;
        letter-spacing: 2px
    }

    .site-footer a {
        color: #737373;
    }

    .site-footer a:hover {
        color: #3366cc;
        text-decoration: none;
    }

    .footer-links {
        padding-left: 0;
        list-style: none
    }

    .footer-links li {
        display: block
    }

    .footer-links a {
        color: #737373
    }

    .footer-links a:active, .footer-links a:focus, .footer-links a:hover {
        color: #3366cc;
        text-decoration: none;
    }

    .footer-links.inline li {
        display: inline-block
    }

    .site-footer .social-icons {
        text-align: right
    }

    .site-footer .social-icons a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        margin-left: 6px;
        margin-right: 0;
        border-radius: 100%;
        background-color: #33353d
    }

    .copyright-text {
        margin: 0
    }

    @media (max-width: 991px) {
        .site-footer [class^=col-] {
            margin-bottom: 30px
        }
    }

    @media (max-width: 767px) {
        .site-footer {
            padding-bottom: 0
        }

        .site-footer .copyright-text, .site-footer .social-icons {
            text-align: center
        }
    }

    .social-icons {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .social-icons li {
        display: inline-block;
        margin-bottom: 4px
    }

    .social-icons li.title {
        margin-right: 15px;
        text-transform: uppercase;
        color: #96a2b2;
        font-weight: 700;
        font-size: 13px
    }

    @media (max-width: 767px) {
        .social-icons li.title {
            display: block;
            margin-right: 0;
            font-weight: 600
        }
    }

    .textcontent {
        color: white;
        margin-top: 65px;
        margin-left: 12%;
    }

    .loginMsg button,
    .signupMsg button {
        background-color: #404040;
        border: 2px solid white;
        border-radius: 10px;
        color: white;
        font-size: 12px;
        box-sizing: content-box;
        font-weight: 300;
        padding: 10px;
        margin-top: 20px;
    }

    /* front box content*/
    .login, .signup {
        padding: 20px;
        text-align: center;
    }

    .login h2,
    .signup h2 {
        color: #35B729;
        font-size: 22px;
    }

    .inputbox {
        margin-top: 30px;
    }

    .login input,
    .signup input {
        display: block;
        width: 100%;
        height: 40px;
        background-color: #f2f2f2;
        border: none;
        margin-bottom: 20px;
        font-size: 12px;
        cursor: pointer;

    }

    .login button,
    .signup button {
        background-color: #35B729;
        border: none;
        color: white;
        font-size: 12px;
        font-weight: 300;
        box-sizing: content-box;
        padding: 10px;
        border-radius: 10px;
        width: 60px;
        position: absolute;
        right: 30px;
        bottom: 30px;
        cursor: pointer;
    }

    /* Fade In & Out*/
    .login p {
        cursor: pointer;
        color: #404040;
        font-size: 15px;
    }

    .loginMsg, .signupMsg {
        /*opacity: 1;*/
        transition: opacity .8s ease-in-out;
    }

    .visibility {
        opacity: 0;
    }

    .hide {
        display: none;
    }

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

    #btn {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 1.2rem;
        text-transform: uppercase;
        background-color: rgba(121, 85, 72, 1);

        padding: .5em;
        background-image: var(--heading-background);
        border: none;
        margin: 2em 0em;
        color: white;
        margin-left: 50%;

    }

    nav ul li a {
        text-decoration: none;
        color: #666;
    }
</style>
<header>
    <h1>Page Title</h1>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="login.php">
                    <button value="submit" id="btn">login</button>
                </a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <div class="backbox">
        <div class="loginMsg">
            <div class="textcontent">
                <p class="title">Don't have an account?</p>
                <p>Sign up to save all your graph.</p>
                <a href="creat.php" id="switch1">
                    <button>SIGN UP</button>
                </a>
            </div>
        </div>
        <div class="signupMsg visibility">
            <div class="textcontent">
                <p class="title">Have an account?</p>
                <p>Log in to see all your collection.</p>
                <button id="switch2">LOG IN</button>
            </div>
        </div>
    </div>


    <div class="frontbox">
        <div class="login">
            <h2>LOG IN</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="inputbox">

                    <input type="text" name="email" placeholder="EMAIL" >
                    <input type="password" name="password" placeholder="PASSWORD" >
                </div>
                <p>FORGET PASSWORD?</p>
                <button name="submit" type="submit">LOG IN</button>
            </form>
        </div>

        <div class="signup">
            <h2>SIGN UP</h2>
            <!-- أضف نموذج التسجيل هنا -->
        </div>
    </div>
</div>

</body>

</html>
