
<?php
require_once('templates/head.php'); 
require_once("functions.php");
?>
 
<header class="index-header">
<?php 

require_once('templates/navigation.php');

require_once('templates/header.html');
  ?>
  </header>  




    <div class="container mt-4">
        <div class="row">
            <div class="col ">
              <h4>  Wat kun je verwachten van een ArtNight?</h4>
            </div>
      <div class="row">
        
        <div class="col-md-3 hpicon1 verhaal">
        <p class="verwachting"><b>In slechts enkele uren creëer je een schilderij</b>
          <br /><br />In slechts een paar uur maak jij je eigen kunstwerk en
          maak je kennis met leuke, nieuwe mensen</p>
        </div>


        <div class="col-md-3 hpicon2 verhaal">
        <p class="verwachting"><b>Onder begeleiding van een lokale kunstenaar</b><br /><br />
          Je hebt geen kennis of ervaring nodig! Onze ArtNight Kunstenaars laten
          je stap voor stap zien wat je moet doen.</p>
        </div>
        
        
        <div class="col-md-3 hpicon3 verhaal ">
        <p class="verwachting"><b>Alle materialen zijn inclusief</b> <br /><br />Je hoeft niets mee
          te nemen. Ons kwaliteit materiaal zit bij de prijs inbegrepen.</p>
        </div>


        <div class="col-md-3 hpicon4 verhaal ">
         <p class="verwachting"><b> Neem je schilderij mee naar huis</b> <br /><br />Aan het einde van
          de ArtNight mag je zeker trots zijn op jouw kunstwerk en kun je deze
          mee naar huis nemen!</p>
        </div>
      </div>
    </div>


    
    <div class="container mt-5 ">
      <div class="row">
        <div class="col-sm  hvr-grow ">
          <a href="" class="custom-card ">
          <div class="card mb-5 mt-5 elinesShadow" style="max-width: 540px; ">
            <div class="row no-gutters">
              <div class="col-md-6 ">
                <img src="img/artist3.jpg" class="card-img" alt="..." />
              </div>
              <div class="col-md-6">
                <div class="card-body">
                   <h5 class="card-title"><b>word artnight kunstenaar!</b></h5> 

                  <p class="card-text">
                    Maak van je passie je beroep en organiseer creatieve
                    ArtNights bij jou in de buurt!
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>
      
      


      
        <div class="col-sm hvr-grow  ">
           <a href="" class="custom-card"> 
          <div class="card mb-5 mt-5 elinesShadow" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-6">
                <img src="img/team1.jpg" class="card-img" alt="..." />
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">
                    <b>team event, vrijgezellenfeest, verjaardag?</b>
                  </h5>
                  <p class="card-text">
                    Organiseer nu je eigen prive ArtNight!
                  </p>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            </a> 
    </div>


    <div class="container mt-5 ">
  <div class="card-deck">

        <?php
        
          echo getCard("Vintage auto", "img/oldtimer.png", "Deventer, cafe 't Fluitje", "Maartje Doe","img/portret2.jpg" );
          echo getCard("Danser", "img/danser.png", "Deventer, cafe 't Fluitje", "Maartje Doe", "img/portret2.jpg");
          echo getCard("Crying Frida Kahlo","img/frida.png", "Deventer, cafe 't SFluitje", "Maartje Doe","img/portret2.jpg");

        ?>
   
  </div>
</div>



<div class="container mt-5 ">
      <div class="card-deck">

        <?php
          
          echo getCard("Paint like Klimt", "img/klimt.png", "Amsterdam, podium Mozaiek", "Peter Doe","img/portret4.jpg" );
          echo getCard("Gekleurde leeuw", "img/leeuw.png","Amsterdam, podium Mozaiek", "Peter Doe", "img/portret4.jpg");
          echo getCard("Gekleurde Marilyn","img/Marilyn.png", "Amsterdam, podium Mozaiek", "Peter Doe","img/portret4.jpg");

        ?>
   
 </div>
</div>

<div class="container mt-5 ">
      <div class="card-deck">

        <?php
        
          echo getCard("Vintage auto", "img/oldtimer.png", "Utrecht, cafe Fluitje", "Anna Doe","img/portret.jpg" );
          echo getCard("David Bowie", "img/bowie.png","Utrecht, cafe Fluitje", "Anna Doe", "img/portret.jpg");
          echo getCard("Paint like Modigliani","img/modigliani.png", "Utrecht, cafe Fluitje", "Anna Doe","img/portret.jpg");

        ?>
   
 </div>
</div>

<div class="container mt-5 ">
      <div class="card-deck">

        <?php
         
          echo getCard("Paint like Picasso", "img/picasso.png", "Den Haag, Grote Kade 12", "Petra Doe","img/portret3.jpg" );
          echo getCard("Paint like Klimt", "img/DeKus.png","Den Haag, Grote Kade 12", "Petra Doe", "img/portret3.jpg");
          echo getCard("Frida Kahlo portret","img/Frida2.png", "Den Haag, Grote Kade 12", "Petra Doe","img/portret3.jpg");

        ?>
   </div>
</div>


 <?php
require_once('templates/footer.php');
  ?>
   

