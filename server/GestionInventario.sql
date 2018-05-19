-----------------------------------------------
-------CREACIÓN DE LA BASE DE DATOS------------
-----------------------------------------------
CREATE DATABASE GestionInventario;
-----------------------------------------------
-----TABLA proveedores-------------------------
-----------------------------------------------
CREATE TABLE proveedores(
	proveedor_id INT(11) NOT NULL AUTO_INCREMENT,
	proveedor VARCHAR(50) NOT NULL,
	ciudad VARCHAR(25) NOT NULL,
	direccion VARCHAR(50) NOT NULL,
	telefono VARCHAR(15) NOT NULL,
	nit VARCHAR(25) NOT NULL,
	PRIMARY KEY(proveedor_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
-----------------------------------------------
--DROP TABLE proveedores;

-----TABLA factura_compras------------------------
-----------------------------------------------
CREATE TABLE factura_compras(
	factura_compra_id INT(11) NOT NULL AUTO_INCREMENT,
	proveedor_id INT(11) NOT NULL,
	factura INT(11) NOT NULL,
	fecha_compra DATE NOT NULL,
	PRIMARY KEY (factura_compra_id),
	INDEX prov_ind (proveedor_id),
	FOREIGN KEY(proveedor_id) REFERENCES proveedores(proveedor_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
-----------------------------------------------
--DROP TABLE factura_compras;
-----------------------------------------------
-----TABLA productos----------------------------
-----------------------------------------------
CREATE TABLE productos(
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
	FOREIGN KEY(factura_compra_id) REFERENCES factura_compras(factura_compra_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
--DROP TABLE productos;
-----------------------------------------------
-----TABLA clientes---------------------------
-----------------------------------------------
CREATE TABLE clientes(
	cliente_id INT(11) NOT NULL AUTO_INCREMENT,
	nombres VARCHAR(25) NOT NULL,
	apellidos VARCHAR(25) NOT NULL,
	documento VARCHAR(15) NOT NULL,
	phone VARCHAR(15),
	celular VARCHAR(15),
	PRIMARY KEY (cliente_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
--DROP TABLE clientes;
-----------------------------------------------
-----TABLA factura_clientes------------------
-----------------------------------------------
CREATE TABLE factura_clientes(
	factura_cliente_id INT(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (factura_cliente_id),
	cliente_id INT(11) NOT NULL,
	INDEX clie_ind (cliente_id),
	FOREIGN KEY (cliente_id) REFERENCES clientes(cliente_id) ON DELETE CASCADE,
	producto_id INT(11) NOT NULL,
	INDEX prod_ind(producto_id),
	FOREIGN KEY (producto_id) REFERENCES productos(producto_id) ON DELETE CASCADE,
	cantidad INT(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
-----------------------------------------------
--DROP TABLE factura_clientes;
-----------------------------------------------
-----TABLA inventario---------------------------
-----------------------------------------------
CREATE TABLE inventario(
	inventario_id INT(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (inventario_id),
	producto_id INT(11) NOT NULL,
	INDEX prod_ind (producto_id),
	FOREIGN KEY(producto_id) REFERENCES productos(producto_id) ON DELETE CASCADE,
	proveedor_id INT(11) NOT NULL,
	INDEX prov_ind (proveedor_id),
	FOREIGN KEY(proveedor_id) REFERENCES proveedores(proveedor_id) ON DELETE CASCADE,
	quantity INT(11) NOT NULL,
	factura_compra_id INT(11) NOT NULL,
	INDEX invo_ind (factura_compra_id),
	FOREIGN KEY(factura_compra_id) REFERENCES factura_compras(factura_compra_id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
--DROP TABLE inventario;