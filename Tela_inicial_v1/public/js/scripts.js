
function troca(id,aparecer) {
    if (aparecer=='fim'){
        window.location='formulario'

    }
    document.getElementById(id).style.display="none"
    document.getElementById(aparecer).style.display="flex"
}   