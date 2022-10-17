<!-- Menu colapsable -->
        <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="" height="50px" class="d-inline-block align-text-top">
                </a>
                Cantina Universitaria

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" href="/Cantina/files/reservas.php">Reservas <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">Platos</a>
                <a class="nav-link" href="#">Reportes</a>
              </div>
            </div>
         </nav>

              
         <p>
          <div id="reloj" class="reloj"  style="text-align:right;padding-right:1em;font-weight:bold; font-size:1.2em">00 : 00 : 00</div></p>
            <script>
            function actual() {
         fecha=new Date(); //Actualizar fecha.
         dia = fecha.getDate();
         mes = fecha.getMonth()+1;
         anio=fecha.getFullYear();

         hora=fecha.getHours(); //hora actual
         minuto=fecha.getMinutes(); //minuto actual
         segundo=fecha.getSeconds(); //segundo actual
         if (hora<10) { //dos cifras para la hora
            hora="0"+hora;
            }
         if (minuto<10) { //dos cifras para el minuto
            minuto="0"+minuto;
            }
         if (segundo<10) { //dos cifras para el segundo
            segundo="0"+segundo;
            }
         //ver en el recuadro del reloj:
         mireloj = hora+":"+minuto+":"+segundo;	
				 return mireloj; 
         }
          function actualizar() { //función del temporizador
            mihora=actual(); //recoger hora actual
            mireloj=document.getElementById("reloj"); //buscar elemento reloj
          
            mireloj.innerHTML= dia + "/" + mes + "/" + anio + "&nbsp;&nbsp;&nbsp;" + mihora; //incluir hora en elemento
            }
          setInterval(actualizar,1000); //iniciar temporizador
                      </script>