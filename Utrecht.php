

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
          // echo getCardcontent('frida.png', 'Crying Frida Kahlo', 'Utrecht, cafe Fluitje');
          echo getCard("Vintage auto", "img/oldtimer.png", "Utrecht, cafe Fluitje");
          echo getCard("Danser", "img/danser.png","Utrecht, cafe Fluitje");
          echo getCard("Crying Frida Kahlo","img/frida.png", "Utrecht, cafe Fluitje");

        ?>
   
 </div>
</div>


<?php
require_once('templates/footer.php');
  ?>
             
             
           