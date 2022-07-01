const id = [
    'contenedorInfoPrincipal','calendario','infoPaqueteCompleto','estudiarPM',
    'infoIniciativas','infoBiblioteca', 'infoCifras','noticias','carrousel',
    'servicios','infoContacto','infoOrganismo','infoDocumentacion','menuProyectos',
    'infoCarta0','infoCarta1','infoCarta2','infoCarta3','infoSobreMercosur',
    'infoSobreFuncionamiento', 'infoEstructura', 'infoComisiones','infoSobreQuienEsQuien',
    'infoConcurso','infoParlamento','infoEducacion','infoEscuelas','infoFormacionDoc',
    'infoCapacitacion','infoPlanesAccion','infoBanco'     
];
let mybutton = document.getElementById("btn-back-to-top");

// var check1 = document.querySelector(".es").value = 'pt';//obtenemos el objeto y lo guardo en la variable nueva
// var check2 = document.querySelector(".selectIdioma").value = 'es';//obtenemos el objeto y lo guardo en la variable nueva

// check1.addEventListener('click', cambiarIdioma);//escucho el elemento click y llamo a la funcion idioma.

function cambiarIdioma(){
    alert("Esto empieza a funcionar ahora!")
    check1 = document.getElementById(".es");
    check2 =  document.getElementById(".pt");

    let id1 = check1;//por defecto esta en false.
    let id2 = check2;//por defecto esta en true.
    
    console.log(check1);
    
    if(id1){
        location.href="../home.php";
        console.log("estoy en español")
    }
    
    else if(id2){
      location.href="../home.php";
      console.log("estoy en español")
    }
    // else{
        
    //     location.href="pt/home.php";
    //     console.log("estoy en portugueis")
    // }
}

function recargar(){
  document.getElementById("ini").innerHTML = "Contenido nuevo";
}

function ocultarInnecesarios(){
    id.forEach(elemento => document.getElementById(`${elemento}`).style.display= 'none');
    
}

function mostrarNecesario(necesario, necesario2) {
    // document.getElementById(necesario).style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
    // id.forEach(elemento => document.getElementById(`${elemento}`).style.display='block');
    
    document.getElementById(necesario).style.display = 'block';
    document.getElementById(necesario2).style.display = 'block';
}

window.onscroll = function () {
    scrollFunction();
  };
  
  function scrollFunction() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  // When the user clicks on the button, scroll to the top of the document
  mybutton.addEventListener("click", backToTop);
  
  function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }