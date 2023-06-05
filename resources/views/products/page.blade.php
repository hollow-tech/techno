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
        <link rel="stylesheet" href="{{ asset('css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

</head>
<body>
        @include('products.header')


    <section class="page">
      <div class="page__container">
        <div class="page__inner">
          <div class="page__detail detail-page">
            <div class="detail-page__discount discount">
              <div class="discount__item">Trade-in</div>
              <div class="discount__item">0 - 0 - 24</div>
              <div class="discount__item_green">{{ $product->discount }}%</div>
            </div>
            <h1 class="detail-page__name">{{ $product->title }}</h1>
            <div class="detail-page__blocks detail-blocks">
              <div class="detail-blocks__gallery">
                <div class="detail-blocks__rate">
                  <img src="{{asset( "./images/star.svg")}}" alt="star" /> {{ $product->rate }} <span>({{ $product->comments }})</span>
                </div>
                <div class="detail-blocks__images images">
                  <div class="catalog__list">
                    <img class="catalog__arrow_up" src="{{asset( "images/page/arrow.svg")}}" alt="" />
                    <ul class="detail-blocks__catalog catalog">
                      <li class="catalog__item">
                        <img src="{{asset( "images/page/view-1.webp")}}" alt="view-1" />
                      </li>
                      <li class="catalog__item">
                        <img src="{{asset( "images/page/view-2.webp")}}" alt="" />
                      </li>
                      <li class="catalog__item">
                        <img src="{{asset( "images/page/view-3.webp")}}" alt="" />
                      </li>
                      <li class="catalog__item">
                        <img src="{{asset( "images/page/view-4.webp")}}" alt="" />
                      </li>
                      <li class="catalog__item">
                        <img src="{{asset( "images/page/view-5.webp")}}" alt="" />
                      </li>
                    </ul>
                    <img class="catalog__arrow_down" src="{{asset( "images/page/arrow.svg")}}" alt="" />
                  </div>
                  <div class="images__image_main">
                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="" />
                  </div>
                </div>
              </div>
              <div class="detail-blocks__content content">
                <div class="content-block">
                  <div class="content-block__colors colors">
                    <div class="colors__title"><span>Цвет: </span> {{ $product->color }}</div>
                    <div class="colors__types">
                      <img src="{{asset( "images/page/type-1.webp")}}" alt="" />
                      <img src="{{asset( "images/page/type-2.webp")}}" alt="" />
                      <img src="{{asset( "images/page/type-3.webp")}}" alt="" />
                      <img src="{{asset( "images/page/type-4.webp")}}" alt="" />
                    </div>
                  </div>
                  <div class="content-block__memory memory">
                    <div class="memory__title">Объем памяти</div>
                    <div class="memory__types">
                      <span>128GB</span>
                      <span>256GB</span>
                      <span>512GB</span>
                    </div>
                  </div>
                  <div class="content-block__desc desc">
                    <div class="desc__title">Описание</div>
                    <div class="desc__names">
                      <ul class="desc__list">
                        <li class="desc__item">
                          <div>Модельный год</div>
                          <div class="desc__dot"></div>
                          <div>{{ $product->year }}</div>
                        </li>
                        <li class="desc__item">
                          <div>Диагональ дисплея, дюйм</div>
                          <div class="desc__dot"></div>
                          <div>{{ $product->screen_size }}</div>
                        </li>
                        <li class="desc__item">
                          <div>Разрешение дисплея</div>
                          <div class="desc__dot"></div>
                          <div>{{ $product->screen_definition }}</div>
                        </li>
                        <li class="desc__item">
                          <div>Тип матрицы</div>
                          <div class="desc__dot"></div>
                          <div>{{ $product->screen_type}}</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page__aside aside">
            <div class="aside__number">
              <div class="aside__artikul">Артикул: 257402</div>
              <div class="aside__guarantee">Гарантия низкой цены</div>
            </div>
            <div class="aside__price">
              {{ $product->price }} ₸

              <span>699 990 ₸</span>
            </div>
            <div class="aside__bonus">
              до <span>20 999</span> бонусов <img src="{{asset( "images/aside/question.svg")}}" alt="" />
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

            <form action="{{ route('addToCart') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="title" value="{{ $product->title }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <input type="hidden" name="discount" value="{{ $product->discount }}">
                <input type="hidden" name="image" value="{{ $product->image }}">
                <input type="hidden" name="quantity" value="1">
                <button class="aside__btn"  type="submit">Добавить в корзину</button>
            </form>


            <div class="aside__info">Самовывоз: 30 мая <span>из 2 магазинов</span></div>
            <div class="aside__delivery">Доставка: <span>31 мая</span></div>
            <div class="aside__inform">Сообщить о снижении цены</div>
            <div class="aside__buttons buttons-aside">
              <a href="#" class="buttons-aside__item">Сравнить</a>
              <a href="#" class="buttons-aside__item">В избранное</a>
              <a href="#" class="buttons-aside__item">Поделиться</a>
            </div>
          </div>
        </div>
      </div>
    </section>

        @include('products.footer')

    <script src="{{ asset('js/page.js') }}"></script>

</body>
</html>
