/*================================INDEX===============================*/
function linkesdm(){
	window.open('https://www.esdm.go.id/');
}

function linkdatagoid(){
	window.open('https://data.go.id/dataset/hasil-ekspor-mineral');
}

function searchnow(){
	if(document.forms['form1'].valuesearchbox.value==""){
	alert("Diisi dulu kak, baru pencet akoh");
	return false;
		}
	alert("Okeh ku cari dlu ya");
	return true;
}

function warna1(){
	document.getElementById('paneldiv1').style.background = '#5dade2';
}

function warni1(){
	document.getElementById('paneldiv1').style.background = '#34495e';
}

function warna2(){
	document.getElementById('paneldiv2').style.background = '#5dade2';
}

function warni2(){
	document.getElementById('paneldiv2').style.background = '#34495e';
}

function warna3(){
	document.getElementById('paneldiv3').style.background = '#5dade2';
}

function warni3(){
	document.getElementById('paneldiv3').style.background = '#34495e';
}

function kehome(){
	window.location = 'index.php';
}

function kedbpanel(){
	window.location = 'dbpanel.php';
}

function ketentangkami(){
	window.location = 'tentangkami.php'
}

/*=============================DBPANEL=================================*/

/*=============================TENTANG KAMI============================*/
function fbalvin(){
	window.open('https://www.facebook.com/alvin.hardiansyah');
}

function igalvin(){
	window.open('https://www.instagram.com/alvin_pakucul');
}

function fbnoval(){
	window.open('https://www.facebook.com/codenameval');
}

function ignoval(){
	window.open('https://www.instagram.com/novalinoreynaldi');
}

function fbrahmat(){
	window.open('https://www.facebook.com/rahmat.septiyadi');
}

function igrahmat(){
	window.open('https://www.instagram.com/r_septiyadif');
}