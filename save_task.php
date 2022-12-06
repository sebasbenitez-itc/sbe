<?php
include("db.php");

if (isset($_POST['save_task'])) {
    $titulo = $_POST['title'];
    $descripcion = $_POST['description'];

    $query = "INSERT INTO mi-task(title, description) VALUES ('$titulo', '$descripcion')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("query fallo");
    }
    
    echo "grabado";

}

?>