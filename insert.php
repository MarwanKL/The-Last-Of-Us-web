<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TLOU</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="./imagenes/logo_navbar.png">
    <link rel="stylesheet" type="text/css" href="https://www.fonts.com/font/canada-type/press-gothic">
</head>

<body>
    <div class="vacio"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- BARRA NAVEGACION -->
                <header>
                    <nav id="navbar-example" class=" mt-3  navbar navbar-expand-lg position-absolute top-0 start-50 translate-middle-x">
                        <div class="container-fluid ">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="ps-3 nav-item">
                                        <a class="nav-link link-light" aria-current="page" href="#">Inicio</a>
                                    </li>
                                    <li class="ps-3 nav-item">
                                        <a class="nav-link link-light" href="#">Noticias</a>
                                    </li>
                                    <li class="ps-3 nav-item">
                                        <a class="nav-link link-light" aria-current="page" href="#">Saga</a>
                                    </li>
                                    <!-- LOGO -->
                                    <a class="ps-5 navbar-brand" href="https://thelastofus.es/" target="_blank"><img class="logo  " src="./imagenes/logo_navbar.png" alt=""></a>
                                    <li class="ps-3 nav-item">
                                        <a class="nav-link link-light" href="#">Tienda</a>
                                    </li>
                                    <li class="ps-3 nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle link-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Comunidad
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="ps-3 nav-item">
                                        <a class="nav-link link-light" aria-current="page" href="#">Contacto</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <!-- BOTONES LOGIN Y REGISTER -->
                <div class="position-absolute top-0 end-0 d-grid gap-2 d-md-flex justify-content-md-end mt-4 pe-5 me-5 ">
                    <!-- Button trigger modal login -->
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        LOGIN
                    </button>
                    <!--LOGIN MODAL -->
                    <div class="modal prueba fade mt-5 pt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content fondomodal border ">
                                <div class="modal-header border-0 pt-4 d-block mx-auto">
                                    <img class="logo1" src="./imagenes/logo_navbar.png" alt="">
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <!-- EMAIL -->
                                        <div class="mb-3 text-light">
                                            <label for="exampleInputEmail1 email" class="form-label"></label>
                                            <br>
                                            <input placeholder="Correo electrónico" type="text" class="input" required="">
                                        </div>
                                        <!-- PASSWORD -->
                                        <div class="mb-3 text-light">
                                            <label for="exampleInputPassword1" class="form-label"></label>
                                            <input placeholder="Contraseña" type="password" class="input" id="exampleInputPassword1">
                                        </div>
                                        <!-- CHECKBOX -->
                                        <div class="ms-3 mt-5">
                                            <label class="container1">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <!-- BOTÓN ENTRAR -->
                                        <div class="pt-4">
                                            <button class="submit d-block mx-auto">Entrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-absolute top-0 end-0 d-grid gap-2 d-md-flex justify-content-md-end mt-4 ps-5 me-2">
                    <!-- Button trigger modal login -->
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        Register
                    </button>
                    <!--REGISTER MODAL -->
                    <div class="modal prueba fade mt-5 pt-5" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content fondomodal border ">
                                <div class="modal-header border-0 pt-4 d-block mx-auto">
                                    <img class="logo1" src="./imagenes/logo_navbar.png" alt="">
                                </div>
                                <div class="modal-body">
                                    <form action="process.php" method="POST">
                                        <!-- NOMBRE -->
                                        <div class="mb-3 text-light">
                                            <label for="name" class="form-label"></label>
                                            <br>
                                            <input placeholder="Nombre" type="text" class="input" name="nombre" required="">
                                        </div>
                                        <!-- APELLIDOS -->
                                        <div class="mb-3 text-light">
                                            <label for="exampleInputPassword1" class="form-label"></label>
                                            <input placeholder="Apellidos" type="text" class="input" name="apellidos" id="second-name" required>
                                        </div>
                                        <!-- EMAIL -->
                                        <div class="mb-3 text-light">
                                            <label for="exampleInputEmail1 email" class="form-label"></label>
                                            <br>
                                            <input placeholder="Correo electrónico" type="text" class="input" name="email" required="">
                                        </div>
                                        <!-- PASSWORD -->
                                        <div class="mb-3 text-light">
                                            <label for="exampleInputPassword1" class="form-label"></label>
                                            <input placeholder="Contraseña" type="password" class="input" id="exampleInputPassword1" name="contraseña" required>
                                        </div>
                                        <!-- BOTÓN ENTRAR -->
                                        <div class="pt-4">
                                            <input type="submit" name="save" placeholder="Registrar" class="submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-5 pt-5">
        </div>
    </div>
    <section>
        <div class="tlou">
            <img src="imagenes/tloulogo.png" alt="">
        </div>
        <!-- CAROUSEL -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <div class="zombie1">
                        <button type="button" class="boton border-0 d-block mx-auto mt-5 pt-5" data-bs-toggle="modal" data-bs-target="#exampleModal0">
                            <img src="./imagenes/zombie2.png" class="d-block mx-auto w-100" alt="./imagenes/zombie4.png">
                        </button>
                        <div class="modal fade" id="exampleModal0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content infectado">
                                    <div class="modal-header ms-5 ps-5 border-0">
                                        <h5 class="d-block mx-auto ms-5 ps-5">CORREDOR</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ">
                                        <p>El hongo conocido como Cordyceps unilateralis, crece mientras el huésped aún está vivo. Empieza dentro de los dos días posteriores a la infección, en donde el huésped pierde su función cerebral superior y su humanidad, siendo muy agresivo e incapaz de razonar o pensar de forma racional.</p>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="zombie1 ">
                        <button type="button" class="boton border-0 d-block mx-auto mt-5 pt-5" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <img src="./imagenes/zombie5.png" class="d-block mx-auto w-100" alt="./imagenes/zombie4.png">
                        </button>
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="zombie1 ">
                        <button type="button" class="boton border-0 d-block mx-auto mt-5 pt-5" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            <img src="./imagenes/zombie7.png" class="d-block mx-auto w-100" alt="./imagenes/zombie4.png">
                        </button>
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel3">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="video">
        
        <video controls autoplay muted preload loop src="video/trailer.mp4"></video>
                   
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>