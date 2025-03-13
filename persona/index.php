<?php
ini_set("display_errors", E_ALL);
include_once "persona.php";

$lista = [
new Persona ("Cesar","2004-07-01","5583244200"),
new Persona ("Nathalia","2006-06-10","5621191960"),
new Persona ("Juan","2004-01-14","5512345671"),
new Persona ("Mauricio","2004-07-24","5512345672"),
new Persona ("Angel","2005-04-24","5512345673"),
new Persona ("Gael","2004-03-06","5512345674"),
new Persona ("Erick","2004-08-13","5512345675"),
new Persona ("Gustavo","2004-10-01","5512345676"),
new Persona ("Pedro","2004-11-01","5512345677"),
new Persona ("Itzel","2005-02-10","5512345678"),
new Persona ("Liz","2005-12-01","5512345679"),
];

?>

<!DOCTYPE html>
<html>
    <head>
<meta charset ="utf-8">
<title>Lista de Personas></title>
<style>
    td {
        background-color: cyan;
    }
</style>
    </head>
    <body>
<h1>Lista de Personas</h1>
<table border>
<thead>  
    <tr>
       <th>Nombre</th>
       <th>Fecha Nacimiento</th>
       <th>Edad Actual</th>
       <th>Telefono</th>
    </tr>  
</thead>
<tbody> 
    <?php foreach ($lista as $p):?>
    <tr>
    <td><?php echo $p ->getNombre()?></td>    
    <td><?php echo $p ->getfecNac()?></td>    
    <td><?php echo $p ->getEdad()?></td>    
    <td><?php echo $p ->getTel()?></td>    
    </tr>   
    <?PHP endforeach?>
</tbody>
</table>
</body>
</html>