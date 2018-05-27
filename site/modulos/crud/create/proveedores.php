<?php
?>
<div id="proveedoresCRUD" class="panel-modulo-crud">
            <table class="tabla-crud degrade">
                <tr>
                    <td>
                        <div>Opciones Proveedores</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        
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

                    
                    </td>
                </tr>
            </table>
        </div>