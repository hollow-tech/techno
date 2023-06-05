
   <main class="main">
      <div class="main__container">
        <section class="main-sliders">
          <div class="sliders__main">
            <div class="slider main-slider">
              <div class="slide active main-slide">
                <img class="slider__image" src="{{asset( "images/main-slide-1.png")}}" alt="slide-1" />
              </div>
              <div class="slide main-slide">
                <img class="slider__image" src="{{asset( "images/main-slide-2.png")}}" alt="slide-2" />
              </div>
              <div class="slide main-slide">
                <img class="slider__image" src="{{asset( "images/main-slide-3.png")}}" alt="" />
              </div>
              <button class="prev-btn"><</button>
              <button class="next-btn">></button>
              <div class="pagination">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </div>
          </div>
          <div class="sliders__aside aside-slider">


<div class="sliders__aside aside-slider">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      @foreach ($products as $product)
        <div class="swiper-slide">
          <div class="aside-slider__item">
            <div class="aside-slider__product product">
               <div class="aside-slider__item">
                    <div class="aside-slider__product product">
                        <div class="product__discount">0 - 0 - 12</div>
                        <div class="product__img">
                            <img src="storage/images/{{ $product->image }}" alt="" />
                        </div>
                        <div class="product__name">{{ $product->title }}</div>
                        <div class="product__model"></div>
                        <div class="product__rate rate">
                            <span class="rate__icon"><img src="{{asset( "images/star.svg")}}" alt="star" /></span>
                            <span class="rate__number">{{ $product->rate }}</span>
                            <span class="rate__comments">({{ $product->comments }})</span>
                        </div>
                        <div class="product__price">{{ $product->price }}</div>
                        <div class="product__btn">
                                <form action="{{ route('addToCart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="title" value="{{ $product->title }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="hidden" name="discount" value="{{ $product->discount }}">
                                    <input type="hidden" name="image" value="{{ $product->image }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button class="product__link"  type="submit">В корзину</button>
                                </form>
                            <span class="product__favorite"><img src="{{asset( "images/favorite.svg")}}" alt="" /></span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>
          </div>
        </section>
        <section class="main-categories categories-btns">
          <div class="main-categories__btns categories-btns">
            <ul class="categories-btns__list">
              <li class="categories-btns__item active">
                <a class="categories-btns__link active" href="#">Популярные</a>
              </li>
              <li class="categories-btns__item">
                <a class="categories-btns__link" href="#">AirbaFresh</a>
              </li>
              <li class="categories-btns__item">
                <a class="categories-btns__link" href="#">Хранение продуктов</a>
              </li>
              <li class="categories-btns__item">
                <a class="categories-btns__link" href="#">Красота и здоровье</a>
              </li>
              <li class="categories-btns__item">
                <a class="categories-btns__link" href="#">Бассейны</a>
              </li>
              <li class="categories-btns__item">
                <a class="categories-btns__link" href="#">Компьюьеры и ноутбуки</a>
              </li>
            </ul>
          </div>

          <div class="main-categories__products">
                @foreach ($products as $product)

                <div  class="main-categories__product product">
                                <a href="{{ route('products.page', ['id' => $product->id]) }}">
                    <div class="product__discount">0 - 0 - 12</div>
                    <div class="product__img">
                        <img src="storage/images/{{ $product->image }}" alt="" />
                    </div>
                    <div class="product__content">
                        <div class="product__name">{{ $product->title }}</div>
                    <div class="product__model"></div>
                    <div class="product__rate rate">
                        <span class="rate__icon"><img src="{{asset( "images/star.svg")}}" alt="star" /></span>
                        <span class="rate__number">{{ $product->rate }}</span>
                        <span class="rate__comments">({{ $product->comments }})</span>
                    </div>
                    <div class="product__price">{{ $product->price }}</div>
                       </a>
                    <div class="product__btn">
                        <form action="{{ route('addToCart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="title" value="{{ $product->title }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="discount" value="{{ $product->discount }}">
                            <input type="hidden" name="image" value="{{ $product->image }}">
                            <input type="hidden" name="quantity" value="1">
                            <button class="product__link"  type="submit">В корзину</button>
                        </form>

                        <span class="product__favorite"><img src="{{asset( "images/favorite.svg")}}" alt="" /></span>
                    </div>

                    </div>
                </div>

                @endforeach

          </div>
        </section>
        <div class="about-us">
          <h1 class="about-us__title">Интернет магазин TECHNODOM.KZ</h1>
          <div class="about-us__inner">
            <div class="about-us__intro">
              <p class="about-us__intro_bold">
                Интернет-магазин TECHNODOM является одним из проектов компании «ТЕХНОДОМ» – лидера
                национальной сети магазинов электробытовой и компьютерной техники Республики
                Казахстан. Если вы ищете лучший интернет магазин в Казахстане – он находится по
                адресу www.technodom.kz.
              </p>
              <p>
                Главная цель онлайн-магазина TECHNODOM – улучшение качества жизни клиентов.
                Совмещение технологий нового уровня и тенденций розничной торговли позволяют нам
                радовать покупателя возможностью максимально комфортного и доступного приобретения
                товаров через большой интернет магазин техники.
              </p>
            </div>
            <div class="about-us__text">
              <p class="about-us__paragraph">
                Как известно, время – деньги, поэтому относиться к нему нужно экономно. А купить в
                интернет-магазине ту или иную электробытовую и компьютерную технику всегда можно
                быстро: главное, чтобы было из чего выбирать. Ассортимент товаров, который
                предлагает наш интернет-магазин бытовой техники, электроники и цифровой техники,
                насчитывает более 60 000 наименований товаров!
              </p>
              <p class="about-us__paragraph">
                Пролистывая предложения множества интернет-магазинов Казахстана, вы непременно
                остановите свой выбор на страницах TECHNODOM, потому что это интернет-магазин
                бытовой техники высокого качества! Наша компания гарантирует лучшие предложения
                низких цен и высокий профессиональный уровень обслуживания. Независимо от текущего
                местонахождения, Вы имеете возможность заказать товар в дешевом интернет-магазине.
                Реальная экономия бюджета и времени – это удобно и выгодно!
              </p>
              <p class="about-us__paragraph">
                Какие еще преимущества предлагает наш недорогой интернет-магазин в Петропавловске,
                Усть-Каменогорске или Экибастузе? Наличие предлагаемого товара на складе. Это очень
                важно, т.к. в большинстве случаев совершить покупку нужно очень быстро.
                Необходимость найти внушающий доверие интернет-магазин, доставка из которого не
                заставит себя долго ждать, бывает разная. Чаще всего – это внезапный выход из строя
                старой бытовой техники или электроники. В такой ситуации размеренно выбирать
                интернет-магазины с бесплатной доставкой просто нет времени. Замена мобильного
                телефона или ноутбука, к примеру, требует максимальной оперативности. Наш
                интернет-магазин телефонов готов предложить вам не только быстрое оформление заказа
                и удобную доставку, но и огромный выбор качественных современных средств связи и
                коммуникации от самых авторитетных брендов. В их числе Apple, Samsung, Sony, Huawei,
                Oppo, Vivo, Honor, OnePlus и другие.
              </p>
              <p class="about-us__paragraph">
                Интернет-магазин сотовых телефонов TECHNODOM готов к взаимовыгодному продуктивному
                сотрудничеству с клиентами из разных регионов страны! <br />
                Единая ценовая политика и повсеместная доступность ассортимента товаров нашего
                магазина предоставляет всем покупателям абсолютно равные возможности. Вы можете
                посетить наш интернет-магазин в Нур-Султане (Астане) и приобрести любое
                понравившееся мобильное устройство по очень привлекательной цене. Если вы проживаете
                в Актобе, Шымкенте или в Павлодаре, интернет-магазин сотовых TECHNODOM так же рад
                удовлетворить любые потребительские запросы!
              </p>
              <p class="about-us__paragraph">
                Еще один плюс, который вы получаете, выбирая лучший интернет-магазин Казахстана –
                это бесплатная доставка товаров общей стоимостью свыше 10 тысяч тенге. Необходимо
                выбрать и приобрести новую стиральную машину, вместительный холодильник, компактную
                микроволновую печь или самую технологичную модель современного пылесоса? TECHNODOM –
                тот интернет-магазин, в котором бесплатная доставка является реально действующей
                услугой!
              </p>
              <p class="about-us__paragraph">
                Если ассортимент, цены и обслуживание нравится, то клиенты выбирают бытовые
                интернет-магазины раз и надолго. Фактор «своего» магазина очень обязывает, поэтому
                цены интернет-магазины стараются сделать максимально привлекательными. Наша торговая
                площадка доступна для покупательской аудитории с разным уровнем достатка. Хотите
                заказать качественную встраиваемую технику? К вашему вниманию сотни позиций!
                Духовки, вытяжки, посудомоечные машины – все это можно купить недорого в
                интернет-магазине как в Костанае, так и в Уральске и других населенных пунктах
                Казахстана. Интернет-магазин электроники TECHNODOM обеспечивает доставку товара 7
                дней в неделю!
              </p>
              <p class="about-us__paragraph">
                Совершать покупки в нашем интернет-магазине дешево и удобно. Клиент сам может
                выбрать, каким образом ему удобнее рассчитаться. Сервисы интернет-магазина в Атырау,
                как и в других городах страны, делают доступными различные способы оплаты. В том
                числе посредством платежных карт систем VISA и MasterCard. В подтверждение оплаты
                магазин выдает фискальный чек.
              </p>
              <p class="about-us__paragraph">
                Если Вы предпочитаете посещать официальные интернет-магазины на русском языке,
                предлагаем стать постоянным клиентом TECHNODOM! Такой статус гарантирует
                дополнительные преимущества, в том числе, лояльную систему скидок. Часто набираете в
                поисковике «kz интернет-магазин в Караганде»? Заходите на www.technodom.kz! Мы рады
                обеспечить вас качественной электробытовой и компьютерной техникой и порадовать
                высоким уровнем обслуживания.
              </p>
              <p class="about-us__paragraph">
                Низкие цены, удобную доставку, круглосуточный сервис и качественные товары
                интернет-магазин TECHNODOM обеспечивает для всех!
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>



