$(document).ready(function(){
	var url="http://127.0.0.1/inventarios/server/crud/read/proveedores.php";
	$.getJSON(url,function(result){
		console.log(result);
		$.each(result, function(i, field){
			var id=field.id;
			var proveedor=field.proveedor;
			var ciudad=field.ciudad;
			var direccion=field.direccion;
			var telefono=field.telefono;
			var nit=field.nit;
			$("#proveedoresLista").append("<tr><td>"+proveedor+"</td><td>"+ ciudad + "</td><td>"+ direccion +"</td><td>"+ telefono +"</td><td>"+ nit +"</td><td><a href='form.html?id="+id+"&proveedor="+proveedor+"&ciudad="+ciudad+"&direccion="+direccion+"&telefono="+telefono+"&nit="+nit+"'>Actualizar</a></td></tr>");
		});
	});
});