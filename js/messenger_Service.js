$(document).ready(function() {
    $("#nombre").val();
      $("#apellido").val();
      $("#email").val();
      $("#asunto").val();	
      $("#mensaje").val();
 })
 function enviarMsg(){
      //var elcodigo = document.getElementById('elcodigo').value;
      // nombre=$("#nombre").val();
      // apellido=$("#apellido").val();
      // email=$("#email").val();
      // asunto=$("#asunto").val();	
      // mensaje=$("#mensaje").val();	

    // validacion de los campos 

    todoBien=valida_campo();

    if (todoBien==0){

       console.log('Qué pasó, Ocurrio algo inesperado?');
       var txtc = "Debe incluir los campos correspondientes";
       // $('#NuevaFrm').modal('show');
       // $("#NuevaFrm").modal({show: true});
       $("#msjerror").show(); 
       document.getElementById('msjerror').innerHTML = txtc;
//			  alert("Debe adjuntar un único archivo PDF.");
       //$("#pmyFile").val(null); // Limpiar inputTypeFile
       // document.getElementById("pmyFile").value = "";
       // document.getElementById("pmyFile").focus();

     }
      else {

          cadena = "nombre=" + nombre +
          "&apellido=" + apellido +
          "&email=" + email +
          "&asunto=" + asunto +
          "&mensaje=" + mensaje;
          console.log('Cadena°: ', cadena);

          $.ajax({
              data:  cadena,                         
              url:   'indexCorreo.php',
              type:  'post',
              
              success: function(at) {
                  console.log('at: ', at);
                  
                  var msj = at.substr(0,5);
                  console.log('msj: ', msj);
                  if (msj=="Error" || msj=="Fallo"){
                      alert("- " + at);
                      //$("#elfin").show();
                      //location.assign("/probando/22_turnero/index.php");
                  }
                  else{
                          alert("OK! " + at);
                          location.assign("./home.php");
                  }
              },
              error: function(error){
              console.log('ALGO PASÓ: ', error);
          }});
      }
  }


  function valida_campo(){

      const exprS = /^[a-z áéíóúñüàè]+$/i; // sin comillas
      const exprE = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

      nombre=$("#nombre").val();
      apellido=$("#apellido").val();
      email=$("#email").val();
      asunto=$("#asunto").val();
      mensaje=$("#mensaje").val();
    
      if (nombre.length==0){
          alert("Debe ingresar un nombre.");
          $("#nombre").val("");
          document.getElementById("#nombre").focus();
          return 0;
      }
      
      if ( !exprS.test(nombre)){
          alert("Nombre: Ingrese sólo letras mayúsculas o minúsculas, y espacios");
          $("#nombre").val("");
          document.getElementById("nombre").focus();
          return 0;
      }

      if (apellido.length==0){
          alert("Debe ingresar un apellido.");
          $("#apellido").val("");
          document.getElementById("#apellido").focus();
          return 0;
      }

      if ( !exprS.test(apellido)){
          alert("Apellido: Ingrese sólo letras mayúsculas o minúsculas, y espacios");
          $("#apellido").val("");
          document.getElementById("apellido").focus();
          return 0;
      }

      if (email.length==0 ){
          alert("Debe ingresar su correo electrónico. Indispensable para enviar la consulta.");
          $("#email").val("");
          document.getElementById("email").focus();
          return 0;
      }
      
      if ( !exprE.test(email)){
          alert("Error: La dirección de correo " + email + " no es válida.");
          $("#email").val("");
          document.getElementById("email").focus();
          return 0; 
      }

      if (asunto.length==0 ){
        alert("Debe ingresar el asunto de la consulta.");
        $("#asunto").val("");
        document.getElementById("asunto").focus();
        return 0;
    }

      if ( mensaje.length==0 || typeof(mensaje) !== 'string'){
          alert("Error: Error Su consulta no es válida.");
          $("#mensaje").val("");
          document.getElementById("mensaje").focus();
          return 0; 
      }
      
      alert("Su mensaje se envió con éxito");
      
      return 1;

  }