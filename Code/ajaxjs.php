<?php
require_once "phpmailer/class.phpmailer.php";

$totalfare = $_GET['totalfare'];
$id = $_GET['id'];
$noofpass = $_GET['noofpass'];

$origin = $_GET['origin'];
$destination = $_GET['destination'];

$flightno = $_GET['flightno']; 
$departure = $_GET['departure']; 
$arrival = $_GET['arrival']; 
$date = $_GET['date']; 
$pnr = rand();
$con = mysqli_connect("localhost","root","","wp");

if($noofpass % 2 == 0 ){
$statments = "UPDATE flight1 SET seats=seats-($noofpass)/2 WHERE flightno = '" . trim($flightno) . "'";
}
else
{
	$statments = "UPDATE flight1 SET seats=(seats-($noofpass)/2+1) WHERE flightno = '" . trim($flightno) . "'";
}
$seatresult = mysqli_query($con, $statments);

$statment = "UPDATE account SET bal=bal-$totalfare WHERE uid = '$id'";
$res = mysqli_query($con, $statment);

$book = "INSERT INTO bookticket VALUES ('$id','$flightno','$totalfare','$noofpass','$pnr')"; 
$bookresult = mysqli_query($con, $book);

$stat = "SELECT email FROM register WHERE uid = '$id'";
$result = mysqli_query($con, $stat);

if($result)
{
	while($arr = mysqli_fetch_array($result))
	{
		$email=$arr['email'];
	}
}	

$message = '<html><head>
                <title>Ticket Info</title>
                </head>
                <body>';
        $message .= '<h1>Your Booking Information</h1><br><h2>Flight Details</h2><br>';
        $message .= '<h3>Origin: ' . $origin .'		Destination: '. $destination . '</h3>';
        $message .= '<h3>Flightno: ' . $flightno . '</h3>';
        $message .= '<h3>DepartureTime: ' . $departure .'		ArrivalTime: '. $arrival . '</h3>';  
		$message .= '<h3>Total Fare: ' . $totalfare .'		Date of Journey: '. $date . '</h3>';
		$message .= '<h3>No. of tickets booked: ' . $noofpass . '</h3>';
		$message .= '<h3>PNR ' . $pnr . '</h3>';
		$message .= "</body></html>";
        

        // php mailer code starts
        $mail = new PHPMailer(true);
        $mail->IsSMTP(); // telling the class to use SMTP

        $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port = 465;                   // set the SMTP port for the GMAIL server

        $mail->Username = 'arjunsunny154@gmail.com';
        $mail->Password = 'ARJUNSUNNY123';

        $mail->SetFrom('arjunsunny154@gmail.com', 'Bluebliss Airlines');
        $mail->AddAddress($email);

        $mail->Subject = trim("Booking Information - Bluebliss Airlines");
        $mail->MsgHTML($message);
		try {
          $mail->send();
          $msg = "Booking Information has been sent to your email.";
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = $ex->getMessage();
          $msgType = "warning";
        }
?>
<?php if ($msg <> "") { ?>
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <p><?php echo $msg; ?></p>
  </div>
<?php } ?>
<html>
<head>
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
<link href="bootstrap/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<style>
#page51 { 
  background: url(images/flight3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.button {
  display: inline-block;
  padding: 35px 65px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #204060;
  border: none;
  border-radius: 15px;
  margin-left:50px;
}

.button:hover {background-color: #336699}

.button:active {
  background-color: blue;
  transform: translateY(4px);
}

</style>
</head>
<body>
<body id="page51">
<div>
<button onclick="window.location='index_new.php?id=<?php echo $_GET['id'] ?>'" class="button">Continue to Bluebliss</button>
</div>
</body>
</html>