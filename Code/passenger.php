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
<script type="text/javascript">
function run(){
	var f1 = "<?php echo $_GET['origin'] ?>";
	var f2 = "<?php echo $_GET['destination'] ?>";
	var f3 = "<?php echo $_GET['flightno'] ?>";
	var f4 = "<?php echo $_GET['departure'] ?>";
	var f5 = "<?php echo $_GET['arrival'] ?>";
	var f6 = "<?php echo $_GET['fare'] ?>";
	var f7 = "<?php echo $_GET['date'] ?>";
	var id = "<?php echo $_GET['id'] ?>";
		var v1 = document.getElementById("kim3").value;var v2 = document.getElementById("kim4").value;var v3 = document.getElementById("kim5").value;
		var e = document.getElementById("kim6");
		var v4="";
		
		var v5 = document.getElementById("kim7").value;var v6 = document.getElementById("kim8").value;var v7 = document.getElementById("kim9").value;
		var e1 = document.getElementById("kim10");
		var v8=""; 
		
		var v9 = document.getElementById("kim11").value;var v10 = document.getElementById("kim12").value;var v11 = document.getElementById("kim13").value;
		var e2 = document.getElementById("kim14");
		var v12=""; 
		
		var v13 = document.getElementById("kim15").value;var v14 = document.getElementById("kim16").value;var v15 = document.getElementById("kim17").value;
		var e3 = document.getElementById("kim18");
		var v16="";
		
		var v17 = document.getElementById("kim19").value;var v18 = document.getElementById("kim20").value;var v19 = document.getElementById("kim21").value;
		var e4 = document.getElementById("kim22");
		var v20=""; 
		
		var count=0;
		var noofpass = "<?php echo $_GET['noofpass'] ?>";
		if(v1 && v2 && v3){
			v4 = e.options[e.selectedIndex].value;
			count++;
		}
		if(v5 && v6 && v7){
			v8 = e1.options[e1.selectedIndex].value;
			count++;
		}
		if(v9 && v10 && v11){
			v12 = e2.options[e2.selectedIndex].value;
			count++;
		}
		if(v13 && v14 && v15){
			v16 = e3.options[e3.selectedIndex].value;
			count++;
		}
		if(v17 && v18 && v19){
			v21 = e4.options[e4.selectedIndex].value;
			count++;
		}
		if(noofpass != count)
		{
			switch(count){
				case 0: if(!v1){alert("FirstName not entered!!!");return;} 
						if(!v2){alert("LastName not entered!!!");return;}
						if(!v3){alert("Age not entered!!!");return;}
				break;
				case 1: if(!v5){alert("FirstName not entered!!!");return;}
						if(!v6){alert("LastName not entered!!!");return;}
						if(!v7){alert("Age not entered!!!");return;}
				break;
				case 2: if(!v9){alert("FirstName not entered!!!");return;}			
						if(!v10){alert("LastName not entered!!!");return;}
						if(!v11){alert("Age not entered!!!");return;}
				break;
				case 3: if(!v13){alert("FirstName not entered!!!");return;}
						if(!v14){alert("LastName not entered!!!");return;}
						if(!v15){alert("Age not entered!!!");return;}
				break;
				case 4: if(!v17){alert("FirstName not entered!!!");return;}
						if(!v18){alert("LastName not entered!!!");return;}
						if(!v19){alert("Age not entered!!!");return;}
				break;
			}
			alert("Passenger details doesn't match previously entered number!!!");
			return;
		}
		if(v3!="" && v3<4){
			if(v3>0){
				alert("No charges for infants :-) Need not fill");return;
			}else {
				alert("Invalid age!!!!");return;
			}
		}
		if(v7!="" && v7<4){
			if(v7>0){
				alert("No charges for infants :-) Need not fill");return;
			}else {
				alert("Invalid age!!!!");return;
			}
		}
		if(v11!="" && v11<4){
			if(v11>0){
				alert("No charges for infants :-) Need not fill");return;
			}else {
				alert("Invalid age!!!!");return;
			}
		}
		if(v15!="" && v15<4){
			if(v15>0){
				alert("No charges for infants :-) Need not fill");return;
			}else {
				alert("Invalid age!!!!");return;
			}
		}
		if(v19!="" && v19<4){
			if(v19>0){
				alert("No charges for infants :-) Need not fill");return;
			}else {
				alert("Invalid age!!!!");return;
			}
		}
		
		var totalfare = f6 * count;
		
		var checkedValue = []; 
		var j=0,n;
		var inputElements = document.getElementsByClassName('food');
		for(var i=0; inputElements[i]; ++i){
			  if(inputElements[i].checked){
				   checkedValue[j] = inputElements[i].value;
				   n=++j;
			  }
		}
						

		for(var i=0;inputElements[i];i++)
		{ 
			if(checkedValue[i]=="Not required" && n>1)
			{
				alert("Invalid selection!");
			    return;
			}
		}
		var food1="",food2="",food3="",food4="";
		if(n==1){food1=checkedValue[0];}
		if(n==2){food1=checkedValue[0];food2=checkedValue[1];}
		if(n==3){food1=checkedValue[0];food2=checkedValue[1];food3=checkedValue[2];}
		if(n==4){food1=checkedValue[0];food2=checkedValue[1];food3=checkedValue[2];food4=checkedValue[3];}
	window.location="payment.php?origin="+f1+"&destination="+f2+"&flightno="+f3
		+"&departure="+f4+"&arrival="+f5+"&fare="+f6+"&date="+f7+"&v1="+v1+"&v2="+v2+"&v3="+v3+"&v4="+v4+
		"&v5="+v5+"&v6="+v6+"&v7="+v7+"&v8="+v8+
		"&v9="+v9+"&v10="+v10+"&v11="+v11+"&v12="+v12+
		"&v13="+v13+"&v14="+v14+"&v15="+v15+"&v16="+v16+
		"&v17="+v17+"&v18="+v18+"&v19="+v19+"&v20="+v20+
		"&id="+id+"&count="+count+"&totalfare="+totalfare+"&noofpass="+noofpass+"&food1="+food1+"&food2="+food2+"&food3="+food3+"&food4="+food4;
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
	border:1px solid white;
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
#kim1,#kim3,#kim4,#kim5,#kim6,#kim7,#kim8,#kim9,#kim10,#kim11,#kim12,#kim13,#kim14,#kim15,#kim16,#kim17,#kim18,#kim19,#kim20,#kim21,#kim22{
	text-align:center;
	border-collapse: collapse;
	border: 1px solid black;
	padding:10px;
	text-align:center;
	width:250px;
}
#kim1,#kim3,#kim4,#kim5,#kim6,#kim7,#kim8,#kim9,#kim10,#kim11,#kim12,#kim13,#kim14,#kim15,#kim16,#kim17,#kim18,#kim19,#kim20,#kim21,#kim22 td{
	width:250px;
	height:40px;
	padding:10px;
	border: 1px solid black;
	border-collapse: collapse;
	text-align:center;
	border-bottom : 1px solid #ccccff;
	 -moz-border-radius: 0px;
	 -webkit-border-radius: 0px;
	 border-radius: 0px;
}
 #page5 { 
  background: url(images/blur3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.disabled{
	opacity: 0.6;
	cursor:not-allowed;
}
input[type="text"]{
	      width:100%;
		  height:30px;
		  padding:5px;
		  box-sizing:border-box;
		  border-radius:10px
}
label{
	color:white;
}
</style>
</head>
<body id="page5">
<?php $id = $_GET['id'] ?>
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
       <li><a class="active1" href="#">Passenger Details</a></li>
       <li><a class="disabled" href="#" style="color:white">Payment</a></li>
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
<table id="persontable" width="100%">
        <thead>
            <tr style="color:black;background-color:#47478D; padding-top:55px;">
                <th>FirstName</th>
                <th>LastName</th>
                <th>Age</th>
                <th>Gender</th>
		    </tr>
        </thead>
        <tbody>
             <tr id="kim1"><td><input id="kim3" type="text"></td><td><input id="kim4" type="text"></td><td><input id="kim5" type="text"></td>
			 <td><select id="kim6"> 
				<option value="Male" selected="selected">Male</option>
                <option value="Female">Female</option>
                <option value="Third Gender">Third Gender</option>
			 </td>
			 </tr>
			 <tr id="kim1"><td><input id="kim7" type="text"></td><td><input id="kim8" type="text"></td><td><input id="kim9" type="text"></td>
			 <td><select id="kim10"> 
				<option value="Male" selected="selected">Male</option>
                <option value="Female">Female</option>
                <option value="Third Gender">Third Gender</option>
			 </td>
			 </tr>
			 <tr id="kim1"><td><input id="kim11" type="text"></td><td><input id="kim12" type="text"></td><td><input id="kim13" type="text"></td>
			  <td><select id="kim14"> 
				<option value="Male" selected="selected">Male</option>
                <option value="Female">Female</option>
                <option value="Third Gender">Third Gender</option>
			 </td>
			  </tr>
			 <tr id="kim1"><td><input id="kim15" type="text"></td><td><input id="kim16" type="text"></td><td><input id="kim17" type="text"></td>
			 <td><select id="kim18"> 
				<option value="Male" selected="selected">Male</option>
                <option value="Female">Female</option>
                <option value="Third Gender">Third Gender</option>
			 </td>
			 </tr>
			 <tr id="kim1"><td><input id="kim19" type="text"></td><td><input id="kim20" type="text"></td><td><input id="kim21" type="text"></td>
			 <td><select id="kim22"> 
				<option value="Male" selected="selected">Male</option>
                <option value="Female">Female</option>
                <option value="Third Gender">Third Gender</option>
			 </td>
			 </tr>
        </tbody>
	
</table>			
</div>
<div>
<h3 style="color:white;font-style:italic;">Choose your food preferences.</h3>
<input type="checkbox" class="food" name="food" value="Continental"> <label> Continental</label><br>
<input type="checkbox" class="food" name="food" value="North-Indian"> <label> North-Indian</label><br>
<input type="checkbox" class="food" name="food" value="South-Indian"> <label> South-Indian</label><br>
<input type="checkbox" class="food" name="food" value="Not required"> <label> Not required</label><br>
</div>
<div>
	<button onclick="run()" style="margin-bottom:17px; margin-top:17px; height:30px; text-align: centre; padding-top:7px;" class="button2">Submit </button>
</div>
</section>
<!-- / content -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>