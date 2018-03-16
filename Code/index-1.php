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


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   #page2 { 
  background: url(images/blur5.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
  
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
       width:auto;
       height:450px;
       margin: 0 auto;
  }
  
@import url(//fonts.googleapis.com/css?family=Lato:400,900);
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

.info-card {
    float: left;
	margin: 8px;
	-webkit-perspective: 600px;
}
.info-card1 {
    float: left;
	margin: 8px;
	-webkit-perspective: 600px;
}
.info-card2 {
    float: left;
	margin: 8px;
	-webkit-perspective: 600px;
}

.front, .back {
	background: #FFF;
	border-radius: 8px;
	margin-left: 25px;
	transition: -webkit-transform 1s;
	-webkit-transform-style: preserve-3d;
	-webkit-backface-visibility: hidden;
	border: 1px solid black;
}

.front {
	overflow: hidden;
	width: 250px;
	height:250px;
	position: absolute;
	z-index: 1;
}

.back {
	padding: 20px;
	padding-top: 0px;
	width: 250px;
	height:250px;
	-webkit-transform: rotateY(-180deg);
	}

.info-card:hover .back {
	-webkit-transform: rotateY(0);
}

.info-card:hover .front {
	-webkit-transform: rotateY(180deg);
}
.info-card1:hover .back {
	-webkit-transform: rotateY(0);
}

.info-card1:hover .front {
	-webkit-transform: rotateY(180deg);
}
.info-card2:hover .back {
	-webkit-transform: rotateY(0);
}

.info-card2:hover .front {
	-webkit-transform: rotateY(180deg);
}

.card-image {
width: 100%;
height: 100%;
}
</style>
</head>
<body id="page2">
<?php
	$id = $_GET['id'];
?>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1 id="H1"><a href="" id="logo"></a><span id="slogan">Domestic Airlines</span></h1>
				<div class="right">
					<nav>
						<ul id="menu">
							<li><a href="index_new.php?id=<?php echo $id ?>">Home</a></li>
							<li id="menu_active"><a href="index-1.php?id=<?php echo $id ?>">About Us</a></li>
							<li><a href="index-2.php?id=<?php echo $id ?>">Account</a></li>
							<li><a href="index-3.php?id=<?php echo $id ?>">Feedback</a></li>
							<li><a href="login.html">Logout</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/seat.jpg" alt="interior" width="600" height="400">
        <div class="carousel-caption">
          <h3>Comfort</h3>
          <p>BlueBliss Interior is designed such that passenger's comfort is given high priority .</p>
        </div>
      </div>

      <div class="item">
        <img src="images/crew.jpg" alt="BlueBliss Crew" width="600" height="400">
        <div class="carousel-caption">
          <h3>The Crew!</h3>
          <p>Each employee to our Airlines is handpicked so that you are served only by the best.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/service.jpg" alt="Service" width="600" height="400">
        <div class="carousel-caption">
          <h3>Here To serve</h3>
          <p>The passenger needs are taken care of immediately with our high quality service.</p>
        </div>
      </div>

     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<!-- header -->
<div class="main">
<!-- content -->
	<section id="content">
		
		<article class="col2 pad_left1">
			<p class="h21">Comfort</p>
	<div class="wrapper">
				
				<p style="color:white"><strong>BlueBliss Interior is designed such that passenger's comfort is given high priority.</strong> With movable bases to provide further degree of recline to slimmer seats that are made with mesh fibre rather than traditinal foam padding, every nook and cranny of our flights are designed with the intention that our passengers will have a pleasant experience. </p>
<p style="color:white"> The newly redesigned flight cabins in planes charted for longer flight durations have encorporated curving overheard bins, large ceiling panels lit with color LEDs, and LED sidewall lighting that makes the aircraft look larger and puts the claustrophobic passengers on the flight at ease.</p>
			</div>
			<p style="color:white">We at Bluebliss understand that sometimes its not about the destination, but the journey that takes you there.</p>
			
			<p class="h21">Customer Service</p>
			<div class="wrapper">
				
				<p style="color:white"><strong>It is our job everyday to make all aspects of the passenger's experience better.</strong> Flying is a daunting task during your first flight. We keep these first timers in mind and ensure that the passenger is comfortable and is meet with all his/her needs. </p>
				<p style="color:white">With around the clock service by the highly professional handpicked employees at your beck and call, we leave our costumers satiated and coming back for more.</p>
		</div>

			<p class="h21">Our Crew</p>
			<div class="wrapper">
				
				<p style="color:white"><strong>We want good costumers and better employees to take care of them</strong> Each and every employee that msakes up the BlueBliss crew are picked meticulously. </p>
				<p style="color:white">Incentives and salary hikes are multiple in number because we treat our employees the way we want out best costumers to be treated by them. Bluebliss is not an organization, it is a family.</p>
		</div>
		</article>
	<article class="col1">
        <div class="container">
	<div class="row">
		<p class="h21" style="margin-left:50px;">Founders</p>
    	<!-- Info Card with social icons -->
		<div class="info-card">
				<div class="front">
					<img class="card-image" src="teja.jpg">
				</div>
			<div class="back">
				<h2>Member</h2>
				<p>
					Phone no: 9964299392
				</p><p>Email: dtssg1997@gmail.com</p>
			</div>
		</div>
		
	</div>
    <div class="row">
	    <div class="info-card1">
				<div class="front">
					<img class="card-image" src="pinky.jpg">
				</div>
			<div class="back">
				<h2>Member</h2>
				<p>
					Phone no: 7022209379
				</p><p>Email: pakasarka@gmail.com</p>
			</div>
		</div>
	</div>
    <div class="row">
	    <div class="info-card2">
				<div class="front">
					<img class="card-image" src="sandy.jpg">
				</div>
			<div class="back">
				<h2>Member</h2>
				<p>Phone no: 9035769725</p><p>Email:sandhya.bairi154@gmail.com </p>
			</div>
		</div>
	</div>	
	</article>
	</div>
	</section>
<!-- / content -->
<div class="body2">
	<div class="main">
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>