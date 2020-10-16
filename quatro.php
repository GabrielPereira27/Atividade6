<?php
$txt1 = "O João foi à oficina e a
reparação do carro é de 78,00 € sem IVA. Qual é o preço com IVA?";
$txt2 = "O preço com IVA é ";
$preço = 78;
$IVA = 0.23;
$valor = ($preço * $IVA);
$soma = ($preço + $IVA);
echo $txt2. "" .$soma;
?>