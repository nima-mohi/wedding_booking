<!DOCTYPE html>
<html>
<head>
<title>Made In Heaven-Final</title>
<link rel="stylesheet" href="style3.css">
</head>
<body>
<h1>Thank You For Considering Made In Heaven,We promise to fulfill your dream wedding</h1>
<h2>Your Preferences are detailed below:</h2>
<b>First Name : </b> <?php echo $_POST["fname"]; ?><br>
<b>Last Name : </b> <?php echo $_POST["lname"]; ?><br>
<b>Email-Id : </b> <?php echo $_POST["email"]; ?><br>
<b>Mobile No. : </b> <?php echo $_POST["phn"]; ?><br>
<b>Wedding Date : </b> <?php echo $_POST["weddate"]; ?><br>
<b>Address : </b> <?php echo $_POST["place"]; ?><br>
<b>State : </b> <?php echo $_POST["state"]; ?><br>
<b>District : </b> <?php echo $_POST["dist"]; ?><br>
<b>PinCode : </b> <?php echo $_POST["pin"]; ?><br> 
<?php
echo "<b>Your Type Of Wedding: </b>";
if(isset($_POST["type"])){
	$type = $_POST['type'];
	echo "" .$type."/-";
	if($type=="50000"){
		echo "<br><b>Type : </b>Destination Wedding";
	}
	elseif($type=="20000"){
		echo "<br><b>Type : </b>Home Wedding";
	}
}
   ?><br>
<b>Number Of Guests : </b> <?php echo $_POST["no"]; ?><br>
<br>
<b>Requirements : </b>
<?php 
	$req = array("Caterer : 50000/-","Baker : 5000/-","Photographer : 4000/-","Music : 25000/-","Flowers : 5000/-","Dress : 20000/-","Makeup : 20000/-","Video : 12000/-","Decos : 6000/-","Transport : 7000/-");
	if(isset($_POST["s1"])){
		echo "<br>".$req[0];
	}
	if(isset($_POST["s2"])){
		echo "<br>".$req[1];
	}
        if(isset($_POST["s3"])){
		echo "<br>".$req[2];
	}
        if(isset($_POST["s4"])){
		echo "<br>".$req[3];
	}
        if(isset($_POST["s5"])){
		echo "<br>".$req[4];
	}
	if(isset($_POST["s6"])){
		echo "<br>".$req[5];
	}
        if(isset($_POST["s7"])){
		echo "<br>".$req[6];
	}
        if(isset($_POST["s8"])){
		echo "<br>".$req[7];
	}
        if(isset($_POST["s9"])){
		echo "<br>".$req[8];
	}
        if(isset($_POST["s10"])){
		echo "<br>".$req[9];
	}
?>
<br><br>
<b>Approx.rate </b><br>
<label>Rs:</label> <label><?php echo $_POST["total"]."/-"; ?></label><br>
</body>
</html>
