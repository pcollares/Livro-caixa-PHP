<?php

function formata_dinheiro($valor) {
    $valor = number_format($valor, 2, ',', '');
    return "R$ " . $valor;
}

function mostraMes($m) {
    switch ($m)
    {
        case 01: case 1: $mes = "Janeiro";
            break;
        case 02: case 2: $mes = "Fevereiro";
            break;
        case 03: case 3: $mes = "Mar&ccedil;o";
            break;
        case 04: case 4: $mes = "Abril";
            break;
        case 05: case 5: $mes = "Maio";
            break;
        case 06: case 6: $mes = "Junho";
            break;
        case 07: case 7: $mes = "Julho";
            break;
        case 8: case 8: $mes = "Agosto";
            break;
        case 9: case 9: $mes = "Setembro";
            break;
        case 10: $mes = "Outubro";
            break;
        case 11: $mes = "Novembro";
            break;
        case 12: $mes = "Dezembro";
            break;
    }

    return $mes;
}



?>
