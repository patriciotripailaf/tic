 

 $("#embarque").change(function(){
                                        var value = $(this).val();
                                        var e = document.getElementsByName("embarque")[0];
                                        var embarque = e.options[e.selectedIndex].text;
                                        value=JSON.parse(value);

                                        var detalles = document.getElementById("detalles");
                                        var escondido = document.getElementById("escondido");
                                        escondido.value=value['id'];
                                        var peso_bruto = 0;
                                        var peso_neto = 0;

                                        $("#Table tbody").empty();

                                        //alert(value);
                                        if(value!=null){
                                        for (var i = 0; i < value['formato'].length; i++) {
                                            if(value['valores'][value['formato'][i]]==null){
                                                value['valores'][value['formato'][i]]=0;
                                            }
                                            peso_neto = peso_neto + value['pesoneto'][value['formato'][i]]*1*value['folioxcaja'][value['formato'][i]];
                                            peso_bruto = peso_bruto + value['pesobruto'][value['formato'][i]]*1*value['folioxcaja'][value['formato'][i]];

                                            $("#Table tbody").append(
                                                "<tr><td >"+value['formato'][i]+"<input name='formatos[]' value='"+value['formato'][i]+"' type='hidden'></td>"+
                                                "<td >"+value['folioxcaja'][value['formato'][i]]+"</td>"+
                                                "<td >"+"<input name='valor[]' class='valor_ingresado' type='text' placeholder="
                                                +value['valores'][value['formato'][i]]+">"+"</td>"+
                                                "<td name='totaltr[]'></td></tr>");
                                            $(".valor_ingresado").on("keyup", actualizar);
                                        }
                                        $("#Table tbody").append("<tr><td ></td><td ></td><td >Subtotal</td><td id='subtotal'><input name='subtotal' class='valor_ingresado' type='hidden'></td></tr>"+
                                                "<tr><td ></td><td ></td><td >Descuento</td><td id='descuento'><input name='descuento[]'  onkeyup='actualizartotal()' type='text'></td></tr>"+
                                                "<tr><td ></td><td ></td><td >Total</td><td id='total'><input name='total' class='valor_ingresado' type='hidden'></td></tr>"); 

                                    }
                                    if(peso_bruto==0){
                                        var x = JSON.parse(value['detalle_carga']);
                                        alert('no tiene packing list asociado');
                                        peso_bruto=x['kilos_brutos'];
                                        peso_neto=x['kilos_netos'];
                                        $('#enviar1').hide();
                                    }
                                    else{
                                        $('#enviar1').show();
                                    }
                                    if( value['consignatario']==null){
                                        consignatario = 'no ingresado';
                                    }
                                    else{
                                        consignatario = value['consignatario']['nombre'];
                                    }
                                    if( value['modalidad_venta']==null){
                                        modalidad_venta = 'no ingresado';
                                    }
                                    else{
                                        modalidad_venta = value['modalidad_venta'];
                                    }
                                    if( value['modalidad_flete']==null){
                                        modalidad_flete = 'no ingresado';
                                    }
                                    else{
                                        modalidad_flete = value['modalidad_flete'];
                                    }
                                    if( value['clausula_venta']==null){
                                        clausula_venta = 'no ingresado';
                                    }
                                    else{
                                        clausula_venta = value['clausula_venta'];
                                    }
                                    
                                    detalles.value = 'Embarque N°: '+embarque+' \nModalidad de venta: '+modalidad_venta
        +' \nClausula de venta '+clausula_venta+' \nFlete: '+modalidad_flete+' \nConsignatario: '
        +consignatario+"\nPeso bruto del embarque: "+peso_bruto+" KG\n"
                                        +"Peso neto del embarque: "+peso_neto+" KG";
                         
                                    }); 

                                   function actualizar(){

                                    var par = $(this).parent().parent();
                                    var numero_cajas = par.children("td:nth-child(2)");
                                    var valor = par.children("td:nth-child(3)");
                                    var totaltr = par.children("td:nth-child(4)");
                                    var subtotaltr = valor.children().val()*1 * numero_cajas.html()*1;
                                    totaltr.html(subtotaltr);
                                    var totales =  document.getElementsByName('totaltr[]');
                                    var subtotal = 0;
                                    for (var i = 0; i < totales.length; i++) {
                                        subtotal = subtotal + totales[i].innerHTML*1;
                                    }

                                    $("#subtotal").html(subtotal);

            


                                    actualizartotal();
                                }
                                    function actualizartotal(){


                                    var subtotal = $("#subtotal").html();

                                    var descuento =  document.getElementsByName('descuento[]');
                
                                    var total = subtotal*1 * (100 - descuento[0].value*1) / 100;

                                    if (descuento[0].value==''){
                                        total = subtotal;
                                    }

                                    $("#total").html(total);


                                   }

                                   function soloNumeros(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }