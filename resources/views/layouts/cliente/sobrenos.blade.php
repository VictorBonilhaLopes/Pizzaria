@extends('layouts.maincliente')

@section('content')

<div class="about_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 padding_0">
              <div class="image_2"><img src="{{url("cliente/images/img-2.png")}}"></div>
            </div>
          <div class="col-md-6 padding_0">
              <div class="padding_left01" style="margin-top: -150px;">
                <h1 class="about_text" style="color: black;">Nossa História</h1>
                <p class="many_text1" style="color: black">La Famiglia é uma pizzaria localizada em Bauru, São Paulo. 
                  Foi fundada em 1923 pela família Capobiancho, imigrantes italianos fugidos 
                  da guerra. Pietro, junto de suas irmãs Rita e Ilze trouxeram suas raízes a 
                  cidade brasileira, por meio de pizzas tradicionalíssimas, cujas receitas 
                  permanecem até os dias atuais restritas aos membros da Família. 
                  A Pizzaria La Famiglia foi eleita uma das melhores pizzarias do mundo e 
                  a melhor pizzaria do Brasil, pelo Comer & Beber 2000. 
                  A casa oferece pizzas individuais e utiliza ingredientes artesanais e 
                  farinha italiana, com destaque para a tradicional pizza napolitana.
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>

@endsection ('content') 
