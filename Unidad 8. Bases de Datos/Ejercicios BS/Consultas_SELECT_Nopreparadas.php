<?php 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "usuarios"; 











$password = ' ' ;
try{
    $bd = new PDO ("mysql:host=$servername; dbname=$dbname; charset=utf8mb4", $username, $password);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try{
        $stmt = $bd->query('SELECT * FROM usuarios');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($stmt->fetchAll() as $row){
            echo "Nombre: " .$row["nombre"] .", Rol:" .$row["rol"] . "<br>";
        }
    }
    catch(PDOException $err){
        die("Error:  ejecutando consulta SQL");
    }
}catch (PDOException $e){
    die ("Error con la base de datos" .$e->getMessage());
}
?>