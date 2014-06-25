// $('.fa-angle-down').hover(function(){
   
//    $(this).addClass("hover");
//  },function(){
//    $(this).removeClass("hover");
//  });

$( document ).ready(function() {
//je vais mettre ici toutes les fctions javascript que je veux executer sur ma page !

$('.content').hover(function(){
		$(this).parents('article').find('.vignettes').removeClass('vignettes-invisibles');
},function(){
	$(this).parents('article').find('.vignettes').addClass('vignettes-invisibles');
});

$('.vignettes').hover(function(){
		$(this).parents('article').find('.vignettes').removeClass('vignettes-invisibles');
},function(){
	$(this).parents('article').find('.vignettes').addClass('vignettes-invisibles');
});
// Je selectionne vignettes, je lui applique la fonction over de la manière suivant : quand je hover sur vignettes (le this renvoie tjs à la variable alors dans le parent articles, trouve la classe vignette et enlève la classe invisible.
// après la "," cela va être ce qui se passe quand ma souris dé-hover :Je sélectionne vignettes, je rajoute la classe "vignettes invisibles" et hop mes vignettes disparaissent !



});



//Moi,dans le parent 'Article', trouver les vignettes. et leur ajouter la classe 'vignettes invisibles'