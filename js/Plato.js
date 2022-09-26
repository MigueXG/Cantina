let plato = {
    "data" : {"id":0, "nombre":'', "descripcion":'', "imagen":'', "cantidad":0, "estado":0, "tipo":''},
    "filtros" : {"accion":"","orden":"","indice":0,"cantidad":0, "clave":""},
    "parametros" : {"url":"files/controlador/PlatoControlador.php"},
    "resetear" : function(){
        
    },
    "alta" : function(){
       var formData = new FormData($("#formnuevoplato")[0]);
        $.ajax({
            "url": plato.parametros.url,
            "type": 'POST',
            "data": formData,
            "cache": false,
            "contentType": false,
            "processData": false,
            "accept":"JSON"
        }).done(function(data,textStatus){
            data = JSON.parse(data);
            if(data.error !== ""){
                      console.log("Error en la carga");

                    }else{
                    //plato.resetearAlta();
                    
                    console.log("alta exitosa") //CAMBIAR POR UN CARTEL DESCENTE

                    setTimeout("history.back()",1000);
                    }
        }).fail(function(jqXHR, textStatus, errorThrown){
            console.error("Error: "+textStatus+" - "+errorThrown);
        }).always(function(){});      
    },
    "actualizarPlato" : function(id){
        
    },
    "eliminarPlato" : function(id){
        
    },
    "cargar" : function(id){
        plato.abm({"id":id,"accion":"CARGAR"});
        
    },
    "listarPlatos" : function(){
        plato.filtros.accion = "LISTAR";
        plato.filtros.indice = 0;
        plato.filtros.cantidad = 0;
        plato.filtros.clave = "";
        plato.abm(this.filtros);
    },
    "validarPlato" : function(){
        
    },
   
    "abm" : function(param){
         $.ajax(
            {
            "url": plato.parametros.url,
            "method":"POST",
            "dataType":"JSON",
            "accept":"JSON",
            "data":{"data":JSON.stringify(param)}
        }).done(function(data,textStatus){
            console.log(data);
            switch(data.accion){
                 case "CARGAR":
                    if(data.error !== ""){
                        console.log("error");
                    }
                    else{
                        console.log("data");
                    }
                    break;
                case "LISTAR":
                    records = data.registros;
                    if (data.registros.length===0){
                        $("#menudiariosel").append('<option>No se encontraron registros</option>');
                    }else{
                        for(let registro of data.registros){
                            let nombre = registro.p_nombre;
                            let id = registro.id_plato;
                            $("#menudiariosel").append('<option value="'+id+'">'+nombre+'</option>');
                        }
                    }
                    
                    break;
                }
        }).fail(function(jqXHR, textStatus, errorThrown){
            console.error("Error: "+textStatus+" - "+errorThrown);
        }).always(function(){});        
        },
     "ActivacionBotones" : function(tipo, nivel){
         switch (tipo){
             case "DIARIO":
                     $("#menuDiario").removeAttr("hidden");
                    switch (nivel){
                        case 1:
                            $("#existente").removeAttr("hidden");
                            $("#nuevo").attr("hidden","");
                            this.listarPlatos();
                        break;
                        case 2:
                            $("#nuevo").removeAttr("hidden");
                            $("#existente").attr("hidden","");
                        break;
                    }
                 break;
             case "SEMANAL":
                 break;
         }
        
    },
};
