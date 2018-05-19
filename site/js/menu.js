window.onload = iniciar;
function iniciar(){

	// VARIABLES DEL PROGRAMA
	var panelModulo = document.getElementById("panelModulo");
	// PANEL DE MENU
	var proveedores = document.getElementById("proveedores");
	var compras = document.getElementById("compras");
	var inventarios = document.getElementById("inventarios");
	var clientes = document.getElementById("clientes");
	var ventas = document.getElementById("ventas");
	var administrador = document.getElementById("administrador");
	
	// BOTONES
	var borrar = document.getElementById("borrar");
	var promedio = document.getElementById("promedio");
	var guardar = document.getElementById("guardar");
	var nuevo = document.getElementById("nuevo");

	// MÓDULOS
	
	//EVENTOS
	proveedores.onclick = function(e){
		verModulo(panelModulo);
	}
	compras.onclick = function(e){
		verModulo(compras);
	}
	inventarios.onclick = function(e){
	}
	clientes.onclick = function(e){
	
	}
	ventas.onclick = function(e){
	
	}
	// FINCIONES
	function ocultar(){
		var tblProveedores = document.getElementById("tabla-proveedores");
		if (tblProveedores.style.display === "none") {
	        tblProveedores.style.display = "block";
		    } else {
	        tblProveedores.style.display = "none";
	    }
	}
	function verModulo(modulo){
		if (modulo.style.display === "none") {
	        modulo.style.display = "block";
		    } else {
	        modulo.style.display = "none";
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