<?php
   require_once("functions.php"); 

require_once('templates/head.html'); 
?>
<header class="Deventer">

<?php
require_once('templates/navigation.php');
  ?>

<div class="container hovereffect">
  <div class="row">
    <div class="col">
      <div class="card " style="width: 25rem;">
      <div class="card-body">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Vintage auto</li>
        <li class="list-group-item">15 maart, maandag 19:00-22:00 <br>cafe 't Fluitje </li>
        <li class="list-group-item">Jouw kunstenaar Maartje Doe</li>
      </ul>
   <img src="googleDev.png" class="card-img hovereffect1" alt="...">
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
 </div>
</div>
    
    
    <div class="col">
    <div class="card " style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Vintage auto</h5>
    <img src="img/oldtimer.png" class="card-img hovereffect" alt="...">
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>


<!-- <div class="card rechts" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <img src="img/oldtimer.png" class="card-img hovereffect" alt="...">
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card links" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <img src="img/oldtimer.png" class="card-img hovereffect" alt="...">
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->


  </header>


 

  







<div class="container mt-5 ">
  <div class="card-deck">

        <?php
        
          echo getCard("Vintage auto", "img/oldtimer.png", "Deventer, cafe 't Fluitje", "Maartje Doe","img/portret2.jpg" );
          echo getCard("Danser", "img/danser.png", "Deventer, cafe 't Fluitje", "Maartje Doe", "img/portret2.jpg");
          echo getCard("Crying Frida Kahlo","img/frida.png", "Deventer, cafe 't SFluitje", "Maartje Doe","img/portret2.jpg");

        ?>
   
  </div>
</div>


<?php
require_once('templates/footer.php');
  ?>
             
             
           