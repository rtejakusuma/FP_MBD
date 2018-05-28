<?php 

	include('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Holiday</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="#" class="tm-site-name">Holiday</a>	
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php" class="active">About</a></li>
							<li><a href="profil.php">Profil</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	
	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Find <span class="tm-yellow-text">The Best</span> Place</h1>
					<p class="tm-banner-subtitle">For Your Holidays</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
				<img src="img/banner-1.jpg" alt="Image" />	
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Find <span class="tm-yellow-text">The Best</span> Place</h1>
					<p class="tm-banner-subtitle">Wonderful Destinations</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
		      <img src="img/banner-2.jpg" alt="Image" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title">Find <span class="tm-yellow-text">The Best</span> Place</h1>
					<p class="tm-banner-subtitle">Comfortable Destination</p>
					<a href="#more" class="tm-banner-link">Learn More</a>	
				</div>
		      <img src="img/banner-3.jpg" alt="Image" />
		    </li>
		  </ul>
		</div>	
	</section>

	<div class="list_hotel" style="margin: auto;">
		<h1>
			Kamar Kosong
		</h1>
		<table border="1">
		<thead>
		<tr>
			<th>Nama Hotel</th>
			<th>Tipe Kamar</th>
			<th>Jumlah Kamar Kosong</th>
		</tr>
		</thead>
		<tbody>

		<?php
		$sqli = "SELECT hotels.`NAMA_HOTEL`, type_kamar.`DESKRIPSI_TYPE_KAMAR`, kamar_kosong.`JUMLAH_KAMAR_KOSONG`
				FROM hotels JOIN kamar_kosong ON hotels.`ID_HOTEL` = kamar_kosong.`ID_HOTEL` AND kamar_kosong.`JUMLAH_KAMAR_KOSONG` > 0
				JOIN type_kamar ON kamar_kosong.`ID_TYPE_KAMAR` = type_kamar.`ID_TYPE_KAMAR`;";
		$query = mysqli_query($db, $sqli);

		while($hotels = mysqli_fetch_array($query)){
			#print_r($hotels);
			echo "<tr>";

			echo "<td>".$hotels['NAMA_HOTEL']."</td>";
			echo "<td>".$hotels['DESKRIPSI_TYPE_KAMAR']."</td>";
			echo "<td>".$hotels['JUMLAH_KAMAR_KOSONG']."</td>";

			echo "</tr>";
		}
		?>
		</tbody>
		</table>

	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	</div>
</body>
</html>