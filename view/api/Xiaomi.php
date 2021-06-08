<?php

include('config.php');

$login_button = '';

if(isset($_GET["code"])){
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    if(!isset($token['error'])){
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();
        //print_r ($data)
        if(!empty($data['name'])){
            $_SESSION['name'] = $data['name'];
        }

        if(!empty($data['family_name'])){
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if(!empty($data['email'])){
            $_SESSION['user_email_address'] = $data['email'];
        }

        if(!empty($data['gender'])){
            $_SESSION['user_gender'] = $data['gender'];
        }else{
            $_SESSION['user_gender'] = "-";
        }
        
        if(!empty($data['picture'])){
            $_SESSION['user_image'] = $data['picture'];
        }
    }
}

if(!isset($_SESSION['access_token'])){
    $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="LoginButton.png" /></a>';
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-image:url('../pinky.jpg')">
  <div class="panel panel-default">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffe5e2;">
        <a href="" class="logo navbar-brand offset-md-0" style=""><img src="Indomaret logo.jpg"
			width="85px" height="70px" style="" alt=""><a style="color: #000000;
			font-family: 'Pattaya', sans-serif; font-size: 70px;">IndoJuni</a></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col">
		</div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="color: #cf0000; font-family: 'Dancing Script', cursive; 
                    font-size: 25px;">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="samsung.php" style="color: #00af91; font-family: 'Dancing Script', cursive; 
                    font-size: 25px;">Samsung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Oppo.php" style="color: #ffcc29; font-family: 'Dancing Script', cursive; 
                    font-size: 25px;">Oppo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Xiaomi.php" style="color: #d99879; font-family: 'Dancing Script', cursive; 
                    font-size: 25px;">Xiaomi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Realme.php" style="color: #890596; font-family: 'Dancing Script', cursive; 
                    font-size: 25px;">Realme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.php" style="color: #890596; font-family: 'Dancing Script', cursive; 
                    font-size: 25px;">Belanja Sekarang!</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        
        <div class="col">
        <?php
        if($login_button == '')
        {
            echo '<a href="" class="logo navbar-brand offset-md-0" style="margin-top: 24px;"><img
            src="'.$_SESSION["user_image"].'" width="55px" height="50px" style="margin-bottom: 20px;" alt="">';
        }
        ?>
        </div>
    </nav>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Login Using Google Account</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='
    viewport'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
</head>
<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 70px;
  text-align: center;
  background: #da7f8f;
  color: white;
  font-size: 40px;
}

/* Page Content */
.content {padding:45px;
font-size: 29px;
color: black;
background: #f21170;
text-align: center;}
</style>
</head>
<body>

<div class="header">
  <h1>XIAOMI</h1>
  <p>Xiaomi Corporation was founded in April 2010 and listed on the Main Board of the Hong Kong Stock Exchange on July 9, 2018.</p>
</div>

<div class="content">
  <p>Xiaomi Corporation (/ˈʃaʊmiː/;[2] Chinese: 小米 ), registered in Asia as Xiaomi Inc., is a Chinese multinational</p>
  <p>electronics company founded in April 2010 and headquartered in Beijing. Xiaomi makes and invests in </p>
  <p>smartphones, mobile apps, laptops, home appliances, bags, shoes, consumer electronics, and many other products.</p>
</div>

</body>
</html>