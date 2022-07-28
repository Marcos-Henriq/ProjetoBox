
    var anterior=''
    var atual=''
    var caminho=[]
function troca(id, aparecer) {
    anterior='inicial'
    atual=aparecer
    if (aparecer == 'fim') {
        window.location = 'formulario'
    }

    document.getElementById(id).style.display = "none"
    document.getElementById(aparecer).style.display = "flex"
    caminho.push(aparecer);
    if (caminho.length > 0) {   
        document.getElementById('linkHome').style.display = 'flex'
    }
    



    // Implementação futura da volta com caminho de pão



    // document.getElementById('containerRoute').innerHTML = ``
    // for (let i = 0; i < caminho.length; i++) {
    //     document.getElementById('containerRoute').innerHTML += `<button  onclick="voltar(${i})" class="link-route">${caminho[i]}</button><br>`
        
    //     /* if (i==0){
    //         document.getElementById('containerRoute').innerHTML += `<button  onclick="voltar(0)" class="link-route">${caminho[i]}</button><br>`
    //     }
    //     if (i==1){
    //         document.getElementById('containerRoute').innerHTML += `<button class="link-route" onclick="voltar(1)">${caminho[i]}</button><br>`
    //     }
    //     if (i==2){
    //         document.getElementById('containerRoute').innerHTML += `<button class="link-route" onclick="voltar(2)" >${caminho[i]}</button><br>`
    //     }
    //        */  

    // }
}   

function voltar(){
    caminho=[]
    document.getElementById(atual).style.display = "none"
    document.getElementById(anterior).style.display = "flex"
    if(document.getElementById(anterior).style.display == "flex"){
        document.getElementById('linkHome').style.display = 'none'
    }
}


