<?php

include 'includes/header.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <title>Register page</title>
  <style>
      body {
  background-color: rgb(170, 250, 239);
}

.pramu {
  height: 100%;
  width: 100%;
  background-image: linear-gradient(rgba 0, 0, 0, 0.4), url(bern2.jpg);
  background-position: center;
  background-size: cover;
  position: absolute;
}

.form-box {
  width: 380px;
  height: 480px;
  position: relative;
  margin: -2% auto;
  background: #fff;
  padding: 5px;
  overflow: hidden;
}

.button-box {
  width: 300px;
  height:45px;
  margin: 30px auto;
  position: relative;
  box-shadow: 0 0 20px 9px #ff61241f;
  border-radius: 40px;
}

.toggle-btn {
  padding: 11px 49px;
  cursor: pointer;
  background: transparent;
  border: 0;
  outline: none;
  position: relative;
}

#btn {
  right: 0;
  left: 0;
  position: absolute;
  width: 160px;
  height: 100%;
  background: linear-gradient(to right, #105cff, #27e9e9);
  border-radius: 30px;
  transition: .5sec;
}

.social-icons {
  margin: 30px auto;
  text-align: center;
}

.social-icons img {
  width: 30px;
  margin: 0px 12px;
  box-shadow: 0 0 20px 0 #7f7f7f3d;
  cursor: pointer;
  border-radius: 50%;
}

.input-group {
  top: 150px;
  position: absolute;
  width: 280px;
  transition: .5sec;
}

.input-field {
  width: 100%;
  padding: 14px 0;
  margin: -1px;
  border-left: 0;
  border-top: 0;
  border-right: 0;
  border-bottom: 1px solid #999;
  outline: none;
  background: transparent;
}

.submit-btn {
  width: 85%;
  padding: 10px 30px;
  cursor: pointer;
  display: block;
  margin: auto;
  background: linear-gradient(to right, #105cff, #27e9e9);
  border: 0;
  outline: none;
  border-radius: 30px;
}

.chech-box {
  margin: 20px 35px 25px 25px;
}

span {
  color: #777;
  font-size: 12px;
  bottom: 68px;
  /* position: absolute; */
  padding-top: 15px;
  padding:-2px;

}

#login {
  left: 50px;
}

#register {
  left: 450px;
}
.footer {

  margin-top: 375px;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: darkgrey;
            color: white;
            text-align: center;
          }

          </style>

  </style>
</head>

<body>


<br/>
<!-- <form method="post" action="authentication/register1.php"> -->
      <div class="pramu">
          <div class="form-box">
              <div class="button-box">
                  <div id="btn"style="left:140px;"></div>
                  <button type="button" class="toggle-btn" onclick="login()"> Login</button>
                  <button type="button" class="toggle-btn" onclick="register()"> Register</button>
              </div>
              <div class="social-icons">
                
                  <img src="images/fb.png">
                  <img src="images/gb.png">
                  <img src="images/tw.png">
              </div>
              <form id="login" class="input-group" method="post" action="authentication/register1.php">
                  <input type="text" class="input-field" placeholder="User Id" name="username" required>
                  <input type="text" class="input-field" placeholder="Enter Password" name="password" required>
                  <input type="checkbox" class="chech-box"> <span>Remember Password</span>
                  <button type="submit" name="login" class="submit-btn">Log in</button>
              </form>
              <form id="register" class="input-group" method="post" action="authentication/register1.php">
                  <input type="text" class="input-field" placeholder="User Id" name="username" required>
                  <input type="text" class="input-field" placeholder="Email" name="email" required>
                  <input type="text" class="input-field" placeholder="Enter Password" name="password" required>
                  <input type="checkbox" class="chech-box"> <span>I agree to terms and conditions.</span>
                  <button type="submit" name="register" class="submit-btn">Register</button>
              </form>
          </div>
      </div>
        </form>
      <br>
      <br><br><br>
      
      <div class="footer">


<div class="container text-center text-md-left">


  <div class="row">

  
    <div class="col-md-3 mx-auto">

      
      <h3 class="font-weight-bold text-uppercase mt-3 mb-4">OUR COMPANY</h3>

      <ul class="list-unstyled">
        <li>
          <a href="OurStory.php">Our Story</a>
        </li>
        <li>
          <a href="OurBrand.php">Our Brand</a>
        </li>
        <li>
          <p>Corporate Info</p>
        </li>
        <li>
          <p>Careers</p>
        </li>
      </ul>

    </div>
  

    <hr class="clearfix w-100 d-md-none">

    
    <div class="col-md-3 mx-auto">

      
      <h3 class="font-weight-bold text-uppercase mt-3 mb-4">OUR SERVICES</h3>

      <ul class="list-unstyled">
        <li>
          <p>Special Screening</p>
        </li>
        <li>
          <p>Ticket Vouchers</p>
        </li>
        <li>
          <p>Advertise with us</p>
        </li>
      </ul>

    </div>
    

    <hr class="clearfix w-100 d-md-none">
    
    <div class="col-md-3 mx-auto">

      <h3 class="font-weight-bold text-uppercase mt-3 mb-4">OUR CINEMAS</h3>

      <ul class="list-unstyled">
        <li>
          <p>Cinemas</p>
        </li>
        <li>
          <p>Location</p>
        </li>
      
      </ul>

    </div>
    
    <hr class="clearfix w-100 d-md-none">

    <div class="col-md-3 mx-auto">

      <h3 class="font-weight-bold text-uppercase mt-3 mb-4">MORE</h3>

      <ul class="list-unstyled">
        <li>
          <p>Goji Loyality Overview</p>
        </li>
        <li>
          <p>Sync Your Accounts</p>
        </li>
      </ul>

    </div>
  </div>
</div>
<div class="footer-privacypolicy and termsofuse text-center py-3">
  <a href="PrivacyPolicy.php">Privacy Policy</a>
  <a href="Termsandcondition.php">Terms of Use</a>

</div>
</footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

<script>
      var x = document.getElementById("login");
      var y = document.getElementById("register");
      var z = document.getElementById("btn");

      function register() {
          x.style.left = "-400px";
          y.style.left = "50px";
          z.style.left = "110px";
      }

      function login() {
          x.style.left = "50px ";
          y.style.left = "400px";
          z.style.left = "0px";
      }
  </script>
   <br>
  
</html>
