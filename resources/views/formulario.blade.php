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
    <link rel="stylesheet" href="css/app.css">
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
                    <h5 class="text-center" style="color: #1baa7b">Digite sus datos correctamente para la emisión de los certificados de participación.</h5>
                    <form class="row" method="POST" action="{{route('form.storeKardex')}}">
                        @csrf
                        <div class="col-4">
                            <label for="nombres" class="form-label"><strong>NOMBRES:</strong></label>
                            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres') }}">
                            @error('nombres')
                            <small style="color: #ff0000">*{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="paterno" class="form-label"><strong>APELLIDO PATERNO:</strong></label>
                            <input type="text" class="form-control" id="paterno" name="paterno" value="{{ old('paterno') }}">
                            @error('paterno')
                            <small style="color: #ff0000">*{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="materno" class="form-label"><strong>APELLIDO MATERNO:</strong></label>
                            <input type="text" class="form-control" id="materno" name="materno" value="{{ old('materno') }}">
                            @error('materno')
                            <small style="color: #ff0000">*{{$message}}</small>
                            @enderror
                        </div>
                        
                        <div class="col-6">
                            <label for="ano_nacimiento" class="form-label"><strong>AÑO DE NACIMIENTO:</strong></label>
                            <input type="text" class="form-control" id="ano_nacimiento" name="ano_nacimiento" value="{{ old('ano_nacimiento') }}">
                        </div>
                        <div class="col-6">
                            <label for="genero" class="form-label"><strong>GÉNERO:</strong></label>
                            <select class="form-select" id="genero" name="genero">
                                <option selected>{{ old('genero') }}</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                            
                        <div class="col-5">
                            <label for="telefono" class="form-label"><strong>TELEFONO:</strong></label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
                        </div>
                        <div class="col-7">
                            <label for="email" class="form-label"><strong>EMAIL:</strong></label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="col-6">
                            <label for="universidad" class="form-label"><strong>UNIVERSIDAD:</strong></label>
                            <input type="text" class="form-control" id="universidad" name="universidad" value="{{ old('universidad') }}">
                        </div>
                        <div class="col-6">
                            <label for="carrera_id" class="form-label"><strong>CARRERA:</strong></label>
                            <select name="carrera_id" id="carrera_id" class="form-control" value="{{ old('carrera_id') }}">
                                    <option value="">Seleccione una carrera</option>
                                @foreach ($carrera as $carrera)
                                    <option value="{{$carrera -> id}}">
                                        {{$carrera -> carrera}}
                                    </option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="col-6">
                            <label for="pais_id" class="form-label"><strong>PAÍS:</strong></label>
                            <select name="pais_id" id="pais_id" class="form-control">
                                    <option value="">Seleccione un pais</option>
                                @foreach ($pais as $pais)
                                    <option value="{{$pais -> id}}">
                                        {{$pais -> pais}}
                                    </option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="col-6">
                            <label for="ciudad_id" class="form-label"><strong>CIUDAD:</strong></label>
                            <select name="ciudad_id" id="ciudad_id" class="form-control">
                                    <option value="">Seleccione una ciudad</option>
                                @foreach ($ciudad as $ciudad)
                                    <option value="{{$ciudad -> id}}">
                                        {{$ciudad -> ciudad}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h3 class="titulo">TALLERES:</h3>
                     
                        @foreach($horarios as $horario)

                            @if($horario->cupo != 0)
                                <div class="input-group" style="margin-bottom: 2%">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="checkbox" value="{{$horario -> id}}" name="taller[]" aria-label="Radio button for following text input">
                                        </div>
                                        <div class="form-control">
                                            <h5 class="text-center"><strong>{{ $horario -> taller }}</strong></h5>  
                                            <p><strong style="color:#36C6E3 ">Expositor:</strong>{{ $horario -> encargado }}</p>
                                            <p><strong>Fecha y hora: </strong>{{ $horario -> inicio }}</p>
                                        </div>
                                    </div> 
                            @endif
                            @if($horario->cupo == 0)
                                <div class="input-group" style="margin-bottom: 2%">
                                    <div class="form-control">
                                        <h5 class="text-center"><strong>{{ $horario -> taller }}</strong></h5>  
                                        
                                    </div>
                                </div> 
                            @endif
                        @endforeach
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