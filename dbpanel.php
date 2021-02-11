<!DOCTYPE html>
<html>
<head>
	<title>Database Panel</title>
	<link rel="stylesheet" type="text/css" href="cssnya.css">
	<script src="jsnya.js" type="text/javascript"></script>
</head>
<body>
	<div id="cover">
		<a href="index.php"><img id="logoweb" src="image/logoweb.png" width="450px"></a>
		<a href="http://www.upnvj.ac.id"><img id="logo1" src="image/logoupn.png" width="150px"></a>
		<a href="http://www.esdm.go.id"><img id="logo2" src="image/logomineral.png" width="150px"></a>
	</div>
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

	<div id="dbpanel1">
		<div id="isidb">
			<h1>Database Panel</h1>
			<?php
				echo "Database Status : ";
				$host = "esdmbeta.000webhostapp.com";
				$username = "id10686870_admin";
				$password = "admin";
				$dbname = "data_ekspor_mineralid10686870_ekspormineral";
				$dbconnection = mysqli_connect($host, $username, $password, $dbname);
				if (!$dbconnection) {
					die("Not Connected");
				}
				echo "Connected";
			?>
			<br>
			<br>
			<a href="search.php">CARI QUERY</a>
			<?php
				error_reporting(E_ALL & ~E_NOTICE);
				$input_searchbox = $_POST['valuesearchbox'];
		    	$input_where = $_POST['where'];
				$input_option4 = $_POST['option4'];
				$input_aritmatik1 = $_POST['aritmatik1'];
				$input_option5 = $_POST['option5'];
				$input_connector1 = $_POST['connector1'];
				$input_option6 = $_POST['option6'];
				$input_aritmatik2 = $_POST['aritmatik2'];
				$input_option7 = $_POST['option7'];
				$input_connector2 = $_POST['connector2'];
				$input_option8 = $_POST['option8'];
				$input_aritmatik3 = $_POST['aritmatik3'];
				$input_option9 = $_POST['option9'];
				$ordering = $_POST['ordering'];
				$orderby = $_POST['orderby'];
				$sorting = $_POST['sorting'];
				if ($input_searchbox=='') {
					$query = "SELECT * FROM ekspor_mineral $input_where $input_option4 $input_aritmatik1 $input_option5 $input_connector1 $input_option6 $input_aritmatik2 $input_option7 $input_connector2 $input_option8 $input_aritmatik3 $input_option9 $ordering $orderby $sorting";
				}
				else $query = "SELECT * FROM ekspor_mineral where No LIKE '%$input_searchbox%' or Nama_Perusahaan LIKE '%$input_searchbox%' or Komoditas LIKE '%$input_searchbox%' or Satuan LIKE '%$input_searchbox%' or Tahun LIKE '%$input_searchbox%' or Nilai LIKE '%$input_searchbox%'";

				$result = mysqli_query($dbconnection,$query) or die(mysqli_error($dbconnection));
				echo "<br><br><p align='center'><b>Database Ekspor Mineral</p></b>";
				echo "<table id='tabledb' align='center' border='1'>";
				echo "<tr>
						<th>No</th>
						<th>Nama_Perusahaan</th>
						<th>Komoditas</th>
						<th>Satuan</th>
						<th>Tahun</th>
						<th>Nilai</th>
					</tr>";
				while($row = mysqli_fetch_array($result)) {
					$Nomor = $row['No'];
					$Nama_Perusahaan = $row['Nama_Perusahaan'];
					$Komoditas = $row['Komoditas'];
					$Satuan = $row['Satuan'];
					$Tahun = $row['Tahun'];
					$Nilai = $row['Nilai'];
				echo "<tr>
						<td style='width: 50px;'>".$Nomor."</td>
						<td style='width: 200px;'>".$Nama_Perusahaan."</td>
						<td style='width: 200px;'>".$Komoditas."</td>
						<td style='width: 100px;'>".$Satuan."</td>
						<td style='width: 100px;'>".$Tahun."</td>
						<td style='width: 100px;'>".$Nilai."</td>
					</tr>";
				}
				echo "</table>";
	    	?>
	    </div>
	</div>
</body>
</html>