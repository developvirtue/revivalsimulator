<!DOCTYPE html>
<!-- ignore the shitty code format, jared and carly keeps using winscp, which has the shittiest code editor --> <!-- bruh, even wafkee uses it -->
<html>

<?php include $_SERVER['DOCUMENT_ROOT']."/config.php"; ?>

<head>



<title><?php echo $groupname; ?></title>



<link rel="stylesheet" href="/resources/bootstrap.min.css">


<link rel="icon" type="image/x-icon" href="/images/favicon.ico">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css" integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<meta charset="utf-8">



<meta name="viewport" content="width=device-width, initial-scale=1">

</head>



<body><nav class="navbar navbar-expand-lg navbar-dark bg-primary">



                <div class="container">



                  <img src="<?php echo $icon; ?>" width="25px">



                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">



                    <span class="navbar-toggler-icon"></span>



                  </button>







                  <div class="collapse navbar-collapse" id="navbarColor01">



                    <ul class="navbar-nav me-auto">



                      <li class="nav-item">



                        <a class="nav-link" href="/">home</a>



                      </li>

                      <li class="nav-item">



                        <a class="nav-link" href="/#members">members</a>




                      </li><!--

                      <li class="nav-item">



                        <a class="nav-link" href="/rules.php">Rules</a>



                      </li>-->



                      <li class="nav-item">



                        <a class="nav-link" href="/#projects">projects</a>



                      </li>


<li class="nav-item">



                        <a class="nav-link" href="https://wiki.offtopicgc.pw">wiki</a>
                        </li>
                        
                        <li class="nav-item">



                        <a class="nav-link" href="https://forum.offtopicgc.pw">forum</a>
                        </li><!--
                      <li class="nav-item">



                        <a class="nav-link" href="#about">About OTGC</a>



                      </li>



                      <li class="nav-item dropdown">f



                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>



                        <div class="dropdown-menu">



                          <a class="dropdown-item" href="#">Action</a>



                          <a class="dropdown-item" href="#">Another action</a>



                          <a class="dropdown-item" href="#">Something else here</a>



                          <div class="dropdown-divider"></div>



                          <a class="dropdown-item" href="#">Separated link</a>



                        </div>



                      </li>-->



                    </ul><!--



                    <form class="d-flex">



                      <input class="form-control me-sm-2" type="text" placeholder="Search">



                      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>



                    </form>



                  </div>



                </div>-->



              </div></div></nav>

<?php
// qunjz but fixed by carly
// no need for a false true variable
if($announcement) { 
    echo '<div class="alert alert-warning" style="text-align:center;color:white;">'.$announcement.'</div>';
}
?>


<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>


    <!-- ct8.pl default webpage below



    <head>



        <meta charset=utf-8 />



        <title>offtopicgc.pw - strona hostowana na CT8.pl</title>



        <style type="text/css">



            * {



                margin: 0;



                padding: 0;



                border: 0;



            }







            body {



                background: #2B6DC5;



                color: #333;



                font-family: Arial, Verdana, Tahoma;



                font-size: 12px;



            }







            #main {



                background: #FFF;



                box-shadow: 0 0 40px #00275A;



                margin-top: 65px;



                padding-top: 20px;



                padding-bottom: 20px;



                width: 100%;



            }







            #mainwrapper {



                display: table;



                text-align: center;



                margin: 0 auto;



            }







            h1 {



                color: #EE6628;



                font-size: 44px;



                font-weight: normal;



                text-shadow: 1px 1px 2px #A7A7A7;



            }







            h2 {



                color: #3678C7;



                font-weight: normal;



                font-size: 25px;



                text-shadow: 1px 1px 2px #D4D4D4;



            }







            ul {



                text-align: left;



                margin-top: 20px;



            }







            p {



                margin-top: 20px;



                color: #888;



            }







            a {



                color: #4EB4D2;



                text-decoration: none;



            }







            a:hover, a:focus {



                text-decoration: underline;



            }



        </style>



    </head>



    



    <body>







        <div id="main">



            <div id="mainwrapper">



                <h1>offtopicgc.pw</h1>



                <h2>Strona dodana prawidłowo</h2>







                <ul>



                    <li>Twoja strona znajduje się w katalogu <b>/usr/home/offtopicgc2/domains/offtopicgc.pw/public_html</b></li>



                    <li>Możesz usunąć ten plik (index.html),</li>



                    <li>Pliki możesz umieścić na serwerze&nbsp;za pomocą&nbsp;protokołu <b>FTP</b>.</li>



                </ul>







                <p>W razie wątpliwości bądź pytań prosimy o <a href="https://www.ct8.pl/contact">kontakt</a>.</p>



            </div>



        </div>



    </body>



    -->



<div class="container mt-3">