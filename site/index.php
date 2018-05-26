<?php  include("imports.php"); ?>
	<title>Sistema de inventarios.</title>
</head>
<body>
<div class="aplicacion">
	<?php  include("header.php"); echo"\n";?>
	<?php include("navbar.php"); echo"\n";?>
	<h1>Inventarios</h1>
	<div class="panel-modulo">
		<?php include("menu.php"); echo"\n";?>
		<div class="panel-main" id="panelModulo">
			<?php include("crud.php"); echo"\n";?>
			<?php include("panel.php"); echo"\n";?>	
		</div>
	</div>
	<?php
	echo"\n";
	?>
</div>
<?php  include("footer.php");?>