<html>
<body>
    <?php 
    require_once "autoloader.php";
    use Lib\DataBase;

    //Desactivar la notificacion de error
    error_reporting(0);
    mysqli_report(MYSQLI_REPORT_OFF);

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "usuarios"; 
    
    $conexion = new mysqli($servername, $username, $password, $dbname);
    ?>
    
    <h2>Conexion establecida</h2>
</body>
</html>