<?php include('server.php') ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" >
        <script type="text/javascript" src="js/modals.js" charset="UTF-8"></script></head> 

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/chosen.css">
        <link rel="stylesheet" href="css/ImageSelect.css">
        <link rel="stylesheet" href="css/load_style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="../js/chosen.jquery.js"></script>
        <script src="../js/ImageSelect.jquery.js"></script>

    </head>

<body>

    
     <?php   
        echo("<nav>
            <div class='row align-items-center justify-content-around'>
                <div class='col-lg-2'>
                    <a href='https://idioms-videocall.000webhostapp.com/' class='navbar-brand' style='margin-left: -50px; margin-top:200px;'> <img src='img/logo.png' style='width: 600px; margin-left: -150px;'> </a>
                </div>
            </div>
        </nav>
    
        <div class='header-title1'>
            <h3>Estamos intentando conectarte con un amigo, espera un momento...</h3>
        </div>");
    ?>
    
    <?php   
        
        $db = mysqli_connect('localhost', 'id14357325_santiagoruiz3', 'H2BpXpof#ebPonmU', 'id14357325_users');
        $username = $_COOKIE["user_name"];
        $natlang = $_COOKIE["nat_lang"];
        $targlang = $_COOKIE["targ_lang"];
        if(count($_COOKIE) > 0) {
          echo "Cookies are enabled.";
        } 
        else {
          echo "Cookies are disabled.";
        }
        //$flag = 0;
        
        //while($flag < 10){
            //sleep(1);
            //echo('hello');
            //echo($username);
            //echo($natlang);
            //echo($targlang);
            //$flag = $flag + 1;
        
            //$lenguaje = "SELECT * FROM users WHERE natlang='$targlang' AND targlang='$natlang' ORDER BY RAND LIMIT 1";
            //$result = mysqli_query($db, $lenguaje);
            //$resultCheck = mysqli_num_rows($result);
            //if($resultCheck > 0){
              //  header( "Location: https://idioms-videocall.000webhostapp.com/lang_info/ita.html" );
                //ob_end_flush();
                //$flag = $flag + 1;
            //}
          //}


?>
    




    

    
     
</body>
</html>
