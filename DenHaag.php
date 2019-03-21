<?php
   require_once("functions.php"); 

require_once('templates/head.php'); 
?>
<header class="DenHaag">
<?php
require_once('templates/navigation.php');
  ?>


<div class="container pt-5">
  <div class="row">


    <div class="col">
      <div class="card card-border" style="height: 70vh;">
      <div class="card-body w-100">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Paint like Picasso</b></li>
        <li class="list-group-item">18 maart, maandag 19:00-22:00 <br>Grote Kade 12 </li>
        <li class="list-group-item">Jouw kunstenaar: <b> Petra Doe</b></li>
      </ul>
      <img src="googleDev.png" class="card-img hovereffect1" alt="...">
      </div>
    </div>
   </div>
    
    
    <div class="col">
      <div class="card card-border" style="height: 70vh;">
        <div class="card-body  mx-auto">
         <h5 class="card-title1"><b>Paint like Picasso</b></h5>
          <div class="p-5">
            <img src="img/Picasso.png" class="card-img elinesShadow" style="height: 40vh; width: auto;" alt="...">
      
             <form class=" col-12"> 
             <div class="row">
              <div class="col-7 pt-4">
              <b>Aantal:</b>
               <select id="mySelect" onchange="myFunction()">
              <option value="25€">1
              <option value="50€">2
              <option value="75€">3
              <option value="100€">4        
                  </select>
                  </div> 
                 <div class="col-5 pt-4">
              <button type="button" class="btn btn-outline-primary" onClick="onClick()">In winkelmand</button>
             </div> 
            </div> 
          </form>

<script>
  function myFunction() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("demo").innerHTML = "<b>Totaal <b>: " + x ;
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
        
          echo getCard("Paint like Picasso", "img/Picasso.png", "Den Haag, Grote Kade 12", "Petra Doe","img/portret3.jpg" );
          echo getCard("Paint like Klimt", "img/DeKus.png","Den Haag, Grote Kade 12", "Petra Doe", "img/portret3.jpg");
          echo getCard("Frida Kahlo portret","img/frida2.png", "Den Haag, Grote Kade 12", "Petra Doe","img/portret3.jpg");

        ?>
   
 </div>
</div>


<?php
require_once('templates/footer.php');
  ?>