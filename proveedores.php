<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline' gap:; style-src 'self' 'unsafe-inline'; media-src *" />
    <link rel="stylesheet" type="text/css" href="../../css/index.css" />
    <link rel="stylesheet" type="text/css" href="../../css/ionic.css">
    <title>Agregar Proveedor</title>
</head>
<body>
    <div class="bar bar-header bar-positive" style="margin-bottom:80px;">
    <h1 class="title">Registrar Provvedores</h1>
    <a class="button button-clear" href="readproveedors.html">Proveedores</a>
    </div><br/><br/>
    <div class="list">
        <input type="hidden" id="id" value=""/>
        <div class="item">
            <label>Proveedor</label>
            <input type="text" id="proveedor" value=""/>
        </div>
        <div class="item">
            <label>Ciudad</label>
            <input type="text" id="ciudad" value=""/>
        </div>
        <div class="item">
            <label>Dirección</label>
            <input type="text" id="direccion" value=""/>
        </div>
        <div class="item">
            <label>Teléfono</label>
            <input type="text" id="telefono" value=""/>
        </div>
        <div class="item">
            <label>Nit</label>
            <input type="text" id="nit" value=""/>
        </div>
        <div class="item">
            <input type="button" id="borrar" class="button" value="Borrar"/>
            <input type="button" id="insert" class="button " value="Guardar"/>
        </div>
    </div>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $("#insert").click(function(){
            var proveedor=$("#proveedor").val();
            var ciudad=$("#ciudad").val();
            var direccion=$("#direccion").val();
            var telefono=$("#telefono").val();
            var nit=$("#nit").val();
            var dataString="proveedor="+proveedor+"&ciudad="+ciudad+"&direccion="+direccion+"&telefono="+telefono+"&nit="+nit+"&insert=";
            if($.trim(proveedor).length>0 & $.trim(ciudad).length>0 & $.trim(direccion).length>0){
                $.ajax({
                    type: "POST",
                    url:"http://127.0.0.1/inventarios/server/crud/create/proveedores.php",
                    data: dataString,
                    crossDomain: true,
                    cache: false,
                    beforeSend: function(){
                        $("#insert").val('Connecting...');
                    },
                    success: function(data){
                        if(data!=""){
                            alert("Guardado");
                            $("#insert").val('Guardar');
                            location.href='http://127.0.0.1/inventarios/site/index.php';
                        }else if(data=="error"){
                            alert("error");
                        }
                    }
                });
            }return false;
        });
    });
    </script>
</body>
</html>