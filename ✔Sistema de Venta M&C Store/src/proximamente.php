<?php include_once "includes/header.php";
require("../conexion.php");
$id_user = $_SESSION['idUser'];
$permiso = "nueva_venta";
$sql = mysqli_query($conexion, "SELECT p.*, d.* FROM permisos p INNER JOIN detalle_permisos d ON p.id = d.id_permiso WHERE d.id_usuario = $id_user AND p.nombre = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe) && $id_user != 1) {
    header("Location: permisos.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="assets/css/styles.css" rel='stylesheet' type='text/css' />
    <title>Document</title>
<body>
    <center><h2 style="color:white;">COLECCION DOTA</h2><center>
	<BR>
	<BR>
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/1920x622_1.jpg" alt="" title="" id="wows1_0"/></li>
		<li><img src="data1/images/1920x622_2.jpg" alt="" title="" id="wows1_1"/></li>
		<li><img src="data1/images/1920x622_4.jpg" alt="" title="" id="wows1_2"/></li>
		<li><img src="data1/images/1920x622_5.jpg" alt="" title="" id="wows1_3"/></li>
		<li><img src="data1/images/1920x622_6.jpg" alt="" title="" id="wows1_4"/></li>
		<li><img src="data1/images/1920x622_7.jpg" alt="" title="" id="wows1_5"/></li>
		<li><img src="data1/images/1920x622_8.jpg" alt="" title="" id="wows1_6"/></li>
		<li><img src="data1/images/1920x622_9.jpg" alt="" title="" id="wows1_7"/></li>
		<li><img src="data1/images/1920x622_10.jpg" alt="" title="" id="wows1_8"/></li>
		<li><img src="data1/images/1920x622_11.jpg" alt="" title="" id="wows1_9"/></li>
		<li><img src="data1/images/1920x622_12.jpg" alt="" title="" id="wows1_10"/></li>
		<li><img src="data1/images/1920x622_13.jpg" alt="" title="" id="wows1_11"/></li>
		<li><img src="data1/images/1920x622_14.jpg" alt="" title="" id="wows1_12"/></li>
		<li><img src="data1/images/1920x622_15.jpg" alt="" title="" id="wows1_13"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/1920x622_16.jpg" alt="bootstrap image slider" title="" id="wows1_14"/></a></li>
		<li><img src="data1/images/1920x622_17.jpg" alt="" title="" id="wows1_15"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_1.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_2.jpg" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_4.jpg" alt=""/>3</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_5.jpg" alt=""/>4</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_6.jpg" alt=""/>5</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_7.jpg" alt=""/>6</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_8.jpg" alt=""/>7</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_9.jpg" alt=""/>8</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_10.jpg" alt=""/>9</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_11.jpg" alt=""/>10</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_12.jpg" alt=""/>11</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_13.jpg" alt=""/>12</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_14.jpg" alt=""/>13</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_15.jpg" alt=""/>14</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_16.jpg" alt=""/>15</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/1920x622_17.jpg" alt=""/>16</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slider</a> by WOWSlider.com v9.0</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->


	<div id="fotos">


     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="img/Dota/images (6).jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">DOTA 2</a></h3>
						<H4>Heroe figura de coleccion Anti Mage - Figma Anti Mage</H4>
						<span class="reducedfrom">$86.00</span>
						<span class="actual">$37.00</span><br>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images (7).jpg" class="img-responsive" alt=""/>

					<div class="shop_desc">
						<h3><a href="#">DOTA 2</a></h3>
						<h4>Heroe figura de coleccion AXE - Hacha de Phractos Arma Mitico</h4>
						<span class="reducedfrom">$176.00</span>
						<span class="actual">$98.00</span><br>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images (9).jpg" class="img-responsive" alt=""/>

					<div class="shop_desc">
						<h3><a href="#">DOTA 2</a></h3>
						<H4>Coleccion Roshan Valve Creep que cuenta con habilidades excepcionales  </H4>
						<span class="reducedfrom">$166.00</span>
						<span class="actual">$124.00</span><br>
				    </div>
				</a></div>


				<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images (10).jpg" class="img-responsive" alt=""/>

					<div class="shop_desc">
						<h3><a href="#">DOTA 2</a></h3>
						<H4>Muñecos de coleccion Pudge Kunkka Lina Queen Of Pain</H4>
						<span class="reducedfrom">$199.00</span>
						<span class="actual">$103.00</span><br>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images_18.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">DOTA VS MOBILE LEGENDS</a></h3>
						<h4>¿Te gustaria tener este poster? ¿Cual es el mejor? proximamente</h4>
						<span class="reducedfrom">$33.00</span>
						<span class="actual">$12.00</span><br>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images_22.jpg" class="img-responsive" alt=""/>

					<div class="shop_desc">
						<h3><a href="#">WARCRAFT</a></h3>
						<h4>Poster de coleccion Defense of the Ancient-DOTA </h4>
						<span class="reducedfrom">$47.00</span>
						<span class="actual">$32.00</span><br>
				    </div>
				</a></div>
				<div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images_23.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">WARCRAFT</a></h3>
						<h4>Poster de coleccion Defense of the Ancient-DOTA </h4>
						<span class="reducedfrom">$66.00</span>
						<span class="actual">$40.00</span><br>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images_24.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">WARCRAFT</a></h3>
						<h4>Poster de coleccion Defense of the Ancient-DOTA </h4>
						<span class="reducedfrom">$26.00</span>
						<span class="actual">$10.00</span><br>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images_25.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">WARCRAFT</a></h3>
						<h4>Poster de coleccion Defense of the Ancient-DOTA </h4>
						<span class="reducedfrom">$42.00</span>
						<span class="actual">$20.00</span><br>
				    </div>
				</a></div>
				<div class="main">
    <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images (1).jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">DOTA 2</a></h3>
						<h4>Poster de coleccion Bang Queen of Pain Succubus</h4>
						<span class="reducedfrom">$86.00</span>
						<span class="actual">$44.00</span><br>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images_11.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">DOTA 2</a></h3>
						<h4>Beats Support Dazzle Onmiknight Rubick Crystal</h4>
						<span class="reducedfrom">$27.00</span>
						<span class="actual">$15.00</span><br>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
				<img src="img/Dota/images_13.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
					<h3><a href="#">DOTA VS MOBILE LEGENDS</a></h3>
						<h4>¿Te gustaria tener este poster? proximamente</h4>
						<span class="reducedfrom">$77.00</span>
						<span class="actual">$39.00</span><br>
				    </div>
				</a></div>
				
</div>
</body>
</html>
<?php include_once "includes/footer.php"; ?>