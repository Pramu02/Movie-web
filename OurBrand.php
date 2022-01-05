<?php

include 'includes/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Brand</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightblue">
        
            <h1>OUR BRAND</h1>
            <h2>Enriching experiences to amaze you! With technology, comfort and convenience.</h2>
            <img src="images/theater.png" align="left"><h2>THEATER INNOVATIONS</h2>
            <style>
            #more{display: none;}

            </style>
            <h2>Read more Read Less button</h2>
            <p><b>First 4K Projection</b>
                    A thrilling new experience!
                    QFX Cinemas are pioneers in introducing the latest visual technology, offering outstanding picture quality and first of its kind 4K projection in Nepal.</p>
                    <span id="dots">...</span><span id="more">
                    <p><b>First 3D Screen</b>
                    Fill your senses with wonder!
                    Offerings such as the first 3D screen with Depth Q 3D technology, deliver better luminosity and clarity and vivid picture quality.</p>
            <p><b>Dolby Atmos at QFX Chhaya</b>
                    You feel you are virtually inside every movie you watch. Surround your senses with Dolby Atmos - a work of art through sound that pulsates with power and makes your heart race!</p>
        
           <p><b>First to Introduce Online Booking</b>
                It's a pleasure to access an easy-to-use website and a mobile application, to make online reservations and purchases. And even better with a wide selection of payment gateways.</p>
            </span>
                <button onclick="myFunction()" id="myBtn">Read more</button>
                <script>
                        function myFunction() {
                          var dots = document.getElementById("dots");
                          var moreText = document.getElementById("more");
                          var btnText = document.getElementById("myBtn");
                        
                          if (dots.style.display === "none") {
                            dots.style.display = "inline";
                            btnText.innerHTML = "Read more"; 
                            moreText.style.display = "none";
                          } else {
                            dots.style.display = "none";
                            btnText.innerHTML = "Read less"; 
                            moreText.style.display = "inline";
                          }
                        }
                        </script>
            <br><br><br>
            <br><br><br>
            <br>
            <br>
            <br>
            <h1>Every detail is focused on enhancing and maximizing your cinema experience</h1>
            <img src="images/immersive.png" align="left"><h2>Immersive Theater</h2>
    
                    
                    <p><b>Enjoy Plush Comfort and Class</b>
                            Contemporary interiors and design aesthetics complement the plush comfort of seats - making it deeply relaxing movie watching experience.</p>
                    <p><b>Experience Seamless Ticketing</b>
                            The online ticketing system through the digital platform and paperless transactions, make bookings a breeze! You can even choose your own seats with a single touch, without waiting in line.</p>

</body>                        
</html>
<?php

include 'includes/footer.php';

?>
