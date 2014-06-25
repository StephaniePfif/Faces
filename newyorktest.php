<?php
/* 
Template name: Ville 
*/
?>
<?php get_header(); ?>

<!-- <?php // if (have_posts()) : ?>
              <?php //while (have_posts()) : the_post(); ?>
              <?php //the_content() ?>
              <?php //enwhile; ?>
              <?php //endif; ?>
But de ces balises : dire que si j'ai des posts, tant que j'ai des posts, pr chaque post je fais un truc au content
  -->
<body>    
     <h1>Nom de la Ville</h1> 
     <li class="uk-active">
 <div class="uk-grid" data-uk-grid-margin>
   <div class="uk-width-*">
            <ul class="uk-grid" data-uk-grid-margin>
                    <ul id="switcher-content" class="uk-switcher">
                        <li class="uk-active">
                            <div class="uk-grid" data-uk-grid-margin>
<a class="uk-thumbnail uk-overlay-toggle" data-uk-modal="{target:'#modal-2'}">
<div class="uk-overlay">
<img src="photos/chateletintimidante.png" alt="">
<!-- format idéal de photos : 600x400px -->

    <div class="uk-overlay-caption"><p>Texte ici</p></div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
 </a>
     </ul>
    </ul>
                                  <!--  <div id="modal-1" class="uk-modal">
                                        <div class="uk-modal-dialog uk-modal-dialog-frameless">
                                            <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
                                            <div class="uk-width-*">
                                            <img src="photos/vincenttilligolo.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="uk-width-*">
                    
                                            <img src="photos/hommeruepompe.png" alt="">
                                            <div class="uk-overlay-area"></div> -->
                                       
</li>                                
<?php include 'footer.php'; ?>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
                                
</html>