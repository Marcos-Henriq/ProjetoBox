
function troca(id, aparecer) {
    if (aparecer == 'fim') {
        window.location = 'formulario'

    } else if (aparecer == 'pg') {
        window.location = 'formularioSis'
    }

    document.getElementById(id).style.display = "none"
    document.getElementById(aparecer).style.display = "flex"

    let caminho = [];
    caminho.push(aparecer);
    if (caminho.length > 0) {
        document.getElementById('linkHome').style.display = 'flex'
    }
    for (let i = 0; i < caminho.length; i++) {

        document.getElementById('containerRoute').innerHTML += `<a class="link-route" href="#${caminho[i]}">${caminho[i]}</a>`
    }
    console.log(caminho)
}   