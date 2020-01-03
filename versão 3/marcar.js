
function marcar(x, y){
    alert('Consulta agendada para o dia: '+x+' as: '+y);
	window.location.href = "agendado.php?data="+x+"&hora="+y;
}
