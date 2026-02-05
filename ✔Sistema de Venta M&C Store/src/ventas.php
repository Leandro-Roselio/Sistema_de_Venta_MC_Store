<?php include_once "includes/header.php";
require("../conexion.php");
$id_user = $_SESSION['idUser'];
$permiso = "nueva_venta";
$sql = mysqli_query($conexion, "SELECT p.*, d.* FROM permisos p INNER JOIN detalle_permisos d ON p.id = d.id_permiso WHERE d.id_usuario = $id_user AND p.nombre = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe) && $id_user != 1) {
    header("Location: permisos.php");
}
?>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <h4 class="text-center" style="color:white; font-family:georgia;">Datos del Cliente</h4>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="post">
                    <div class="row">
                        <div class="col-lg-4">
                            <div>
                                <input type="hidden" id="idcliente" value="1" name="idcliente" required>
                                <label id="dato_1"><i class="fas fa-address-card" ></i> Nombre</label>
                                <input type="text" name="nom_cliente" id="nom_cliente" class="form-control" placeholder="Ingrese nombre del cliente" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label id="dato_1"><i class="fas fa-mobile" ></i> Teléfono</label>
                                <input type="number" name="tel_cliente" id="tel_cliente" class="form-control" disabled required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label id="dato_1"><i class="fas fa-map-marker-alt" ></i> Dirreción</label>
                                <input type="text" name="dir_cliente" id="dir_cliente" class="form-control" disabled required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header text-center" id="carta">
                Datos Venta
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><i class="fas fa-user"></i> VENDEDOR</label>
                            <p style="font-size: 17px; text-transform: uppercase; color: white; font-family: Georgia, 'Times New Roman', Times, serif; "><?php echo $_SESSION['nombre']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="buscar">
                                <h4><center><i class="fas fa-search"></i>Buscar Producto</center></h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input id="producto" class="form-control" type="text" name="producto" placeholder="Ingresa el código o nombre">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="tblDetalle">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Precio Total</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody id="detalle_venta">

                </tbody>
                <tfoot>
                    <tr class="font-weight-bold">
                        <td id="total" colspan=3>Total Pagar</td>
                        <td id="total"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <a href="#" class="btn btn-primary" id="btn_generar"><i class="fas fa-file-pdf"></i> Generar Venta</a>
    </div>

</div>
<br>
<br>
<?php include_once "includes/footer.php"; ?>