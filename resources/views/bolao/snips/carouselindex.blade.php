@section('carousel')
<!-- carousel -->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img src="img/bg1.jpg" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Mais Chances que Loteria ou Mega-Sena</h1>
            <p>Comunidade diferente de tudo que já participou, entre e confira.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img src="img/bg2.jpg" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption">
            <h1><span class="badge bg-primary">Na segurança de  sua casa.</span></h1>
            <p><span class="badge bg-primary"><span class="text-dark">Tudo pelo Celular ou Computador. Encontre na sua cidade pessoas que queiram partricpar e aumente seus ganhos</span></span></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/bg3.jpg" width="100%" height="100%">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Receba diretamente no seu PIX.</h1>
            <p>Somos 100% digitais. Aposta, pagamento e recebimento.</p>
            <!-- <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- carousel -->
@endsection