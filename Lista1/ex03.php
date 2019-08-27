<?php 
    $assinatura = 32;
    $impulsos = 0.09;
    $chamadas = 0.35;

    $fatura = $assinatura + (164*$impulsos) + ($chamadas*35);

    echo "O valor da fatura é de: " .$fatura;

?>