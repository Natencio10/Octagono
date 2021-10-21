<!DOCTYPE html>
<html lang="en">
<head><title>CALCULO DEL AREA DEL OCTAGONO</title></head>
<body>
<?php
if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
$lados = $_POST['lados'];
$apotema = null;
$perimetro = null;
$area = null;
if(!empty($lados)) {
if(is_numeric($lados)) {
echo "<h2 align='center'>CALCULO DEL AREA DEL
OCTAGONO</h2>";
$perimetro = $lados * 8;
$apotema = $lados * 1.2071;
$area = ($perimetro * $apotema) / 2;
echo "<br>Medida de lados: " . $lados;
echo "<br>Perimetro: " . $perimetro;
echo "<br>Apotema:" . $apotema;
echo "<br/><br/>";
echo "<br>Área del octagono: " . $area;
echo "<br/><br/>";
echo "<a href='index.html'>Regresar</a>";
}else{
echo "El valor de los lados deben de ser
numéricos";
echo "<a href='index.html'>Regresar</a>";
}
}else{
echo "El valor de los lados no debe de estar
vacíos";
echo "<a href='index.html'>Regresar</a>";
}
}else{
echo "debe de realizar el envío pulsado el botón de calcular";
echo "<a href='index.html'>Regresar</a>";
}
?>
</body>
</html>