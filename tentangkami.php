<!DOCTYPE html>
<html>
<head>
	<title>Tentang Kami</title>
	<link rel="stylesheet" type="text/css" href="cssnya.css">
	<script src="jsnya.js" type="text/javascript"></script>
</head>
<body>
	<div id="cover">
		<a href="index.php"><img id="logoweb" src="image/logoweb.png" width="450px"></a>
		<a href="http://www.upnvj.ac.id"><img id="logo1" src="image/logoupn.png" width="150px"></a>
		<a href="http://www.esdm.go.id"><img id="logo2" src="image/logomineral.png" width="150px"></a>
	</div>
	<audio src="music/backsound.mp3" autoplay="autoplay"></audio>
<!--===================PEMBATAS SURGA DAN NERAKA==========================-->
	<div>	
		<ul id="menubar">
			<li id="float" class="float1"><a href="index.php">Home</a></li>
			<li id="float" class="float2"><a href="dbpanel.php">Database</a></li>
			<li id="float" class="float3"><a href="search.php">Search Query</a></li>
			<li id="float" class="float4"><a href="tentangkami.php">Contact</a></li>
			<li class="float5">
				<form name="form1" method="post" action="dbpanel.php">
					<input id="searchbox" type="text" name="valuesearchbox" placeholder="Search Here" list="list1"/>
					<datalist id="list1">
			            <option>Lusang Mining</option>
			            <option>Aneka Tambang Tbk</option>
			            <option>Freeport Indonesia</option>
			            <option>Monterado Mas Mining</option>
			            <option>Prima Lirang Mining</option>
			            <option>Kelian Equatorial Mining</option>
			            <option>Indo Muro Kencana</option>
			            <option>Newmont Minahasa Raya</option>
			            <option>Newmont Nusa Tenggara</option>
			            <option>Nusa Halmahera Minerals</option>
			            <option>Avocet Bolaang Mongondouw</option>
			            <option>Gold</option>
			            <option>Silver</option>
			            <option>1000</option>
			            <option>2000</option>
			            <option>2001</option>
			            <option>2002</option>
			            <option>2003</option>
			            <option>2004</option>
			            <option>2005</option>
			            <option>2006</option>
			            <option>2007</option>
			            <option>2008</option>
			            <option>2009</option>
			            <option>2010</option>
			            <option>3000</option>
			            <option>4000</option>
			            <option>5000</option>
			            <option>10000</option>
			            <option>20000</option>
					</datalist>
				</form>
			</li>
		</ul>
	</div>
<!--===================PEMBATAS SURGA DAN NERAKA==========================-->
	<div id="tulisanjalan">
		<marquee>Pusat Data Informasi Hasil Ekspor Mineral || Situs ini digunakan untuk menampilkan informasi mengenai hasil ekspor mineral di Indonesia || Sumber : <a href="#" onclick="linkdatagoid();"><i>www.data.go.id</i></a> dan <i><a href="#" onclick="linkesdm();">www.esdm.go.id</a></i></marquee>
	</div>

	<div id=tentangkami1>
		<div id="vin" align="center">
			<p><b>Developer 1</b></p>
			<img src="image/vin.png" width="200px"><br>
			<p id="p1" align="left"> Nama : Alvin Dwi Hardiansyah<br>
			NIM : 1610512041<br>
			Contribution : Front-End Developer<br>
			Social Media :<br>
			<a href="#" onclick="fbalvin();"><img src="image/fblogo.png" width="30px"/></a>
			<a href="#" onclick="igalvin();"><img src="image/iglogo.png" width="30px"/></a></p>
		</div>

		<div id="val" align="center">
			<p><b>Developer 2</b></p>
			<img src="image/val.jpg" width="200px"><br>
			<p id="p1" align="left"> Nama : Novalino Reynaldi Anas<br>
			NIM : 1610512047<br>
			Contribution : Back-End Developer<br>
			Social Media :<br>
			<a href="#" onclick="fbnoval();"><img src="image/fblogo.png" width="30px"/></a>
			<a href="#" onclick="ignoval();"><img src="image/iglogo.png" width="30px"/></a>
		</div>
		
		<div id="mat" align="center">
			<p><b>Developer 3</b></p>
			<img src="image/mat.png" width="200px"><br>
			<p id="p1" align="left"> Nama : Rahmat Septiyadi<br>
			NIM : 1610512068<br>
			Contribution : Web Designer<br>
			Social Media :<br>
			<a href="#" onclick="fbrahmat();"><img src="image/fblogo.png" width="30px"/></a>
			<a href="#" onclick="igrahmat();"><img src="image/iglogo.png" width="30px"/></a>
		</div>
	</div>
</body>
</html>