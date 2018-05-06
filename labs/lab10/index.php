<style>
#demo .carousel-control-next {
    right: 450;
    
}

#demo .carousel-control-prev {
    left: 450;
}

#demo .carousel-control-next-icon, #demo .carousel-control-prev-icon {
  background-color:black;
}

</style>

<?php

    include 'inc/header.php';

?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/alex.jpg" alt="lion" width="300" height="240">
    </div>
    <div class="carousel-item">
      <img src="img/bear.jpg" alt="bear" width="300" height="240">
    </div>
    <div class="carousel-item">
      <img src="img/otter.jpg" alt="sea otter" width="300" height="240">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
        

<?php

    include 'inc/footer.php';

?>