//definir variaveis

var b;
let a;
const c=3.14;

//if; else; for; switch

//String, number, null, undefide

console.log("O tipo da variavel B:"+typeof(b));

a="2";

console.log("O tipo da variavel A:"+typeof(a));

if(a==b){
    console.log("O valor essa variaveis é igual");
}

if(a===b){
    console.log("O valor essa variaveis são diferente");
}

var ItensChurrasco =[]
ItensChurrasco.push("costela")
ItensChurrasco.push("pão de alho")
ItensChurrasco.push("linguiça")
ItensChurrasco.push("romops")


for ( let i=0; i<ItensChurrasco.length-1;i++){
    
}

ItensChurrasco.forEach((e,i)=>{
    console.log(i+"-"+e)
})

nome="João Henrique Marcelo Boss";
console.log(nome.split(" ").reverse().join(""));
//funções com Array
//reverse, join, map

ItensChurrasco.map((e)=>{
    console.log(e.length)
})
//filter
console.log(ItensChurrasco.filter( (e,i)=>{return i!=3}))
//filtrar por qualquer elemento 
console.log(ItensChurrasco.filter( (e,i)=>{return e.split()}))

//filtrar porqalquer elemento que contenha uma letra como p
console.log(ItensChurrasco.filter( (e,i)=>{
    return !e.split("").includes("p");

    //tue f  lase
}))

console.log(JSON.stringify(ItensChurrasco));

console.log(JSON.parse("\"bla\", "\"bla\",))  