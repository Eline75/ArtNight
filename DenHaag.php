<?php
   require_once("functions.php"); 

require_once('templates/head.html'); 
?>
<header class="DenHaag">
<?php
require_once('templates/navigation.php');
  ?>
  </header>



<div class="container mt-5 ">
      <div class="card-deck">

        <?php
          // echo getCardcontent('frida.png', 'Crying Frida Kahlo', 'Utrecht, cafe Fluitje');
          echo getCard("Paint like Picasso", "img/picasso.png", "Den Haag, Grote Kade 12", "Petra Doe","img/portret3.jpg" );
          echo getCard("Paint like Klimt", "img/DeKus.png","Den Haag, Grote Kade 12", "Petra Doe", "img/portret3.jpg");
          echo getCard("Frida Kahlo portret","img/frida2.png", "Den Haag, Grote Kade 12", "Petra Doe","img/portret3.jpg");

        ?>
   
 </div>
</div>


<?php
require_once('templates/footer.php');
  ?>