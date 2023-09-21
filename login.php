<?php
echo "<link rel=stylesheet href=login.css>";
$servername = "cheffsitos";
$username = "brandon";
$password = "brandon2102";
$usuario = $_POST['usuario'];
$contrasena = $_POST['password'];


//echo "la clave es: ". $clave . "nombre es ". $nombre;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//include ('connect.php');

//$cmd5 = md5($contrasena);
$sql = "SELECT * FROM usuario WHERE usuario='$usuario' and contraseña = '$contrasena'";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
  //$row = $result->fetch_assoc()
  echo '<script>
		alert("clave correcta")
   </script>';
   header("Location: pagina.html");
   exit();
   

} else {
    echo '<script>
    alert("clave o login incorrecto")
    var acceso = 0
    </script>';
    header("Location: login.html");
    exit();
   

}

$conn->close();
?>
