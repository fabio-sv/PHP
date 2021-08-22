<?php
// coleta dados das espécies
$numero_teste = (int)readline();
$i = 0;

while($numero_teste > $i){
    $quantia = readline();
    $quantia = explode(' ', $quantia);

    if($quantia > 0 and $quantia < 16) {
        $GLOBALS[$valor = (int)$quantia[0]];
        $GLOBALS[$tipo = $quantia[1]];
        $GLOBALS[$arr[$i] = array($tipo => $valor)];
    }
    $i++;
}
// soma das espécies
$valor_c = array_sum(array_column($arr, "C"));
$valor_s = array_sum(array_column($arr, "S"));
$valor_r = array_sum(array_column($arr, "R"));
$total = $valor_c + $valor_s + $valor_r;

// porcentagem 
$porcentagem_coelhos = ($valor_c / $total) * 100;
$porcentagem_sapos = ($valor_s / $total) * 100;
$porcentagem_ratos = ($valor_r / $total) * 100;
//soma das especies
echo("\n");
echo("Total: " . $total . " cobaias\n");
echo("Total de coelhos: " . $valor_c . "\n");
echo("Total de ratos: " . $valor_r . "\n");
echo("Total de sapos: " . $valor_s . "\n");
echo("Percentual de coelhos: " . sprintf('%0.2f', $porcentagem_coelhos) . " %\n");
echo("Percentual de ratos: " . sprintf('%0.2f', $porcentagem_ratos) . " %\n");
echo("Percentual de sapos: " . sprintf('%0.2f', $porcentagem_sapos) . " %\n");
?>