<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $id = $_POST["id"];
  $edad = $_POST["edad"];
  $correo = $_POST["correo"];

  // Aquí puedes hacer lo que quieras con los datos ingresados, por ejemplo, imprimirlos en pantalla:
  echo "Nombre: " . $nombre . "<br>";
  echo "ID: " . $id . "<br>";
  echo "Edad: " . $edad . "<br>";
  echo "Correo electrónico: " . $correo . "<br>";
}
?>
