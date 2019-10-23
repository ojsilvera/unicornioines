function validarinput (){
    const arrow = document.querySelectorAll(".fa-arrow-right");

    arrow.forEach(arrows =>{
        arrows.addEventListener ("click", () => {
            const input = arrows.previousElementSibling;
            const parent = arrows.parentElement;
            const nextForm = parent.nextElementSibling;


            if(input.type === "text" && validatetext(input)) {
                nextslide(parent, nextForm);
            }else if(input.type != "text" && validateselect(input)) {
                nextslide(parent, nextForm);
            }
        });
    });

}

function validatetext (user){
    if (user.value.length >=3) {

        error("rgb(87, 189, 130)");
        return true;
        
    }else{
        console.log("no caracteres suficientes");
        error("rgb(189,87,87)");
    }
}


function validateselect (sel){
    if (sel.value === "") {
        console.log("seleccione");
        error("rgb(251,251,251)");
    }else{
        error("rgb(87, 189, 130)");
        return true;
    }
}

function error(color){
    document.body.style.backgroundColor = color;
}

function nextslide (parent, nextForm){
    parent.classList.add('innactive');
    parent.classList.remove('active');
    nextForm.classList.add('active');
}

function buscardoc() {
    var dato = $("#documento").val();

    if (dato != "") {
        var url = "/buscardoc/"+dato+"";
        $.get(url, function(resul) {
            //alert(resul);
            if (dato!=""){
                alert('el usuario ya existe'+resul);

            }else{
                alert('el usuario no existe'+resul);
            }
        });
    }else{
        alert('debe ingresar su numero de documento');
        console.log('no funcina');
        error("rgb(189,87,87)");
    }
   
}

validarinput();