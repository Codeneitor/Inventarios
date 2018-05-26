<?php
//ESTA CONEXIÓN SERÁ REEMPLAZADA POR UNA DINÁMICA
//LOS PARÁMETROS LOS RECIBIREMOS POR _POST
$db="Inventarios";
$conexion=mysqli_connect("localhost","Programador","programador");
if(!$conexion){
	die("Error de conexion:<br>".mysqli_error());
}else{
	if(mysqli_query($conexion,"CREATE DATABASE $db")){
		echo"Se ha creado la base de datos<br>";
		//SELECCIONAMOS LA BASE DE DATOS
		mysqli_select_db($conexion,$db);
		//INICIAMOS LA CREACIÓN DE LAS TABLAS
		//TABLA proveedores
		$sqlProveedores="CREATE TABLE proveedores(
		proveedor_id INT(11) NOT NULL AUTO_INCREMENT,
		proveedor VARCHAR(50) NOT NULL,
		ciudad VARCHAR(25) NOT NULL,
		direccion VARCHAR(50) NOT NULL,
		telefono VARCHAR(15) NOT NULL,
		nit VARCHAR(25) NOT NULL,
		PRIMARY KEY(proveedor_id)) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";
		//ENVIAMOS LA CONSULTA
		if(mysqli_query($conexion,$sqlProveedores)){
			echo"La tabla Proveedores ha sido creada.<br>";
			//TABLA proveedores
			$sqlFacturaCompras="CREATE TABLE compras(
			factura_compra_id INT(11) NOT NULL AUTO_INCREMENT,
			proveedor_id INT(11) NOT NULL,
			factura INT(11) NOT NULL,
			fecha_compra DATE NOT NULL,
			PRIMARY KEY (factura_compra_id),
			INDEX prov_ind (proveedor_id),
			FOREIGN KEY(proveedor_id) REFERENCES proveedores(proveedor_id) ON DELETE CASCADE
			) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";
			//ENVIAMOS LA CONSULTA
			if(mysqli_query($conexion,$sqlFacturaCompras)){
				echo"La tabla compras ha sido creada.<br>";
				$sqlProductos ="CREATE TABLE productos(
				producto_id INT(11) NOT NULL AUTO_INCREMENT,
				referencia VARCHAR(25) NOT NULL,
				descripcion VARCHAR(50) NOT NULL,
				tamano VARCHAR(25) NOT NULL,
				color VARCHAR(25) NOT NULL,
				costo INT(11) NOT NULL,
				precio INT(11) NOT NULL,
				PRIMARY KEY (producto_id),
				proveedor_id INT(11) NOT NULL,
				INDEX prov_ind (proveedor_id),
				FOREIGN KEY(proveedor_id) REFERENCES proveedores(proveedor_id) ON DELETE CASCADE,
				factura_compra_id INT(11) NOT NULL,
				INDEX factura_ind (factura_compra_id),
				FOREIGN KEY(factura_compra_id) REFERENCES compras(factura_compra_id) ON DELETE CASCADE
				) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";
				if(mysqli_query($conexion,$sqlProductos)){
					echo"La tabla productos ha sido creada.<br>";
					$sqlClientes="CREATE TABLE clientes(
					cliente_id INT(11) NOT NULL AUTO_INCREMENT,
					nombres VARCHAR(25) NOT NULL,
					apellidos VARCHAR(25) NOT NULL,
					documento VARCHAR(15) NOT NULL,
					telefono VARCHAR(25) NOT NULL,
					correo VARCHAR(50),
					PRIMARY KEY (cliente_id)
					) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";
					if(mysqli_query($conexion,$sqlClientes)){
						echo"La tabla clientes ha sido creada.<br>";
						$sqlFacturaClientes="CREATE TABLE ventas(
						factura_cliente_id INT(11) NOT NULL AUTO_INCREMENT,
						PRIMARY KEY (factura_cliente_id),
						cliente_id INT(11) NOT NULL,
						INDEX clie_ind (cliente_id),
						FOREIGN KEY (cliente_id) REFERENCES clientes(cliente_id) ON DELETE CASCADE,
						producto_id INT(11) NOT NULL,
						INDEX prod_ind(producto_id),
						FOREIGN KEY (producto_id) REFERENCES productos(producto_id) ON DELETE CASCADE,
						cantidad INT(6) NOT NULL,
						numero_factura VARCHAR(15)
						) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";
						if(mysqli_query($conexion,$sqlFacturaClientes)){
							echo "La tabla ventas ha sido creada.<br>";
							$sqlInventario="CREATE TABLE inventario(
							inventario_id INT(11) NOT NULL AUTO_INCREMENT,
							PRIMARY KEY (inventario_id),
							producto_id INT(11) NOT NULL,
							INDEX prod_ind (producto_id),
							FOREIGN KEY(producto_id) REFERENCES productos(producto_id) ON DELETE CASCADE,
							proveedor_id INT(11) NOT NULL,
							INDEX prov_ind (proveedor_id),
							FOREIGN KEY(proveedor_id) REFERENCES proveedores(proveedor_id) ON DELETE CASCADE,
							existencias INT(11) NOT NULL,
							factura_compra_id INT(11) NOT NULL,
							INDEX invo_ind (factura_compra_id),
							FOREIGN KEY(factura_compra_id) REFERENCES compras(factura_compra_id) ON DELETE CASCADE
							) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;";
							if(mysqli_query($conexion,$sqlInventario))
								echo "La tabla inventario ha sido creada.<h2>Instalación Finalizada</h2>", include("index.php");
							else
								echo "No se ha podido crear la tabla inventario";
						}else{
							echo "No se ha podido crear la tabla ventas";
						}
					}else{
						echo "No se ha podido crear la tabla clientes";
					}
				}else{
					echo "No se ha podido crear la tabla productos";
				}
			}else{
				echo "No se ha podido crear la tabla compras".mysqli_error();
			}
		}else{
			echo "No se ha podido crear la tabla proveedores".mysqli_error();
		}
	}else{
		echo"Error de INSTALACIÓN:<br>".mysqli_error();
	}
}
mysqli_close($conexion);
?>