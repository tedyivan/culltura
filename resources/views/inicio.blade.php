
@extends('master')

@section('content')
		
    <section id="slider">
      <div class="slider-overlay">
      <div class="container ">
        <div id="carousel-example-generic" class="carousel slide col-xs-12" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
             <div class="item active">
               <h1>Pagina <span> Teste </span></h1>
               <h2>Testando</h2>
             </div>
            
            <div class="item">
              <img class="imgSlider" src="/images/sofa.jpg">
            </div>
            
          </div>

          
        </div>

      </div>
      </div>
    </section>


    <section id="about" class="text-center">
        <div class="container" >
         @foreach($textos as $texto)
            <div class="about-top" >
              @if($texto->posicao == 0)
                <h2>{!! $texto->titulo !!}</h2>
                <p>{!! $texto->descricao !!}</p>
              @endif
            </div>
         @endforeach
            <div class="about-content"> 
                <div class="col-md-4">
                  <div class="about-icon">
                    <img src="/images/jesus.jpg" height="200px" width="300px">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="about-icon">
                    <img src="/images/jesus.jpg" height="200px" width="300px">
                  </div>
                </div>
                <div class="col-md-4" height="200px" width="300px">
                  <div class="about-icon">
                    <img src="/images/jesus.jpg" height="200px" width="300px">
                  </div>
                </div>
            </div>

          
        </div>


    </section>
    <section id="texto-about" >
      <div class="container">

       <h2 class="titulo">Titulo</h2>
       <p class="corpo"> conteudo assssssssssssssssssssssssssssssssssssss ffffffffffffffffffffffff gggggggggggggggggggggg hhhhhhhhhhhhhhhhhhh jjjjjjjjjjjjjjjjjjjjj</p>
      </div>
    </section>
    
@endsection
