<template>
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
<body id="form">
    <main>
      <section>
          <div id=app>
            <div class="container">
                <div class="cont-form">
                    <div class="row justify-content-center">
                        <div class="col-4">
                        <img src="imagenes/icono/logoEMI.png" alt="" class="img-fluid"  width="180">
                        </div>
                        <div class="col-4">
                        <img src="imagenes/form/form-logo1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <h1 class="titulo text-center"><strong>FORMULARIO DE INSCRIPCIÓN</strong></h1>
                    <h3 class="titulo">DATOS PERSONALES:</h3>
                    
                    <form class="row" method="POST">
                        @csrf
                        <div class="col-4">
                            <label for="nombres" class="form-label"><strong>NOMBRES:</strong></label>
                            <input type="text" class="form-control" id="nombres">
                        </div>
                        <div class="col-4">
                            <label for="paterno" class="form-label"><strong>APELLIDO PATERNO:</strong></label>
                            <input type="text" class="form-control" id="paterno">
                        </div>
                        <div class="col-4">
                            <label for="materno" class="form-label"><strong>APELLIDO MATERNO:</strong></label>
                            <input type="text" class="form-control" id="materno">
                        </div>
                        
                        <div class="col-6">
                            <label for="ano_nacimiento" class="form-label"><strong>AÑO DE NACIMIENTO:</strong></label>
                            <input type="text" class="form-control" id="ano_nacimiento">
                        </div>
                        <div class="col-6">
                            <label for="genero" class="form-label"><strong>GÉNERO:</strong></label>
                            <select class="form-select" id="genero">
                                <option selected></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                            
                        <div class="col-5">
                            <label for="telefono" class="form-label"><strong>TELEFONO:</strong></label>
                            <input type="text" class="form-control" id="telefono">
                        </div>
                        <div class="col-7">
                            <label for="email" class="form-label"><strong>EMAIL:</strong></label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="col-6">
                            <label for="universidad" class="form-label"><strong>UNIVERSIDAD:</strong></label>
                            <input type="text" class="form-control" id="universidad">
                        </div>
                        <div class="col-6">
                            <label for="carrera_id" class="form-label"><strong>CARRERA:</strong></label>
                            <input type="text" class="form-control" id="carrera_id">
                        </div>
                        <div class="col-6">
                            <label for="pais_id" class="form-label"><strong>PAÍS:</strong></label>
                            <select v-model="select_pais" name="pais" id="pais" class="form-control{{$errors->has('id') ? 'is_invalid' : ''}}">
                                <option value="">Selecciona un pais</option>
                                <option v-for="(pais, index) in paises" v:bind:value="index">
                                    @{{pais}}
                                </option>
                            </select>
                            @if($errors->has('id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('id')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-6">
                            <label for="ciudad_id" class="form-label"><strong>CIUDAD:</strong></label>
                            
                        </div>
                        <h3 class="titulo">TALLERES:</h3>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <button type="submit" class="boton1 text-center">Inscribirse</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
