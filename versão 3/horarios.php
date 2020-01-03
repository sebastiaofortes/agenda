<?php
function horarios ($data,$hora,$inicio_expediente,$fim_expediente,$inicio_almoço,$fim_almoço,$tempo_atendimento,$minutos_do_dia) {
// Converte os horários de atendimento para o tipo time
$inicio_expediente = strtotime($inicio_expediente);
$fim_expediente = strtotime($fim_expediente);
$inicio_almoço = strtotime($inicio_almoço);
$fim_almoço = strtotime($fim_almoço);

// calcula o numero máximo de atendimentos diários
$atendimentos = floor($minutos_do_dia / $tempo_atendimento); 
echo "Número de atendimentos: $atendimentos <br>";

echo "<br>AGENDA:<br>";

echo "<input type='hidden' id='data' name='data' value=$data>";

// laço que gera os períodos de atendimento
for($i = 0; $i < $atendimentos; $i++)
{

echo "<input type='button' value='$hora' onclick='marcar(data.value, this.value)'>";
echo " as ";
// Soma 30 Minutos
echo $hora = date('H:i:s', strtotime('+'.$tempo_atendimento.' minute', strtotime($hora)));

// Nesta parte do código que eu recomendo colocar uma consulta SQL para verificar se o horário está disponível

echo "-";

$inicio_atendimento = strtotime($hora);
$hora_anterior = date('H:i:s', strtotime('-'.$tempo_atendimento.' minute', strtotime($hora)));
$atendimento_anterior = strtotime($hora_anterior);

if($atendimento_anterior >= $fim_expediente || $inicio_atendimento <= $inicio_expediente){
	echo "fechado";	
}
else
if($atendimento_anterior >= $inicio_almoço & $inicio_atendimento <= $fim_almoço){
	echo "almoço";	
}
else
if($atendimento_anterior <= $inicio_almoço & $inicio_atendimento >= $fim_almoço){
	echo "horário de almoço em conflito com o horário de UM atendimentos";	
}
else
if($atendimento_anterior <= $inicio_almoço & $inicio_atendimento > $inicio_almoço || $inicio_atendimento >= $fim_almoço & $atendimento_anterior < $fim_almoço){
	echo "horário de almoço em conflito com o horário de DOIS atendumento";	
}

echo "<br>";
}
}
?>