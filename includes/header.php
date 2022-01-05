<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/header.css">	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <title>Hello, world!</title>
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src="images/platter.png " alt="logo " height="80 " width="80 ">
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item active">
                      <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Nowshowing.php"><i class="fas fa-film"></i>Movies</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="cinema.php"><i class="fas fa-file-video"></i>Cinemas</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="myticket.php"><i class="fas fa-ticket-alt"></i>My TIckets</a>
                    </li>

        <?php 
              if (!isset($_SESSION['loginname'])){ ?>
              	<li class="nav-item">
              <a class="nav-link" href="Register.php"><i class="fas fa-sign-in-alt"></i>Login/Register</a>
              </li>
             
              <?php 
              } else { ?>
              	<li class="nav-item">
              <a class="nav-link" href="authentication/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
              </li>
              <?php
              }

              if (isset($_SESSION['loginname'])){
                echo "<h4> <font color=green> welcome,".$_SESSION['loginname'].". <br/></font> </h4> ";
               
               
              }

        ?>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </head>
    <body>
      <div class="container-fluid">
