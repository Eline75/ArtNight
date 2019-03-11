<?php
   require_once("functions.php"); 

require_once('templates/head.php'); 
?>
<header class="Deventer">

<?php
require_once('templates/navigation.php');
  ?>









 <div class="container pt-5">
  <div class="row">

    <div class="col">
      <div class="card" style="height: 70vh;">
      <div class="card-body w-100">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Vintage auto</li>
        <li class="list-group-item">15 maart, maandag 19:00-22:00 <br>cafe 't Fluitje </li>
        <li class="list-group-item">Jouw kunstenaar Maartje Doe</li>
      </ul>
      <img src="googleDev.png" class="card-img hovereffect1" alt="...">
      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
      </div>
    </div>
    
    
    <div class="col">
      <div class="card" style="height: 70vh;">
      <div class="card-body  mx-auto">
        <h5 class="card-title">Vintage auto</h5>
        <div class="p-5">
        <img src="img/oldtimer.png" class="card-img elinesShadow" style="height: 40vh; width: auto;" alt="...">
      
        <form class=" col-12" action="" method="post"> 
        <div class="row">
           <div class="col-7 pt-4">
              <div class="ticket__qty"> 
                <b>Aantal:</b>
                <select id="mySelect" onchange="myFunction()">
  <option value="25">1
  <option value="50">2
  <option value="75">3
  <option value="100">4
</select>
               </div> 
               <div class="ticket__price pt-2">
               <p id="demo">25</p> 
    <meta itemprop="url" content="207676"> <meta itemprop="availability" 
    href="http://schema.org/InStock"> 
                </div> 
    </div> 
      <div class="col-5 pt-4">
         
         <button type="button" onClick="onClick()">In winkelmand</button>
    
      </div> 
    </div> 
  </form>
<script>
  function myFunction() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("demo").innerHTML = "Totaal: " + x;
}
 
</script>
<p id="demo"></p>





        </div>
      </div>
      </div>
    </div>

  </div>
</div>






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
             
             
           