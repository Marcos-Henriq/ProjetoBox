
    var anterior=''
    var atual=''
    var caminho=[]
function troca(id, aparecer,desc) {
    anterior='inicial'
    atual=aparecer
    if (aparecer == 'fim') {   
        caminho.push(desc);
        document.getElementById("but").style.background="#ffb800" 
        document.getElementById("but").style.color="black" 
        document.getElementById("but").style.pointerEvents="all" 
        document.getElementById("teste").value=caminho
        console.log(document.getElementById("teste").value)
        return  
    }

    document.getElementById(id).style.display = "none"
    document.getElementById(aparecer).style.display = "flex"
    caminho.push(aparecer);
    if (caminho.length > 0) {   
        document.getElementById('linkHome').style.display = 'flex'
    }
    document.getElementById('gambiarra').innerHTML=caminho

 document.getElementById('containerRoute').innerHTML = ``
for (let i =0; i<caminho.length;i++){
 document.getElementById('containerRoute').innerHTML += `${caminho[i]} | `
    
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




