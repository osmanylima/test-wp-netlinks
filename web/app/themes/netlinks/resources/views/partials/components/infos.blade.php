@if(have_rows('informacoes') )
@while(have_rows('informacoes')) @php(the_row())
<div class="elements-itens">
  <div class="d-inline-flex">
    {!! get_sub_field('icone_info') !!}
    <h6>{{ get_sub_field('titulo_info') }}</h6>
  </div>

  {!! get_sub_field('descricao_info') !!}
</div>
@endwhile
@endif