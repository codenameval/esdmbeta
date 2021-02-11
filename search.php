<!DOCTYPE html>
<html>
<head>
	<title>Pusat Data Informasi Hasil Ekspor Mineral</title>
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

	<div id="searchquery">
		<form method="post" action="dbpanel.php">
		<table align="center">
			<tr>
				<h2 align="center">SEARCH MYSQL QUERY</h2>
			</tr>
			<tr>
				<td>
					Tampilkan Seluruh Data (Select * From Ekspor_Mineral)
				</td>
			</tr>
			<tr>
				<td>
					Gunakan Kondisi Khusus (Where) ?
				</td>
				<td>
					:
					<select name="where">
						<option value=" ">TIDAK</option>
						<option value=" WHERE ">YA</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Masukkan Data Dengan Kondisi Khusus 1
				</td>
				<td>
					:
					<select name="option4">
						<option value=" "></option>
						<option value=" Nama_Perusahaan ">Nama_Perusahaan</option>
						<option value=" Komoditas ">Komoditas</option>
						<option value=" Tahun ">Tahun</option>
						<option value=" Nilai ">Nilai</option>
					</select>
					<select name="aritmatik1">
						<option value=" "></option>
						<option value=" = ">'='</option>
						<option value=" < ">'<'</option>
						<option value=" > ">'>'</option>
						<option value=" <= ">'<='</option>
						<option value=" >= ">'>='</option>
					</select>
					<select name="option5">
			            <option value=" "></option>
			            <option value=" 'Lusang Mining' ">'Lusang Mining'</option>
			            <option value=" 'Aneka Tambang Tbk' ">'Aneka Tambang Tbk'</option>
			            <option value=" 'Freeport Indonesia' ">'Freeport Indonesia'</option>
			            <option value=" 'Monterado Mas Mining' ">'Monterado Mas Mining'</option>
			            <option value=" 'Prima Lirang Mining' ">'Prima Lirang Mining'</option>
			            <option value=" 'Kelian Equatorial Mining' ">'Kelian Equatorial Mining'</option>
			            <option value=" 'Indo Muro Kencana' ">'Indo Muro Kencana'</option>
			            <option value=" 'Newmont Minahasa Raya' ">'Newmont Minahasa Raya'</option>
			            <option value=" 'Newmont Nusa Tenggara' ">'Newmont Nusa Tenggara'</option>
			            <option value=" 'Nusa Halmahera Minerals' ">'Nusa Halmahera Minerals'</option>
			            <option value=" 'Avocet Bolaang Mongondouw' ">'Avocet Bolaang Mongondouw'</option>
			            <option value=" 'Gold' ">'Gold'</option>
			            <option value=" 'Silver' ">'Silver'</option>
			            <option value=" '1000' ">'1000'</option>
			            <option value=" '2000' ">'2000'</option>
			            <option value=" '2001' ">'2001'</option>
			            <option value=" '2002' ">'2002'</option>
			            <option value=" '2003' ">'2003'</option>
			            <option value=" '2004' ">'2004'</option>
			            <option value=" '2005' ">'2005'</option>
			            <option value=" '2006' ">'2006'</option>
			            <option value=" '2007' ">'2007'</option>
			            <option value=" '2008' ">'2008'</option>
			            <option value=" '2008' ">'2009'</option>
			            <option value=" '2008' ">'2010'</option>
			            <option value=" '2008' ">'3000'</option>
			            <option value=" '2008' ">'4000'</option>
			            <option value=" '2008' ">'5000'</option>
			            <option value=" '2008' ">'10000'</option>
			            <option value=" '2008' ">'20000'</option>
			        </select>
			  	</td>
			</tr>
	        <tr>
	        	<td>
	        		Ingin Menambahkan Data Dengan Kondisi Khusus Kedua (AND,OR,ETC) ?
	        	</td>
	        	<td>
	        		:
			        <select name="connector1">
						<option value=" ">TIDAK</option>
						<option value=" AND ">AND</option>
						<option value=" OR ">OR</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Masukkan Data Dengan Kondisi Khusus 2
				</td>
				<td>
					:
					<select name="option6">
						<option value=" "></option>
						<option value=" Nama_Perusahaan ">Nama_Perusahaan</option>
						<option value=" Komoditas ">Komoditas</option>
						<option value=" Tahun ">Tahun</option>
						<option value=" Nilai ">Nilai</option>
					</select>
					<select name="aritmatik2">
						<option value=" "></option>
						<option value=" = ">'='</option>
						<option value=" < ">'<'</option>
						<option value=" > ">'>'</option>
						<option value=" <= ">'<='</option>
						<option value=" >= ">'>='</option>
					</select>
					<select name="option7">
			            <option value=" "></option>
			            <option value=" 'Lusang Mining' ">'Lusang Mining'</option>
			            <option value=" 'Aneka Tambang Tbk' ">'Aneka Tambang Tbk'</option>
			            <option value=" 'Freeport Indonesia' ">'Freeport Indonesia'</option>
			            <option value=" 'Monterado Mas Mining' ">'Monterado Mas Mining'</option>
			            <option value=" 'Prima Lirang Mining' ">'Prima Lirang Mining'</option>
			            <option value=" 'Kelian Equatorial Mining' ">'Kelian Equatorial Mining'</option>
			            <option value=" 'Indo Muro Kencana' ">'Indo Muro Kencana'</option>
			            <option value=" 'Newmont Minahasa Raya' ">'Newmont Minahasa Raya'</option>
			            <option value=" 'Newmont Nusa Tenggara' ">'Newmont Nusa Tenggara'</option>
			            <option value=" 'Nusa Halmahera Minerals' ">'Nusa Halmahera Minerals'</option>
			            <option value=" 'Avocet Bolaang Mongondouw' ">'Avocet Bolaang Mongondouw'</option>
			            <option value=" 'Gold' ">'Gold'</option>
			            <option value=" 'Silver' ">'Silver'</option>
			            <option value=" '1000' ">'1000'</option>
			            <option value=" '2000' ">'2000'</option>
			            <option value=" '2001' ">'2001'</option>
			            <option value=" '2002' ">'2002'</option>
			            <option value=" '2003' ">'2003'</option>
			            <option value=" '2004' ">'2004'</option>
			            <option value=" '2005' ">'2005'</option>
			            <option value=" '2006' ">'2006'</option>
			            <option value=" '2007' ">'2007'</option>
			            <option value=" '2008' ">'2008'</option>
			            <option value=" '2008' ">'2009'</option>
			            <option value=" '2008' ">'2010'</option>
			            <option value=" '2008' ">'3000'</option>
			            <option value=" '2008' ">'4000'</option>
			            <option value=" '2008' ">'5000'</option>
			            <option value=" '2008' ">'10000'</option>
			            <option value=" '2008' ">'20000'</option>
			        </select>
			    </td>
			</tr>
	        <tr>
	        	<td>
	        		Ingin Menambahkan Data Dengan Kondisi Khusus Ketiga (AND,OR,ETC) ?
	        	</td>
	        	<td>
	        		:
			        <select name="connector2">
						<option value=" ">TIDAK</option>
						<option value=" AND ">AND</option>
						<option value=" OR ">OR</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Masukkan Data Dengan Kondisi Khusus 3
				</td>
				<td>
					:
					<select name="option8">
						<option value=" "></option>
						<option value=" Nama_Perusahaan ">Nama_Perusahaan</option>
						<option value=" Komoditas ">Komoditas</option>
						<option value=" Tahun ">Tahun</option>
						<option value=" Nilai ">Nilai</option>
					</select>
					<select name="aritmatik3">
						<option value=" "></option>
						<option value=" = ">'='</option>
						<option value=" < ">'<'</option>
						<option value=" > ">'>'</option>
						<option value=" <= ">'<='</option>
						<option value=" >= ">'>='</option>
					</select>
					<select name="option9">
			            <option value=" "></option>
			            <option value=" 'Lusang Mining' ">'Lusang Mining'</option>
			            <option value=" 'Aneka Tambang Tbk' ">'Aneka Tambang Tbk'</option>
			            <option value=" 'Freeport Indonesia' ">'Freeport Indonesia'</option>
			            <option value=" 'Monterado Mas Mining' ">'Monterado Mas Mining'</option>
			            <option value=" 'Prima Lirang Mining' ">'Prima Lirang Mining'</option>
			            <option value=" 'Kelian Equatorial Mining' ">'Kelian Equatorial Mining'</option>
			            <option value=" 'Indo Muro Kencana' ">'Indo Muro Kencana'</option>
			            <option value=" 'Newmont Minahasa Raya' ">'Newmont Minahasa Raya'</option>
			            <option value=" 'Newmont Nusa Tenggara' ">'Newmont Nusa Tenggara'</option>
			            <option value=" 'Nusa Halmahera Minerals' ">'Nusa Halmahera Minerals'</option>
			            <option value=" 'Avocet Bolaang Mongondouw' ">'Avocet Bolaang Mongondouw'</option>
			            <option value=" 'Gold' ">'Gold'</option>
			            <option value=" 'Silver' ">'Silver'</option>
			            <option value=" '1000' ">'1000'</option>
			            <option value=" '2000' ">'2000'</option>
			            <option value=" '2001' ">'2001'</option>
			            <option value=" '2002' ">'2002'</option>
			            <option value=" '2003' ">'2003'</option>
			            <option value=" '2004' ">'2004'</option>
			            <option value=" '2005' ">'2005'</option>
			            <option value=" '2006' ">'2006'</option>
			            <option value=" '2007' ">'2007'</option>
			            <option value=" '2008' ">'2008'</option>
			            <option value=" '2008' ">'2009'</option>
			            <option value=" '2008' ">'2010'</option>
			            <option value=" '2008' ">'3000'</option>
			            <option value=" '2008' ">'4000'</option>
			            <option value=" '2008' ">'5000'</option>
			            <option value=" '2008' ">'10000'</option>
			            <option value=" '2008' ">'20000'</option>
			        </select>
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		Ingin Gunakan Pengurutan?
	        	</td>
	        	<td>
	        		:
					<select name="ordering">
						<option value=" ">TIDAK</option>
						<option value=" ORDER BY ">ORDER BY</option>
					</select>
					<select name="orderby">
						<option value=" "></option>
						<option value=" No ">No</option>
						<option value=" Nama_Perusahaan ">Nama_Perusahaan</option>
						<option value=" Komoditas ">Komoditas</option>
						<option value=" Tahun ">Tahun</option>
						<option value=" Nilai ">Nilai</option>
					</select>
					<select name="sorting">
						<option value=" "></option>
						<option value=" ASC ">ASC</option>
						<option value=" DESC ">DESC</option>
					</select>
				</td>
			</tr>
			<tr>
	        	<td>
	        	</td>
	        	<td align="right">
	        		<button id="searchbutton" type="submit" value="tampilkan">SEARCH</button>
	        	</td>
	        </tr>
	    </table>
	</form>
	</div>
</body>
</html>