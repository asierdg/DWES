<?php
$conexion = mysqli_connect("localhost", "root", "", "PracticaAlumnado") 
    or die("Problemas con la conexión");

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$curso = $_POST['curso'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de Alumnado</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<?php

$consulta_curso = mysqli_query($conexion, "SELECT COUNT(*) AS total FROM alumnado WHERE curso='$curso'")
    or die("Problemas en el select:".mysqli_error($conexion));
$row = mysqli_fetch_array($consulta_curso);

if ($row['total'] >= 25) {
    echo "<p>No se pueden matricular más de 25 alumnos en $curso.</p>";
} else {
    mysqli_query($conexion, "INSERT INTO alumnado (nombre, apellidos, fecha_nacimiento, curso, email, contrasena)
                VALUES ('$nombre','$apellidos','$fecha_nacimiento','$curso','$email','$contrasena')")
    or die("Problemas en el insert:".mysqli_error($conexion));

    echo "<p>Alumno matriculado correctamente.</p>";
}

echo "<h2>Listado de Alumnado</h2>";

$registros = mysqli_query($conexion, "SELECT nombre, apellidos, fecha_nacimiento, curso, email 
                                        FROM alumnado 
                                        ORDER BY apellidos, curso")
    or die("Problemas en el select:".mysqli_error($conexion));

if (mysqli_num_rows($registros) > 0) {
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Apellidos</th><th>Fecha Nacimiento</th><th>Curso</th><th>Email</th></tr>";

    while ($reg = mysqli_fetch_array($registros)) {
        echo "<tr>";
        echo "<td>".$reg['nombre']."</td>";
        echo "<td>".$reg['apellidos']."</td>";
        echo "<td>".$reg['fecha_nacimiento']."</td>";
        echo "<td>".$reg['curso']."</td>";
        echo "<td>".$reg['email']."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>No hay alumnado matriculado todavía.</p>";
}

mysqli_close($conexion);
?>
</body>
</html>