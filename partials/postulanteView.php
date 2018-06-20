<?php include("function.php"); ?>
<form class="needs-validation" action="function.php"  method="post" novalidate>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 ">
            <legend>Datos Personales</legend>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-3">
            <label for="firstName">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="" value="" required="">
            <div class="invalid-feedback">
                Nombres es requerido.
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-3">
            <label for="firstName">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="" value="" required="">
            <div class="invalid-feedback">
                Apellidos es requerido.
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-3">
            <label for="firstName">Teléfono</label>
            <input type="text" class="form-control phone" id="telefono" name="telefono" placeholder="(+5400 0000- 0000)" value="" required="">
            <div class="invalid-feedback">
                Teléfono es requerido.
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-12 mb-3 ">
            <label for="firstName">Sexo</label>
            <div class="custom-control custom-radio ">
                <input type="radio" class="custom-control-input" id="sexo1" name="id_sexo" value="1" required>
                <label class="custom-control-label" for="sexo1">Femenino</label>
            </div>
            <div class="custom-control custom-radio   mb-3 ">
                <input type="radio" class="custom-control-input" id="sexo2" name="id_sexo" value="2" required>
                <label class="custom-control-label" for="sexo2">Masculino</label>
                <div class="invalid-feedback">Sexo es requerido</div>
            </div>
            
        </div>
        <div class="col-lg-2 col-md-2 col-12 mb-3">
            <label for="estado_civil">Estado civil</label>
            <select class="custom-select d-block w-100" id="estado_civil"  name="id_estado_civil" required="">
                <option value="">Seleccione...</option>
                <option value="1">Soltero/a</option>
                <option value="2">Casado/a</option>
                <option value="3">Divorciado/a</option>
                <option value="4">Viudo/a</option>
            </select>
            <div class="invalid-feedback">
                Estado es requerido.
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12 mb-3">
            <label for="dni">DNI</label>
            <input type="text" class="form-control dni"  id="dni" name="dni" value="" required="">
            <div class="invalid-feedback">
                DNI es requerido.
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-12 mb-3">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control " id="direccion" name="direccion" value="" placeholder="Ingresa tu dirección" onFocus="geolocate()" required="">
            <div class="invalid-feedback">
                Dirección es requerida.
            </div>
        </div>
        <div class="col-lg-12 mb-3">
            <legend>Objetivo Laboral</legend>
            <textarea name="objetivo" class="form-control mw-100" rows="5" id="onjetivo" required=""></textarea >
            
            <div class="invalid-feedback">
                Objetivo laboral es requerido.
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-12 mb-3">
            <legend for="experiencia">Experiencia Laboral</legend>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <label for="empresa">Empresa</label>
                    <input type="text" class="form-control " id="empresa" name="empresa" value="" placeholder="Ingresa nombre de la empresa"  required="">
                    <div class="invalid-feedback">
                        Nombre de la requerido.
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <label for="direccion">Actividad de la Empresa</label>
                    <input type="text" class="form-control " id="actividad_empresa" name="actividad_empresa" value="" placeholder="Activad de la empresa"  required="">
                    <div class="invalid-feedback">
                        Actividad de la Empresa es requerido.
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <label for="puesto">Puesto</label>
                    <input type="text" class="form-control " id="puesto" name="puesto" value="" placeholder="Ingresa tu puesto en la empresa"  required="">
                    <div class="invalid-feedback">
                        Puesto es requerido.
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <label for="nivel">Nivel</label>
                    <input type="text" class="form-control " id="nivel" name="nivel" value="" placeholder="Ingresa tu nivel en la empresa"  required="">
                    <div class="invalid-feedback">
                        Nivel es requerido.
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 mb-3">
                    <label for="country">Pais</label>
                    <select class="custom-select d-block w-100" id="pais"  name="id_pais" required="">
                        <option value="">Seleccione...</option>
                        <option value="1">Argentina</option>
                    </select>
                    <div class="invalid-feedback">
                        Pais es requerido.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-3">
                    <label for="country">Desde</label>
                    <input type="text" name="desde" class="datepicker form-control" required="">
                    <div class="invalid-feedback">
                        Desde es requerida.
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 mb-3">
                    <label for="country">Hasta</label>
                    <input type="text" name="hasta" class="datepicker form-control" required="">
                    <div class="invalid-feedback">
                        Hasta es requerida.
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <label for="direccion">Área del puesto</label>
                    <input type="text" class="form-control " id="area_del_puesto" name="area_del_puesto" value="" placeholder="Área del puesto en la empresa"  required="">
                    <div class="invalid-feedback">
                        Área del puesto es requerida.
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-12 mb-3">
                    <label for="direccion">Descripción</label>
                    <input type="text" class="form-control " id="descripcion" name="descripcion" value="" placeholder="Descripción del puesto"  required="">
                    <div class="invalid-feedback">
                        Descripción es requerida.
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-3">
                    <label for="persona_cargo">Personas a cargo</label>
                    <input type="text" class="form-control " id="personas_acargo" name="personas_acargo" value="" placeholder="Personas a cargo"  required="">
                    <div class="invalid-feedback">
                        Personas a cargo es requerida.
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-3">
                    <label for="persona_referencia">Persona referencia</label>
                    <input type="text" class="form-control " id="persona_referencia" name="persona_referencia" value="" placeholder="Persona de"  required="">
                    <div class="invalid-feedback">
                        Persona referencia es requerida.
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-12 mb-3">
                    <legend for="estudios">Estudios</legend>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12 mb-3">
                            <label for="casa_estudios">Casa de estudios</label>
                            <input type="text" class="form-control " id="casa_estudios" name="casa_estudios" value="" placeholder="Nombre de casa de Estudios"  required="">
                            <div class="invalid-feedback">
                                Casa de estudios es requerida.
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-12 mb-3">
                            <label for="direccion">Nivel</label>
                            <input type="text" class="form-control " id="nivelEst" name="nivelEst" value="" placeholder="Primaria,Secundaria,Universitario"  required="">
                            <div class="invalid-feedback">
                                Nivel es requerida.
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 mb-3">
                            <label for="especialidad">Especialidad</label>
                            <input type="text" class="form-control " id="especialidad" name="especialidad" value="" placeholder="Especialidad"  required="">
                            <div class="invalid-feedback">
                                Personas a cargo es requerida.
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 mb-3">
                            <label for="desde_e">Desde</label>
                            <input type="text" name="desde_e" class="datepicker form-control" required="">
                            <div class="invalid-feedback">
                                Desde es requerida.
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12 mb-3">
                            <label for="hasta_e">Hasta</label>
                            <input type="text" name="hasta_e" class="datepicker form-control" required="">
                            <div class="invalid-feedback">
                                Hasta es requerida.
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-12 ">
                                    <label for="idioma">Idioma</label>
                                    <input type="text" name="idioma" placeholder="Nombre de Idioma" class="form-control" id="idioma" required="">
                                    <div class="invalid-feedback">
                                        Idioma es requerido.
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12 ">
                                    <label>Oral</label>
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input" id="oral1" name="oral" value="1" required>
                                        <label class="custom-control-label" for="oral1">Si</label>
                                    </div>
                                    <div class="custom-control custom-radio   mb-3 ">
                                        <input type="radio" class="custom-control-input" id="oral2" name="oral" value="0" required>
                                        <label class="custom-control-label" for="oral2">No</label>
                                        <div class="invalid-feedback">Oral es requerido</div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <label>Escrito</label>
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" class="custom-control-input" id="escrito1" name="escrito" value="1" required>
                                        <label class="custom-control-label" for="escrito1">Si</label>
                                    </div>
                                    <div class="custom-control custom-radio   mb-3 ">
                                        <input type="radio" class="custom-control-input" id="escrito2" name="escrito" value="0" required>
                                        <label class="custom-control-label" for="escrito2">No</label>
                                        <div class="invalid-feedback">Escrito es requerido</div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-4">
            <button class="btn btn-success btn-lg btn-block" type="submit">Enviar Datos</button>
        </div>
    </div>
</form>
</div>
<div class="container">
<div class="table-responsive">
    <table class="table table-hover table-sm">
        <thead>
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">Nombres Apellidos</th>
                <th scope="col">Sexo</th>
                <th scope="col">Estado Civil</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Dirección</th>
                <th scope="col">Casa de Estudios</th>
                <th scope="col">Nivel de Estudios</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Fecha Estudio</th>
            </tr>
        </thead>
        <tbody>

            <?php if (empty($getPostulantes)){ ?> 
            <tr>
                <td colspan="10" class="text-center text-danger">No se encontrarón registros</td>
            </tr>
            <?php } ?>
            <?php  foreach ($getPostulantes as  $value): ?>
            <tr>
                <td><?php echo $value['dni']; ?></td>
                <td><?php echo $value['fullname']; ?></td>
                <td><?php echo $value['sexo']; ?></td>
                <td><?php echo $value['estcivil']; ?></td>
                <td><?php echo $value['telefono']; ?></td>
                <td><?php echo $value['direccion']; ?></td>
                <td><?php echo $value['casa_estudios']; ?></td>
                <td><?php echo $value['nivelEstudios']; ?></td>
                <td><?php echo $value['especialidad']; ?></td>
                <td><?php echo $value['fechaEstudio']; ?></td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>
</div>