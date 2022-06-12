$(".containere > div:gt(0)").hide();  
//$ permet d'appeler la variable jquery qui raccourcis les fonctions, 
//et donc ici  indique que dans la class containere je vais cacher .hide() la premiere div que l'on a selectionner avec div:gt(0) ,
//:gt(0) est la div initial

//ensuite je crée vais crée une fonction 

setInterval(function() {  //setInterval  appelle une fonction qui va définir un interval en millisecond ,
  // la fonction se rejoueras indéfiniment tant que je n'aurais pas mis clearInterval() ou que la fenetre se ferme
  $('.containere > div:first') // je selectionne la première div
  .fadeOut(1000) //fadeout est une fonction qui permet d'estomper au fur et a mesure puis cacher la div selectionné , 
  //le parametre de durée est en millisecondes (1s = 1000ms)
  .next() //next pour passer la div suivante à l'interieur de la div container
  .fadeIn(1000) //meme principe que fadeout mais estompe pour faire apparaitre la div , le parametre de durée est en millisecondes également 
  .end() //termine la fonction actuel et la renvoie a son état précédent 
  .appendTo('.containere'); //permet d'indiquer que l'on va inserer un élément (donc la fonction ici) à l'intérieur d'un élément selectionné 
  //et donc ici la class containere
}, 5000); //parametre de durée total de la fonction en millisecondes également

// Script pour le slider du texte dans index.php
$(document).ready(function(){
  
  $(function(){
    
    $('.TextFlottant .slidetext:gt(0)').hide();
    setInterval(function(){
      $('.TextFlottant :first-child').fadeOut(1).next('.slidetext').fadeIn(1500)
      .end().appendTo('.TextFlottant');
  }, 7000);
    
  });
  
});

// script pour le bouton du mode sombre
const nav = document.querySelector('nav'); //je crée une constante nav , j'indique que cette constante va selectionner la balise nav (avec querySelector)
const slidetext = document.querySelectorAll('.slidetext'); //je crée une constante nav , j'indique que cette constante va selectionner la balise nav (avec querySelector)
const toggle = document.getElementById("toggle");//je crée une constante toggle , j'indique que cette constante va selectionner l'id toggle (avec getElementById) 
toggle.onclick = function(){  //j'indique que lorsque l'on clique sur l'id alors elle va démarrer une fonction 
  toggle.classList.toggle("active"); //elle va ajouter la classe active a mon id toggle
  nav.classList.toggle("active"); //elle va ajouter la classe active a la balise nav 

  slidetext.forEach(slide => {   //je fais une fonction foreach pour qu'a chaques élément possédant la class slidetext on ajoute la class active
    slide.classList.toggle("active");
  });

}



// Script pour le SplashScreen

// je crée mes variables 
let intro = document.querySelector('.intro');
let intrologoheader = document.querySelector('.intrologoheader');
let logospan = document.querySelectorAll('.logointro');

// je crée l'événement sur  l'ensemble de ma fenetre avec une fonction fleché , une fonction fléché est une forme de syntaxe pour une fonction javascript
window.addEventListener('DOMContentLoaded' , () => {
  // DOMContentLoaded  est un evenement qui se déclenche lorsque ma fenetre html est chargé et cela avant meme les fichiers css
  setTimeout(() => {
    // setTimeout est une methode qui permet de crée un minuteur afin de déclencher une fonction ou un code après un délai indiqué
    logospan.forEach((span, idx ) => {
      // la méthode forEach permet de d'executer une fonction sur chaques éléments indiqué , ici les span et les numéros des  index de chaques éléments span ici idx 
        setTimeout( () => {

          span.classList.add('active');
          // pour chaques span la fonction ajoute la classe active
        }, (idx + 1 ) * 400 )
        // en bas de la méthode settimeout on indique le délai du minuteur et donc la durée sera pour chaques index on ajoute 1 multiplié par 400 millisecondes
        // donc index 0 * 400ms puis index 1*400ms l'index 2 * 400ms etc 

    });

    // ensuite ici on refait un minuteur pour qu'a chaques éléments span on retire la classe active et on ajoute la classe fade, en indiquant le delai à la fin de la méthode

    setTimeout(() => {
      logospan.forEach((span, idx ) => {
        setTimeout( () => {

          span.classList.remove('active');
          span.classList.add('fade');
        }, (idx + 1 ) * 50 )
    })

  }, 2000);

  // et donc en tout à la fin de ma grande fonction pour mes span on indique la durée de celle ci qui sera de 2000ms

  //  ici je re crée un minuteur  afin d'indiquer qu'a ma class intro je vais ajouter dans son style la valeur top: -100vh après un délair de 2300ms
  setTimeout(() => {
    intro.style.top = '-100vh';
  }, 2500)


})

});

// fin de ma fonction pour le SplashScreen