<?php 
	$id = $_GET['id'];
	$con = mysqli_connect("localhost","root","","wp");
	$statment = "SELECT bal from account WHERE uid = '$id'";
	$res = mysqli_query($con, $statment);
	if($res){
		while($row = mysqli_fetch_array($res)) {
			$bal = $row['bal'];
		}
	}
	mysqli_close($con);
?>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	function run(){
		var id = "<?php echo $_GET['id'] ?>";
		var totalfare = "<?php echo $_GET['totalfare'] ?>";
		var origin = "<?php echo $_GET['origin'] ?>";
	    var destination = "<?php echo $_GET['destination'] ?>";
		var flightno = "<?php echo $_GET['flightno'] ?>";
		var departure = "<?php echo $_GET['departure'] ?>";
		var arrival = "<?php echo $_GET['arrival'] ?>";
		var date = "<?php echo $_GET['date'] ?>";
		var bal = "<?php echo $bal ?>";
		var noofpass = "<?php echo $_GET['count'] ?>";

		if(totalfare < bal){
			alert("Insufficient Balance...Please recharge..!");
			return;
		}
		else{
			alert("Your booking has been confirmed!!!");
			$.ajax({
			type: "GET",
			url: "ajaxjs.php",
			data: {totalfare:totalfare,origin:origin,destination:destination,flightno:flightno,departure:departure,arrival:arrival,date:date,noofpass:noofpass},
			success: function(html) {
			window.location.href = "ajaxjs.php?totalfare="+totalfare+"&id="+id+"&origin="+origin+"&destination="+destination+"&flightno="+flightno+"&departure="+departure+"&arrival="+arrival+"&date="+date+"&noofpass="+noofpass;
			}
			});
			return;
		}
	}
</script>
<style>
#content ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}

#new li a {
    display: block;
    color: #404040;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

#new li a:hover:not(.active1) {
    background-color: gray;
}

#new li a.active1 {
    color: white;
    background-color: #404040;
}
table {
	border-collapse: collapse;
	width:100%;
	text-align:center;
	margin-bottom:30px;
}
th{
	padding:15px;
	padding-bottom: 1.0em;
	padding-top : 1.0em;
    text-align:center;
}
 #kim{
	padding:15px;
	padding-bottom: 1.0em;
	padding-top : 1.0em;
	text-align:center;
	border-collapse: collapse;
	border-bottom : 1px solid #ccccff;
	color:white
}
#kim1{
	text-align:center;
	border-collapse: collapse;
	color:white
}
#kim2{
	margin-top:3px;
	margin-bottom:3px;
	text-align:center;
	padding-top:7px;
	border-collapse: collapse;
	height:30px;
	color:white
}

input[type="text"]{
	      width:100%;
		  height:30px;
		  padding:5px;
		  box-sizing:border-box;
		  border-radius:10px
}
p{
 color:white;	
 font-size:20;
 font-style:bold;
}
h4{
	color:white;
	font-size:30;
	margin-left:750px;
	margin-top:-120px;
	font-style:italic
}
 #page5 { 
  background: url(images/blur3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
</head>
<body id="page5">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1 id="H1"><a href="#" id="logo"></a><span id="slogan">Domestic Airlines</span></h1>
				<div class="right">
					<nav>
						<ul id="menu">
							<li style="color:black;"><a href="index_new.php?id=<?php echo $id ?>" style="height:35px;padding-top:7px;">Home</a></li>
							<li><a href="index-1.php?id=<?php echo $id ?>" style="height:35px;padding-top:7px;">About Us</a></li>
							<li><a href="index-2.php?id=<?php echo $id ?>" style="height:35px;padding-top:7px;">Account</a></li>
							<li><a href="index-3.php?id=<?php echo $id ?>" style="height:35px;padding-top:7px;">Feedback</a></li>
							<li><a href="login.html" style="height:35px;padding-top:7px;">Logout</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
			COMFORT<span>Guaranteed</span><p></p>
		</div>
	</div>
<!-- / header -->
<section id="content">
    <nav>
	 <ul id="new">
       <li><a href="showtable21.php?id=<?php echo $_GET['id'] ?>&origin=<?php echo $_GET['origin'] ?>&destination=<?php echo $_GET['destination'] ?>&departdate=<?php echo $_GET['date'] ?>&noofpass=<?php echo $_GET['noofpass'] ?>" style="color:white">Flight Details</a></li>
       <li><a href="passenger1.php?id=<?php echo $_GET['id'] ?>&fare=<?php echo $_GET['fare'] ?>&origin=<?php echo $_GET['origin'] ?>
	   &destination=<?php echo $_GET['destination'] ?>&flightno=<?php echo $_GET['flightno'] ?>&departure=<?php echo $_GET['departure'] ?>
	   &arrival=<?php echo $_GET['arrival'] ?>&date=<?php echo $_GET['date'] ?>&noofpass=<?php echo $_GET['noofpass'] ?>" style="color:white">Passenger Details</a></li>
       <li><a class="active1" href="#" style="color:white">Payment</a></li>
     </ul>
	</nav>
	
<div>
	<table style="color:black;border-style:groove;width:100%; margin-top: 40px; margin-bottom:30px;">
        <tr style="color:black;background-color:#47478D; padding-top:55px;">
		 <th>Origin</th>
		 <th>Destination</th>
		 <th>Flightno</th>
		 <th>Departure</th>
		 <th>Arrival</th>
		 <th>Fare</th>
		 <th>Date</th>
		</tr>
		<tbody>
		<?php
		    $origin = $_GET['origin'];
			$destination = $_GET['destination'];
			$flightno = $_GET['flightno'];
			$departure = $_GET['departure'];
			$arrival = $_GET['arrival'];
			$fare = $_GET['fare'];
			$date = $_GET['date'];
			echo "<tr id=\"kim\">
			<td id=\"kim\">$origin</td>
			<td id=\"kim\">$destination </td>
			<td id=\"kim\">$flightno </td>
			<td id=\"kim\">$departure</td>
			<td id=\"kim\">$arrival </td>
			<td id=\"kim\">$fare </td>
			<td id=\"kim\">$date </td>
			</tr>"; 
		?>		
		</tbody>	
    </table>
</div>
<div>
<table width="100%">
        <thead>
            <tr style="color:black;background-color:#47478D; padding-top:55px;">
                <th>FirstName</th>
                <th>LastName</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
             <?php
				$v1 = $_GET['v1'];$v2 = $_GET['v2'];$v3 = $_GET['v3'];$v4 = $_GET['v4'];
				$v5 = $_GET['v5'];$v6 = $_GET['v6'];$v7 = $_GET['v7'];$v8 = $_GET['v8'];
				$v9 = $_GET['v9'];$v10 = $_GET['v10'];$v11 = $_GET['v11'];$v12 = $_GET['v12'];
				$v13 = $_GET['v13'];$v14 = $_GET['v14'];$v15 = $_GET['v15'];$v16 = $_GET['v16'];
				$v17 = $_GET['v17'];$v18 = $_GET['v18'];$v19 = $_GET['v19'];$v20 = $_GET['v20'];
				echo "<tr id=\"kim2\">
				<td id=\"kim2\">$v1</td><td id=\"kim2\">$v2</td><td id=\"kim2\">$v3</td><td id=\"kim2\">$v4</td></tr><tr id=\"kim2\">
				<td id=\"kim2\">$v5</td><td id=\"kim2\">$v6</td><td id=\"kim2\">$v7</td><td id=\"kim2\">$v8</td></tr><tr id=\"kim2\">
				<td id=\"kim2\">$v9</td><td id=\"kim2\">$v10</td><td id=\"kim2\">$v11</td><td id=\"kim2\">$v12</td></tr><tr id=\"kim2\">
				<td id=\"kim2\">$v13</td><td id=\"kim2\">$v14</td><td id=\"kim2\">$v15</td><td id=\"kim2\">$v16</td></tr><tr id=\"kim2\">
				<td id=\"kim2\">$v17</td><td id=\"kim2\">$v18</td><td id=\"kim2\">$v19</td><td id=\"kim2\">$v20</td>
				</tr>"; 		
			 ?>   
        </tbody>
</table>			
</div>
<h3 style="color:white;font-style:italic;font-size:30px">Your food Preferences</h3>
<?php
	$food1 = $_GET['food1'];
	$food2 = $_GET['food2'];
	$food3 = $_GET['food3'];
	$food4 = $_GET['food4'];
	$totalfare = $_GET['totalfare'];
	echo "<br><p>Food:";
	if($food1)	echo "$food1";
	if($food2) echo ",$food2";
	if($food3) echo ",$food3";
	if($food4) echo ",$food4</p>";
	echo "<h4>Total fare: $totalfare</h4>";
?>
<div>
    <button onclick="run()" style="margin-bottom:17px; margin-top:17px; height:30px; text-align: centre; padding-top:7px;" class="button2">Confirm </button>
</div>
</section>
<!-- / content -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>