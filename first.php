
<?php
    session_start();
    if(isset($_SESSION['login'])){

        echo"WELCOM".$_SESSION['login'];
        //login'بدي ابحث في قيمة عند لكوكي' ولا لا لو في يدخل


    }else{
        header("location:login.php");
    }
    
  

include "connection.php";
  
$sql = "select * from users ";
$res = mysqli_query($conn, $sql);

?>





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
pt is add */
/* When form is sucess */
.sucess input{
    border: 2px solid green;
}


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
body {
	background: #E80;
	font-family: Arial, Helvetica, sans-serif;
	overflow-y: hidden;
}

#title-wrapper {
	text-align: left;
	margin-top: 34px;
	font: normal 60pt Arial;
	color: #FFFFFF;
	font-weight: 900;
	font-size: 7em;
	margin-left: 35%;
}

.fall-away {
	display: inline-block;
  opacity: 0;
	position: relative;
	height: 200px;
	-webkit-animation: drop 8s;
  animation: drop 8s;
  
}

span.shadow{
	position: absolute;
	color: black;
}

@-webkit-keyframes drop {
  0% {opacity: 1;}
  50% { -webkit-transform: rotate(0deg);}
  60% { -webkit-transform: rotate(300deg); }
  70%  {top:0px; }
  80%  {
    opacity: 1;
    top:1200px; }
  90% {opacity: 0;}
}

@keyframes drop {
  0% {opacity: 1;}
  50% { transform: rotate(0deg);}
  60% { transform: rotate(300deg); }
  70%  {top:0px; }
  80%  {
    opacity: 1;
    top:1200px; }
  90% {opacity: 0;}
}

</style>

<header>
  <h1>Page Title</h1>
  <nav>
    <ul>
   


      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="user-manage.php"><button value="submit" id="btn">show</button></a>
      <li><a href="logout.php"><button value="submit" id="btn">logout</button></a>
        


    </ul>
  </nav>
</header>

    </form>
    <body><div id="title-wrapper">
			<span>Welcom</span><span class="shadow">e</span><div id="eid" class="fall-away">e</div>			
</div></body>
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
