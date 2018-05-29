$(document).ready(function(){
    var url="http://127.0.0.1/inventarios/server/crud/read/proveedores.php";
    $.getJSON(url,function(result){//FUNCIÓN QUE CONSULTA LOS PROVVEDORES
        console.log(result);
        $.each(result, function(i, field){
            var proveedor_id=field.proveedor_id;
            var proveedor=field.proveedor;
            var ciudad=field.ciudad;
            var direccion=field.direccion;
            var telefono=field.telefono;
            var nit=field.nit;
            $("#proveedoresLista").append("<tr><td>"+proveedor+"</td><td>"+ciudad+"</td><td>"+ direccion +"</td><td>"+ telefono +"</td><td>"+ nit +"</td><td><a href='modulos/crud/update/proveedor.html?proveedor_id="+proveedor_id+"&proveedor="+proveedor+"&ciudad="+ciudad+"&direccion="+direccion+"&telefono="+telefono+"&nit="+nit+"'><img src='img/update.png' alt='Actualizar' /></a></td></tr>");
        });
    });
    $("#insertProveedor").click(function(){//FUNCIÓN QUE ACTUALIZA UN PROVVEDOR
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
                        console.log("Proveedor Guardado");
                        /**
                        
                        */
                        //alert("Guardado");
                        $("#insert").val('Guardar');
                        location.href='http://127.0.0.1/inventarios/site/index.php';
                    }else if(data=="error"){
                        alert("error");
                    }
                }
            });
        }return false;
    });
    $("#update").click(function(){//FUNCIÓN QUE ACTUALIZA UN PROVVEDOR
        var proveedor_id=$("#proveedor_id").val();
        var proveedor=$("#proveedor").val();
        var ciudad=$("#ciudad").val();
        var direccion=$("#direccion").val();
        var telefono=$("#telefono").val();
        var nit=$("#nit").val();
        var dataString="proveedor_id="+proveedor_id+"&proveedor="+proveedor+"&ciudad="+ciudad+"&direccion="+direccion+"&telefono="+telefono+"&nit="+nit+"&update=";
        $.ajax({
            type: "POST",
            url:"http://127.0.0.1/inventarios/server/crud/update/proveedores.php",
            data: dataString,
            crossDomain: true,
            cache: false,
            beforeSend: function(){
                $("#update").val('Connecting...');
            },
            success: function(data){
                if(data=="success"){
                    alert("Actualizado");
                    $("#update").val("Actualizar");
                    location.href='../../../index.php';
                }
                else if(data=="error"){
                    alert("error");
                }
            }
        });
    });
    $("#borrar").click(function(){//FUNCIÓN QUE BORRA UN PROVVEDOR
        var proveedor_id=$("#proveedor_id").val();
        var dataString="proveedor_id="+proveedor_id+"&delete=";
        $.ajax({
            type: "GET",
            url:"http://127.0.0.1/inventarios/server/crud/delete/proveedores.php",
            data: dataString,
            crossDomain: true,
            cache: false,
            beforeSend: function(){
                $("#borrar").val('Connecting...');
            },
            success: function(data){
                if(data=="success"){
                    alert("Borrado");
                    $("#borrar").val("Borrar");
                    location.href='http://localhost/inventarios/site/index.php';

                }else if(data=="error"){
                    alert("error");
                }
            }
        });
    });//FIN DE LA FUNCION QUE BORRA UN PROVEEDOR
});