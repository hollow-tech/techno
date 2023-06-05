<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
            <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
        <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

</head>
<body>
   <header class="header">
      <div class="header__container">
        <div class="header__topbar topbar">
          <div class="topbar__left">
            <div class="topbar__map">
              <a href="#"><img src="{{asset("./images/map.svg")}}" alt="" /> Алматы</a>
            </div>
            <div class="topbar__shops"><a href="#">Магазины</a></div>
          </div>
          <div class="topbar__right">
            <div class="topbar__hours">
              <span class="topbar__phone"> <img src="{{asset( "./images/phone.svg")}}" alt="" /> 1717</span> с 08:00
              до 00:00
            </div>
            <div class="topbar__lang">
              <a href="#" class="topbar__btn_active">Рус</a>
              <a href="#">Қаз</a>
            </div>
          </div>
        </div>
        <nav class="header__nav nav">
          <ul class="nav__list">
            <li class="nav__item">
              <a class="nav__logo" href="{{route('products.home')}}"><img src="{{asset( "./images/logo.png")}}" alt="logo" /></a>
            </li>
            <li class="nav__item"><a href="#" class="nav__catalog">Каталог</a></li>
            <li class="nav__item">
              <input class="nav__input" placeholder="Я хочу найти" type="text" />
            </li>
            <li class="nav__item"> <a href="#" class="nav__link"><img src="{{asset( "./images/favorite-nav.svg")}}"  alt=""><br> <span>Избранное</span></a></li>
            <li class="nav__item"><a href="#" class="nav__link"><img src="{{asset( "./images/compare-nav.svg")}}"  alt=""><br>  <span>Сравнить</span></a></li>
            <li class="nav__item"><a href="{{ route('cartItems') }}" class="nav__link"> <img src="{{asset( "./images/cart-nav.svg")}}"  alt=""> <br> <span>Корзина</span></a></li>
            @guest
                <li class="nav__item"><a href="{{ route('register') }}" class="nav__link"> <img src="{{asset( "./images/user-nav.svg")}}"  alt=""> <br> <span>Вход</span></a></li>
                <li>
            @endguest
            @auth
            <li class="nav__item"><a href="{{ route('register') }}" class="nav__link"> <img src="{{asset( "./images/user-nav.svg")}}"  alt=""> <br> <span>Привет, {{ Auth::user()->name }}</span></a></li>

            @endauth
            @if (Auth::check())
            <li class="nav__item">
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav__logout">Logout</button>
                </form></li>
            @endif
            </ul>
        </nav>
        <div class="header__burger" style="display:none;">
          <a href="#open" class="icon-menu"><span></span></a>
        </div>
      </div>
    </header>
     <div class="cart-logo">
        <a class="cart-logo__link" href="{{route('products.home')}}"><img src="{{asset( "./images/logo.png")}}" alt="logo" /></a>
    </div>
    <section class="cart">
      <div class="cart__container">
        <div class="cart__title">Корзина Technodom</div>
        <div class="cart__content">
          <div class="cart__main">
            @if ($cartItems->isEmpty() )
                <p class="cart__empty">Корзина пуста</p>
            @else
            @foreach($cartItems as $item)

            <div class="cart__inner">
              <div class="cart__product product-cart">
                <div class="product-cart__discount">
                  <span>Trade-in </span>
                  <span>0 - 0 - 24 </span>
                  <span class="product-cart__discount_green">{{ $item->discount }}</span>
                </div>
                <div class="product-cart__block">
                  <input class="product-cart__checkbox" type="checkbox" />
                  <div class="product-cart__img"><img src="{{ asset('storage/images/' . $item->image) }}" alt="" /></div>
                  <div class="product-cart__desc">
                    <div class="product-cart__name">
                      {{ $item->product->title }}
                    </div>
                    <div class="product-cart__price">{{ $item->price }} ₸</div>
                    <div class="product-cart__bonus">до <span>+ 19 999</span> бонусов</div>
                  </div>
                </div>
                <div class="product-cart__amount">
                  <a href="#" class="product-cart__favorite">В избранное</a>
                  <div class="product-cart__number">
                        <form action="{{ route('deleteCartItem',        $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="cart__delete" type="submit"><img src="{{asset("images/cart/trash.svg")}}" alt="" /></button>
                        </form>
                     <span>{{ $item->quantity }}</span>
                     <a href="{{ route('increaseCartItem', $item->id) }}">+</a> <!-- Add this line -->
                  </div>
                </div>
              </div>

            </div>
            @endforeach

            @endif

          </div>
          <div class="cart__aside aside">
            <div class="aside__price">
              <span>Сумма к оплате</span>
              <span>{{ $formattedTotalPrice }} ₸</span>
            </div>

            <div class="aside__credit credit">
              <div class="credit__item">
                <span>В кредит</span>
                <span>12 451 ₸ x 60 мес</span>
              </div>
              <div class="credit__item">
                <span>В рассрочку</span>
                <span>34 999 ₸ x 12 мес</span>
              </div>
            </div>

            <div class="aside__btn">Оформить заказ</div>
            <div class="aside__inform">
              Оформляя заказ, вы подтверждаете свое согласие с нашими
              <a href="#">условиями покупки</a> в интернет-магазине
            </div>

          </div>
        </div>
      </div>
    </section>
    @include('products.footer')
</body>
</html>
