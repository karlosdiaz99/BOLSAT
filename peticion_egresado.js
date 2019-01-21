$(obtener_registros());

function obtener_registros(egresado)
{
	$.ajax({
		url : 'consulta_busqueda_egresado.php',
		type : 'POST',
		dataType : 'html',
		data : { egresado: egresado },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});
