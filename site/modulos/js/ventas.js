$(document).ready(function(){
	var url="http://127.0.0.1/inventarios/server/crud/read/compras.php";
	$.getJSON(url,function(result){
		console.log(result);
		$.each(result, function(i, field){
			var id=field.factura_compra_id;
			var proveedor_id=field.proveedor_id;
			var factura=field.factura;
			var fecha_compra=field.fecha_compra;
			$("#comprasLista").append("<tr><td>"+proveedor_id+"</td><td>"+ factura + "</td><td>"+ fecha_compra +"</td><td><a href='modulos/crud/update/compras.php?id="+id+"&proveedor_id="+proveedor_id+"&factura="+factura+"&fecha_compra="+fecha_compra+"'><img src='img/update.png' alt='Actualizar' /></a></td></tr>");
		});
	});
});