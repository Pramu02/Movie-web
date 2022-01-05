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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>myticket</title>
   <style>
        body {
         background-color: rgb(170, 250, 239);
      }
      * {
              box-sizing: border-box;
            }
      .container{
        width:100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
      }
      div{
            display:block;
        }
        .panel-title{
          margin-bottom:10px;
          background-color: #d8d5d5;
          text-align:center;
          padding: 10px 15px;
        }
        .panel-title h1{
          font-size:24px;
          color: 007e9e;
          text-transform: uppercase;
          margin-bottom: 0!important;
        }
        .panel-body
        {
          background-color: rgba(216,213,213,.57);
          padding: 1.5% 5% 5%;
        }
        .accordion>.card{
          overflow: hidden;
        }
        .custom-accordion .card, .custom-accordion .card .card-header{
          background-color:transparent;
          border: none;
          border-buttom: 1.5px solid #a7a6a6!important;
        }
        .card{
          position: relative;
          display: flex;
          flex-direction: column;
          min-width: 0;
          word-wrap: break-word;
          background-color: #fff;
          background-clip: border-box;
          border: 1px solid rgba(0,0,0,.125);
          border-radius: 0.25rem;
        }
        .accordion>.card .card-header{
          margin-bottom: -1px;
        }
        .custom-accordion .card .custom-accordion .card .card-header .card{
          background-color: transparent;
          border: none;
          border-bottom: 1.5px solid #a7a6a6!important;
        }
        .card-header:first-child{
          border-radius: calc(0.25rem -1px) calc(0.25rem-1px) 0 0;
        }
        .card-header{
          padding: 0.75rem-1.25rem;
          margin-bottom: 0;
          background-color: rgba(0,0,0,.125);
          border-bottom: 1px solid rgba(0,0,0,.125);
        }
        .custom-accordion .card-header button.btn.btn-link{
          display: block;
          width:100%;
          text-align: left;
          color: #2d2b2a;
          font-size: 24px;
          padding: 15px 0;
          text-decoration: none!important;
          position: relative;
        }
        [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]: not(:disabled), button:not(:disabled){
          cursor: pointer;
        }
        .btn-link{
          font-weight: 400;
          color: #007bff;
          text-decoration: none;
        }
        .btn{
          display: inline-block;
          font-weight:400;
          color: #212529;
          text-align: center;
          vertical-align: middle;
          user-select:none;
          background-color: transparent;
          border: 1px solid transparent;
          padding: 0.375rem- 0.75rem;
          font-size:1rem;
          line-height:1.5;
          transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        [type=button], [type=reset], [type=submit],button{
          -webkit-apperance: button;
        }

        .btn{
          border-radius: 0!important;
        }
        .btn, a, button{
          cursor:pointer;
        }

    </style>

</head>

<body>
  
              	 <div class="container">
                <div class="panel-title">
                <h1>MY TICKETS </h1>
                </div>
                <div class="panel-body custom-accordion">

                <div class ="card ng-star-inserted">
                <div role="tab" id="purchase-header" class="card-header">
                <button class="btn btn-link dropdown-toggle ng-star-inserted" type="button" aria-expanded="true" aria-controls="purchase">
                <span  class="ng-star-inserted">BOUGHT TICKETS</span>
                </button>
                </div>
                <div class="collapse show ng-star-inserted" role="tabpanel" id="purchase" aria-labelledby="purchase-header">
                <div class="card-body">

                </div>
                </div>
                </div>

                <div class ="card ng-star-inserted">
                <div role="tab" id="reservation-header" class="card-header">
                <button class="btn btn-link dropdown-toggle ng-star-inserted" type="button" aria-expanded="true" aria-controls="purchase">
                <span  class="ng-star-inserted">RESERVED SEAT</span>
                </button>
                </div>
                <div class="collapse show ng-star-inserted" role="tabpanel" id="purchase" aria-labelledby="purchase-header">
                <div class="card-body">

                </div>
                </div>
                </div>

                <div class ="card ng-star-inserted">
                <div role="tab" id="sent-tickets-header" class="card-header">
                <button class="btn btn-link dropdown-toggle ng-star-inserted" type="button" aria-expanded="true" aria-controls="purchase">
                <span  class="ng-star-inserted">SENT TICKETS</span>
                </button>
                </div>
                <div class="collapse show ng-star-inserted" role="tabpanel" id="purchase" aria-labelledby="purchase-header">
                <div class="card-body">

                </div>
                </div>
                </div>

                <div class ="card ng-star-inserted">
                <div role="tab" id="received-tickets-header" class="card-header">
                <button class="btn btn-link dropdown-toggle ng-star-inserted" type="button" aria-expanded="true" aria-controls="purchase">
                <span  class="ng-star-inserted">RECEIVED TICKETS</span>
                </button>
                </div>
                <div class="collapse show ng-star-inserted" role="tabpanel" id="purchase" aria-labelledby="purchase-header">
                <div class="card-body">

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
