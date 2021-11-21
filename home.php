<?php
include "session.php";
include "koneksi.php";

$sql = mysqli_query($koneksi, "SELECT * FROM kontrol");
$data = mysqli_fetch_array($sql);

$relay = $data['relay'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>wellcome</title>
	<script type="text/javascript">
		function ubahstatus(value)
		{
			if(value==true) value="ON";
			else value="OFF";
			document.getElementById('status').innerHTML = value;

			var xmlhttp = new XMLHttpRequest();

			xmlhttp.onreadystatechange = function ()
			{
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					document.getElementById('status').innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET", "relay.php?stat=" + value, true);
			xmlhttp.send();
		}
	</script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>SELAMAT DATANG</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="ubahstatus (this.checked)" <?php if($relay==1) echo "checked"; ?> >
  <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status"> <?php if($relay==1) echo "ON"; else echo "OFF"; ?> </span> </label>
</div>
      <form class="d-flex">
      <a href="logout.php"> <b> Logout </b> </a>
      </form>
    </div>
  </div>
</nav>

<div class="row no-gutters mt-5">
<div class="col-md-2 mt-2 pt-4 pr-3 ">
<ul class="nav flex-column ml-3 mb-5" >
<a class="nav-link active" aria-current="page" href="#"> <img src="images/profil.png" width="70"> </a> <hr class="bg-secondary">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="home.php"> <img src="images/dashboard.png" width="30"><b> Dashboard </b> </a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cctv.php"> <img src="images/cctv.png" width="30"><b> Monitoring cctv </b></a> <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pemberitahuan.php"> <img src="images/notif.png" width="30"><b> pemberitahuan </b></a> <hr class="bg-secondary">
  </li>
</ul>

<script type="text/javascript">
		function showTime(){
			var a_p = "";
			var today = new Date();
			var curr_hour = today.getHours();
			var curr_minute = today.getMinutes();
			var curr_second = today.getSeconds();

			if (curr_hour<12) {
				a_p = "AM";
			}else {
				a_p = "PM";
			}

			if (curr_hour == 0) {
				curr_hour=12;
			}
			if (curr_hour == 12) {
				curr_hour=curr_hour-12;
			}
			curr_hour = checkTime(curr_hour);
			curr_minute = checkTime(curr_minute);
			curr_second = checkTime(curr_second);

			document.getElementById('time').innerHTML= curr_hour+":"+curr_minute+":"+curr_second+" "+a_p;
		}

		function checkTime(i){
			if (i<10) {
				i = "0"+i;
			}
			return i;
		}
		setInterval(showTime,500);
	</script>
</head>
<body>
	<div style="text-align:center">
		<img src="images/jam.png" width="50"><h3  id="time" style="color:blue"></h3>
		<img src="images/tanggal.png" width="50"><h3 id="date" style="color:blue"></h3>
	</div>

	<script>
		var months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
		var date = new Date();
		var day = date.getDate();
		var month = date.getMonth();
		var year = <?php echo date('Y')?>

		document.getElementById("date").innerHTML=" "+day+" "+months[month]+" "+year;
	</script>
</body>
</div>
<div class="col-md-10 p-5 ml-5 pt-2">
<img src="images/wellcome.png" width="1000"> 
</div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
</p>