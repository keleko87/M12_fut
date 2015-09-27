<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      
      <div class="item active">
      <img src="img/e6.jpg" alt="...">
      <div class="carousel-caption">
          <!--<h4>Plantilla</h4>-->
      </div>
      </div>
      
      
      <div class="item">
      <img src="img/2.jpg" alt="...">
      <div class="carousel-caption"> 
      </div>   
    </div>
    
    <div class="item">
        <img src="img/4.jpg" alt="...">
      <div class="carousel-caption">
          <!--<h4>dasdsa</h4>-->
      </div>
    </div>
      
      <div class="item">
        <img src="img/8.jpg" alt="...">
      <div class="carousel-caption">
          <!--<h4>dasdsa</h4>-->
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
<script>
$(document).ready(function(){
    
    $('.dropdown-toggle').dropdown();
    
    // NIVO SLIDER IMGS
    $('.carousel').carousel({
        interval: 3000
    });

});
   
    
</script>

