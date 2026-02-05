<?php
include_once "includes/header.php";
require_once "../conexion.php";
$id_user = $_SESSION['idUser'];
$permiso = "configuracion";
$sql = mysqli_query($conexion, "SELECT p.*, d.* FROM permisos p INNER JOIN detalle_permisos d ON p.id = d.id_permiso WHERE d.id_usuario = $id_user AND p.nombre = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe) && $id_user != 1) {
    header("Location: permisos.php");
}
$query = mysqli_query($conexion, "SELECT * FROM configuracion");
$data = mysqli_fetch_assoc($query);
if ($_POST) {
    $alert = '';
    if (empty($_POST['nombre']) || empty($_POST['telefono']) || empty($_POST['email']) || empty($_POST['direccion'])) {
        $alert = '<div class="alert alert-danger" role="alert">
            Todo los campos son obligatorios
        </div>';
    }else{
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $id = $_POST['id'];
        $update = mysqli_query($conexion, "UPDATE configuracion SET nombre = '$nombre', telefono = '$telefono', email = '$email', direccion = '$direccion' WHERE id = $id");
        if ($update) {
            $alert = '<div class="alert alert-success" role="alert">
            Datos modificado
        </div>';
        }
    }
}
?>

<div class="row">
<div class="col-md-6 mx-auto">
            <div class="card">
                <div id="configuracion" class="card-header text-white">
                    <h1 id="configuracion"><center>Datos del trabajador</center></h1>
                </div>
                <div class="card-body">
                    <form action="" method="post" class="p-3">
                        <div class="form-group">
                        <center><label><i class="fas fa-address-card" ></i> Nombre</label></center>
                            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                            <input type="text" name="nombre" class="form-control" value="<?php echo $data['nombre']; ?>" id="txtNombre" placeholder="Nombre de la Empresa" required class="form-control">
                        </div>
                        <div class="form-group">
                        <center><label><i class="fas fa-mobile" ></i> Teléfono</label></center>
                            <input type="number" name="telefono" class="form-control" value="<?php echo $data['telefono']; ?>" id="txtTelEmpresa" placeholder="teléfono de la Empresa" required>
                        </div>
                        <div class="form-group">
                        <center><label><i class="fas fa-envelope" ></i> Correo Electrónico</label></center>
                            <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" id="txtEmailEmpresa" placeholder="Correo de la Empresa" required>
                        </div>
                        <div class="form-group">
                        <center><label><i class="fas fa-map-marker-alt" ></i> Dirección</label></center>
                            <input type="text" name="direccion" class="form-control" value="<?php echo $data['direccion']; ?>" id="txtDirEmpresa" placeholder="Dirreción de la Empresa" required>
                        </div>
                        <?php echo isset($alert) ? $alert : ''; ?>
                        <div>
                            <button id="configuracionBoton" type="submit" class="btn"><i class="fas fa-save"></i> Modificar Datos</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
</div>
<?php include_once "includes/footer.php"; ?>