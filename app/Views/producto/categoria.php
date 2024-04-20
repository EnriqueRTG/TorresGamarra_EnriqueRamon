<?php

$q = intval($_GET['q']);

$con = mysqli_connect('localhost', 'root', '');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "ajax_demo");
$sql = "SELECT * FROM subcategorias WHERE id = '" . $q . "'";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo "<option>" . $row['nombre'] . "</option>";
}



mysqli_close($con);
