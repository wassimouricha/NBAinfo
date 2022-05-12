$(".containere > div:gt(0)").hide();  //script permettant l'animation des fades pour mes slides


setInterval(function() { 
  $('.containere > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('.containere');
}, 5000);


// $(".containercard > div:gt(0)").hide();  //script permettant l'animation des fades pour mon texte


setInterval(function() { 
  $('.containercard')
  .fadeOut()
  .fadeIn()
  .end()
}, 5000);

let changeH1 = document.querySelector(".MainH1");  //creation de deux variables
let changeH2 = document.querySelector(".MainH2");

window.addEventListener("load", () =>
{
   textchange()   //on indique que l'on ajoute les fonctions textchange avec un addeventlistener lors du chargement de la page 
   textchange2()
   textchange3()
   textchange4()
})

function textchange(){
   setInterval(() =>{
      changeH1.textContent = "LES MEILLEURES PLACES";
      changeH2.textContent = "Profitez des meilleures conditions possible lors des match";
  }, 5000);
}

function textchange2(){
   setInterval(() =>{
      changeH1.textContent = "PROFITEZ D’UNE VUE IMPRENABLE";
      changeH2.textContent = "une expérience inoubliables ";
  }, 10000);
}

function textchange3(){
  setInterval(() =>{
     changeH1.textContent = "SAVOUREZ DES METS RAFFINES";
     changeH2.textContent = "les meilleurs traiteurs de tout les états units aux services du confort des fans NBA";
 }, 15000);
}

function textchange4(){
  setInterval(() =>{
     changeH1.textContent = "UNE EXPERIENCE UNIQUE";
     changeH2.textContent = " Des souvenirs inoubliables ";
 }, 20000);
}

