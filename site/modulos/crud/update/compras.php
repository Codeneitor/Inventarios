<div id="comprasCRUD" class="panel-modulo-crud">
            <table class="tabla-crud degrade">
                <tr>
                    <td>
                        <div>Opciones Compras</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="list">
                            <input type="hidden" id="id" value=""/>
                            <div class="item">
                                <label>Proveedor</label>
                                <input type="text" id="proveedorCompra" value=""/>
                            </div>
                            <div class="item">
                                <label>N°Factura</label>
                                <input type="text" id="numFacturaCompra" value=""/>
                            </div>
                            <div class="item">
                                <label>Fecha</label>
                                <input type="text" id="fechaCompra" value=""/>
                            </div>
                            <div class="item">
                                <input type="button" id="borrar" class="button" value="Borrar"/>
                                <input type="button" id="insertCompra" class="button " value="Guardar"/>
                            </div>
                        </div>
                        <script type="text/javascript">
                        $(document).ready(function(){
                            $("#insertCompra").click(function(){
                                var proveedorCompra=$("#proveedorCompra").val();
                                var numFacturaCompra=$("#numFacturaCompra").val();
                                var fechaCompra=$("#fechaCompra").val();
                                var dataString="proveedorCompra="+proveedorCompra+"&numFacturaCompra="+numFacturaCompra+"&fechaCompra="+fechaCompra+"&insertCompra=";
                                if($.trim(proveedorCompra).length>0 & $.trim(numFacturaCompra).length>0 & $.trim(fechaCompra).length>0){
                                    $.ajax({
                                        type: "POST",
                                        url:"http://127.0.0.1/inventarios/server/crud/create/compras.php",
                                        data: dataString,
                                        crossDomain: true,
                                        cache: false,
                                        beforeSend: function(){
                                            $("#insertCompra").val('Connecting...');
                                        },
                                        success: function(data){
                                            if(data!=""){
                                                alert("Guardado");
                                                $("#insertCompra").val('Guardar');
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