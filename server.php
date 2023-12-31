<?php
session_start();

$username = "";
$email = "";

$errors = array();

// Connect to db
$db = mysqli_connect('localhost','root','','Zapaci') or die("could not connect to db");

// Info
$connect = mysqli_connect("127.0.0.1",'root',"","Zapaci");
if(isset($_SESSION['Phone'])){
	$query = "SELECT * FROM Users WHERE Phone='{$_SESSION['Phone']}'";
	$result = mysqli_query($connect, $query);
	$stroka = $result->fetch_assoc();
}

// Add product
if(isset($_POST['addProduct'])){
	$dir = "/src/assets/products/";
	$corp = mysqli_real_escape_string($db, $_POST['corp']);
	$product = mysqli_real_escape_string($db, $_POST['product']);
	$life = mysqli_real_escape_string($db, $_POST['life']);
	$count1 = mysqli_real_escape_string($db, $_POST['count1']);
	$count2 = mysqli_real_escape_string($db, $_POST['count2']);
	$cal = mysqli_real_escape_string($db, $_POST['cal']);
	$destination = $dir . basename($_FILES['image']['name']);
	$tmp_name = $_FILES["image"]["tmp_name"];
	$name = $_FILES['image']['tmp_name'];
	$upload = move_uploaded_file($name, $destination);

	// Form validation
	if($count1 == null and $count2 == null){
		array_push($errors, "Passwords do not match");
	} elseif($count1 != null){
		$check = 1;
	} elseif($count2 != null) {
		$check = 2;
	} else {
		$check = 1;
	}

	// Register user if no error
	if(count($errors)==0){
		if($check == 1) {
			$query = "INSERT INTO product (Life,Count,Product,Corp,Cal,Image) VALUES ('$life','$count1','$product','$corp','$cal','$destination')";
		} else {
			$query = "INSERT INTO product (Life,Count,Product,Corp,Cal,Image) VALUES ('$life','$count2','$product','$corp','$cal','$destination')";
		}
		

		mysqli_query($db,$query);

		// Transfer to index.php
		header("location: list.php");
	}
}

// Register user
if(isset($_POST['reg_user'])){
	$name = mysqli_real_escape_string($db, $_POST['Name']);
	$surname = mysqli_real_escape_string($db, $_POST['Surname']);
	$patronymic = mysqli_real_escape_string($db, $_POST['Patronymic']);
	$corp = mysqli_real_escape_string($db, $_POST['Corp']);
	$phone = mysqli_real_escape_string($db, $_POST['Phone']);
	$pass1 = mysqli_real_escape_string($db, $_POST['Pass1']);
	$pass2 = mysqli_real_escape_string($db, $_POST['Pass2']);

	// Form validation
	if($pass1 != $pass2){array_push($errors, "Passwords do not match");};

	// Check db for existing user with same username

	$user_check_query = "SELECT * FROM Users WHERE Corp = '$corp' or Phone = '$phone' LIMIT 1";

	$results = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if($user) {
		if($user['Corp'] === $name){array_push($errors, "Corp already exists");}
		if($user['Phone'] === $phone){array_push($errors, "This phone already has a registered");}
	}

	// Register user if no error
	if(count($errors)==0){

		$pass = md5($pass1);
		print $password;
		$query = "INSERT INTO Users (Name,Surname,Patronymic,Phone,Pass,Corp) VALUES ('$name','$surname','$patronymic','$phone','$pass1','$corp')";

		mysqli_query($db,$query);
		$_SESSION['Phone'] = $phone;
		$_SESSION['success'] = "You are now logged in";

		// Transfer to index.php
		header("location: index.php");
	}
}

// Login user
if(isset($_POST['login_user'])){
	$phone = mysqli_real_escape_string($db, $_POST['Phone']);
	$pass = mysqli_real_escape_string($db, $_POST['Pass']);

	if(empty($phone)){
		array_push($errors, "Username is required");
	}
	if(empty($pass)){
		array_push($errors, "Password is required");
	}

	if(count($errors) == 0) {
		$password = md5($pass);
		$query = "SELECT * FROM Users WHERE Phone = '$phone' AND Pass = '$pass' ";
		$result = mysqli_query($db, $query);

		if(mysqli_num_rows($result)){
			$_SESSION['Phone'] = $phone;
			header("location: index.php");
		} else {
			array_push($errors, "Wrong username/password combination. Please try again.");
			header("location: auth.php?log=2");
		}
	}
}
?>