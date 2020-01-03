
<script src="marcar.js"></script>

<?php

include "horarios.php";

$data = $_GET['data'];

$hora = '00:00:00';
$inicio_expediente = "08:00:00";
$fim_expediente = "18:00:00";
$inicio_almoço = "12:00:00";
$fim_almoço = "13:00:00";
$tempo_atendimento = 30;
$minutos_do_dia = 24*60;

echo "CONFIGURAÇÕES: <br>";
echo "Data:$data <br>";
echo "Início do expediente: $inicio_expediente <br>";
echo "Fim do expediente: $fim_expediente <br>";
echo "Início do almoço: $inicio_almoço <br>";
echo "Fim do almoço: $fim_almoço <br>";
echo "Tempo de atendimento em minutos: $tempo_atendimento <br>";
echo "Minutos do dia: $minutos_do_dia <br>";

horarios ($data,$hora,$inicio_expediente,$fim_expediente,$inicio_almoço,$fim_almoço,$tempo_atendimento,$minutos_do_dia);
?>