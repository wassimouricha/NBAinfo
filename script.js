$(".containere > div:gt(0)").hide();  
//$ permet d'appeler la variable jquery qui raccourcis les fonctions, 
//et donc ici  indique que dans la class containere je vais cacher .hide() la premiere div que l'on a selectionner avec div:gt(0) ,
//:gt(0) est la div initial

//ensuite je crée vais crée une fonction 

setInterval(function() {  //setInterval  appelle une fonction qui va définir un interval en millisecond ,
  // la fonction se rejoueras indéfiniment tant que je n'aurais pas mis clearInterval() ou que la fenetre se ferme
  $('.containere > div:first') // je selectionne la première div
  .fadeOut(1000) //fadeout est une fonction qui permet d'estomper au fur et a mesure puis cacher la div selectionné , le parametre de durée est en millisecondes (1s = 1000ms)
  .next() //next pour passer la div suivante à l'interieur de la div container
  .fadeIn(1000) //meme principe que fadeout mais estompe pour faire apparaitre la div , le parametre de durée est en millisecondes également 
  .end() //termine la fonction actuel et la renvoie a son état précédent 
  .appendTo('.containere'); //permet d'indiquer que l'on va inserer un élément (donc la fonction ici) à l'intérieur d'un élément selectionné et donc ici la class containere
}, 5000); //parametre de durée total de la fonction en millisecondes également


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
const toggle = document.getElementById("toggle");//je crée une constante toggle , j'indique que cette constante va selectionner l'id toggle (avec getElementById) 
toggle.onclick = function(){  //j'indique que lorsque l'on clique sur l'id alors elle va démarrer une fonction 
  toggle.classList.toggle("active"); //elle va ajouter la classe active a mon id toggle
  nav.classList.toggle("active"); //elle va ajouter la classe active a la balise nav 
}

