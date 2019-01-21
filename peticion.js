$(obtener_registros());

function obtener_registros(empresa)
{
	$.ajax({
		url : 'consulta_busqueda.php',
		type : 'POST',
		dataType : 'html',
		data : { empresa: empresa },
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
