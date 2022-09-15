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
                    //actividad.resetearAlta();
                    
                    console.log("alta exitosa")

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
        
    },
    "listar" : function(){
        
    },
    "validarPlato" : function(){
        
    }
}
