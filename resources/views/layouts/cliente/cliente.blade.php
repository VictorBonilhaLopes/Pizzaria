@extends('layouts.maincliente')

@section('content')

<div class="banner_section layout_padding">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 padding_0">
                  <div class="bg_1">
                    <div class="padding_left0">
                      <h1 class="best_text">Nossas Pizzas<br>
                      <br> 
                      Napolitana!</h1>
                      <p class="many_text">Nossa pizza mais famosa, a queridissima Napolitana. 
                        Composta de muçarela, azeite, manjericão e molho de tomate.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 padding_0">
                  <div class="image_1"><img src="cliente/images/img-1.png"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 padding_0">
                  <div class="bg_1">
                    <div class="padding_left0">
                      <h1 class="best_text">Maria<br> 
                      Best Guide<br> 
                      For Transports</h1>
                      <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                      <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 padding_0">
                  <div class="image_1"><img src="cliente/images/img-1.png"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 padding_0">
                  <div class="bg_1">
                    <div class="padding_left0">
                      <h1 class="best_text">CLEITON<br> 
                      Best Guide<br> 
                      For Transports</h1>
                      <p class="many_text">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                      <div class="read_bt"><a href="#">Read More</a></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 padding_0">
                  <div class="image_1"><img src="cliente/images/img-1.png"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>

@endsection ('content')    