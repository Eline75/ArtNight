

   <?php
   require_once("functions.php"); 

require_once('templates/head.html'); 
?>
<header class="Utrecht">
<?php
require_once('templates/navigation.php');
  ?>
  </header>



<div class="container mt-5 ">
      <div class="card-deck">

        <?php
        
          echo getCard("Vintage auto", "img/oldtimer.png", "Utrecht, cafe Fluitje", "Anna Doe","img/portret.jpg" );
          echo getCard("David Bowie", "img/bowie.png","Utrecht, cafe Fluitje", "Anna Doe", "img/portret.jpg");
          echo getCard("Paint like Modigliani","img/modigliani.png", "Utrecht, cafe Fluitje", "Anna Doe","img/portret.jpg");

        ?>
   
 </div>
</div>


<?php
require_once('templates/footer.php');
  ?>
             
             
           