<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome Customer
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
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
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="about.html"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<?php
			echo "<h2>Welcome ".$_SESSION['login_user']."</h2>";
			require_once('Database Connection file/mysqli_connect.php');
			$query="SELECT count(*),frequent_flier_no,mileage FROM Frequent_Flier_Details WHERE customer_id=?";
			$stmt=mysqli_prepare($dbc,$query);
			mysqli_stmt_bind_param($stmt,"s",$_SESSION['login_user']);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt,$cnt,$frequent_flier_no,$mileage);
			mysqli_stmt_fetch($stmt);
			if($cnt==1)
			{
				echo "<h4 style='padding-left: 20px;'>Frequent Flier No.: ".$frequent_flier_no."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Mileage: ".$mileage." points</h4><br>";
			}
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
		?>
		<table cellpadding="5">
			<tr>
				<td class="admin_func"><a href="book_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> Book Flight Tickets</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> View Booked Flight Tickets</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="cancel_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> Cancel Booked Flight Tickets</a>
				</td>
			</tr>
		</table>
	</body>
</html>