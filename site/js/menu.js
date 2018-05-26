window.onload = iniciar;
function iniciar(){
	ocultarModulos();
	ocultarFormularios();
	//document.getElementById("").style.display = 'none';

	// VARIABLES DEL PROGRAMA
	// PANEL DE MENU
	var btnProveedores = document.getElementById("btnProveedores");
	var btnCompras = document.getElementById("btnCompras");
	var btnClientes = document.getElementById("btnClientes");
	var btnInventarios = document.getElementById("btnInventarios");
	var btnVentas = document.getElementById("btnVentas");
	var btnAdministrador = document.getElementById("btnAdministrador");
	
	// BOTONES
	var borrar = document.getElementById("borrar");
	var guardar = document.getElementById("guardar");
	var nuevo = document.getElementById("nuevo");

	// MÓDULOS
	
	//EVENTOS
	btnProveedores.onclick = function(e){
		ocultarModulos();
		var panelProveedores=document.getElementById("panelProveedores");
		verModulo(panelProveedores);
		ocultarFormularios();
		var proveedoresCRUD= document.getElementById("proveedoresCRUD");
		verFormulario(proveedoresCRUD);
	}
	btnCompras.onclick = function(e){
		ocultarModulos();
		var panelCompras= document.getElementById("panelCompras");
		verModulo(panelCompras);
		ocultarFormularios();
		var comprasCRUD= document.getElementById("comprasCRUD");
		verFormulario(comprasCRUD);
	}
	btnClientes.onclick = function(e){
		ocultarModulos();
		var panelClientes= document.getElementById("panelClientes");
		verModulo(panelClientes);
		ocultarFormularios();
		var clientesCRUD= document.getElementById("clientesCRUD");
		verFormulario(clientesCRUD);
	}
	btnVentas.onclick = function(e){
		ocultarModulos();
		var panelVentas=document.getElementById("panelVentas")
		verModulo(panelVentas);
		ocultarFormularios();
		var ventasCRUD= document.getElementById("ventasCRUD");
		verFormulario(ventasCRUD);
	}
	btnInventarios.onclick = function(e){
		ocultarModulos();
		var panelInventarios= document.getElementById("panelInventarios");
		verModulo(panelInventarios);
		ocultarFormularios();
		var inventariosCRUD= document.getElementById("inventariosCRUD");
		verFormulario(inventariosCRUD);
	}
	btnAdministrador.onclick= function(e){
		ocultarModulos();
		var panelAdministrador= document.getElementById("panelAdministrador");
		verModulo(panelAdministrador);
		ocultarFormularios();
	}
	// FINCIONES

	function ocultarModulos(){
		//Ocultamos todos los módulos.
		//var moduloPorOcultar = document.getElementById("IdmoduloPorOcultar").style.display = 'none';
		var panelProveedores = document.getElementById("panelProveedores").style.display = 'none';
		var panelCompras = document.getElementById("panelCompras").style.display = 'none';
		var panelClientes = document.getElementById("panelClientes").style.display = 'none';
		var panelVentas = document.getElementById("panelVentas").style.display = 'none';
		var panelInventarios = document.getElementById("panelInventarios").style.display = 'none';
		var panelAdministrador = document.getElementById("panelAdministrador").style.display = 'none';
	}
	function ocultarFormularios(){
		var proveedoresCRUD = document.getElementById("proveedoresCRUD").style.display = 'none';
		var comprasCRUD = document.getElementById("comprasCRUD").style.display = 'none';
		//var clientesCRUD = document.getElementById("clientesCRUD").style.display = 'none';
		//var ventasCRUD = document.getElementById("ventasCRUD").style.display = 'none';
		//var inventariosCRUD = document.getElementById("inventariosCRUD").style.display = 'none';
	}
	function verModulo(modulo){
		if (modulo.style.display === "none") {
	        modulo.style.display = "block";
		    } else {
	        modulo.style.display = "none";
	    }
	}
	function verFormulario(formulario){
		if (formulario.style.display === "none") {
	        formulario.style.display = "block";
		    } else {
	        formulario.style.display = "none";
	    }
	}
	function calcular(){

	}
	/* LIMPIAMOS LA INFORMACIÓN */
	function resetear(){
		
	}
	function registrar(){
	}
}