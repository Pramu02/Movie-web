<?php
include_once 'config/db_conn.php';
include 'includes/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Hall seat</title>
    <style>
         body {
         background-color: rgb(170, 250, 239);
      }
        * {
              box-sizing: border-box;
            }
        .section-pad-bottom{
            padding-bottom:30px;
        }
        .section-pad-top{
            padding-top:30px;
        }
        section,div{
            display: block;
        }
        .container{
            width:100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right:auto;
            margin-left:auto;
        }
        .movie-info{
            width: 100%;
            display: table;
            font-size: 18px;
            border-collapse: collapse;
        }
        .movie-info .movie-cols:first-child{
            border-left:none;
        }
        .movie-info .movie-cols{
            padding: 0 15px 15px;
            display: table-cell;
            vertical-align: middle;
            border-left: 1px solid #8d8c8b;
            margin: 0 auto;
        }
        .movie-info .movie-cols h6{
            font-size: 30px;
            line-height: 1!important;
        }

        .movie-info h6{
            margin-bottom:0!important;
        }
        .movie-info .movie-cols p{
            font-size: 22px;
        }
        p{
            margin-bottom:0!important;
            line-height:1.5;
            font-size:16px;
            margin-top:0;
            margin-bottom:1rem;
        }
        .text-center{
            text-align: center!important;
        }
        .fillingfast .time-mark{
            border-color: #b6820a!important;
        }
        .time-mark{
            display:flex;
            width:100px;
            margin: 0 auto;
            color: #444;
            height: 100px;
            font-size: 20px;
            padding: 15px 0;
            line-height: 20px;
            border-radius: 50%;
            text-align: center;
            text-decoration: none;
            background-color:#fff;
            border: 2px solid #aaa;
            align-items:center;
            justify-content: center;
            flex-direction: column;
        }
        .remain-time-wrap{
            padding: 15px 15px 0;
            margin-top: 5px;
            text-align:center;
            border-top: 1px solid #8d8c8b;
        }
        .remain-time-wrap p{
            font-size:24px;
            margin-bottom:0;
        }
        .seat-record{
            padding: 15px;
            margin: 15px 0 10px;
            font-size: 18px;
            background-color: #d8d5d5;
        }
        ,max-width{
            max-width:800px;
            margin: 0 auto;
        }
        .flexrow, .row{
            width:100%;
        }
        .col-md-6{
            position: relative;
            width: 100%;
            padding-right:15px;
            padding-left:15px;
        }
        .tbl{
            display:table;
            width:100%;
        }
        .tbl .tbl-col, .tbl .tbl-row .tbl-col{
            width:1%;
            display: table-cell;
        }
        .seat-record .tbl-col{
            width:50%!important;
            vertical-align:middle;
        }
        .seat-record .price-count{
            text-align:left;
            margin-left:30px;
            position:relative;
            display: inline-block;
            background-color:transparent;;
        }
        .seat-record .price-count, .seat-record .seat-count{
            color: #f8a072;
            height:50px;
            font-size:26px;
            font-weight:700;
            line-height:50px;
            text-align:center;
            display:inline-block;
            background-color:#f2f1f1;
        }
        .seat-record .seat-count{
            padding: 0 15px;
            min-width: 130px;
        }
        .hall-layout-wrap{
            background-color:rgba(195,194,193,.6);
        }
        .hall-layout{
            padding:20px;
            text-align: center;
            position: relative;
            margin-left: auto;
            margin-right:auto;
        }
        .seat-layout-wrap{
            overflow-x:auto;
        }
        .seat-layout{
            position: relative;
            z-index: 10;
        }
        .seat-row{
            display:flex;
            margin: 0 0 5px;
            flex 1 1 0;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: center;
            color: #0d4d53;
        }
        .seat-row-letter{
            height:auto;
            width:24px;
            color: #000;
        }
        .no-seat-btn{
            height:0;
            border:none;
            background-color: rgba(195,194,193,.6)!important;
        }
        .seat-btn{
            height: 28px;
            width:28px;
            margin: 0 5px 0 0;
            transition: all .2s ease 0s;
            border-style:solid;
            color:#dedede;
            text-align: center;
            padding: 0;
        }
        [type=button], [type=reset], [type=submit],button{
            -webkit-apperance: button;
        }
        button, select{
            text-transform:none;
        }
        .btn,a,button{
            cursor:pointer;
        }
        button{
            border-radius:0;
        }
        button.Sold{
            cursor: not-allowed;
            background-color: #c22b2c!important;
            border-color: #c22b2c!important;
        }
        button.Social{
            cursor: not-allowed;
            background-color: #616161!important;
            border-color: #616161!important;
        }
        button.Reserved{
            cursor: not-allowed;
            background-color: #0384b4!important;
            border-color: #0384b4!important;
        }
        button.YourSeat{
            background-color: #dcda00!important;
            border-color:  #dcda00!important;
        }
        button.Available{
            background-color: #00b5a1!important;
            border-color:  #00b5a1!important;
        }
        .seat-indicator-wrap{
            background-color:rgba(195,194,193,.6);
            margin-top: 10px;
            padding: 15px 10px;
        }
        .max-width{
            max-width: 800px;
            margin: 0 auto;
        }
        .seat-indicator-wrap .max-width{
            display:flex;
            justify-content: space-between;
        }
        .seat-indicator-wrap .seat-indicator{
            margin: 10px 15px 10px 0;
            position: relative;
            padding-left: 32px;
            display:inline-block;
            font-size: 18px;
        }
        .seat-indicator-wrap .seat-indicator:before{
            left:0;
            top:50%;
            content:'';
            width: 26px;
            height: 26px;
            margin-top: -13px;
            position:absolute;
            border-radius:50%;
            border: 1px solid transparent;
        }
        .seat-indicator-wrap .seat-indicator.seat-indi-avai:before{
            background-color:#03b49f;
        }
        .seat-indicator-wrap .seat-indicator.seat-indi-rese:before{
            background-color:#0384b4;
        }
        .seat-indicator-wrap .seat-indicator.seat-indi-sold:before{
            background-color:#c22b2c;
        }
        .seat-indicator-wrap .seat-indicator.seat-indi-your:before{
            background-color:#dcda00;
        }
        .seat-indicator-wrap .seat-indicator.seat-indi-unavail:before{
            background-color:#616161;
        }
        .btn button:not(:last-child){
            margin-right:15px;
        }
        .btn button{
            height:100px;
            width:100px;
            border-radius:50%;
            border: 2px solid #6f6f6f;
            font-size:14px;
            outline:0;
        }
        .btn{
            margin-left:520px;
        }


    </style>
</head>
<body>
<?php


//getting id from url

$id = 101;

$sqlquery = "SELECT * FROM movie WHERE id=$id;";

$data = mysqli_query($conn, $sqlquery);


while($result = mysqli_fetch_array($data))
{
	$id = $result['id'];
	$movietitle = $result['moviename'];
	$moviecontent = $result['moviedescription'];
    $movielen=$result['movietime'];
}

$_SESSION['LAST_ACTIVITY'] = time();
?>
    <section class="section-pad-top section-pad-bottom">
     <div class="container">
            <div class="movie-info">
                <div class="movie-cols">
                    <h6 id="eventNameId">cHANDIGRAGH
                    <p class="movie-type" id="eventDescriptionId">(PG)</p>
                    <p id="movieLengthId">1hrs 56min</p>
                </div>
                <div class="movie-cols text-center">
                    <p>
                        Friday
                        <span class="day"></span>
                        17 December
                    </p>
                </div>
                <div class="fillingfast">
                    <div class="time-mark time-mark-available">
                    <span class="time">8:45</span>
                    <span class="hour">Hrs</span>
                    </div>
                </div>
                <div class="movie-cols text-center">
                    <p id="auditoriumNameId">QFX Chhaya Center</p>
                </div>
            </div>
             <div class="remain-time-wrap" id="text">
             <p>
             <span class="ng-star-inserted">Time Left to Buy Tickets&nbsp;
         </span>
         <span class="remain-time ng-star-inserted">
            <span class="remain-time-count">
                <countdown class="count-down" style="display: inline;">
                <span class="hand hand-m">
                    <span class="digital digital-0">0</span>
                    <span class="digital digital-0">0</span>
                </span>
                :
                <span class="hand hand-s">
                    <span class="digital digital-0">0</span>
                    <span class="digital digital-0">0</span>
                </span>
                </countdown>
            </span>
            <span class="remain-time-unit">&nbsp;min(s)</span>
        </span>
        <br>
        <span class="ng-star-inserted">
            To maintain social distancing, the seat adjacent to the Reserverd/Bought seats will not be available. &nbsp;
        </span>
    </p>
    </div>
    <div class="seat-record">
    <div class="max-width row">
        <div class="col-md-6">
            <div class="tbl col-xs-6">
                <div class="tbl-col">No. of seats:</div>
                <div class="tbl-col">
                    <span class="seat-count seatCountTd">0</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <div class="tbl">
                <div class="tbl-col">Total Cost NRs.</div>
                <div class="tbl-col">
                    <span class="price-count">
                        <span class="priceTd">0.00</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="hall-layout-wrap">
        <div class="hall-layout">
            <div class="seat-layout-wrap">
                <div class="seat-layout ng-star-inserted">
                    <div class="seat-row">
                        <span class="seat-row-letter">J</span>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>1</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>2</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">3</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>4</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>5</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">6</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>7</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>8</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>9</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>10</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>11</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>12</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>13</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">14</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>15</button>
                        </div>

                    </div>
                </div>
               
                <div class="seat-layout ng-star-inserted">
                    <div class="seat-row">
                        <span class="seat-row-letter">I</span>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>1</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>2</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>3</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>4</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title="This seat is unavilable in order to maintain social distancing">5</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>6</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>7</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>8</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>9</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>10</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">11</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>12</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>13</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>14</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">15</button>
                        </div>
                    </div>
                </div>
                <div class="seat-layout ng-star-inserted">
                    <div class="seat-row">
                        <span class="seat-row-letter">H</span>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>1</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>2</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>3</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>4</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">5</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>6</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>7</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>8</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>9</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>10</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">11</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>12</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>13</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>14</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">15</button>
                        </div>
                    </div>
                </div>
                <div class="seat-layout ng-star-inserted">
                    <div class="seat-row">
                        <span class="seat-row-letter">G</span>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>1</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>2</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>3</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>4</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">5</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>6</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>7</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>8</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>9</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>10</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">11</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>12</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>13</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>14</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">15</button>
                        </div>
                    </div>
                </div>
                <div class="seat-layout ng-star-inserted">
                    <div class="seat-row">
                        <span class="seat-row-letter">F</span>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>1</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>2</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>3</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>4</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">5</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>6</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>7</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>8</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>9</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>10</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">11</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>12</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>13</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>14</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">15</button>
                        </div>
                    </div>
                </div>
                <div class="seat-layout ng-star-inserted">
                    <div class="seat-row">
                        <span class="seat-row-letter">E</span>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>1</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>2</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>3</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>4</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">5</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>6</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>7</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>8</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>9</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>10</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">11</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>12</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>13</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>14</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">15</button>
                        </div>
                    </div>
                </div>
                <div class="seat-layout ng-star-inserted">
                    <div class="seat-row">
                        <span class="seat-row-letter">D</span>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>1</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>2</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>3</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>4</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">5</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>6</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>7</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>8</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>9</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>10</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">11</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>12</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>13</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>14</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">15</button>
                        </div>
                    </div>
                </div>
                <div class="seat-layout ng-star-inserted">
                    <div class="seat-row">
                        <span class="seat-row-letter">C</span>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>1</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>2</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>3</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>4</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">5</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Reserved" title>6</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Reserved" title>7</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Reserved" title>8</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Reserved" title>9</button>
                        </div>
                        
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>10</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">11</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>12</button>
                        </div>
                        
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>13</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">14</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>15</button>
                        </div>
                    </div>
                </div>
                <div class="seat-layout ng-star-inserted">
                    <div class="seat-row">
                        <span class="seat-row-letter">B</span>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>1</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>2</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>3</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>4</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">5</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>6</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>7</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>8</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>9</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>10</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">11</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>12</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>13</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>14</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">15</button>
                        </div>
                    </div>
                </div>
                <div class="seat-layout ng-star-inserted">
                    <div class="seat-row">
                        <span class="seat-row-letter">A</span>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn no-seat-btn" title disabled></button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>1</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>2</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>3</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>4</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">5</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>6</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>7</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>8</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>9</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>10</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">11</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>12</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>13</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Available" title>14</button>
                        </div>
                        <div class="ng-star-inserted">
                            <button class="seat-btn Social" title="This seat is unavilable in order to maintain social distancing">15</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seat-layout ng-star-inserted">
                <div class="seat-row">
                    <span class="seat-row-letter"></span>
                </div>
            </div>
            </div>
            <h6>SCREEN SIDE</h6>
        </div>
    </div>
    </div>
    <div class="seat-indicator-wrap">
        <div class="max-width">
            <div class="seat-indicator seat-indi-avai">
                Available
            </div>
            <div class="seat-indicator seat-indi-rese">
                Reserved
            </div>
            <div class="seat-indicator seat-indi-sold">
                Sold Out
            </div>
            <div class="seat-indicator seat-indi-your">
                Your Seat
            </div>
            <div class="seat-indicator seat-indi-unavail">
                UnAvailable
            </div>
        </div>
    </div>
    <div class="btn text-right">
        <button>Cancel</button>
        <button>Reserve</button>
        <button>Buy</button>
    </div>
</div>
 </section>
 <script type="text/javascript" src="runtime.ec2944dd8b20ec099bf3.js"></script>
 <script type="text/javascript" src="polyfills.3bfd66addbd0d2814591.js"></script>
 <script type="text/javascript" src="scripts.e454dd0842cd3c67f3c5.js"></script>
 <script type="text/javascript" src="main.f7ae0011b132128c17ab.js"></script>
</body>
</html>
<?php

include 'includes/footer.php';

?>