
<script src="selecionar.js"></script>
<?php

Include "calendario.php";

$ano_atual = date('Y');
$ano = "2021";
$mes = "09";

echo "<br/>";
echo "Calendário do mês de: $mes do ano de: $ano_atual";
echo "<br/>";
MostreCalendario($mes,$ano_atual);
echo "<br/>";
echo "Calendário de: $ano_atual";
echo "<br/>";
MostreCalendarioCompleto($ano_atual);
echo "<br/>";
echo "Calendário de: $ano";
echo "<br/>";
MostreCalendarioCompleto($ano);

?>