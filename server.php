<?php
ob_start();
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
$db = mysqli_connect('localhost', 'id14357325_santiagoruiz3', 'H2BpXpof#ebPonmU', 'id14357325_users');
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
  //if (empty($natlang)) { array_push($errors, "Your native language detrmines your pairings too"); }
  //if (empty($targlang)) { array_push($errors, "What language do you want to learn, we wil connect you to your best teachers"); }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR mail='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
        array_push($errors, "Choose another name original to you");
        $message = "El usuario elegido no esta disponible, elige uno nuevo";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if ($user['mail'] === $email) {
        array_push($errors, "you already have an account with this email");
        $message = "Ya existe una cuenta con este correo electrónico, elige uno nuevo";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    
    if ($password_1 != $password_2){
        array_push($errors, "passwords no match");
        $message = "Las contraseñas no coinciden";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    
    //El problema del registro está en la siguiente linea
  	$query = "INSERT INTO users (username, mail, name, lastname, password, region, natlang, targlang,state) 
          VALUES('$username', '$email', '$name', '$lastname', '$password', '$region', '$natlang', '$targlang','1')";
    
    // Perform a query, check for error
    if (!mysqli_query($db,$query)) {
      echo("Error description: " . mysqli_error($db));
    }
    else{
        header( "Location: https://idioms-videocall.000webhostapp.com/lang_info/ita.html" );
        ob_end_flush();
    }
    
        
    
    setcookie("user_name", $username, time() + 3600, '/');
    setcookie("targ_lang", $targlang, time() + 3600, '/');
    setcookie("nat_lang", $natlang, time() + 3600, '/');
    $_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    $lenguaje = "SELECT * FROM users WHERE natlang='$targlang' AND targlang='$natlang' ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($db, $lenguaje);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
      while($row = mysqli_fetch_assoc($result)){
        header( "Location: https://idioms-call.herokuapp.com/" );
        ob_end_flush();
      }
    }
    else{
        header("Location: loading_screen.php");
        ob_end_flush();
    }

  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password_1']);
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        $result_check = mysqli_num_rows($results);
        


        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          
          $query = "UPDATE users SET state='1' WHERE username='$username'";
          mysqli_query($db, $query);

          while($row1 = mysqli_fetch_assoc($results)){
            echo $row1['targlang'];
            $targlang = $row1['targlang'];
            $natlang = $row1['natlang'];

          }
          setcookie("user_name", $username, time() + 3600, '/');
          setcookie("targ_lang", $targlang, time() + 3600, '/');
          setcookie("nat_lang", $natlang, time() + 3600, '/');

           //Se hace el matchmaking y se conectan ambos al localhost, de lo contrario no se hace esta conexion
          $lenguaje = "SELECT * FROM users WHERE natlang='$targlang' AND targlang='$natlang' ORDER BY RAND() LIMIT 1";
          $result = mysqli_query($db, $lenguaje);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
              echo $row['username'];
              echo $row['id'];
              header( "Location: https://idioms-call.herokuapp.com/" );
              ob_end_flush();
              break;
            }
          }
          else{
            
                header("Location: loading_screen.php");
                 ob_end_flush();
          }
            //Opcion extra es que al oprimir un boton se vuelva a buscar el usurio de manera aleatoria para conectar
          
            //header('location: index.php');
        }
        else {
            array_push($errors, "Wrong username/password combination");
            $message = "Usuario o contraseña erroneos";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
  }
  
  ?>