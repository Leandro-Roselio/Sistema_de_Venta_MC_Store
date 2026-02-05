<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: src/');
} else {
    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-danger" role="alert">
            Ingrese su usuario y su clave
            </div>';
        } else {
            require_once "conexion.php";
            $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave']));
            $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$user' AND clave = '$clave' AND estado = 1");
            mysqli_close($conexion);
            $resultado = mysqli_num_rows($query);
            if ($resultado > 0) {
                $dato = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $dato['idusuario'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['user'] = $dato['usuario'];
                header('location: src/');
            } else {
                $alert = '<div class="alert alert-danger" role="alert">
                Usuario o Contraseña Incorrecta
                </div>';
                session_destroy();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Iniciar Sessión</title>
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="icon" href="assets/img/icono.jpg"" sizes="32x32">

    <script src="assets/js/all.min.js" crossorigin="anonymous"></script>
</head>
<div class="fondo"></div>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">

<svg left="30px" width="246px" height="220px" viewBox="0 0 256 293" version="1.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
    <defs>
        <linearGradient x1="50.000184%" y1="7.89569995%" x2="49.8553456%" y2="93.3433732%" id="turbopackLinearGradient-1">
            <stop stop-color="#0096FF" offset="0%"></stop>
            <stop stop-color="#FF1E56" offset="100%"></stop>
        </linearGradient>
    </defs>
    <g>
        <path d="M128,0 L46.16,46.768 L46.32,83.52 L128,36.848 L224,91.712 L256,110 L256,73.136 L128,0 Z M113.6,247.488 L32,200.864 L32,91.792 L31.968,91.776 L31.792,54.976 L0,73.136 L0,121.904 L0,170.672 L0,219.424 L81.68,266.096 L113.6,247.488 Z M224,200.864 L224,108.304 L256,126.592 L256,170.672 L256,219.424 L128,292.576 L96.112,274.352 L128,255.76 L128,255.712 L224,200.864 Z" fill="url(#turbopackLinearGradient-1)"></path>
        <polygon fill="#000000" points="46.4 108.368615 46.4 192.496615 128 239.136615 128 154.992615"></polygon>
        <polygon fill="#000000" points="128 53.4406154 53.648 95.9206154 135.264 142.560615 209.6 100.064615"></polygon>
    </g>
</svg>
                                
<div class="login">
      <h1>Iniciar Sesion</h1>
    </div>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <div id="iconos">
                                                <i style="color:#E1306C;" class="fab fa-instagram" class="fab fa-facebook"></i> 
                                                <i style="color:#1877F2 ;" class="fab fa-facebook"></i> 
                                                <i style="color: skyblue; color" class="fab fa-twitter"></i>
                                                <i style="color: red ;" class="fab fa-youtube"></i> 
                                            </div>
                                            <br>


                                            <label class="small mb-1" for="usuario"><i class="fas fa-user-lock"></i> Usuario</label>
                                            <input class="form-control py-4" id="usuario" name="usuario" type="text" placeholder="Ingrese usuario" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="clave"><i class="fas fa-lock"></i> Contraseña</label>
                                            <input class="form-control py-4" id="clave" name="clave" type="password" placeholder="Ingrese Contraseña" required />
                                        </div>
                                        <div class="alert alert-danger text-center d-none" id="alerta" role="alert">

                                        </div>
                                        <?php echo isset($alert) ? $alert : ''; ?>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input class="btn btn-primary" type="submit"></input>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted"><h5 style="font-size:23px; margin-left:20%;">&copy; MyC-STORE</h5></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>