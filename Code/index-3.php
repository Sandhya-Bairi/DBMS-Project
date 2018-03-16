<!DOCTYPE html>
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
<script>
function run(){
	var q1,q2,q3,q4,q5,q6,q7;
	for (var i=0; i<document.feedback.feedback1.length; i++)
	{
		if (document.feedback.feedback1[i].checked)
		{
			q1 = document.feedback.feedback1[i].value;
		}
	}
	for (var i=0; i<document.feedback.feedback2.length; i++)
	{
		if (document.feedback.feedback2[i].checked)
		{
			q2 = document.feedback.feedback2[i].value;
		}
	}
	for (var i=0; i<document.feedback.feedback3.length; i++)
	{
		if (document.feedback.feedback3[i].checked)
		{
			q3 = document.feedback.feedback3[i].value;
		}
	}
	for (var i=0; i<document.feedback.feedback4.length; i++)
	{
		if (document.feedback.feedback4[i].checked)
		{
			q4 = document.feedback.feedback4[i].value;
		}
	}
	for (var i=0; i<document.feedback.feedback5.length; i++)
	{
		if (document.feedback.feedback5[i].checked)
		{
			q5 = document.feedback.feedback5[i].value;
		}
	}
	for (var i=0; i<document.feedback.feedback6.length; i++)
	{
		if (document.feedback.feedback6[i].checked)
		{
			q6 = document.feedback.feedback6[i].value;
		}
	}
	for (var i=0; i<document.feedback.feedback7.length; i++)
	{
		if (document.feedback.feedback7[i].checked)
		{
			q7 = document.feedback.feedback7[i].value;
		}
	}
	$.ajax({
		type: "GET",
		url: "feedback.php",
		data: { q1:q1, q2:q2, q3:q3, q4:q4, q5:q5, q6:q6, q7:q7},
		success: function(html) {
		}
		});	
		return false;
}
</script>
<style>
input[type="submit"]{
		  width:100px;
		  padding:10px;
		  text-align:center;
		  margin:10px 10px 20px 10px;
		  height:35px;
		  box-sizing:border-box;
		  border-radius:10px;
		  background-color: #000000;
		  color:#ffffff;
		  border-color:#999999;
	  }
input[type="radio"]{
	background-color:transparent;
}
label{
	color: #001f33;
	font-weight:bold;
}
#page4 { 
  background: url(images/feed1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
</head>
<body id="page4">
<?php
	$id = $_GET['id'];
?>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1 id="H2"><a href="index.html" id="logo"></a><span id="slogan">Domestic Airlines</span></h1>
				<div class="right">
					<nav>
						<ul id="menu">
							<li><a href="index_new.php?id=<?php echo $id ?>">Home</a></li>
							<li><a href="index-1.php?id=<?php echo $id ?>">About Us</a></li>
							<li><a href="index-2.php?id=<?php echo $id ?>">Account</a></li>
							<li id="menu_active"><a href="index-3.php?id=<?php echo $id ?>">Feedback</a></li>
							<li><a href="login.html">Logout</a></li>
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
</div>
<!-- / header -->
<div class="main">
<!-- content -->
	<section id="content">
		<article class="col2 pad_left1">
			<p class="h21">Hi! Thank you for flying with BlueBliss. Take a few minutes to fill out the feedback form below to help us improve our service.</p>
			<section>
			<form name="feedback" method="POST">
				 <p style="margin-top:10px;color:white;font-weight:bold">I was satisfied with the assistance provided during my journey.</p>
				  <input type="radio" name="feedback1" value="0"><label>Very Satisfied</label><br>
				  <input type="radio" name="feedback1" value="1"><label> Satisfied</label><br>
				  <input type="radio" name="feedback1" value="2"><label> Not Satisfied</label>
				 <p style="margin-top:10px;color:white;font-weight:bold">I was satisfied with the brief tutorial on how to make use of the safety precautionary measures provided in case of unforseen circumstances.</p>
				  <input type="radio" name="feedback2" value="3"><label>Very Satisfied</label><br>
				  <input type="radio" name="feedback2" value="4"><label> Satisfied</label><br>
				  <input type="radio" name="feedback2" value="5"><label> Not Satisfied</label>
				 <p style="margin-top:10px;color:white;font-weight:bold">I was satisfied with the flight's seating and leg room.</p>
				  <input type="radio" name="feedback3" value="6"><label>Very Satisfied</label><br>
				  <input type="radio" name="feedback3" value="7"><label> Satisfied</label><br>
				  <input type="radio" name="feedback3" value="8"><label> Not Satisfied</label>
				<p style="margin-top:10px;color:white;font-weight:bold">I was satisfied with food selections provided(Answer only if applicable)</p>
				  <input type="radio" name="feedback4" value="9"><label>Very Satisfied</label><br>
				  <input type="radio" name="feedback4" value="10"><label> Satisfied</label><br>
				  <input type="radio" name="feedback4" value="11"><label> Not Satisfied</label>
				<p style="margin-top:10px;color:white;font-weight:bold">Booking my tickets through this website was satisfactory.</p>
				  <input type="radio" name="feedback5" value="12"><label>Very Satisfied</label><br>
				  <input type="radio" name="feedback5" value="13"><label> Satisfied</label><br>
				  <input type="radio" name="feedback5" value="14"><label> Not Satisfied</label>
				<p style="margin-top:10px;color:white;font-weight:bold">Announcements made regarding our flights and in our flight were audible and clear.</p>
				  <input type="radio" name="feedback6" value="15"><label>Very Satisfied</label><br>
				  <input type="radio" name="feedback6" value="16"><label> Satisfied</label><br>
				  <input type="radio" name="feedback6" value="17"><label> Not Satisfied</label>
				<p style="margin-top:10px;color:white;font-weight:bold">The boarding process was smooth and hassle free.</p>
				  <input type="radio" name="feedback7" value="18"><label>Very Satisfied</label><br>
				  <input type="radio" name="feedback7" value="19"><label> Satisfied</label><br>
				  <input type="radio" name="feedback7" value="20"><label> Not Satisfied</label><br>
				  
				  <a href="" class="button2" style="margin-bottom:17px" onClick="run()">Submit</a>
			</form>	
				<!--
				<h3 style="margin-top:10px;">Any further suggestions</h3>
				<form action="">
				 <textarea name="myTextBox" cols="50" rows="6" style="border:1px solid #000000;"></textarea>
				 <br />
				 <a href="#" class="button2" style="margin-bottom:17px" onClick="">Submit</a>
				 -->
            </section>
		</article>
	</section>
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
