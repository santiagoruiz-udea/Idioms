<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$name     = "";
$lastname = "";
$region   = "";
$natlang  = "";
$targlang = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'prueba_register');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $region = mysqli_real_escape_string($db, $_POST['region']);
  $natlang = mysqli_real_escape_string($db, $_POST['natlang']);
  $targlang = mysqli_real_escape_string($db, $_POST['targlang']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Enter your username to indentify you"); }
  if (empty($email)) { array_push($errors, "Enter your email to verify your account and keep you updated"); }
  if (empty($password_1)) { array_push($errors, "You must enter your password it is your key"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Review your password, both passwords do not match");
  }
  if (empty($name)) { array_push($errors, "We want to know your first name"); }
  if (empty($lastname)) { array_push($errors, "We want to know your last name"); }
  if (empty($region)) { array_push($errors, "Please enter your region so we can connect you to the best teachers"); }
  if (empty($natlang)) { array_push($errors, "Your native language detrmines your pairings too"); }
  if (empty($targlang)) { array_push($errors, "What language do you want to learn, we wil connect you to your best teachers"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Choose another name original to you");
    }

    if ($user['email'] === $email) {
      array_push($errors, "you already have an account with this email");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    //El problema del registro está en la siguiente linea
  	$query = "INSERT INTO users (username, mail, name, lastname, password, region, natlang, targlang ) 
          VALUES('$username', '$email', '$name', '$lastname', '$password', '$region', '$natlang', '$targlang')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "You forgot your username");
    }
    if (empty($password)) {
        array_push($errors, "You forgot to type your password");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        print($username);
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>