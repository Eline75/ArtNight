<?php
function getCard ($title,$img,$place,$kunstenaar,$IconImg) {
  

    echo '<div class="card elinesShadow  hvr-grow ">
          <div class="p-5">
            <img src="'.$img.'" class="card-img-top elinesShadow-sm" alt="..." />
          </div>
          <div class="card-body bg-white">
            <h5 class="card-title"><b>'.$title.'</b></h5>
              <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;'.$place.'</p>
          <div>
           <img src="'.$IconImg.'" class="rounded-circle float-left" alt="woman avatar">
                      <h6>Jouw kunstenaar is <br><b>'.$kunstenaar.'</b></h6>
          </div>
          </div>
        </div>';

}

?>

