# cheatsheet
## Java Script
Le language de progamation web font-end pourvons etre injecter directement dans un navigateur.
### Variable
```
conts ValeurConstante = "string"
var valeurVariable = "string"
```
### les operateur 
```
|| =ou ;
&&=et;
=et < pluspetit que ;
>plus grnd que ;
<= ou>=;
comparatif;
== (egale sans le type ex:'4'==4=true );
=== (egale avec le type ex:'4'===4=false );
typeof
```
### condition
```
if (x===y) cosole.log('yo');
if (x===y) {
  cosole.log('yo');
};
```

### toner
```
x === y ? cosole.log('cest vrai') : cosole.log('cest faux');
```

### Fonction
___structure fonction___
```
function NomDeLaFonction(paraametre){
  console.log('le contenue');
  return parametre;
}
```
basic ^ flecher v
```
const MAfonctionflecher(tache) => {
  console.log('je fait ma ${tache}');
};
```
___type de fonction___ 
(__Fonction Anonym__)
```
(function(){
  console.log('cette Fonction s'appelle seule est ');
})();

(() =>{
  console.log('fonction flecher qui sappele seule');
})();
```
### DOM 
#### Adenvent listener
```
const element =document.querySelector('.class');
const button =document.querySelector('#ID1');
const botton = document.getElementById('id-2');

element.addEventListener('click',() {
  // element.style.backgroud='red';
  element.classList.add('Nom dans le css') //add remove or toggle
});
```

