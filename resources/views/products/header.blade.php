<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    </form>
</li>
@endif







          </ul>
        </nav>
        <div class="header__burger">
          <a href="#open" class="icon-menu"><span></span></a>
        </div>
      </div>
    </header>


</body>
</html>
