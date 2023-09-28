<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP N°3</title>
</head>
<body>
 <h1>MI TP N° 3</h1>

<?php

//EJERCICIO 1:
//Mostrar los núms del 1 al 100

print "<h2>Ejercicio 1</h2\n"; 

$i=1;
while ($i <= 100) {
   print "<p>$i</p>\n"; 
   $i++; 
}

//EJERCICIO 2:
//Mostrar los núms del 100 al 1

print "<h2>Ejercicio 2</h2>\n"; 

$i=100;
do {
   print "<p>$i</p>\n"; 
   $i--; 
} while ($i>=1);

//EJERCICIO 3:
//Mostrar los núms pares del 1 al 100

print "<h2>Ejercicio 3</h2>\n"; 

for ($i=2; $i<=100; $i+=2) {
   print "<p>$i</p>\n"; 
}

//EJERCICIO 4:
//Mostrar los núms impares del 1 al 100

print "<h2>Ejercicio 4</h2>\n"; 

for ($i=1; $i<=100; $i+=2) {
   print "<p>$i</p>\n"; 
}

//EJERCICIO 5:
//Mostrar la suma de núms del 1 al 20

print "<h2>Ejercicio 5</h2>\n"; 


$suma=0;
for ($i=1; $i<=20; $i++) { 
   $suma=$suma+$i;
   print "<p>$suma</p>\n";
}

//$suma=$suma+i; === $suma+=i;

//EJERCICIO 6:
//Mostrar la suma de núms pares del 1 al 20

print "<h2>Ejercicio 6</h2>\n"; 

$suma=0;
for ($i=2; $i<=20; $i+=2) { 
   $suma+=$i;
   print "<p>$suma</p>\n";
}


?>
</body>
</html>