<?php
if(isset($_POST["Send Now"])){
	
	$msg=$_POST["message"];
	$mob=$_POST["mobile"];
$username;///Your Username
$password = "9e6b792a";///Your Password
$mobile = $mob;///Recepient Mobile Number
$sender = "SenderID";
$message = $msg;

$username = "923165079521";///Your Username
$password = "9e6b792a";///Your Password
$mobile = "923165079521";///Recepient Mobile Number
$sender = "SenderID";
$message = "Test SMS From abdul saboor";

////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode("923165079521")."&message=".urlencode($message)."";
$url = "https://sendpk.com/api/sms.php?username=$username&password=$password";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/
echo $result; 
}
?>

<html>
 <head>
 <title>Contact Us</title>
 <style>
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 357px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
 </head>
<body>
<img class="logo" src="images/logo_1.png"/> 
		<h1 id="title">
		Ariana Afghan Airlines
		</h1>
		<div>
			<ul>
				<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="about.html"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="login.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
<form action="contact.php" method="post">
<table cellpadding='10'>
				<strong>Sending message to costomers</strong>
	
				<tr>
					<td>Enter your phone no.</td>
					<td><input type="number" name="mobile" placeholder="mobile"><br><br></td>
				</tr>
				<tr>
					<td>Enter your message</td>
					<td><textarea name="msg" placeholder="message"></textarea><br><br></td>
				</tr>
			</table>
			<input type="submit" value="Send Now">
	</body>
	</html>