console.log(window.screen)

window.document.body.innerHTML = "<p> OLÁ </p>"
document.body.style.backgroundColor = "red"
document.body.style.backgroundImage = "../"
//div nome
let div=document.createElement("div");
let pnome=document.createElement("p");
pnome.innerHTML="Informe seu nome: "
div.appendChild(pnome);

//campo nome
document.body.appendChild(div);
let temp= document.createElement("input");
temp.id="inputNome"
div.appendChild(temp)

//campo peso
div.appendChild(document.createElement("br"));
temp=document.createElement("label");
temp.innerHTML="peso"
div.appendChild(temp)
temp=document.createElement("input");
temp.id="inputPeso"
div.appendChild(temp)


//altura
div.appendChild(document.createElement("br"));
temp=document.createElement("label");
temp.innerHTML="altura"
div.appendChild(temp)
temp=document.createElement("input");
temp.id="inputAltura"
div.appendChild(temp)

//add botão
div.appendChild(document.createElement("br"));
temp=document.createElement("button");
temp.id="btnCalcular"
temp.innerHTML="btnCalcular"
div.appendChild(temp)

temp.addEventListener("click",()=>{
    inputPeso=document.getElementById("inputPeso")
    inputPeso=document.getElementById("inputAltura")
    peso=Number.parseFloat(inputPeso.value)
    altura=Number.parseFloat(inputAltura.value)
    imc=peso/(altura*altura);
    console.log(imc)
    result=document.createElement("p")
    result.innerHTML=imc
    div.appendChild(result)


})



//////////////////////////////////////////
let img=document.createElement("img")
img.src = "../imagens/lula.png"
document.body.appendChild(img)

