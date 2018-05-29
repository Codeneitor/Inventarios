$(document).ready(function(){
	var url="http://127.0.0.1/inventarios/server/crud/read/clientes.php";
	$.getJSON(url,function(result){
		console.log(result);
		$.each(result, function(i, field){
			var cliente_id=field.cliente_id;
			var nombres=field.nombres;
			var apellidos=field.apellidos;
			var documento=field.documento;
			var telefono=field.telefono;
			var correo=field.correo;
			$("#comprasLista").append("<tr><td>"+nombres+"</td><td>"+ apellidos + "</td><td>"+ documento +"</td><td><a href='modulos/crud/update/compras.php?id="+id+"&nombres="+nombres+"&apellidos="+apellidos+"&documento="+documento+"'><img src='img/update.png' alt='Actualizar' /></a></td></tr>");
		});
	});
});