<?php
   require_once("functions.php"); 

require_once('templates/head.php'); 
?>
<header class="Amsterdam">
<?php
require_once('templates/navigation.php');
  ?>


<div class="container pt-5">
  <div class="row">

    <div class="col">
      <div class="card" style="height: 70vh;">
      <div class="card-body w-100">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Paint like Klimt</b></li>
        <li class="list-group-item">16 maart, zaterdag 19:00-22:00 <br> podium Mozaiek </li>
        <li class="list-group-item">Jouw kunstenaar: <b> Peter Doe</b></li>
      </ul>
      <img src="googleDev.png" class="card-img hovereffect1" alt="...">
      </div>
    </div>
   </div>
    
    
    <div class="col">
      <div class="card" style="height: 70vh;">
        <div class="card-body  mx-auto">
         <h5 class="card-title1"><b>Paint like Klimt</b></h5>
          <div class="p-5">
            <img src="img/klimt.png" class="card-img elinesShadow" style="height: 40vh; width: auto;" alt="...">
      
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
          
          echo getCard("Paint like Klimt", "img/klimt.png", "Amsterdam, podium Mozaiek", "Peter Doe","img/portret4.jpg" );
          echo getCard("Gekleurde leeuw", "img/leeuw.png","Amsterdam, podium Mozaiek", "Peter Doe", "img/portret4.jpg");
          echo getCard("Gekleurde Marilyn","img/Marilyn.png", "Amsterdam, podium Mozaiek", "Peter Doe","img/portret4.jpg");

        ?>
   
 </div>
</div>


<?php
require_once('templates/footer.php');
  ?>
             
             
           