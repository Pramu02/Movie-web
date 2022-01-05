  <?php

  include 'includes/header.php';
  
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moving Booking Website</title>

    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    

</head>
<body style="background-color:lightblue">

    <br>
    <br>
    <br>

       
        <div class="container-full">
                <div id="Carousel" class="carousel slide" data-ride="carousel">
                  
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                          <li data-target="#myCarousel" data-slide-to="4"></li>
                          <li data-target="#myCarousel" data-slide-to="5"></li>
                          <li data-target="#myCarousel" data-slide-to="6"></li>
                          <li data-target="#myCarousel" data-slide-to="7"></li>
                          <li data-target="#myCarousel" data-slide-to="8"></li>
                          <li data-target="#myCarousel" data-slide-to="9"></li>
                          <li data-target="#myCarousel" data-slide-to="10"></li>
                          <li data-target="#myCarousel" data-slide-to="11"></li>
                          <li data-target="#myCarousel" data-slide-to="12"></li>
                         
                        </ol>
            
                        <div class="carousel-inner">
                          <div class="item active">
                            <a href="pushpa.php"><img src="Images/pushpa1.jpg" alt="Pushpa" width="100%" height="50%">
                            </a>
                            </div>

                      
                          <div class="item">
                            <a href="spider.php"><img src="Images/spiderman1.jpg" alt="Spiderman" width="100%" height="50%"></a>
                          </div>
                      
                          <div class="item">
                            <a href="antim.php"><img src="Images/antim.jpg" alt="Antim" width="100%" height="50%"></a>
                          </div>
                          <div class="item">
                              <a href="chapali.php"><img src="Images/chapali.jpg" alt="mission mangal" width="100%" height="50%"></a>

                          </div>
                          <div class="item">
                              <a href="ghost.php"><img src="images/ghost.jpg" alt="Ghostbusters" width="100%" height="50%"></a>

                          </div>
                          <div class="item">
                              <a href="katputli.php"><img src="images/katputli.jpg" alt="Katputli" width="100%" height="50%"></a>
                          </div>
                          <div class="item">
                            <a href="soorya.php"><img src="Images/sooryavansi.jpg" alt="Sooryavansi" width="100%" height="50%"></a>
                          </div>
                          <div class="item">
                            <a href="Tadap.php"><img src="Images/tadap.jpg" alt="Tadap" width="100%" height="50%"></a>
                          </div>
                          <div class="item">
                            <a href="king.php"><img src="Images/kings man.jpg" alt="The Kings man" width="100%" height="50%"></a>
                          </div>
                          <div class="item">
                            <a href="chandi.php"><img src="Images/chandi.jpg" alt="Chandigragh kare ashique" width="100%" height="50%"></a>
                          </div>
                          <div class="item">
                            <a href="ethernal.php"><img src="Images/ethernals.jpg" alt="The eternals" width="100%" height="50%"></a>
                          </div>
                          <div class="item">
                            <a href="enchanto.php"><img src="Images/encanto.jpg" alt="Encanto" width="100%" height="50%"></a>
                          </div>

                        </div>
                      
                        
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      
        </div>
        <br>
        <br>
        <style>
            * {
              box-sizing: border-box;
            }
            
            .column {
              float: left;
              width: 33.33%;
              padding: 10px;
              
            }
            
            /* Clearfix (clear floats) */
            .row::after {
              content: "";
              clear: right;
              display: table;
            }
            </style>
        <div class="container">
         <div class="row">
            <div class="col-sm8 col-md-8">
             <h1 class="section title">NOW SHOWING</h1>
          <div class="column">
            <a href="chandi.php"><img src="Images/chan.jpg" class="img-fluid" alt="Responsive image"></a>
            <h3>Chandigradh kare Ashique</h3>
          </div>
          <div class="column">
           <a href="ethernal.php"><img src="Images/ether.jpg" class="img-fluid" alt="Responsive image"></a>
            <h2>The ethernals</h2>
            <br>
          </div>
          <div class="column">
            <a href="antim.php"><img src="images/anti.jpg" class="img-fluid" alt="Responsive image"></a>
            <h2>Antim</h2>
            <br>
          </div>
          <div class="column">
            <a href="soorya.php"><img src="images/soor.jpg" class="img-fluid" alt="Responsive image"></a>
            <h2>Sooryavansi</h2>
          </div>
          <div class="column">
            <a href="encanto.php"><img src="images/enca.jpg" class="img-fluid" alt="Responsive image"></a>
            <h2>Encanto</h2>
         </div>
          <div class="column">
            <a href="tadap.php"><img src="images/tad.jpg" class="img-fluid" alt="Responsive image"></a>
            <h2>Tadap</h2>
         </div>
         </div>
         </div>
         </div>
            </br>
          </br>
          </br>

         <div class="container">
         <div class="row">
            <div class="col-sm8 col-md-8">
             <h1 class="section title">COMMING SOON</h1>
          <div class="column">
            <a href="pushpa.php"><img src="Images/pushpa.jpg" class="img-fluid" alt="Responsive image"></a>
            <h2>Pushpa</h2>
            <br>
          </div>
          <div class="column">
           <a href="spider.php"><img src="Images/Spiderman.jpg" class="img-fluid" alt="Responsive image"></a>
            <h3>Spiderman No way Home</h3>
          </div>
          <div class="column">
            <a href="chapali.php"><img src="images/chapali.jpg" class="img-fluid" alt="Responsive image"></a>
            <h2>Chapali Height 3</h2>
            <br>
          </div>
          <div class="column">
            <a href="ghost.php"><img src="images/ghost.jpg" class="img-fluid" alt="Responsive image"></a>
            <h2>Ghostbusters</h2>
          </div>
          <div class="column">
            <a href="katputli.php"><img src="images/katputli.jpg" class="img-fluid" alt="Responsive image"></a>
            <h2>Katputali</h2>
         </div>
          <div class="column">
            <a href="king.php"><img src="images/kings man.jpg" class="img-fluid" alt="Responsive image"></a>
            <h2>The King Man</h2>
         </div>
         </div>
         </div>
         </div>

        </section>
        <br>
        <br>
        <br>
        <style>
            .footer {
              left: 0;
              bottom: 0;
              width: 100%;
              background-color: darkgrey;
              color: white;
              text-align: center;
            }
            </style>
            
        
<?php

include 'includes/footer.php';

?>
</body>
</html>