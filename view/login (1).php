<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">


	<title>Login - BacaYuk!</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- CSS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Suez+One&display=swap" rel="stylesheet">
</head>

<body>
    <header>
		<div class="container">
			<div class="row">
				<div class="col">
					<a href="" class="logo navbar-brand offset-md-0" style="margin-top: 24px;"><img src="Indomaret logo.jpg"
					width="95px" height="75px" style="margin-bottom: 14px;" alt=""><a style="color: #000000;
					font-family: 'Suez One', serif; font-size: 70px;">IndoJuni</a></a>
				</div>
			</div>
			<style type="text/css">
				body{
					background: url("pinky.jpg");
				}
			</style>
		</div>
	</header><!-- End header -->

	<section id="sub-header">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6">
					<div id="subscribe_home" data-step="1" class="">
						<div id="message-contact-home"></div>
						<form action="../ProjectUTS_Semester2/../controller/proses.php?aksi=tambah" method="post">
							<div class="row" style="padding-top: 10px;">
								<div class="col-md-12 col-sm-12">
                                    <center><a style="color: #000000; font-family: 'Suez One', serif; font-size: 45px;">
									Login </a></center>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
                                <a href="./api/index.php"><img src="LoginButton.png" width="535px" height="120px"></a>
								</div>
                            </div>
                            <div class="row">
								<div class="col-md-12 col-sm-12">
                                    <center><a style="color: #000000;font-family: 'Suez One', serif;
                                    font-size: 30px;">Atau</a></a></center>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control rounded mt-2" required="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<input type="text" name="email" placeholder="Email" minlength="6" class="form-control rounded mt-2" required="" style="margin-bottom: 2px">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<a class="btn btn-info" href="tampilLogin.php" role="button">Log In</a>
								</div>
							</div>
							<div class="clearfix"></div><br>
						</form>
					</div>
				</div>
			</div><!-- End row -->
		</div>
	</section><!-- End sub-header -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>