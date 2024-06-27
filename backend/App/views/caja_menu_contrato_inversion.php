<?php echo $header; ?>

<?php

use App\components\BuscarCliente;

$buscarCliente = new BuscarCliente('Para hacer la apertura de una cuenta de Inversión, el cliente debe tener una cuenta activa de Ahorro Corriente, si el cliente no tiene una cuenta abierta <a href="/Ahorro/ContratoCuentaCorriente/" target="_blank">presione aquí</a>.');

?>

<div class="right_col">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div class="col-md-3 panel panel-body" sstyle="margin-top: 20px; margin-left: 10px; margin-right: 30px; border: 1px solid #dfdfdf; border-radius: 10px;">
            <a id="link" href="/Ahorro/CuentaCorriente/">
                <div class="col-md-5 imagen" style="margin-top: 5px; margin-left: 10px; margin-right: 30px; border: 1px solid #dfdfdf; border-radius: 10px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/5575/5575938.png" style="border-radius: 3px; padding-top: 5px;" width="110" height="110">
                    <p style="font-size: 12px; padding-top: 5px; color: #000000"><b>Ahorro </b></p>
                    <! -- https://cdn-icons-png.flaticon.com/512/5575/5575939.png -->
                </div>
            </a>
            <a id="link" href="/Ahorro/ContratoInversion/">
                <div class="col-md-5" style="margin-top: 5px; margin-left: 0px; border: 1px solid #dfdfdf; border-radius: 10px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/5836/5836477.png" style="border-radius: 3px; padding-top: 5px;" width="110" height="110">
                    <p style="font-size: 12px; padding-top: 5px; color: #000000"><b>Inversión </b></p>
                    <! -- https://cdn-icons-png.flaticon.com/512/5836/5836503.png -->
                </div>
            </a>
            <a id="link" href="/Ahorro/CuentaPeque/">
                <div class="col-md-5 imagen" style="margin-top: 20px; margin-left: 10px; margin-right: 30px; border: 1px solid #dfdfdf; border-radius: 10px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/2995/2995390.png" style="border-radius: 3px; padding-top: 5px;" width="110" height="110">
                    <p style="font-size: 12px; padding-top: 6px; color: #000000"><b>Ahorro Peque </b></p>
                    <! -- https://cdn-icons-png.flaticon.com/512/2995/2995467.png -->
                </div>
            </a>
            <a id="link" href="/Ahorro/EstadoCuenta/">
                <div class="col-md-5 imagen" style="margin-top: 20px; margin-left: 0px; border: 1px solid #dfdfdf; border-radius: 10px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/12202/12202939.png" style="border-radius: 3px; padding-top: 5px;" width="110" height="110">
                    <p style="font-size: 12px; padding-top: 6px; color: #000000"><b>Resumen Movimientos </b></p>
                    <! -- https://cdn-icons-png.flaticon.com/512/12202/12202918.png -->
                </div>
            </a>
            <a id="link" href="/Ahorro/SaldosDia/">
                <div class="col-md-5 imagen" style="margin-top: 20px; margin-left: 10px; margin-right: 30px; border: 1px solid #dfdfdf; border-radius: 10px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/5833/5833855.png" style="border-radius: 3px; padding-top: 5px;" width="100" height="110">
                    <p style="font-size: 12px; padding-top: 6px; color: #000000"><b>Arqueo </b></p>
                    <! -- https://cdn-icons-png.flaticon.com/512/5833/5833897.png -->
                </div>
            </a>
            <a id="link" href="/Ahorro/ReimprimeTicket/">
                <div class="col-md-5 imagen" style="margin-top: 20px; margin-left: 0px; border: 1px solid #dfdfdf; border-radius: 10px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/7325/7325275.png" style="border-radius: 3px; padding-top: 5px;" width="110" height="110">
                    <p style="font-size: 12px; padding-top: 6px; color: #000000"><b>Reimprime Ticket </b></p>
                    <! -- https://cdn-icons-png.flaticon.com/512/942/942752.png -->
                </div>
            </a>
        </div>
        <div class="col-md-9" id="bloqueoAhorro">
            <form id="registroOperacion" name="registroOperacion">
                <div class="modal-content">
                    <div class="modal-header" style="padding-bottom: 0px">
                        <div class="navbar-header card col-md-12" style="background: #2b2b2b">
                            <a class="navbar-brand">Mi espacio / Inversiones</a>
                            &nbsp;&nbsp;
                        </div>
                        <div>
                            <ul class="nav navbar-nav">
                                <li><a href="/Ahorro/ContratoInversion/">
                                        <p style="font-size: 16px;"><b>Nuevo contrato de inversión</b></p>
                                    </a></li>
                                <li class="linea"><a href="/Ahorro/ConsultaInversion/">
                                        <p style="font-size: 15px;">Consultar estatus de inversión</p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <?= $buscarCliente->mostrar(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre del cliente</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="curp">CURP</label>
                                        <input type="text" class="form-control" id="curp" name="curp" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="fecha_pago">Fecha de apertura inversión</label>
                                        <input type="text" class="form-control" id="fecha_pago" name="fecha_pago" value="<?= $fecha; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="contrato">Número de contrato</label>
                                        <input type="text" class="form-control" id="contrato" name="contrato" aria-describedby="contrato" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="cliente">Código de cliente SICAFIN</label>
                                        <input type="number" class="form-control" id="cliente" name="cliente" readonly>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="nombre_ejecutivo">Comisión ejecutivo *</label>
                                        <select class="form-control mr-sm-3" id="nombre_ejecutivo" name="nombre_ejecutivo" readonly>
                                            <?php echo $ejecutivos; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="monto">Monto a invertir *</label>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span style="font-size: x-large;">$</span>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="number" class="form-control" id="monto" name="monto" min="1" max="1000000" placeholder="0.00" style="font-size: 25px;" oninput=validaDeposito(event) onkeydown=soloNumeros(event) onblur=validaBlur(event) disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="plazo">Plazo *</label>
                                        <select class="form-control" id="plazo" name="plazo" onchange=habilitaBoton(event) disabled>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rendimiento">Rendimiento</label>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span style="font-size: x-large;">$</span>
                                            </div>
                                            <div class="col-md-10">
                                                <input class="form-control" id="rendimiento" name="rendimiento" placeholder="0.00" style="font-size: 25px;" disabled />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="renovacion">Acción al vencimiento *</label>
                                        <select class="form-control" id="renovacion" name="renovacion" disabled>
                                            <option value="D">Depositar a cuenta</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display: flex; justify-content: center; font-size: medium; height: 30px;">
                                <span id="leyendaRendimiento"></span>
                            </div>
                            <div class="row" style="display: flex; align-items: center; justify-content: center; font-size: medium">
                                <input type="text" class="form-control" id="monto_letra" name="monto_letra" style="border: 1px solid #000000; text-align: center; font-size: 25px;" readonly>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12" style="text-align:center;">
                                    <h3 style="color: #000000">Resumen de movimientos</h3>
                                </div>
                            </div>
                            <div class="row" style="display: none!important;">
                                <div class="col-md-8" style="display: flex; justify-content: flex-start;">
                                    <h4>Saldo actual ahorro cuenta corriente</h4>
                                </div>
                                <div class="col-md-1" style="display: flex; justify-content: flex-end;">
                                    <h4>$</h4>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" id="saldoActual" name="saldoActual" value="0.00" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <h4 id="simboloOperacion">-</h4>
                                </div>
                                <div class="col-md-7" style="display: flex; justify-content: flex-start;">
                                    <h4 id="descOperacion">Transferencia a cuenta de inversión</h4>
                                </div>
                                <div class="col-md-1" style="display: flex; justify-content: flex-end;">
                                    <h4>$</h4>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" id="montoOperacion" name="montoOperacion" value="0.00" readonly>
                                </div>
                            </div>
                            <div class="row" style="display: none;">
                                <div class="col-md-8" style="display: flex; justify-content: flex-start;">
                                    <h2>Saldo final ahorro cuenta corriente</h2>
                                </div>
                                <div class="col-md-1" style="display: flex; justify-content: flex-end;">
                                    <h4>$</h4>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" id="saldoFinal" name="saldoFinal" value="0.00" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="display: flex; justify-content: center; color: red; height: 30px;">
                                    <label id="tipSaldo" style="opacity:0; font-size: 18px;">El monto a invertir no puede ser mayor al saldo de la cuenta.</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="btnRegistraOperacion" name="agregar" class="btn btn-primary" value="enviar" onclick=registraOperacion(event) disabled><span class="glyphicon glyphicon-floppy-disk"></span> Registrar transacción</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>







<style>
    .imagen {
        transform: scale(var(--escala, 1));
        transition: transform 0.25s;
    }

    .imagen:hover {
        --escala: 1.2;
        cursor: pointer;
    }

    .linea:hover {
        --escala: 1.2;
        cursor: pointer;
        text-decoration: underline;
    }
</style>


<?php echo $footer; ?>