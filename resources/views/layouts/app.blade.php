<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@lang('main.online_shop'):@yield('title')</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
  @include('inc.header')

  <div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif
        @yield('content')
    </div>
</div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><p>Категории товаров</p>
                    <ul>
                        @foreach($categories as $category)
                            <li><a href="{{ route ('category', $category->code) }}">{{ $category->__('name') }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6"><p>Самые популярные товары</p>
                    <ul>
                        @foreach($bestSkus as $bestSku)
                            <li><a href="{{ route('sku', [$bestSku->product->category->code, $bestSku->product->code, $bestSku]) }}">
                                    {{ $bestSku->product->__('name') }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </footer>


{{--  @include('inc.footer')--}}


</body>
</html>
