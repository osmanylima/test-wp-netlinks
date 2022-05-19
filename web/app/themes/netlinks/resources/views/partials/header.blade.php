<header class="banner d-flex align-items-center justify-content-between">
  <div class="container px-sm-0">
    <div class="d-flex align-items-center justify-content-between">
      <a class="brand" href="{{ home_url('/') }}">
        <img class="img-fluid" src="{{ \App\asset_path('images/logo-netlinks-agencia.png') }}" alt="{{ get_bloginfo('name', 'display') }}" loading="lazy">
      </a>

      <div class="box-elements d-flex align-items-center flex-row-reverse flex-lg-row col-xl-8 col-md-9 col px-0">
        <div class="d-none d-lg-inline-flex">
          @include('partials/components/infos')
        </div>

        <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button pe-4">
          <i class="toggle-menu-button-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </i>
        </button>
      </div>
    </div>
  </div>
</header>

<nav class="nav-primary">
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
  @endif
</nav>
