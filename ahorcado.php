<?php
//Juego del ahorcado
//Creamos las variables que recogen la información 
//que necesitamos para jugar
$palabraPorAdivinar = $argv[1];
$numOportunidades = 0;
$numLetrasAcertadas = 0;
$arrayPalabraPorAdivinar = str_split(($palabraPorAdivinar));
for ($i = 0; $i < count($arrayPalabraPorAdivinar); $i++) {
    $arrayPalabraMostrada[$i] = '_';
}
$contador = 2;
//El usuario introduce una letra por cada oportunidad
//de las 5 que tiene
while ($numOportunidades < 5) {
    $letra = $argv[$contador];
    //Buscamos las letras introducidas a ver si coinciden o no
    for ($y = 0; $y < count($arrayPalabraPorAdivinar); $y++) {
        if ($letra == $arrayPalabraPorAdivinar[$y]) {
            $arrayPalabraMostrada[$y] = $letra;
            $numLetrasAcertadas++;
        }
    }
    $numOportunidades++;
    $contador++;
}
?>
<p>Has acertado <?php echo $numLetrasAcertadas?> letras.</p>
<p>La palabra a buscar ha quedado <b><?php foreach ($arrayPalabraMostrada as $iterador){
   echo $iterador ." "; 
   }?></b>.</p>