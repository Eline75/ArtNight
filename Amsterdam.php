<?php
   require_once("functions.php"); 

require_once('templates/head.html'); 
?>
<header class="Amsterdam">
<?php
require_once('templates/navigation.php');
  ?>
  </header>



<div class="container mt-5 ">
      <div class="card-deck">

        <?php
          
          echo getCard("Paint like Klimt", "img/klimt.png", "Amsterdam, podium Mozaiek", "Peter Doe","img/portret4.jpg" );
          echo getCard("Gekleurde leeuw", "img/leeuw.png","Amsterdam, podium Mozaiek", "Peter Doe", "img/portret4.jpg");
          echo getCard("Gekleurde Marilyn","img/Marilyn.png", "Amsterdam, podium Mozaiek", "Peter Doe","img/portret4.jpg");

        ?>
   
 </div>
</div>


<?php
require_once('templates/footer.php');
  ?>
             
             
           