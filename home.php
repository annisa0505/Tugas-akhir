<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Erlangga Tailor | Welcome</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	
  </head>

  <body class="section-light">
	<header class="header-main">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Erlangga</a>
			</div>
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="promo.html">Promo</a></li>
				<li><a href="info.html">Info</a></li>
				<li><a href="contact.html">Contact</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-sub pull-right">
				<li><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#register" style="margin-top: 15px; margin-right: 20px;">Register</button></li>
				<li><a href="login.php">Login</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		  </div>
		</div>
	</header>
	
	<section class="section-showcase">
		<div class="container showcase-content">
			<h1>ERLANGGA TAILOR</h1>
			<p class="lead">Melayani Pemesanan Jasa Menjahit <br><strong>Ekspresikan Fashionmu Bersama Kami</strong><br> Kami Senang Melayani Anda</p>
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block block-primary">
						<h3><i class="fa fa-check"></i> Responsive</h3>
						<p>
							Terdapat 4 orang pegawai dalam melayani pesanan harian pada perbaikan atau pembuatan pakaian baik pakaian pria maupun wanita . Lokasi kami berada di Kab. Jember sejak tahun 1997.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block block-secondary">
						<h3><i class="fa fa-check"></i> Orders</h3>
						<p>
							Untuk setiap bulannya kami mendapat pesanan rata rata 125 hingga 200 pakaian, dengan beberapa pesanan jahitan seperti kemeja, celana, rok, jas, dan lain lain.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block block-primary">
						<h3><i class="fa fa-check"></i> Company</h3>
						<p>
							Kami menyewa penjahit musiman yang sangat prefesional dalam melayani pesanan rombongan. Oleh karna itu, kami dapat menampung pesanan lebih dari 1000 pakaian. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="regis" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="regionCreatedLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registTable">Fill All the Form Below</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="error-message">
            </div>
            <div class="col">
              <label class="form-label ">Your Name:</label>
              <input class="form-control" type="text" name="name" id="name" placeholder="Your Full Name"
                     required="">
            </div>
            <div class="col">
              <label class="form-label ">Your Email:</label>
              <input class="form-control" type="email" name="emailRegist" id="emailRegist" placeholder="Your Email"
                     required="">
            </div>
            <div class="col">
              <label class="form-label ">Your City:</label>
              <input class="form-control" type="text" name="city" id="city" placeholder="Your City"
                     required="">
            </div>
            <div class="col">
              <label class="form-label ">Your Username:</label>
              <input class="form-control" type="date" name="birthDate" id="birthDate" placeholder="Your Birth Date"
                     required="">
            </div>
            <div class="col">
              <label class="form-label ">Your Password:</label>
              <input class="form-control" type="text" name="usernameRegist" id="usernameRegist" placeholder="Your Username"
                     required="">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" style="color:white; background-color: #f67848;" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn" style="color:white; background-color: #ff6e6e;" onclick="registInfluencer()">Save</button>
          </div>
        </div>
      </div>
    </div>
	<div id="regis" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="regionCreatedLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registTable">Fill All the Form Below</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="error-message">
            </div>
            <div class="col">
              <label class="form-label ">Your Username:</label>
              <input class="form-control" type="date" name="birthDate" id="birthDate" placeholder="Your Birth Date"
                     required="">
            </div>
            
            <div class="col">
              <label class="form-label ">Your Password:</label>
              <input class="form-control" type="text" name="usernameRegist" id="usernameRegist" placeholder="Your Username"
                     required="">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" style="color:white; background-color: #f67848;" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn" style="color:white; background-color: #ff6e6e;" onclick="registInfluencer()">Login</button>
          </div>
        </div>
      </div>
    </div>
	
	<div id="register" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="regionCreatedLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" >Make Your Account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="error-message">
            </div>
            <div class="col">
              <label class="form-label ">Nama:</label>
              <input class="form-control" type="text" 
                     required="">
            <div class="col">
              <label class="form-label ">Email:</label>
              <input class="form-control" type="text" 
                     required="">
            </div>
			<div class="col">
              <label class="form-label ">Alamat:</label>
              <input class="form-control" type="text" 
                     required="">
            </div>
			<div class="col">
              <label class="form-label ">Nomor HP:</label>
              <input class="form-control" type="text" 
                     required="">
            </div>
			</div>
            <div class="col">
              <label class="form-label ">Username:</label>
              <input class="form-control" type="text" 
                     required="">
            </div>
			<div class="col">
              <label class="form-label ">Password:</label>
              <input class="form-control" type="text" 
                     required="">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn" style="color:white; background-color: #bad9ee;" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn" style="color:white; background-color: #9f8de7;" >Create</button>
          </div>
        </div>
      </div>
    </div>
	<div style="background: #2b5464; color: #ffffff;
	min-height: 10px; padding:30px 0; z-index:100;">
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
