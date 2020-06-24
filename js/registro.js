

window.onload = function() { 
    var flags = document.getElementsByClassName("drop-flag");
    var drop_items = document.getElementsByClassName("dropdown-item");

    
    // Asignacion de la imagen de cada drop-item
    for (var i = 0; i < flags.length; i++){
        flags[i].style.backgroundImage = "url(img/" + flags[i].id + ".png)";
        flags[i].style.backgroundSize = "cover";
        flags[i].style.display = "inline-block";
        flags[i].style.height = "20px";
        flags[i].style.width = "30px";
        flags[i].style.borderRadius = "20%";
        flags[i].style.marginRight = "10px";
        drop_items[i].onclick = ocultar_de_la_lista;
    }

  }

// Funcion para ocultar el contenido de un párrafo
function ocultar_de_la_lista(){
    var modal_body = document.getElementById("sel_lang");
    var drop_lang = document.getElementById("drop_lang");
    var btn = document.createElement("p");           // Create a <button> element
    var img = document.createElement("i");
    
    btn.className = "btn btn-outline w3-round-xxlarge";  // Insert tex
    btn.textContent = this.id + "    ";
    btn.style.marginLeft = "35px";

    img.style.backgroundImage = "url(img/" + this.id + ".png)";
    img.style.backgroundSize = "cover";
    img.style.display = "inline-block";
    img.style.height = "20px";
    img.style.width = "30px";
    img.style.borderRadius = "20%";
    img.style.marginLeft = "5px";
    

    btn.appendChild(img);
    modal_body.appendChild(btn);
    drop_lang.textContent = "Selecciona otro idioma"
    //modal_body.style.textAlign = "center";
    this.style.display = "none";

}

