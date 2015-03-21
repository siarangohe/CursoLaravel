var managerScreen = managerScreen || {}; 
/* Si el objeto esta creado deme una instancia de el, sino existe, creeme uno nuevo {}  */

/* Se crea un objeto on varias funciones, una cambia el color del fondo y la otra para un saludo */
managerScreen = {
    cambiarColorFondo : function(color){
        $("body").css('background-color',color);
    },
    saludar : function(){
        alert("hola muchachos!!!");
    },
    ocultarParrafoConID : function(){
        document.getElementById("parrafo").style.display="none";
    },
    ocultarTodosLosParrafos : function(){
        $("p").hide();
        $("p").toogle(); /*-> los muestra y ocultan en el mismo boton*/
        $("p, div").toogle();
        $("div > p").hide(); /*-> todos los p que esten dentro de un div*/
    },
    
    /* Esto es para generalizar la funcion con cualquier tag
     * ocultarTodosLosElementosTag : function(tag){
        var a = document.getElementsByTagName(tag);
        for(i=0;i<=a.length;i++){
            a[i].style.display="none";
        }
    }*/
    mostrarTodosLosParrafos : function(){
        var a = document.getElementsByTagName("p");
        for(i=0;i<=a.length;i++){
            a[i].style.display="block";
        }
    },
    desvanecer : function(){
        $("div,p").fadeToggle(2000);
    },
    alertify : function(){
        // alert dialog
        // alertify.alert("Message"); -> Con esta linea el saca un mensaje, y la saco de 
                                        // la pagina de alertify
        alertify.log("Notification", "Success", 5000);
        alertify.log("Esto es un error", "Error", 2000);
        alertify.prompt("Ingrese su edad", function(e, str) {
            // str is the input text
            if (str < 18) {
               alertify.log("Ingreso no permitido: Menor de edad", "Error", 5000); 
            } else {
                alertify.log("Bienvenido!!!", "Success", 5000);
            }
        }, "Default Value");
    }
}

var ms = managerScreen; /* Simplemente es para facilitar la llamada desde el html */



