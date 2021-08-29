
<div class="modal fade" id="formulario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class="subtitulo"><strong>FORMULARIO DE INSCRIPCION </strong></h4>
        <h4 class="subtitulo"><strong> 1ER CONGRESO DE CIBERSEGURIDAD Y DEFENSA</strong></h4>
          <form action="insertarF.php" method="POST">
            <div class="row">
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Digite sus datos correctamente para el certificado.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
              <div class="row">
                <div class="col">
                  <label for="nombreF" class="form-label" id="colorL"><strong>Nombre:</strong></label>
                  <input type="text" class="form-control" id="nombreF" name="nombreF">
                </div>
                <div class="col">
                  <label for="apellidoPF" class="form-label" id="colorL"><strong>Apellido Paterno:</strong></label>
                  <input type="text" class="form-control" id="apellidoPF" name="apellidoPF">
                </div>
                <div class="col">
                  <label for="apellidoMF" class="form-label" id="colorL"><strong>Apellido Materno:</strong></label>
                  <input type="text" class="form-control" id="apellidoMF" name="apellidoMF">
                </div>
              </div>
              <div class="row">
              <div class="col">
                <label for="extencionF" class="form-label" id="colorL"><strong>Extención:</strong></label>
                <select id="extencionF" name="extencionF" class="form-select">
                  <?php
                  include("conexion.php");
                  $queryF = "SELECT * FROM `extencion`";
                  $resultadoF = mysqli_query($conn, $queryF);
                  while ($rowF = mysqli_fetch_array($resultadoF)){ 
                    if($rowF['idExtencion'] == 1){
                  ?>
                      <option value="<?php $rowF['idExtencion']?>" selected><?php echo $rowF['paisE']." ".$rowF['extencionE'];?></option>
                  <?php }else{?> 
                      <option value="<?php $rowF['idExtencion']?>"><?php echo $rowF['paisE']." ".$rowF['extencionE'] ;?></option>
                  <?php }} ?>
                </select>
              </div>
              <div class="col">
                <label for="celularF" class="form-label" id="colorL"><strong>Celular:</strong></label>
                <input type="text" class="form-control" id="celularF" name="celularF">
              </div>
              <div class="col">
                <label for="correoF" class="form-label" id="colorL"><strong>Correo Electrónico:</strong></label>
                <input type="email" class="form-control" id="correoF" name="correoF">
              </div>
              </div>
              <h4 class="subtitulo"><strong>TALLERES</strong></h4>
             
              <div class="row">
                <div class="col">
                  <?php 
                  $query2 = "SELECT `idTaller`, `tituloT`, `diaT`, `fechaT`, `horaCT`, `horaFT`, `cuposDisponibles`, `cupos` 
                             FROM `taller`";
                  $query3 = "SELECT COUNT(`cuposDisponibles`) - (SELECT COUNT(`cuposDisponibles`) FROM `taller` WHERE `cuposDisponibles` = 0 ) as c FROM `taller`";
                  $resultado2 = mysqli_query($conn, $query2);
                  $resultado3 = mysqli_query($conn, $query3);
                  $row3 = mysqli_fetch_array($resultado3);
                  
                  while($row2 = mysqli_fetch_array($resultado2)){
                    if ($row2['cuposDisponibles'] > 0) { ?>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="cupos<?php echo $row2['idTaller'] ?>" id="cupos<?php echo $row2['idTaller'] ?>">
                        <div class="alert alert-primary">
                          <label class="form-check-label" for="cupos">
                            <?php echo $row2['tituloT']." ( Día ".$row2['diaT']." ".$row2['fechaT']." a horas ".$row2['horaCT']." - ".$row2['horaFT']." )"?>
                          </label>
                        </div>
                      </div>
                  <?php }
                    else if($row3['c'] == 0){ ?>
                      <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>Ya no existe talleres disponibles.</div>
                      </div>
                  <?php }
                  }?>
                </div> 
              </div>  
              <div class="row">
                <div class="col">
                  <h1><input type="submit" value="Insertar" class="boton1" id="formulario" name="formulario"></h1>
                </div>
              </div>
            </form>
            
      
    </div>
  </div>
</div>
</div>
