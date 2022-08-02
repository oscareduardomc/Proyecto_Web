import '/xampp/htdocs/Proyecto_Web/src/views/createDetalle.handlebars'
function validarfor(){

    var cantidad = document.getElementById("cantidad").value; 
    var numerofactura = document.getElementsByName("numerofactura")[0].value;
    var codigo = document.getElementsByName("codigo")[0].value;
    var precio = document.getElementsByName("precio")[0].value;
    
    
    
    
    
    if ((cantidad == "") || (numerofactura == "") || (codigo == "") || (precio == "") ) {  //COMPRUEBA CAMPOS VACIOS
        alert("Los campos no pueden quedar vacios");
        return true;
    }
    
    }