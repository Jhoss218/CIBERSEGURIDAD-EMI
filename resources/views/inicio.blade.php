<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>EMI 2021</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;800;900&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <nav class="navbar sticky-top  navbar-expand-xl color-nav">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img src="imagenes/logo.png" alt="" class="img-fluid" width="300px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-espacio">
                <a class="nav-item nav-link active" aria-current="page" href="#informacion"><h5>INFORMACIÓN</h5> </a>
                <a class="nav-item nav-link" href="#colforpaper"><h5>COLFORPAPER</h5></a>
                <a class="nav-item nav-link" href="#conferencista"><h5>CONFERENCISTAS</h5></a>
                <a class="nav-item nav-link" href="#agenda"><h5>AGENDA</h5></a>
                <a class="nav-item nav-link" href="#patrocinador"><h5>AUSPICIAN</h5></a>
                
                <a class="nav-item nav-link" href="#contacto"><h5>CONTACTO</h5></a>
                <li><a href="index.php #formulario"><input type="button" class="boton1" data-bs-toggle="modal" data-bs-target="#formulario" value="INSCRIBIRSE"></a></li>
            </ul>
        </div>
      </div>
    </nav>
    <main>
        <section id="portada" name="portada">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="imagenes/portada/portada2.jpeg" class="d-block w-100" height="500px" alt="...">
                        <div class="carousel-caption d-md-block">
                            
                            <div class="row align-items-center justify-content-around">
                                <div class="col-lg-5">
                                    <img src="imagenes/portada/logo.png" class="img-fluid" alt="">
                                </div>

                                <div class="col-lg-6 col-xxl-7 align-items-center">  
                                <div class="row align-items-center text-center" style="margin-bottom:8px">
                                <div class="col-2">
                                <img src="imagenes/banderas/bbolivia.png" height="10px" class="img-fluid" alt="">
                                </div>
                                <div class="col-2">
                                <img src="imagenes/banderas/bperu.png" height="10px" class="img-fluid" alt="">
                                </div>
                                
                            </div>
                                    <h4 class="izquierda"><strong>QUEDAN:</strong></h4>
                                    <hr size="10px" style="background-color: #ffff;"> 
                                    <div id="cuenta"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/portada/fondo11.jpeg" class="d-block w-100" height="500px" alt="...">
                        <div class="carousel-caption d-md-block">
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/portada/fondo12.jpeg" class="d-block w-100" height="500px" alt="...">
                        <div class="carousel-caption d-md-block">
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/portada/fondo13.jpeg" class="d-block w-100" height="500px" alt="...">
                        <div class="carousel-caption d-md-block">
                            
                        </div>
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section  id="informacion" name="informacion">

        </section>
        <section id="contenido" name="contenido">
            <div class="contenedorT">
                <div class="container text-center">
                    <h1 class="titulo"><strong>ÁREA TÉCNICA</strong></h1>
                    <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body">
                                        <img src="imagenes/contenido/contenido3.jpg" alt="" width="165" height="165" style="margin-bottom:10%" class="img-fluid rounded-circle">
                                        <br>
                                        <h3><strong>Seguridad en IoT</strong></h3>
                                      </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body text-center">
                                        <img src="imagenes/contenido/CONTENIDO5.jpg" alt="" width="165" height="165" style="margin-bottom:10%" class="img-fluid rounded-circle">
                                        <br>
                                        <h3><strong>Ciberseguridad</strong></h3>
                                        </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body">
                                        <img src="imagenes/contenido/contenido2.jpg" alt="" width="165" height="165" style="margin-bottom:10%" class="img-fluid rounded-circle">
                                        <h3><strong>Ciberdefensa</strong></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body">
                                        <img src="imagenes/contenido/contenido4.jpg" alt="" width="165" height="165"  style="margin-bottom:10%" class="img-fluid rounded-circle">
                                        <h3><strong>Seguridad y Networking</strong></h3>
                                      </div>
                                </div>
                            </div>
                        </div>    
                        <h1 class="titulo"><strong>ÁREA SOCIAL</strong></h1>
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body">
                                        <img src="imagenes/contenido/contenido6.png" alt="" width="165" height="165" style="margin-bottom:10%" class="img-fluid rounded-circle">
                                        <h3><strong>Libertad de Expresión</strong></h3>
                                     </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body">
                                        <img src="imagenes/contenido/contenido7.jpg" alt="" width="165" height="165"style="margin-bottom:10%"  class="img-fluid rounded-circle">
                                        <h3><strong>Menores y Redes Sociales</strong></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body">
                                        <img src="imagenes/contenido/contenido1.jpg" alt="" width="165" height="165" style="margin-bottom:10%" class="img-fluid rounded-circle">
                                        <h3><strong>Género y Ciberseguridad</strong></h3>
                                     </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body">
                                        <img src="imagenes/contenido/contenido8.jpg" alt="" width="165" height="165" class="img-fluid rounded-circle" id="img-contenido">
                                        <h4><strong>Amenazas en la Seguridad de Datos Personales</strong></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="titulo"><strong>ÁREA PRÁCTICA</strong></h1>
                        <div class="row justify-content-center">
                            
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body">
                                        <img src="imagenes/contenido/master.jpg" alt="" width="165" height="165" style="margin-bottom:10%" class="img-fluid rounded-circle">
                                        <h3><strong>Master Ciberseguridad</strong></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body">
                                        <img src="imagenes/contenido/senior.jpeg" alt="" width="165" height="165" style="margin-bottom:10%" class="img-fluid rounded-circle">
                                        <h3><strong>Senior Ciberseguridad</strong></h3>
                                           
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 centrado-con">
                                <div class="card" id="contenido-hover">
                                    <div class="card-body">
                                        <img src="imagenes/contenido/junior.jpg" alt="" width="165" height="165" style="margin-bottom:10%" class="img-fluid rounded-circle" id="img-contenido">
                                        <h3><strong>Junior Siberseguridad</strong></h3>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                          
                     
        </section>
        <section id="colforpaper" name="colforpaper">
            <div class="contenedorT">
                <div class="container">
                    <h1 class="subtitulo text-center"><strong>COLFORPAPER</strong></h1>

                </div>
            </div>
        </section>
        <section id="conferencista" name="conferencista">
            <div class="contenedorT">
                <div class="container">
                    <h1 class="subtitulo text-center"><strong>CONFERENCISTAS</strong></h1>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="imagenes/conferencista/conferencista1.png" alt="" class="imgP">
                                    <div class="row align-items-end">
                                        <div class="col-3 text-center centrado-con redondo">
                                            <img src="imagenes/banderas/bbolivia.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body body-conf">
                                        <h2>Luis Fernando Zegarra Castro</h2>
                                        <p>ABOGADO</p>
                                        <input type="button" data-bs-toggle="modal" href="#conferencista1" value="Ver mas" class="boton1">
                                    </div>
                                    <div class="card-stats">
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/twitter.png" alt=""></i>
                                        </div>
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/facebook.png" alt=""></i>
                                        </div>
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/phone.png" alt=""></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="imagenes/conferencista/conferencista2.png" alt="" class="imgP">
                                    <div class="row align-items-end">
                                        <div class="col-3 text-center centrado-con redondo">
                                            <img src="imagenes/banderas/bbolivia.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body body-conf">
                                        <h2>F. Fabian Espinoza Valencia</h2>
                                        <p>ABOGADO</p>
                                        <input type="button" data-bs-toggle="modal" href="#conferencista1" value="Ver mas" class="boton1">
                                    </div>
                                    <div class="card-stats">
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/twitter.png" alt=""></i>
                                        </div>
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/facebook.png" alt=""></i>
                                        </div>
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/phone.png" alt=""></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="imagenes/conferencista/conferencista1.png" alt="" class="imgP">
                                    <div class="row align-items-end">
                                        <div class="col-3 text-center centrado-con redondo">
                                            <img src="imagenes/banderas/bbolivia.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body body-conf">
                                        <h2>Luis Fernando Zegarra Castro</h2>
                                        <p>ABOGADO</p>
                                        <input type="button" data-bs-toggle="modal" href="#conferencista1" value="Ver mas" class="boton1">
                                    </div>
                                    <div class="card-stats">
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/twitter.png" alt=""></i>
                                        </div>
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/facebook.png" alt=""></i>
                                        </div>
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/phone.png" alt=""></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="imagenes/conferencista/conferencista2.png" alt="" class="imgP">
                                    <div class="row align-items-end">
                                        <div class="col-3 text-center centrado-con redondo">
                                            <img src="imagenes/banderas/bbolivia.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card-body body-conf">
                                        <h2>F. Fabian Espinoza Valencia</h2>
                                        <p>ABOGADO</p>
                                        <input type="button" data-bs-toggle="modal" href="#conferencista1" value="Ver mas" class="boton1">
                                    </div>
                                    <div class="card-stats">
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/twitter.png" alt=""></i>
                                        </div>
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/facebook.png" alt=""></i>
                                        </div>
                                        <div class="stat">
                                            <i id="icono-social"><img src="imagenes/icono/phone.png" alt=""></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="conferencista1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 fondo">
                                        <div class="row justify-content-center margen">
                                            <img src="imagenes/conferencista/conferencista1.png" alt="" class="rounded-circle centrado-con  ">
                                        </div>
                                        <div class="row  margen" >
                                            <h4 style="color: #ffff;"><strong>PERFIL</strong></h4>
                                            <p style="text-align: justify; color:#ffff">Abogado. Boliviano. Soltero. 28 años. Con más de3 años de experiencia en
                                                asesoría y procesos judiciales.
                                                Tecnócrata y antisistema.
                                                Especialista en derecho informático y ciberseguridad, con patrocinio e
                                                investigación en sectores de gobernanza de internet.
                                                Miembro de: Consejo Seguridad (CTIC-AGETIC), Internet Society (ISOC) Bolivia, 
                                                Becario especialización policy maker:
                                                Cybersecurity summer bootcamp, 2017 Universidad
                                                de León/ (INCIBE)/(OEA)/Europol/Interpol,
                                                Operador en computadoras y dactilógrafo
                                                especializado (CEC), Ponente evento colaborativo “Ayni digital” sobre
                                                la historia del derecho digital (AGETIC), Especialización en informática jurídica: Google
                                                PartnerWorks y derecho informático especializado.
                                                (Derechoteca), Entrevista televisiva sobre Ciberacoso en FIDES
                                                TV.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="row margen">
                                            <h1 style="color: #052433; text-align: left;"><strong>Luis Fernando Zegarra Castro</strong> </h1>
                                            <h4>ABOGADO</h4>
                                            <h5><strong>FORMACIÓN ACADÉMICA</strong></h5>
                                            <hr style="width:100%; border-color:#4184e1;">
                                            <p style="color: #052433;">- Licenciado en Derecho</p>
                                            <p style="color: #052433;">- Especialidad con mención "Derrecho de la Union Europea"</p>
                                            <p style="color: #052433;">- Especialidad con mención "Resolución de conflictos y estrategias de negociación"</p>
                                            <p style="color: #052433;">- Especialidad con mención "El Constitucionalismo del Estado Social"</p>
                                            <h5><strong>EXPERIENCIA LABORAL</strong></h5>
                                            <hr style="width:100%; border-color:#4184e1;">
                                            <p style="color: #052433">- Consultor Senior</p>
                                            <p style="color: #052433">- Director Área de criminología e Investigación Informática Forence</p>
                                            <p style="color: #052433">- Gerente General</p>
                                            <p style="color: #052433">- Vocal</p>
                                        </div>
                                    </div>           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </section>
       
        <section id="agenda" name="agenda">
            <div class="contenedorT">
                <div class="container">
                    <h1 class="subtitulo text-center"><strong>AGENDA</strong></h1>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="lunes" data-bs-toggle="tab" data-bs-target="#contLunes" type="button" role="tab" aria-controls="contLunes" aria-selected="true"><h5 class="lAgenda">LUNES</h5></button>
                            <button class="nav-link" id="martes" data-bs-toggle="tab" data-bs-target="#contMartes" type="button" role="tab" aria-controls="contMartes" aria-selected="false"><h5 class="lAgenda">MARTES</h5></button>
                            <button class="nav-link" id="miercoles" data-bs-toggle="tab" data-bs-target="#contMiercoles" type="button" role="tab" aria-controls="contMiercoles" aria-selected="false"><h5 class="lAgenda">MIERCOLES</h5></button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="contLunes" role="tabpanel" aria-labelledby="lunes">
                            <table class="table">
                                <thead class="table-color">
                                  <tr>
                                    <th colspan="4" scope="col-12" class="text-center"><h3><strong>LUNES - SALA PRINCIPAL</strong></h3></th>
                                  </tr>
                                </thead>
                                <tr>
                                    <th colspan="4" class="table-color2 text-center" colspan="3" scope="col-12">BIENVENIDA</th>
                                </tr>
                                <tbody class="table-color3 text-center">
                                    <tr>
                                        <th scope="row">15:00-16-00</th>
                                        <th colspan="3">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">15:00-16-00</th>
                                        <th colspan="3">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">15:00-16-00</th>
                                        <th colspan="3">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                </tbody>
                                <tr class="table-color">
                                <th colspan="4" scope="col-12" class="text-center"><h3><strong> TALLERES - SALAS</strong></h3></th>
                                </tr>
                                <tbody class="text-center">
                                    <tr>
                                        <th class="table-color3" scope="row">15:00-16-00</th>
                                        <th class="table-color5">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                        <th class="table-color4">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                        <th class="table-color5">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table-color3" scope="row">15:00-16-00</th>
                                        <th class="table-color5">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                        <th class="table-color4">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                        <th class="table-color5">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table-color3" scope="row">15:00-16-00</th>
                                        <th class="table-color5">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                        <th class="table-color4">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                        <th class="table-color5">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                      <div class="tab-pane fade" id="contMartes" role="tabpanel" aria-labelledby="martes">
                            <table class="table">
                                <thead class="table-color">
                                  <tr>
                                  <th colspan="4" scope="col-12" class="text-center"><h3><strong>MARTES - SALA PRINCIPAL</strong></h3></th>
                                  </tr>
                                </thead>
                                <tbody class="table-color3 text-center">
                                    <tr>
                                        <th scope="row">15:00-16-00</th>
                                        <th colspan="2">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">15:00-16-00</th>
                                        <th colspan="2">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">15:00-16-00</th>
                                        <th colspan="2">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                </tbody>
                                <tr>
                                <th colspan="4" scope="col-12" class="text-center"><h3><strong>TALLERES-SALAS</strong></h3></th>
                                </tr>
                                <tbody class="text-center">
                                    <tr>
                                        <th class="table-color3" scope="row">15:00-16-00</th>
                                        <th class="table-color5">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                        <th class="table-color4">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table-color3" scope="row">15:00-16-00</th>
                                        <th class="table-color5">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                        <th class="table-color4">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="table-color3" scope="row">15:00-16-00</th>
                                        <th class="table-color5">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                        <th class="table-color4">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                      <div class="tab-pane fade" id="contMiercoles" role="tabpanel" aria-labelledby="miercoles">
                            <table class="table">
                                <thead class="table-color">
                                  <tr>
                                  <th colspan="4" scope="col-12" class="text-center"><h3><strong>MIERCOLES - SALA PRINCIPAL</strong></h3></th>
                                  </tr>
                                </thead>
                                <tbody class="table-color3 text-center">
                                    <tr>
                                        <th scope="row">15:00-16-00</th>
                                        <th colspan="2">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row">15:00-16-00</th>
                                        <th colspan="2">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                </tbody>
                                <tr>
                                    <th class="table-color2 text-center" colspan="3" scope="col-12">TALLERES</th>
                                </tr>
                                <tbody class="text-center">
                                    <tr>
                                        <th class="table-color3" scope="row">15:00-16-00</th>
                                        <th class="table-color5">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                        <th class="table-color4">
                                            <h5>Descripción de la conferencia</h5>
                                            <p><em>- Nombre del presentador</em></p>
                                        </th>
                                    </tr>
                                </tbody>
                                <tr>
                                    <th class="table-color2 text-center" colspan="3" scope="col-12">CLAUSURA</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="patrocinador" name="patrocinador">
            <div class="contenedorT">
                <div class="container">
                    <h1 class="subtitulo text-center"><strong>AUSPICIAN</strong></h1>
                    <div class="wrapper ">
                        <div class="cards_wrap centrado-con">
                            <div class="card_item" style="border-radius: 15px;">
                                <div class="card_inner">
                                  <div class="card_top centrado-con">
                                      <a href="https://www.boa.bo/BoAWebsite?AspxAutoDetectCookieSupport=1" target="_blank"><img src="imagenes/patrocinador/boa.png" alt="car" class="img-patrocinador" /></a>
                                  </div>
                                  <div class="card_bottom text-center">
                                    <h5 class="tamaño">BOLIVIANA DE AVIACIÓN</h5>
                                    
                                  </div>
                                </div>
                            </div>
                            <div class="card_item ">
                                <div class="card_inner">
                                  <div class="card_top centrado-con">
                                    <img src="imagenes/patrocinador/btv2.png" alt="car" class="img-patrocinador"/>
                                  </div>
                                  <div class="card_bottom text-center">
                                    <h5 class="tamaño">BOLIVIA TV</h5>
                                  
                                  </div>
                                </div>
                            </div>
                            <div class="card_item ">
                                <div class="card_inner">
                                  <div class="card_top centrado-con">
                                    <img src="imagenes/patrocinador/derecho_umsa.png" alt="car" class="img-patrocinador"/>
                                  </div>
                                  <div class="card_bottom text-center">
                                    <h5 class="tamaño">FACULTAD DE DERECHO Y CIENCIAS POLÍTICAS</h5>
                                  </div>
                                </div>
                            </div>
                            <div class="card_item ">
                                <div class="card_inner">
                                  <div class="card_top centrado-con">
                                    <img src="imagenes/patrocinador/icalp.png" alt="car" class="img-patrocinador"/>
                                  </div>
                                  <div class="card_bottom text-center">
                                    <h5 class="tamaño">BOLIVIANA DE AVIACIÓN</h5>
                                  </div>
                                </div>
                            </div>
                            <div class="card_item ">
                                <div class="card_inner">
                                  <div class="card_top centrado-con">
                                    <img src="imagenes/patrocinador/bandera_peru.png" alt="car" class="img-patrocinador"/>
                                  </div>
                                  <div class="card_bottom text-center">
                                    <h5>EMBAJADA DE PERU</h5>
                                  </div>
                                </div>
                            </div>
                          
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="contacto" name="contacto">
                <div class="container">
                    <h1 class="titulo text-center"><strong>CONTACTO</strong></h1>
                    <div class="row align-items-center justify-content-around">
                        <div class="col-3">
                            <img src="imagenes/logo.png" height="20%" class="img-fluid" alt="">
                        </div>
                        <div class="col-5">
                            <h5><strong> <img src="imagenes/icono/gmail.png" alt="" width="30"> Email: </strong>infocongreso@adm.emi.edu.bo</h5>
                            <h5><strong> <img src="imagenes/icono/gmail.png" alt="" width="30"> Email:</strong>papercongreso@adm.emi.edu.bo</h5>
                            
                        </div>
                        <div class="col-3">
                        <h5><strong> <img src="imagenes/icono/whatsapp.png" alt="" width="30"> WhatsApp: 75833599</strong></h5>
                            <h5><strong> <img src="imagenes/icono/telegram.png" alt="" width="30"> Telegram: 62355449</strong></h5>
                        </div>
                    </div>
                </div>
           
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/simplyCountdown.min.js"></script>
    <script src="js/countdown.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {  
      el: ".swiper-pagination",
    },
    navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>