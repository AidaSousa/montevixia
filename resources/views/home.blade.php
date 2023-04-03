@extends('layouts.layout')

@section('content')

<body class="animsition">

 <!-- Slider -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url(img/img-1.jpg);">
      <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-md-8 text-center">
            <h1 class="mb-4">Actividad</h1>
            <p class="lead mb-4">Descripción</p>
            <a class="btn btn-primary btn-lg" href="product.html">Ver</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url(img/img-2.jpg);">
      <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-md-8 text-center">
            <h1 class="mb-4">Men New-Season</h1>
            <p class="lead mb-4">Jackets & Coats</p>
            <a class="btn btn-primary btn-lg" href="product.html">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="background-image: url(img/img-3.jpg);">
      <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-md-8 text-center">
            <h1 class="mb-4">Men Collection 2018</h1>
            <p class="lead mb-4">New arrivals</p>
            <a class="btn btn-primary btn-lg" href="product.html">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--Calendar -->
<x-calendar />

<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="img/img-3.jpg" alt="IMG-BANNER">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Actividad 1
								</span>

								<span class="block1-info stext-102 trans-04">
									Descripción
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="" alt="">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Actividad 2
								</span>

								<span class="block1-info stext-102 trans-04">
									Descripción
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="img/img-4.jpg" alt="IMG-BANNER">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Actividad 3
								</span>

								<span class="block1-info stext-102 trans-04">
									Descripción
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	</section>

</body>

@endsection