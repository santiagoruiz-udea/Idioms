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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/chosen.jquery.js"></script>
        <script src="js/ImageSelect.jquery.js"></script>

    </head>

<body>
    <nav>
        <div class="row align-items-center justify-content-around">
            <div class="col-lg-2">
                <a href="index.html" class="navbar-brand" style="margin-left: 10px;"> <img src="icons/logo.png"> </a>
            </div>

            <div class="offset-lg-7 col-lg-1">
                <button class="btn btn-outline w3-round-xxlarge" id="signin"  type="button" data-toggle="modal" data-target="#modal_signin" ><b>Regístrate</b></button>
            </div>

            <div class="col-lg-2">
                <button class="btn btn-outline w3-round-xxlarge" id="login" style="margin-left: 50px;" type="button" data-toggle="modal" data-target="#modal_login" ><b>Inicia sesion</b></button>
            </div>
        </div>
    </nav>
    
    <div class="header-title1">
        <h1>Practica tus idiomas favoritos con personas nativas </h1>
    </div>

    <div class="row flags">
        <div class="offset-lg-1 col-lg-1 align-items-center">
            <img src="img/Español.png" alt="">
            <p>Español</p>
        </div>

        <div class="col-lg-1">
            <img src="img/Ingles.png" alt="">
            <p>Ingles</p>
        </div>

        <div class="col-lg-1">
            <img src="img/Portugues.png" alt="">
            <p>Portugues</p>
        </div>
        
        <div class="col-lg-1">
            <img src="img/Aleman.png" alt="">
            <p>Aleman</p>
        </div>
        
        <div class="col-lg-1">
            <img src="img/Frances.png" alt="">
            <p>Francés</p>
        </div>

        <div class="col-lg-1">
            <img src="img/Italiano.png" alt="">
            <p>Italiano</p>
        </div>

        <div class="col-lg-1">
            <img src="img/Koreano.png" alt="">
            <p>Koreano</p>
        </div>

        <div class="col-lg-1">
            <img src="img/Arabe.png" alt="">
            <p>Árabe</p>
        </div>
        
        <div class="col-lg-1">
            <img src="img/Chino.png" alt="">
            <p>Chino</p>
        </div>

        <div class="col-lg-1">
            <img src="img/Ruso.png" alt="">
            <p>Ruso</p>
        </div>
    </div>

    <div id="footer-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                 <a href="products.html"> <img src="img/carrusel1.jpg"></a>
                 <p>Aprovecha tu tiempo durante el confinamiento</p>
            </div>
            <div class="carousel-item"> <a href="products.html"><img src="img/carrusel2.jpg" ></a></div>
            <div class="carousel-item"> <a href="products.html"><img src="img/carrusel3.jpg" ></a></div>
        </div>

        <a href="#footer-carousel" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
        <a href="#footer-carousel" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
        
        <ul class="carousel-indicators">
            <li data-target="#footer-carousel" class="active" data-slide-to=0></li>
            <li data-target="#footer-carousel" data-slide-to=1></li>
            <li data-target="#footer-carousel" data-slide-to=2></li>
        </ul>
    </div>

    <a href="index.html" class="navbar-brand"> <img src="icons/logo.png" style="width: 100%; margin-left: 350px;"> </a>

    <div class="header-title2">
        <h1>Conoce amigos alrededor de todo el mundo</h1>
        <p>Con <b>idioms</b> podrás hacer amigos extranjeros, compartir tu cultura y mejorar tus habilidades conversacionales en los idiomas que estas practicando</p>
        <div class="row align-items-center justify-content-around">
            <div class="col-lg-1">
                <button class="btn btn-outline w3-round-xxlarge next" id="singin"  type="button" data-toggle="modal" data-target="#modal_signin" ><b>Regístrate</b></button>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal_signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <a href="index.html" class="navbar-brand"> <img src="icons/logo.png" style="margin-left: 130px;"> </a>

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel" style="font-size: 30px; color: black;"> <b>Regístrate</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body">
                    <form method="post" action="index.php">
                    <?php include('errors.php'); ?>
                        <div class="form-group">
                            <label for="name" class="col-form-label"> <b>Nombre</b></label>
                            <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-form-label"><b>Apellido</b></label>
                            <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" required>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-form-label"> <b>Nombre de usuario</b></label>
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-form-label"> <b>Pais</b></label>
                            <input type="text" class="form-control" id="country" placeholder="Pais" name="region" required>
                        </div>

                        <div class="form-group">
                            <label for="e-mail" class="col-form-label"> <b>Correo Electrónico</b></label>
                            <input type="email" class="form-control" id="e-mail" placeholder="e-mail" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="col-form-label"><b>Contraseña</b></label>
                            <input type="password" class="form-control" id="password" minength="6" placeholder="6 caracteres como mínimo" name="password_1" required>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label"><b>Vuelve a escribir la contraseña</b></label>
                            <input type="password" class="form-control" id="password_2" minength="6" placeholder="Ingrese nuevamente su contraseña" name="password_2" required>
                        </div>
                        <div class="form-group">  
                            <label for="targlang" class="col-form-label"><b>Elige el idioma que quieres aprender</b></label>
                            <div class="container">
                                <select class="my-select" name="targlang">
                                    <option data-img-src="img/Español.png" value="esp" selected>Español</option>
                                    <option data-img-src="img/Ingles.png" value="eng"> Inglés</option>
                                    <option data-img-src="img/Portugues.png" value="por"> Portugués</option>
                                    <option data-img-src="img/Aleman.png" value="ger"> Alemán</option>
                                    <option data-img-src="img/Frances.png" value="fra"> Francés</option>
                                    <option data-img-src="img/Italiano.png" value="ita"> Italiano</option>
                                    <option data-img-src="img/Koreano.png" value="kor"> Koreano</option>
                                    <option data-img-src="img/Arabe.png" value="ara"> Árabe</option>
                                    <option data-img-src="img/Chino.png" value="chn"> Chino</option>
                                    <option data-img-src="img/Ruso.png" value="rus"> Ruso </option>
                                </select>
                            </div>                   
                        </div>
                        <div class="form-group">  
                            <label for="natlang" class="col-form-label"><b>Elige tu idioma nativo</b></label>
                            <div class="container">
                                <select class="my-select" name="natlang">
                                    <option data-img-src="img/Español.png" value="esp" selected>Español</option>
                                    <option data-img-src="img/Ingles.png" value="eng"> Inglés</option>
                                    <option data-img-src="img/Portugues.png" value="por"> Portugués</option>
                                    <option data-img-src="img/Aleman.png" value="ger"> Alemán</option>
                                    <option data-img-src="img/Frances.png" value="fra"> Francés</option>
                                    <option data-img-src="img/Italiano.png" value="ita"> Italiano</option>
                                    <option data-img-src="img/Koreano.png" value="kor"> Koreano</option>
                                    <option data-img-src="img/Arabe.png" value="ara"> Árabe</option>
                                    <option data-img-src="img/Chino.png" value="chn"> Chino</option>
                                    <option data-img-src="img/Ruso.png" value="rus"> Ruso </option>
                                </select>
                            </div>                   
                        </div>

                        <div class="modal-footer justify-content-center" >
                            <button class="btn btn-outline w3-round-xxlarge next" type="submit" data-toggle="modal" data-target="#modal_lang_p" name="reg_user"> <b>Siguiente</b></button>
                            <p>Al continuar, aceptas las <a href="#">Condiciones de uso<a> y el <a href="#">Aviso de privacidad</a> de Shop Online.</p>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <a href="index.html" class="navbar-brand"> <img src="icons/logo.png" style="margin-left: 130px;"> </a>

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px; color: black;"> <b>Inicia sesión</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body">
                    <form method="post" >
                        <div class="form-group">
                            <label for="username" class="col-form-label"> <b>Nombre de usuario</b></label>
                            <input type="text" class="form-control" id="e-mail" placeholder="Nombre de usuario" name="username" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="col-form-label"><b>Contraseña</b></label>
                            <input type="password" class="form-control" id="password" minength="10" placeholder="6 caracteres como mínimo" name="password_1" required>
                        </div>

                        <div class="form-group row">
                            <label> <input type="checkbox" name="remember" style="margin-left: 10px;" checked> Recordar mis datos</label>
                        </div>
                        <div class="modal-footer justify-content-center" >
                            <button class="btn btn-outline w3-round-xxlarge" type="submit" name="login_user"> <b>Iniciar sesión</b></button>
                    
                            <div id="accordion">
                                <a href="#" data-toggle="collapse" data-target="#collapse1" style="margin-right: 328px;"> ¿Necesitas ayuda?</a>
                                <div class="collapse" id="collapse1">
                                    <ul style="list-style:disc;">
                                        <li> <a href="#modal_rest_pass" data-toggle="modal" data-target="#modal_rest_pass">¿Olvidaste tu contraseña?</a></li>
                                        <li> <a href="#">Otros problemas con el inicio de sesión</a></li>   
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal_rest_pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <a href="index.html" class="navbar-brand"> <img src="icons/logo.png" style="margin-left: 130px;"> </a>

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 30px; color: black;"> <b>Restaurar contraseña</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body">
                    <p style="text-align: center;">No te preocupes, ingresa tu correo y te enviaremos un link para que restaures tu contraseña</p>

                    <form method="post">
                        <div class="form-group">
                            <label for="e-mail" class="col-form-label"> <b>Ingresa tu correo electrónico</b></label>
                            <input type="email" class="form-control" id="e-mail" placeholder="e-mail o nombre de usuario" required>
                        </div>
                </div>

                <div class="modal-footer justify-content-center">
                    <button class="btn btn-outline w3-round-xxlarge next" type="submit" data-toggle="modal" data-target="#modal_lang_n"> <b>Enviar</b></button>
                </div>
            
            </div>
        </div>
    </div>
    
    <div id="footer" class="container-fluid" >
        <div class="row" >
            <div class="col-lg-6 col-md-12 col-sm-12" style="background-color: #202020;">
                <footer class="footer" >
                    <div class="row" >
                        <div class="col-md-6">
                            <h5 class="text-uppercase" style="color: #f0eeee;"> Conoce más </h5>
                            <ul class="list-unstyled"><br>
                                <li > <a>Acerca de nosotros</a> </li><br>
                                <li > <a>Preguntas frecuentes</a> </li><br>
                                <li > <a>Contactanos</a> </li>
                            </ul>
                        </div>

                        <!-- Grid column -->
                        <div class="col-md-6 ">
                            <h6 class="text-uppercase mb-0 text-center" style="color: #f0eeee;">¡Síguenos!</h6>

                            <!-- Facebook -->
                            <a><i> <img src="icons/fb.png" style="width: 15%;"></i></a>
                            
                            <!--Instagram-->
                            <a> <i><img src="icons/ig.png" style="width: 15%;"> </i></a>

                            <!--WhatsApp-->
                            <a> <i> <img src="icons/wp.png" style="width: 15%;"></i> </a>

                            <ul class="list-unstyled"><br>
                                <li > <a>santiago.ruiz3@udea.edu.co</a> </li>
                                <li > +57 323 5043165 </li><br>
                                <li > <a>jgonzalez.h@udea.edu.co</a> </li>
                                <li > +57 323 5043165 </li><br>
                                <li > Medellín, Colombia </li>
                                <li > Universidad de Antioquia </li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
            
            <div class="col-lg-6 col-md-12" style="background-color: #202020;" >
                <footer class="footer" >
                    <h5 class="text-uppercase font-weight-bold">Escríbenos</h5><hr>

                    <form >
                        <fieldset class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electrónico">
                        </fieldset>
                        <fieldset class="form-group">
                            <textarea class="form-control" id="exampleMessage" placeholder="Mensaje"></textarea>
                        </fieldset>

                        <div class="form-gorup row">
                            <button class="btn btn-primary"> Enviar</button>
                        </div>
                    </form>
                </footer>
            </div>
        </div>
    </div> 
</body>
</html>


