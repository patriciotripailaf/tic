
    
    


    //Add, Save, Edit and Delete functions code
    $(".btnEdit_granel").bind("click", Edit_granel);
    $(".btnDelete_granel").bind("click", Delete_granel);
    $("#btn_granel").bind("click", Add_granel);

    var id_formato = [];
    var id_variedad = [];
    var nombres_formatos= [];
    var nombres_variedad= [];
    var pesos_brutos= [];
    var pesos_netos= [];
    var bins_nombre = [];
    var bins_peso = [];
    var tarja;
    var tarjainicial;

    var cantidad_tarjas_i=0;
    var cantidad_embaladas_i=0;
    var cantidad_tarjas_f=0;
    var cantidad_embaladas_f=0;
/*
    function soloNumeros(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }*/

      function validacion(){
        var granel = document.getElementsByName('PesoP[]');
        var embalado = document.getElementsByName('Folios[]');
        if(granel.length==0 && embalado.length==0){
            alert('debe ingresar una tarja');
            return false;
        }
        var granel_i = document.getElementsByName('Variedad_granel_i[]');
        var embalado_i = document.getElementsByName('Variedad_embalado_i[]');

        if(granel_i.length>0 || embalado_i.length>0){
            alert('debe guardar las tarjas para enviar la informacion');
            return false;
        }
        return true;
      }

      function soloNumeros(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

      function inicio (a, b, c, d){
        for (var i = 0; i < a.length; i++) {
            nombres_variedad.push(a[i]['variedad']);
            id_variedad.push(a[i]['id']);
        }

        for (var i = 0; i < b.length; i++) {
            id_formato.push(b[i]['id']);
            nombres_formatos.push(b[i]['nombre']);
            pesos_netos.push(b[i]['peso_neto']);
            pesos_brutos.push(b[i]['peso_bruto']);
        }

        for (var i = 0; i < d.length; i++) {
            bins_nombre.push(d[i]['nombre']);
            bins_peso.push(d[i]['peso_kg']);
        }

        tarjainicial = c;
        tarja = tarjainicial;
    }

    function setvariedad(selected){

        selected = selected - 1;
        var variedad = "<select class='select2' name='Variedad_granel_i[]'>";
        for (var i = 0; i < nombres_variedad.length; i++) {
            if (i==selected)
                variedad = variedad + "<option value='"+id_variedad[i]+"' selected>"+nombres_variedad[i]+"</option>";
            else {
                variedad = variedad + "<option value='"+id_variedad[i]+"'>"+nombres_variedad[i]+"</option>";
            }
        }
        return variedad+"</select>";
    }

    function setvariedadembalado(selected){

        selected = selected - 1;
        var variedad = "<select class='select2' name='Variedad_embalado_i[]'>";
        for (var i = 0; i < nombres_variedad.length; i++) {
            if (i==selected)
                variedad = variedad + "<option value='"+id_variedad[i]+"' selected>"+nombres_variedad[i]+"</option>";
            else {
                variedad = variedad + "<option value='"+id_variedad[i]+"'>"+nombres_variedad[i]+"</option>";
            }
        }
        return variedad+"</select>";
    }

    function setbins(selected){

        var nombre = "<select class='select2' name='bins_nombre[]'>";
        for (var i = 0; i < bins_nombre.length; i++) {
            if (bins_nombre[i]==selected)
                nombre = nombre + "<option value='"+bins_nombre[i]+"' selected>"+bins_nombre[i]+"</option>";
            else {
                nombre = nombre + "<option value='"+bins_nombre[i]+"'>"+bins_nombre[i]+"</option>";
            }
        }
        return nombre+"</select>";
    }

    function setformato(selected){

        selected = selected - 1;
        var formato = "<select class='select2' name='Formato[]'>";
        for (var i = 0; i < nombres_formatos.length; i++) {
            if (i==selected)
                formato = formato + "<option value='"+id_formato[i]+"' selected>"+nombres_formatos[i]+"</option>";
            else {
                formato = formato + "<option value='"+id_formato[i]+"'>"+nombres_formatos[i]+"</option>";
            }
        }
        return formato+"</select>";
    }

      function text(){
                
        var detalles = document.getElementById("detalles");
        var KilosNetos = document.getElementsByName("KilosN[]");
        var KilosBrutos = document.getElementsByName("KilosB[]");
        var Bins = document.getElementsByName("NBins[]");
        var KB = 0;
        var KN = 0;
        var B = 0;

        var Formato = document.getElementsByName("Formato[]");
        var Cajas = document.getElementsByName("Cajas[]");

        var i;
        for (i = 0; i < KilosNetos.length; i++) {
            KN = KN + KilosNetos[i].value*1;
        }

        for (i = 0; i < KilosBrutos.length; i++) {
            KB = KB + KilosBrutos[i].value*1;
        }
        if(!(Cajas.length==0)){
            for (i = 0; i < Formato.length; i++) {
                KN = KN + pesos_netos[Formato[i].value-1]*1*Cajas[i].value;
            }

            for (i = 0; i < Formato.length; i++) {
                KB = KB + pesos_brutos[Formato[i].value-1]*1*Cajas[i].value;
            }
        }

        for (i = 0; i < Bins.length; i++) {
            B = B + Bins[i].value*1;
        }

        var string = 'Kilos Brutos: '+KB+' Kg\nKilos Netos Estimados: '+KN+' Kg\nBins: '+B;
        detalles.value=string;

      }

    function Add_granel(){

    $("#Table_granel tbody").append(
        "<tr>"+
        "<td name='tablas[]'>"+tarja+"<input class='col-md-12 ' name='Tarjas[]' value="+(tarja++)+" type='hidden' onkeypress='return soloNumeros(event)'/></td>"+
        "<td>"+setvariedad(1)+"</td>"+
        "<td ><input class='col-md-12' type='text' onkeypress='return soloNumeros(event)'/></td>"+
        "<td><input class='col-md-12' type='text' onkeypress='return soloNumeros(event)'/></td>"+
        "<td><input class='col-md-12' readonly='' type='text' onkeypress='return soloNumeros(event)'/></td>"+
        "<td><input class='col-md-12' type='text' onkeypress='return soloNumeros(event)'/></td>"+
        "<td><input class='col-md-12' type='text' onkeypress='return soloNumeros(event)'/></td>"+
        "<td>"+setbins(bins_nombre[0])+"</td>"+
        "<td><span class='btnSave_granel' role='button'><i class='fa fa-save'></i></span> <span class='btnDelete_granel' role='button'><i class='fa fa-times'></i></span></td>"+
        "</tr>");
    
        $(".btnSave_granel").bind("click", Save_granel);      
        $(".btnDelete_granel").bind("click", Delete_granel);
}; 
    
    function Save_granel(){
        
        var par = $(this).parent().parent(); //tr
        //var tdTarjas = par.children("td:nth-child(1)");
        var tdVariedad = par.children("td:nth-child(2)");
        var tdCuartel = par.children("td:nth-child(3)");
        var tdKilosB = par.children("td:nth-child(4)");
        var tdKilosN = par.children("td:nth-child(5)");
        var tdPesoP = par.children("td:nth-child(6)");
        var tdNBins = par.children("td:nth-child(7)");
        var tdTotalBins = par.children("td:nth-child(8)");
        var tdButtons = par.children("td:nth-child(9)");
        
        for (var i = 0; i < bins_nombre.length; i++) {
            if (bins_nombre[i]==tdTotalBins.children().val()){
                var peso_bins = bins_peso[i];
            }
        }



        var Netos = tdKilosB.children().val() - tdPesoP.children().val() - peso_bins * tdNBins.children().val(); 

        if(tdKilosB.children().val()=="" ){
            alert("debe ingresar los kilos brutos");
            exit();
        }
        if(tdPesoP.children().val()=="" ){
            alert("debe ingresar el peso del pallet");
            exit();
        }
        if( tdNBins.children().val() =="" ){
            alert("debe ingresar el numero de bins");
            exit();
        }
        if(Netos <= 0){
            alert("el peso neto debe ser mayor a 0 actualmente es " + Netos);
            exit();
        }

         

        //tdTarjas.html(tdTarjas.children().val()+"<input name='Tarjas[]' type='hidden' value='"+tdTarjas.children().val()+"'>");
        tdVariedad.html(nombres_variedad[tdVariedad.children().val()-1]+"<input name='Variedad_granel[]' type='hidden' value='"+tdVariedad.children().val()+"'>");
        tdCuartel.html(tdCuartel.children().val()+"<input name='Cuartel_granel[]' type='hidden' value='"+tdCuartel.children().val()+"'>");
        tdKilosB.html(tdKilosB.children().val()+"<input name='KilosB[]' type='hidden' value='"+tdKilosB.children().val()+"'>");
        tdKilosN.html(Netos+"<input name='KilosN[]' type='hidden' value='"+Netos+"'>");
        tdPesoP.html(tdPesoP.children().val()+"<input name='PesoP[]' type='hidden' value='"+tdPesoP.children().val()+"'>");
        tdNBins.html(tdNBins.children().val()+"<input name='NBins[]' type='hidden' value='"+tdNBins.children().val()+"'>");
        tdTotalBins.html(tdTotalBins.children().val()+"<input name='bins_nombre[]' type='hidden' value='"+tdTotalBins.children().val()+"'>");
        tdButtons.html("<span class='btnEdit_granel' role='button'><i class='fa fa-pencil' ></i></span> <span class='btnDelete_granel' role='button'><i class='fa fa-times'></i></span>");

        $(".btnEdit_granel").bind("click", Edit_granel);
        $(".btnDelete_granel").bind("click", Delete_granel);
        text();

}; 

function Edit_granel(){
    var par = $(this).parent().parent(); //tr
    //var tdFolio = par.children("td:nth-child(1)");
    var tdVariedad = par.children("td:nth-child(2)");
    var tdCuartel = par.children("td:nth-child(3)");
    var tdKilosB = par.children("td:nth-child(4)");
    var tdKilosN = par.children("td:nth-child(5)");
    var tdPesoP = par.children("td:nth-child(6)");
    var tdNBins = par.children("td:nth-child(7)");
    var tdTotalBins = par.children("td:nth-child(8)");
    var tdButtons = par.children("td:nth-child(9)");
    //tdFolio.html("<input class='col-md-12' type='text' id='txtName' value='"+tdFolio.children().val()+"' onkeypress='return soloNumeros(event)'/>");
    tdVariedad.html(setvariedad(tdVariedad.children().val()));
    tdCuartel.html("<input class='col-md-12' type='text' id='txtEmail' value='"+tdCuartel.children().val()+"' onkeypress='return soloNumeros(event)'/>");
    tdKilosB.html("<input class='col-md-12' type='text' id='txtName' value='"+tdKilosB.children().val()+"' onkeypress='return soloNumeros(event)'/>");
    tdKilosN.html("<input class='col-md-12' readonly='' type='text' id='txtPhone' value='"+tdKilosN.children().val()+"' onkeypress='return soloNumeros(event)'/>");
    tdPesoP.html("<input class='col-md-12' type='text' id='txtEmail' value='"+tdPesoP.children().val()+"' onkeypress='return soloNumeros(event)'/>");
    tdNBins.html("<input class='col-md-12' type='text' id='txtPhone' value='"+tdNBins.children().val()+"' onkeypress='return soloNumeros(event)'/>");
    tdTotalBins.html(setbins(tdTotalBins.children().val()));
    tdButtons.html("<span class='btnSave_granel' role='button'><i class='fa fa-save'></i></span>");

    $(".btnSave_granel").bind("click", Save_granel);
    $(".btnEdit_granel").bind("click", Edit_granel);
    $(".btnDelete_granel").bind("click", Delete_granel);
    text();
};


function Delete_granel(){
    var par = $(this).parent().parent(); //tr
    par.remove();
    text();
    var table = document.getElementsByName("tablas[]");
    var tarjas = document.getElementsByName("Tarjas[]");
    tarja = tarjainicial;
    for (var i = 0; i < tarjas.length; i++) {
        table[i].innerHTML = tarja + "<input class='col-md-12 ' name='Tarjas[]' value="+(tarja++)+" type='hidden' onkeypress='return soloNumeros(event)'/>";
       // tarjas[i].value = tarja++
    }
};


    $(".btnEdit_embalado").bind("click", Edit_embalado);
    $(".btnDelete_embalado").bind("click", Delete_embalado);
    $("#btn_embalado").bind("click", Add_embalado);


function Add_embalado(){
    cantidad_embaladas_i++;
    //alert({!! $prove !!})
    $("#Table_embalado tbody").append(
        "<tr>"+
        "<td ><input class='col-md-12' type='text' onkeypress='return soloNumeros(event)'/></td>"+
                "<td>"+setvariedadembalado(1)+"</td>"+
        "<td ><input class='col-md-12' type='text' onkeypress='return soloNumeros(event)'/></td>"+
                "<td>"+setformato(1)+"</td>"+
        "<td><input class='col-md-12' type='text' onkeypress='return soloNumeros(event)'/></td>"+
"<td><span class='btnSave_embalado' role='button'><i class='fa fa-save'></i></span> <span class='btnDelete_embalado' role='button'><i class='fa fa-times'></i></span></td>"+
        "</tr>");
    
        $(".btnSave_embalado").bind("click", Save_embalado);      
        $(".btnDelete_embalado").bind("click", Delete_embalado);
    };  

function Save_embalado(){

    var par = $(this).parent().parent(); //tr
    var tdFolio = par.children("td:nth-child(1)");
    var tdVariedad = par.children("td:nth-child(2)");
    var tdCuartel = par.children("td:nth-child(3)");
    var tdFormato = par.children("td:nth-child(4)");
    var tdCajas = par.children("td:nth-child(5)");
    var tdButtons = par.children("td:nth-child(6)");

    if(tdFolio.children().val() == "" ){
            alert("debe ingresar el numero de folio");
            exit();
        }
    if(tdCajas.children().val() == "" ){
            alert("debe ingresar el numero de cajas");
            exit();
        }

    var detalles = document.getElementById("detalles");


    tdFolio.html(tdFolio.children().val()+"<input name='Folios[]' type='hidden' value='"+tdFolio.children().val()+"' onkeypress='return soloNumeros(event)'>");
    tdVariedad.html(nombres_variedad[tdVariedad.children().val()-1]+"<input name='Variedad_embalado[]' type='hidden' value='"+tdVariedad.children().val()+"'>");
    tdCuartel.html(tdCuartel.children().val()+"<input name='Cuartel_embalado[]' type='hidden' value='"+tdCuartel.children().val()+"' onkeypress='return soloNumeros(event)'>");
    tdFormato.html(nombres_formatos[tdFormato.children().val()-1]+"<input name='Formato[]' type='hidden' value='"+tdFormato.children().val()+"'>");
    tdCajas.html(tdCajas.children().val()+"<input name='Cajas[]' type='hidden' value='"+tdCajas.children().val()+"' onkeypress='return soloNumeros(event)'>");
    tdButtons.html("<span class='btnEdit_embalado' role='button'><i class='fa fa-pencil' ></i></span> <span class='btnDelete_embalado' role='button'><i class='fa fa-times'></i></span>");

    $(".btnEdit_embalado").bind("click", Edit_embalado);
    $(".btnDelete_embalado").bind("click", Delete_embalado);
    text();
}; 

function Edit_embalado(){
    var par = $(this).parent().parent(); //tr
    var tdTarjas = par.children("td:nth-child(1)");
    var tdVariedad = par.children("td:nth-child(2)");
    var tdCuartel = par.children("td:nth-child(3)");
    var tdFormato = par.children("td:nth-child(4)");
    var tdCajas = par.children("td:nth-child(5)");
    var tdButtons = par.children("td:nth-child(6)");
    tdTarjas.html("<input class='col-md-12' type='text' id='txtName' value='"+tdTarjas.children().val()+"' onkeypress='return soloNumeros(event)'/>");
    tdVariedad.html(setvariedadembalado (tdVariedad.children().val()));
    tdCuartel.html("<input class='col-md-12' type='text' id='txtEmail' value='"+tdCuartel.children().val()+"' onkeypress='return soloNumeros(event)'/>");
    tdFormato.html(setformato(tdFormato.children().val()));
    tdCajas.html("<input class='col-md-12' type='text' id='txtPhone' value='"+tdCajas.children().val()+"' onkeypress='return soloNumeros(event)'/>");
    tdButtons.html("<span class='btnSave_embalado' role='button'><i class='fa fa-save'></i></span>");

    $(".btnSave_embalado").bind("click", Save_embalado);
    $(".btnEdit_embalado").bind("click", Edit_embalado);
    $(".btnDelete_embalado").bind("click", Delete_embalado);
    text();
};


function Delete_embalado(){
    var par = $(this).parent().parent(); //tr
    par.remove();
    text();
}; 