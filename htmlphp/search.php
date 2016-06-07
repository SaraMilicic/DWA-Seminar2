<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="../fontello-fb2fbc05/css/fontello.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

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
			<div class="col-md-4" style="border:1px solid gray; padding-left:72px;">

				<h2>Razvrstaj po:</h2>
				<div>
					<h3>Cijena:</h3>
					<input type="checkbox" /> HRK 0 - HRK 370<br>
					<input type="checkbox" /> HRK 370 - HRK 1100<br>
					<input type="checkbox" /> HRK 1100 - HRK 1400<br>	
                    <input type="checkbox" /> HRK 1100 +			
				</div>
				<div>
					<h3>Kategorija:</h3>
                    <input type="checkbox" /><i class="icon-star-filled"></i><i class="icon-star-filled"></i><i class="icon-star-filled"></i><i class="icon-star-filled"></i><i class="icon-star-filled"></i><br>
					<input type="checkbox" /><i class="icon-star-filled"></i><i class="icon-star-filled"></i><i class="icon-star-filled"></i><i class="icon-star-filled"></i><br>
                    <input type="checkbox" /><i class="icon-star-filled"></i><i class="icon-star-filled"></i></i><br>
                    <input type="checkbox" /><i class="icon-star-filled"></i></i><br>
				</div>
			</div>

			<div class="col-md-8" style="border:1px solid gray">
				<h2>Pronađeno:</h2>
                    
                    <div class="container-fluid" style="margin-top:-10px;">
                        <div class="row">
                            <form method="POST" action="rezervation.php">
                                <h3>Hotel</h3>
                                <div class="col-md-4" style="background:url(../images/intro.jpg); min-height:200px;"></div>
                                <div class="col-md-4">Opis:<br>Dvokrevetna<br>Jednokrevetna</div>
                                <div class="col-md-4"><input type="submit" value="REZERVIRAJ" /></div>
                            </form>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <h3>Hotel</h3>
                            <div class="col-md-4" style="background:url(../images/intro.jpg); min-height:200px;"></div>
                            <div class="col-md-4">Opis:<br>Dvokrevetna<br>Jednokrevetna</div>
                            <div class="col-md-4"><a href="#">REZERVIRAJ</a></div>
                        </div>
                    </div>
            </div>
			</div>
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
