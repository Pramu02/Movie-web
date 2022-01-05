<?php

include 'includes/header.php';
include_once 'config/db_conn.php';
$mov = $conn->query("SELECT * FROM movies where title ='Sooryavanshi'")->fetch_array();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
         body {
         background-color: rgb(170, 250, 239);
      }
        * {
              box-sizing: border-box;
            }
       
        .container{
            width:100%;
            padding-right:15px;
            padding-left:15px;
            margin-right: auto;
            marin-left: auto;
        }
        div{
            display:block;
        }
        .row{
            width:100%
            display:flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col-md-5 .col-lg-3 .col-lg-7 .col-lg-9 .col-sm-12{
            position:relative;
            width:100%;
            padding-right: 15px;
            padding-left:15px;
        }
        .show-details{
            padding: 20px 0;
        }
        .h4,h4{
            font-size : 1.5rem;
        }
        .show-movies{
            display: flex;
            flex-wrap: wrap;
            margin-bottom:20px;
            background-color: rgba(216,213,213,.5);
        }
        .show-movies .show-hall-name{
            padding:3%;
            font-size:22px;
            width:100%;
            border-width: 0 0 2px;
            border-style: solid;
            border-color: #a4a2a0;
            margin-bottom: 0!important;
            display: inline-flex;
            align-items: center;
        }
        .show-movies-header .btn.right img.image-responsive{
            /* webkit-transform: rotate (180deg); */
            transform: rotate(180deg);
        }
        .show-movies-header span{
            font-size: 32px;
            line-height: 1.5;
            display: block;
            padding: 15px 25px;
            border-width: 0 2px;
            border-style: solid;
            border-color: #a4a2a0;
        }
        .show-movies-header{
            display:flex;
            justify-content: center;
            background-color: #d8d5d5;
            margin-bottom:20px;
            margin-top: 5%;
        }
        .show-movies-header{
            display: flex;
            flex-wrap: wrap;
            background-color: rgba(216,213,213,.5);
            margin-bottom:20px;
        }
        .available{
            2px solid #09b5a0;
        }
        .time-mark .hour{
            font-size: 16px;
            display: block;
        }
        .time-mark{
            width: 93px;
            margin: 10px;
            color: #2d2b2a;
            height: 93px;
            font-size: 24px;
            padding: 20px 0;
            line-height: 1.3;
            border-radius: 50%;
            text-align: center;
            display: inline-block;
            text-decoration:none;
            background-color: #d8d5d5;
            border: 2px solid #09b5a0;
        }
        .btn,a,button{
            cursor:pointer;
        }
        a{
            transition: all .6s ease;
            color: #007bff;
            text-decoration:none;
            background-color: transparent;
        }

        .time-indicators{
            padding: 3%;
            margin-bottom: 20px;
            text-align: center;
            background-color: #d8d5d5;
        }
    
       
         .time-indicators .time-indicator:before{
            left: 0;
            top:50%;
            content: '';
            width: 36px;
            height:36px;
            margin-top: -18px;
            border: 2px solid;
            position: absolute;
            border-radius: 50%;
        }
        .time-indicators .time-indicator.time-indi-sold:before{
          border-color : #c60011;
      } 
      .time-indicators .time-indicator.time-indi-fast:before{
          border-color : #b6820a;
      } 
      .time-indicators .time-indicator.time-indi-avail:before{
          border-color : #09b5a0;
      } 
      .time-indicators .time-indicator.time-indi-expired:before{
          border-color : gray;
      }
        .time-indicators .time-indicator{
            margin-right: 20px;
            position: relative;
            padding-left: 40px;
            display: inline-flex;
            font-size: 17px;
            min-height: 36px;
            align-items: center;
            justify-content: center;
           
        }
       

      

        .img-responsive{
            width: 100%;
            height: auto;
        }
        img{
            vertical-align: middle;
            border-style: none;
        }
    </style>
</head>
<body>
<div class="container">
         <div class="row">
            <div class="col-md-5 col-lg-3">
            <img class="img-responsive" src="images/<?php echo $mov['cover_img']  ?>" alt="Soor"><br><br>
            </div>
        <div class = "col-md-7 cpl-lg-9">
        <div class="show detail">
        <h1>Sooryavanshi(PG)</h1>
            <h4><b>Genre</b>: Action, Crime, Thriller</h4>
            <h4><b>Run-Time</b>: 2hrs 25min</h4>
            <h4><b>Director</b>:Rohit Shetty</h4>
            <h4><b>Cast</b>:Akshay Kumar, Katrina Kaif, Ajay Devgn</h4>
            <h4><b>SYNOPSIS</b>:Sooryavanshi traces the acts and serious antics of DCP Veer Sooryavanshi, the chief of the Anti-Terrorism Squad in India.</h4>
        </div>
        </div> 
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="show-movies-header">
                <button class= "btn left">
                    <img src="images/leftarrow.png" alt="arrow icon" class="image-responsive">
                </button>    
                <span>Today</span>     
                <button class= "btn right">
                    <img src="images/leftarrow.png" alt="arrow icon" class="image-responsive">
                </button>   
             </div>
             <div class="show-movies">
                 <h2 class="show-hall-name" >MORNING SHIFT</h2>
                 <div class="show-times">
                     <a class="time-mark available"  href="reserve.php?id=<?php echo $mov['id'] ?>">
                         <span class="time">8:45</span>
                         <span class="time">Hrs</span>
                     </a>
                     <a class="time-mark available" href="reserve.php?id=<?php echo $mov['id'] ?>" >
                         <span class="time">10:45</span>
                         <span class="time">Hrs</span>
                     </a>
                     <a class="time-mark available" href="reserve.php?id=<?php echo $mov['id'] ?>" >
                         <span class="time">11:45</span>
                         <span class="time">Hrs</span>
                     </a>
                 </div>
             </div>
             <div class="show-movies">
                 <h2 class="show-hall-name">AFTERNOON SHIFT</h2>
                 <div class="show-times">
                     <a class="time-mark available" href="reserve.php?id=<?php echo $mov['id'] ?>">
                         <span class="time">12:30</span>
                         <span class="time">Hrs</span>
                     </a>
                     <a class="time-mark available" href="reserve.php?id=<?php echo $mov['id'] ?>">
                         <span class="time">14:30</span>
                         <span class="time">Hrs</span>
                     </a>
                     <a class="time-mark available"href="reserve.php?id=<?php echo $mov['id'] ?>">
                         <span class="time">16:30</span>
                         <span class="time">Hrs</span>
                     </a>
                 </div>
             </div>
             <div class="show-movies">
                 <h2 class="show-hall-name">EVENING SHIFT</h2>
                 <div class="show-times">
                     <a class="time-mark available" href="reserve.php?id=<?php echo $mov['id'] ?>">
                         <span class="time">18:30</span>
                         <span class="time">Hrs</span>
                     </a>
                     <a class="time-mark available" href="reserve.php?id=<?php echo $mov['id'] ?>">
                         <span class="time">19:30</span>
                         <span class="time">Hrs</span>
                     </a>
                 </div>
             </div>
             <div class="show-movies">
                 <h2 class="show-hall-name">NIGHT SHIFT</h2>
                 <div class="show-times">
                     <a class="time-mark available" href="reserve.php?id=<?php echo $mov['id'] ?>">
                         <span class="time">20:30</span>
                         <span class="time">Hrs</span>
                     </a>
                     <a class="time-mark available" href="reserve.php?id=<?php echo $mov['id'] ?>">
                         <span class="time">22:30</span>
                         <span class="time">Hrs</span>
                     </a>
                     <a class="time-mark available" href="reserve.php?id=<?php echo $mov['id'] ?>">
                         <span class="time">23:30</span>
                         <span class="time">Hrs</span>
                     </a>
                 </div>
             </div>
             <div class="time-indicators">
             <div class="time-indicator time-indi-sold">
                 Sold Out
             </div>
             <div class="time-indicator time-indi-fast">
                 Filling Fast
             </div>
             <div class="time-indicator time-indi-avail">
                 Available
             </div>
             <div class="time-indicator time-indi-expired">
                 Expired
             </div>
             </div>
        </div>
    </div>
</div>
  
</body>
</html>
<?php

include 'includes/footer.php';

?>