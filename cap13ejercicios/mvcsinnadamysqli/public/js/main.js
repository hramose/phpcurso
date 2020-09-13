
const items = document.querySelectorAll(".bEliminar");

items.forEach(item => {
    item.addEventListener("click", function(){
        //Esto es fundamental para debugger la aplicacion
        //Abres el inspector dde elementos y cuando haces saltar el evento entra al mmetodo y empieza el debug
        //Aparece pause in the debegger en el diseño de nuestra web y podemos ejecutar el codigo completo o ir
        //linea a linea en la seccion de source y en la seccion de console se ven el logs de la consola 
        debugger;
        var matricula = this.dataset.matricula;
         //matricula = this.getAttribute("data-matricula");

        const confirm = window.confirm("TEXTaaaaO?" + matricula);

        if(confirm){
            httpRequest(window.location + "/eliminarAlumno/" + matricula, function(e){
                console.log(this.responseText);
                const tbody = document.querySelector("#tbody-alumnos");
                const fila  = document.querySelector("#fila-" + matricula);
                tbody.removeChild(fila);
            })
        }
    });
});


function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}