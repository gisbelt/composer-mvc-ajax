$(document).ready(function(){

    // Noticias
    // Recibiremos las noticias que nos trae de la base de datos 
    cargar_noticias = function(noticias){
         // recuperamos la fila
        var row = $('.noticias-row');
        // Reiniciar la fila
        $(".noticias-row").empty(); 

        for (var i = 0; i < noticias.length; i++){
            var div = $("<div class='col-md-4'></div>")
            
            var table = $("<table class='table table-borderless table-light table-inverse table-responsive' height='350'></table>");
            var tbody = $("<tbody class='table-body'></tbody>");
            
            var tr = $("<tr class='align-middle'></tr>");
            var tr2 = $("<tr class='align-middle'></tr>");
            var tr3 = $("<tr class='align-center'></tr>");

            var col_imagen = $("<td scope='row'><img class='card-img-top img-fluid' id='img-noticias' src='assets/img/" + noticias[i]['imagen'] + "' alt=''></td>");
            var col_titulo = $("<td scope='row'><h5 class='card-title text-dark text-center m-0'>" + noticias[i]['titulo'] + "</h5></td>");
            var col_descripcion = $(
            "<td scope='row'><h6 class='card-title text-center'>" 
            + noticias[i]['descripcion'] + 
            "</h6><div class='centrado'><form method='post' enctype='multipart/form-data'><button type='submit' class='btn btn-info' style='margin-top: 10px;'>Ver más</button></form></div></td>");
            
            tr.append(col_imagen);
            tr2.append(col_titulo);
            tr3.append(col_descripcion);
            tbody.append(tr,tr2,tr3);
            table.append(tbody);
            div.append(table);
            row.append(div);
        }
                
    };
    // Boton actualizar noticias 
    $(function(){
        var actualizarNoticias = $('#actualizarNoticias');
        actualizarNoticias.on('click',function(e){
            var ajax = $.ajax({
                // para hacer peticiones jquery necesitamos el parametro "data" 
                // Enviamos un array de parametros, para pasarle a php algun parametro especial
                // o algún usuario que quieras cargar especifico 
                data: {},
                // La direccion del servidor, peticion al fichecero mysql 
                url: "?url=consultaNoticias",
                // como vamos a enviar la peticion 
                type: 'POST',

                dataType: 'text',
                // Para obtener la respuesta 
                success: function(response){
                    // En php lo mandamos codificado el JSON, hay que decodificarlo 
                    var noticias = $.parseJSON(response);
                    cargar_noticias(noticias);
                },
                // para capturar el error 
                error: function(respons, status, error){
                    alert("no encontrado");
                }
            })
        })
    })

    // Peticiones 30 segundos 
    setTimeout(function(){
        $.post("?url=consultaNoticias", function(data){
            $.ajax({
                url: "?url=notificaciones",
                type: "POST",
                processData:false,
                success: function(data){
                    var h4_notificaciones = $('#h4-notificaciones');
                    var notification_latest = $('#notification-latest');
                    $("#notification-count").remove();                  
                    $("#notification-latest").show();
                    $("#notification-latest").html(data);
                    notification_latest.append(h4_notificaciones);
                },
                error: function(){}           
                });                
        }, "json");
    },30000);  // 1 second = 1000

    //Cerrar ventana notificaciones
    $("html").click(function(){
        $("#notification-latest").hide();
    });
    $(".btn-close").click(function(){
        $("#notification-latest").hide();
    });
    // Evitar que se cierre al hacer click     
    $("#notification-latest").click(function(e){
        e.stopPropagation();
   });
        

});

// imagen:
// https://es.stackoverflow.com/questions/164359/cargar-una-imagen-en-html-y-javascript
// Notificaciones:
// https://blog.nubecolectiva.com/sistema-de-notificaciones-con-php-mysql-jquery-ajax-y-bootstrap-4/