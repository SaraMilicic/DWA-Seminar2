<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="../fontello-fb2fbc05/css/fontello.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  	<style>
  		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
      	width: 70%;
      	margin: auto;
  		}
  	</style>

  	<script>
        $(document).ready(function() {
            $("#datepicker1").datepicker();
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#datepicker2").datepicker();
        });
    </script>

</head>

<body>
	<header>
        <div class="container-fluid">
            <div class="row header-top"> 
                <div class="col-md-12">
                    <nav class="sec-navigation">
                        <ul>
                            <li><a href="#">Prijava</a></li>
                            <li><a href="#">Registracija</a></li>
                            <li><a href="#">HR</a></li>
                            <li><a href="#">EN</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <h1 class="logo"><a href="index.html">BookCroatia</a></h1>
                </div>
                <div class="col-md-8 col-xs-12">
                    <nav class="main-navigation">
                        <ul>
                            <li><a href="#">Rezervacija</a></li>
                            <li><a href="#">Hoteli</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
	
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 main-form-column">
                <form role="form" class="form-group main-form" action="search.php" method="POST">

                    <div class="main-form-box">
                        <input type="text" id="city" placeholder="Grad" required />
                    </div>

                    <div class="main-form-box">
                        <input id="datepicker1" placeholder="Vrijeme dolaska" />
                    </div>

                    <div class="main-form-box">
                        <input id="datepicker2" placeholder="Vrijeme odlaska" />
                    </div>

                    <div class="main-form-box">
                        <input type="text" id="room-type" placeholder="Soba" />

                    </div>

                    <div class="main-form-box-last"><input type="submit" value="Pretraži" style="width:100%; background-color: #362C44; border:none;">
                        <!--<a href="#">Pretraži</a>-->
                    </div>
                </form>
            </div>
        </div>
	
	
		<div class="row" style="margin-top:60px;">
			<div class="col-md-12">
				<h2 style="margin-left:60px;">Hotel
					<i class="icon-star-filled"></i>
					<i class="icon-star-filled"></i>
					<i class="icon-star-filled"></i>
					<i class="icon-star-filled"></i>
				</h2>
				<p style="margin-left:60px;">Adresa</p>

				<br>

				<div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			      <li data-target="#myCarousel" data-slide-to="3"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">
			      <div class="item active">
			        <img src="../images/intro.jpg" alt="Chania" width="460" height="345">
			      </div>

			      <div class="item">
			        <img src="../images/intro.jpg" alt="Chania" width="460" height="345">
			      </div>
			    
			      <div class="item">
			        <img src="../images/intro.jpg" alt="Flower" width="460" height="345">
			      </div>

			      <div class="item">
			        <img src="../images/intro.jpg" alt="Flower" width="460" height="345">
			      </div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>

			</div>
		</div>
	
	</div>

	<div class="container-fluid" style="margin-top:60px;">
		<div class="row">
			<div class="col-md-4 rezervation-steps" style="background:silver;">
				<h3>1. Odabir sobe</h3>
			</div>
			<div class="col-md-4 rezervation-steps">
				<h3>2. Osobni podaci</h3>
			</div>
			<div class="col-md-4 rezervation-steps">
				<h3>3. Potvrda rezervacije</h3>
			</div>
		</div>
	</div>
	

	<div class="container-fluid" style="margin-left:60px; margin-bottom:60px; margin-top:60px;">
		<div class="row" style="margin-bottom:60px;">
			<div class="col-md-3">
				<p>Soba1</p>
				<img src="../images/intro.jpg" style="width:100%;"/>
			</div>
			<div class="col-md-3">
				<p>Opis</p>
			</div>
			<div class="col-md-3">
				<p>Cijena</p>
			</div>
			<div class="col-md-3">
				<input type="checkbox" />
			</div>
		</div>
		
		<br>

		<div class="row" style="margin-bottom:60px;">
			<div class="col-md-3">
				<p>Soba1</p>
				<img src="../images/intro.jpg" style="width:100%;"/>
			</div>
			<div class="col-md-3">
				<p>Opis</p>
			</div>
			<div class="col-md-3">
				<p>Cijena</p>
			</div>
			<div class="col-md-3">
				<input type="checkbox" />
			</div>
		</div>

		<br>
		
		<div class="row" style="margin-bottom:60px;">
			<div class="col-md-3">
				<p>Soba1</p>
				<img src="../images/intro.jpg" style="width:100%;"/>
			</div>
			<div class="col-md-3">
				<p>Opis</p>
			</div>
			<div class="col-md-3">
				<p>Cijena</p>
			</div>
			<div class="col-md-3">
				<input type="checkbox" />
			</div>
		</div>

		<div class ="row>">
			<a href="#">Rezerviraj</a>
		</div>
	</div>








	
	<footer style="background-color: silver; min-height:100px; margin-top:60px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 col-md-3"></div>
                <div class="col-xs-3 col-md-3"></div>
                <div class="col-xs-3 col-md-3"></div>
                <div class="col-xs-3 col-md-3"></div>
            </div>
        </div>
    </footer>
</body>
</html>
