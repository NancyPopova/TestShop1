<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">@lang('main.online_shop')</a>
        </div> -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
    <!-- <div class="navbar navbar-inverse navbar-fixed-top"> -->
          <li @routeactive('index')><a href="{{ route('index') }}">@lang('main.online_shop')</a></li>
          <li @routeactive('categor*')><a href="{{ route('categories') }}">@lang('main.categories')</a></li>
          <li @routeactive('contact')><a href="{{ route('contact') }}">@lang('main.contact')</a></li>
          <li @routeactive('basket*')><a href="{{ route('basket') }}">@lang('main.cart')</a></li>
          <li><a href="{{ route('reset') }}">@lang('main.reset_project')</a></li>
          <li><a href="{{ route('locale', __('main.set_lang')) }}">@lang('main.set_lang')</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$currencySymbol}}<span class="caret"></span></a>
            <ul class="dropdown-menu">
                @foreach ($currencies as $currency)
                    <li><a href="{{ route('currency', $currency->code) }}">{{ $currency->symbol }}</a></li>
                @endforeach
            </ul>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          @guest
            <li><a href="{{ route('login') }}">@lang('main.login')</a></li>
          @endguest

          @auth
            @admin
              <li><a href="{{ route('home') }}">@lang('main.admin_panel')</a></li>
            @else
              <li><a href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a></li>
            @endadmin
            <li><a href="{{ route('get-logout') }}">@lang('main.logout')</a></li>
          @endauth

          <li><a>  </a></li>
        </ul>
      </div>
    </div>
</nav>
