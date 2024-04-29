<?php
session_start();
if (isset($_POST['fecha']) && !empty($_POST['fecha']) &&
isset($_POST['nombres']) && !empty($_POST['nombres']) &&
isset($_POST['apellidos']) && !empty($_POST['apellidos']) &&
isset($_POST['modelo']) && !empty($_POST['modelo']) &&
isset($_POST['placa']) && !empty($_POST['placa']) &&
isset($_POST['kilometraje']) && !empty($_POST['kilometraje']) &&
isset($_POST['llantas']) && !empty($_POST['llantas']) &&
isset($_POST['frenos']) && !empty($_POST['frenos']) &&
isset($_POST['luces']) && !empty($_POST['luces']) &&
isset($_POST['niveles']) && !empty($_POST['niveles']) &&
isset($_POST['bateria']) && !empty($_POST['bateria']) &&
isset($_POST['cinturones']) && !empty($_POST['cinturones']) &&
isset($_POST['espejos']) && !empty($_POST['espejos']) &&
isset($_POST['pito']) && !empty($_POST['pito']) &&
isset($_POST['kit']) && !empty($_POST['kit']) &&
isset($_POST['combustible']) && !empty($_POST['combustible']) &&
isset($_POST['documentos']) && !empty($_POST['documentos'])
){
    try {
        //code...
        include("../model/MySQL.php");
    $conexion = new MySQL();
    $pdo = $conexion->conectar();
    $fecha = $_POST['fecha'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $kilometraje = $_POST['kilometraje'];
    $llantas = $_POST['llantas'];
    $frenos = $_POST['frenos'];
    $luces = $_POST['luces'];
    $niveles = $_POST['niveles'];
    $bateria = $_POST['bateria'];
    $cinturones = $_POST['cinturones'];
    $espejos = $_POST['espejos'];
    $pito = $_POST['pito'];
    $kit = $_POST['kit'];
    $combustible = $_POST['combustible'];
    $documentos = $_POST['documentos'];
    $obserllantas =  $_POST['Obserllantas'];
    $obserfrenos =  $_POST['Obserfrenos'];
    $obserluces =  $_POST['Obserluces'];
    $obserniveles =  $_POST['Obserniveles'];
    $obserbateria =  $_POST['Obserbateria'];
    $obsercinturones =  $_POST['Obsercinturones'];
    $obserespejos =  $_POST['Obserespejos'];
    $obserpito =  $_POST['Obserpito'];
    $obserkit =  $_POST['Obserkit'];
    $obsercombustible =  $_POST['Obsercombustible'];
    $obserdocumentos =  $_POST['Obserdocumentos'];
    //FORMATEO FECHA
    $fecha2 = date('Y-m-d', strtotime($_POST['fecha']));

    $sql = "INSERT INTO inspecciones (fecha,nombres,apellidos,modelo,placa,kilometraje,llantas,obserllantas,frenos,obserfrenos,
    luces,obserluces,liquidos,obserliquidos,bateria,obserbateria,cinturones,obsercinturones,espejos,obserespejos,
    pito,obserpito,kit,obserkit,combustible,obsercombustible,documentos,obserdocumentos) 
    VALUES (:fecha,:nombres,:apellidos,:modelo,:placa,:kilometraje,:llantas,:obserllantas,:frenos,:obserfrenos,
    :luces,:obserluces,:liquidos,:obserliquidos,:bateria,:obserbateria,:cinturones,:obsercinturones,:espejos,
    :obserespejos,:pito,:obserpito,:kit,:obserkit,:combustible,:obsercombustible,:documentos,:obserdocumentos)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':fecha', $fecha2, PDO::PARAM_STR);
        $stmt->bindParam(':nombres', $nombres, PDO::PARAM_STR);
        $stmt->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
        $stmt->bindParam(':modelo', $modelo, PDO::PARAM_STR);
        $stmt->bindParam(':placa', $placa, PDO::PARAM_STR);
        $stmt->bindParam(':kilometraje', $kilometraje, PDO::PARAM_STR);
        $stmt->bindParam(':llantas', $llantas, PDO::PARAM_STR);
        $stmt->bindParam(':obserllantas', $obserllantas, PDO::PARAM_STR);
        $stmt->bindParam(':frenos', $frenos, PDO::PARAM_STR);
        $stmt->bindParam(':obserfrenos', $obserfrenos, PDO::PARAM_STR);
        $stmt->bindParam(':luces', $luces, PDO::PARAM_STR);
        $stmt->bindParam(':obserluces', $obserluces, PDO::PARAM_STR);
        $stmt->bindParam(':liquidos', $niveles, PDO::PARAM_STR);
        $stmt->bindParam(':obserliquidos', $obserniveles, PDO::PARAM_STR);
        $stmt->bindParam(':bateria', $bateria, PDO::PARAM_STR);
        $stmt->bindParam(':obserbateria', $obserbateria, PDO::PARAM_STR);
        $stmt->bindParam(':cinturones', $cinturones, PDO::PARAM_STR);
        $stmt->bindParam(':obsercinturones', $obsercinturones, PDO::PARAM_STR);
        $stmt->bindParam(':espejos', $espejos, PDO::PARAM_STR);
        $stmt->bindParam(':obserespejos', $fecha, PDO::PARAM_STR);
        $stmt->bindParam(':pito', $pito, PDO::PARAM_STR);
        $stmt->bindParam(':obserpito', $obserpito, PDO::PARAM_STR);
        $stmt->bindParam(':kit', $kit, PDO::PARAM_STR);
        $stmt->bindParam(':obserkit', $obserkit, PDO::PARAM_STR);
        $stmt->bindParam(':combustible', $combustible, PDO::PARAM_STR);
        $stmt->bindParam(':obsercombustible', $obsercombustible, PDO::PARAM_STR);
        $stmt->bindParam(':documentos', $documentos, PDO::PARAM_STR);
        $stmt->bindParam(':obserdocumentos', $obserdocumentos, PDO::PARAM_STR);
        $stmt->execute();
        $_SESSION['mensajeBien'] = "OK";
        header("Location: ../index.php");
    } catch (\Throwable $th) {
        //throw $th;
        $_SESSION['mensajeMal'] = "ERROR";
        header("Location: ../index.php");
    }
    

}else{
    $_SESSION['mensajeVacio'] = "ERROR";
    header("Location: ../index.php");
} 
?>