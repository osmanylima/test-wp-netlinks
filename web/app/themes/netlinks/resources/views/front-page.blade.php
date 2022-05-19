@extends('layouts.app')

@section('content')

<section class="vitrine mb-5">
  <div class="container px-sm-0 text-center text-md-left">
    <div class="row">
      <div class="col-lg-7 col-11 mx-auto">
        <h1>{{ get_field('titulo_vitrine') }}</h1>

        {!! get_field('descricao_vitrine') !!}

        <h5>{{ get_field('sub_descricao_vitrine') }}</h5>

        <div class="d-lg-none d-block text-center mt-lg-5 mb-5 mb-lg-0">
          <img class="img-fluid" src="{{ get_field('imagem_vitrine') }}" alt="" loading="lazy">
        </div>

        <a href="{{ get_field('link_cta') }}" class="btn-cta d-lg-inline-block d-table mx-auto">{{ get_field('nome_cta') }}</a>
        
        <div class="numbers">
          @if(have_rows('informacoes_em_destaque') )
          @while(have_rows('informacoes_em_destaque')) @php(the_row())
            <article>
              <figure>
                <img class="img-fluid" src="{{ get_sub_field('logo_destaque') }}" alt="" loading="lazy">
              </figure>

              <p>{!! get_sub_field('titulo_destaque') !!}</p>

              <p>{{ get_sub_field('descricao_destaque') }}</p>
            </article>
          @endwhile
          @endif

        </div>
      </div>

      <div class="col-lg-5 col-12 align-items-end d-lg-flex d-none pr-lg-0">
        <img class="img-fluid" src="{{ \App\asset_path('images/mulher-netlinks-agencia-especializada-em-seo.png') }}" alt="" loading="lazy">
      </div>
    </div>
  </div>
</section>

<div class="box-elements box-elements-md text-center d-flex align-items-center flex-column justify-content-between d-lg-none">
  @include('partials/components/infos')
</div>

<section class="solutions py-5">
  <div class="container-fluid">
    <div class="container">
      <div class="text-center mb-3 mb-md-5 col-lg-12 col-md-11 col-11 mx-auto px-0">
        <div class="mb-3 mb-md-5">{!! get_field('titulo_solucoes') !!}</div>

        <div class="col-lg-9 col-sm-10 col-12 mx-auto px-0">
          {!! get_field('sub_titulo_solucoes') !!}
        </div>
      </div>
    </div>

    <div class="container-wrap">
      @if(have_rows('o_que_fazemos') )
      @while(have_rows('o_que_fazemos')) @php(the_row())
      <div class="container-solutions row mx-0 mb-5">
        <div class="col-md-6 container-img">
          <img class="img-fluid" src="{{ get_sub_field('imagem_fazemos') }}" alt="{{ get_sub_field('titulo_solucoes') }}" loading="lazy">
        </div>

        <div class="col-lg-5 col-md-6 container-list">
          {!! get_sub_field('icone_fazemos') !!}
          <h3>{{ get_sub_field('titulo_fazemos') }}</h3>

          {!! get_sub_field('descricao_fazemos') !!}
        </div>
      </div>
      @endwhile
      @endif
    </div>
  </div>

  <a href="{{ get_field('cta_link') }}" class="btn-cta d-table mx-auto">{{ get_field('cta_nome') }}</a>

</section>

@endsection
