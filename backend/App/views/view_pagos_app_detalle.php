<?php echo $header; ?>
<div class="right_col">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div class="panel panel-body">
            <div class="card col-md-12">
            <form name="all" id="all" method="POST">
                <div class="row" >
                    <div class="tile_count float-right col-sm-12" style="margin-bottom: 1px; margin-top: 1px">
                        <div class="col-md-4 col-sm-4  tile_stats_count">
                            <span class="count_top" style="font-size: 15px"><i class="fa fa-user"></i> Ejecutivo</span>
                            <div class="count" style="font-size: 18px"><?php echo $Ejecutivo ?></div>
                        </div>
                        <div class="col-md-2 col-sm-2  tile_stats_count">
                            <span class="count_top" style="font-size: 15px"><i>#</i> de Pagos Validados</span>
                            <div class="count" style="font-size: 30px; color: #030303"><span style="font-size: 30px; color: #030303" id="validados_r" name="validados_r"><?php echo $DetalleGlobal[0]['TOTAL_VALIDADOS']; ?></span> DE <span style="font-size: 30px; color: #030303" id="total_r" name="total_r"><?php echo $DetalleGlobal[0]['TOTAL_PAGOS']; ?></span></div>
                            <div class="count" style="font-size: 30px; color: #030303"><span style="font-size: 30px; color: #030303; display: none;" id="validados_r_total" name="validados_r_total"><?php echo $DetalleGlobal[0]['TOTAL_PAGOS_TOTAL']; ?></span></div>

                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count">
                            <span class="count_top" style="font-size: 15px"><i class="fa fa-user"></i> Monto Validado</span>
                            <div class="count" style="font-size: 35px; color: #368a05">$<?php echo number_format($DetalleGlobal[0]['TOTAL'],2); ?></div>
                        </div>
                        <div class="col-md-3 col-sm-4  tile_stats_count">
                            <span class="count_top" style="font-size: 15px"><i class="fa fa-user"></i> Terminar Validación</span>
                            <div class="count" style="font-size: 35px; color: #368a05">
                                <button type="button" id="procesar_pagos" class="btn btn-primary" onclick="boton_resumen_pago();" style="border: 1px solid #c4a603; background: #FFFFFF"  data-keyboard="false">
                                    <i class="fa fa-spinner" style="color: #1c4e63"></i>  <span style="color: #1E283D"><b>Procesar Pagos Validados</b></span>
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="dataTable_wrapper">
                    <hr>
                    <p><b><span class="fa fa-sticky-note"></span> Nota:Si ya valido el pago y es correcto marque la casilla (Validado)</b></p>
                    <hr style="border-top: 1px solid #787878; margin-top: 5px;">
                    <table class="table table-striped table-bordered table-hover" id="muestra-cupones">
                        <thead>
                        <tr>
                            <th>ID Transacción</th>
                            <th>Cliente</th>
                            <th>Tipo Pago</th>
                            <th>Monto</th>
                            <th>Comentario Cajas</th>
                            <th>Fecha Captura</th>
                            <th>Acciones</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?= $tabla; ?>
                        </tbody>
                    </table>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_agregar_horario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h4 class="modal-title" id="myModalLabel">Editar el Pago del Ejecutivo (App)</h4></center>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form onsubmit="enviar_add_edit_app(); return false" id="Add_Edit_Pago">

                                <div class="col-md-6" style="display: none">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="id_registro">ID</label>
                                            <input type="text" class="form-control" id="id_registro" name="id_registro">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fecha_cl">Fecha de trabajo *</label>
                                        <input onkeydown="return false" type="text" class="form-control" id="fecha_cl" name="fecha_cl" value="<?php echo date("Y-m-d h:i:s"); ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tipo_pago_detalle">Tipo de Pago *</label>
                                        <select class="form-control" autofocus type="select" id="tipo_pago_detalle" name="tipo_pago_detalle">
                                            <option value="0" disabled>Seleccione una opción</option>
                                            <option value="P">Pago</option>
                                            <option value="M">Multa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="monto_detalle">Monto Registrado *</label>
                                        <input type="text" class="form-control" id="monto_detalle" readonly name="monto_detalle" placeholder=""  value="">
                                        <small id="emailHelp" class="form-text text-muted">Fecha de registro para la asignación.</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nuevo_monto">Nuevo Monto *</label>
                                        <input type="text" class="form-control" id="nuevo_monto" name="nuevo_monto" placeholder=""  value="">
                                        <small id="emailHelp" class="form-text text-muted">Fecha de registro para la asignación.</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="comentario_detalle">Comentario (motivo de cambio) *</label>
                                            <textarea  class="form-control" id="comentario_detalle" name="comentario_detalle" placeholder="" ></textarea>
                                            <small id="emailHelp" class="form-text text-muted">Detalle el motivo del cambio, para el tipo de pago o el nuevo monto</small>
                                        </div>
                                </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                        <button type="submit" name="agregar" class="btn btn-primary" value="enviar"><span class="glyphicon glyphicon-floppy-disk"></span>Terminar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

<div class="modal fade" id="modal_resumen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center><h4 class="modal-title" id="myModalLabel">Resumen - Recepción de Pagos (App) - Folio: <?php echo $barcode; ?></h4></center>
                    </div>
                    <div class="modal-body">

                        <div class="container-fluid">
                            <form onsubmit="enviar_add_edit_app(); return false" id="Add_Edit_Pago">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Fecha">Fecha de Aplicación</label>
                                            <input onkeydown="return false" type="date" class="form-control" id="Fecha" name="Fecha" min="<?php echo $inicio_f; ?>" max="<?php echo $fin_f; ?>" value="<?php echo $inicio_f; ?>">
                                            <small id="emailHelp" class="form-text text-muted">Fecha de registro en sistema.</small>
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="display: none">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="movil">Medio de Registro</label>
                                            <input type="text" class="form-control" id="movil" aria-describedby="movil" disabled placeholder="" value="APP MÓVIL">
                                            <small id="emailHelp" class="form-text text-muted">Medio de registro.</small>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ejecutivo">Nombre del Ejecutivo</label>
                                            <select class="form-control mr-sm-3"  autofocus type="select" id="ejecutivo" name="ejecutivo">
                                                <option value="<?php echo $cdgpe_ejecutivo; ?>"><?php echo $ejecutivo; ?></option>
                                            </select>
                                            <small id="emailHelp" class="form-text text-muted">Nombre del ejecutivo que entrega el pago.</small>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">

                                    <div class="dataTable_wrapper">
                                        <table style="margin-bottom: 0px;" class="table table-striped table-bordered table-hover" id="terminar_resumen" name="terminar_resumen">
                                            <thead>
                                            <tr>
                                                <th style="display: none;">ID-MCM</th>
                                                <th>Cliente</th>
                                                <th>Nombre</th>
                                                <th>Ciclo</th>
                                                <th>Tipo</th>
                                                <th>Monto</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?= $tabla_resumen; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card card-danger col-md-12" style="padding: 2px">
                                    <ul class="nav navbar-nav navbar-right">
                                        <b style="font-size: 20px; color: #173b00;">Total: $<?php echo number_format($DetalleGlobal[0]['TOTAL'],2); ?></b>

                                    </ul>
                                </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                        <button type="button"  class="btn btn-primary" onclick="boton_terminar('<?= $barcode; ?>');"><span class="glyphicon glyphicon-floppy-disk"></span>Terminar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

<?php echo $footer; ?>
