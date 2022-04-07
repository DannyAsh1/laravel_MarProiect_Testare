<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MĂR -- Homepage</title>
    <link rel="stylesheet" href="css/style.min.css?_v=20220406154141">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>
    <header class="header">
    <div class="header__container">
        <a href="#" class="header__logo"><img src="img/logo.svg" alt="logo"></a>

        <div class="header__left header-left">
            <a href="#main" class="button button__primary">AJUTĂ</a>
            <div class="header-left__language language">
                <span class="language-current">
                    RO
                    <svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0L5 5L10 0H0Z" fill="#323232" />
                    </svg>
                </span>
                <ul class="language-dropdown">
                    <li><button>EN</button></li>
                    <li><button>UA</button></li>
                </ul>
            </div>
        </div>
    </div>
</header>

    <main>
        <section class="hero" style="background: url('img/hero.svg') 50% 50% / cover no-repeat;">
            <div class="hero__container">
                <div class="hero__body">
                    <h1>Donează un <span>prânz</span> <br> pentru refugiații din Ucraina!</h1>
                    <p>
                        Pe această platformă poți dona bani pentru unul sau mai multe prânzuri, care vor fi gătite de
                        către
                        restaurantele partenere, care s-au alăturat acestei inițiative. Odată cu acumularea a 100 de
                        prânzuri, ele vor fi livrate spre centrele de plasament pentru refugiați, în coordonare cu
                        autoritățile.
                    </p>
                    <p>
                        Această inițiativă este lansată de către Asociația Națională a Restaurantelor și a Localurilor
                        de
                        Agrement din Republica Moldova pentru a sprijini refugiații din Ucraina, care în aceste vremuri
                        grele au nevoie de ajutorul nostru al tuturor.
                    </p>
                    <h2>Ajutând pe alții, ne ajutăm pe noi. </h2>
                    <h2 class="dark">Fă, o faptă bună!</h2>
                    <small>
                        *Aici poți urmări mersul campaniei și raportarea livrărilor prânzurilor
                        <a href="https://www.facebook.com/AsociatiaMAR">https://www.facebook.com/AsociatiaMAR</a>
                    </small>
                </div>
            </div>
        </section>

        <div class="main" id="main" style="background: url('img/product-bg.svg') 50% 50% / cover no-repeat;">
            <div class="main__container">
                <div class="main__body main-body">
                    <div class="main-body__products main-products">
                        @foreach($products as $product)
                        <div class="main-products__product product">
                            <img src="\storage\{{$product->image}}" class="product__image" alt="">
                            <div class="product__body product-body">
                                <div class="product-body__name">{{$product->name}}</div>
                                <p class="product-body__desc">
                                    {{$product->description}}
                                </p>
                                <div class="product-body__price">{{$product->price}} MDL</div>
                                <a href="{{ route('product.addToCart',['id' => $product->id])}}" class="product-body__add button button__secondary">Adaugă în coș</a>
                                
                            </div>
                        </div> 
                        @endforeach
                        
                    </div>
                    <aside class="main-body__sidebar main-sidebar">
                        <div class="main-sidebar__header">
                            <p>Listă lunch-uri spre achitare:</p>
                        </div>
                        <div class="main-sidebar__body sidebar-body">
                            <!-- <h2>Cosul este gol</h2> -->
                            @foreach ($cartItems as $cartItem) 
                            <div class="sidebar-body__product sidebar-product">
                                <div class="sidebar-product__name">{{$cartItem['item']['name']}}</div>
                                <div class="sidebar-product__meta product-meta">
                                    <div class="product-meta__price"><strong>Preț:</strong>{{$cartItem['price']}} MDL</div>
                                    <div class="product-meta__count">x{{$cartItem['qty']}}</div>
                                </div>
                                <a href="{{ route('product.removeFromCart',['id' => $cartItem['item']['id']])}}" class="sidebar-product__delete" >Anulează</a>
                            </div>
                           @endforeach 
                        </div>
                        <div class="main-sidebar__footer sidebar-footer">
                            <div class="sidebar-footer__total">
                                <strong>Preț final:</strong>
                                {{$totalPrice}} MDL
                            </div>
                            <button type="button" class="sidebar-footer__checkout button button__outline">
                                Spre achitare
                            </button>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

        <section class="partners">
            <div class="partners__container">
                <div class="partners__header">
                    <h2>Partenerii noștri</h2>
                </div>
                <div class="partners__body">
                    <a href="#">
                        <img src="img/partner1.png" class="partners__partner" />
                    </a>
                    <a href="#">
                        <img src="img/partner2.png" class="partners__partner" />
                    </a>
                    <a href="#">
                        <img src="img/partner3.png" class="partners__partner" />
                    </a>
                    <a href="#">
                        <img src="img/partner4.png" class="partners__partner" />
                    </a>
                    <a href="#">
                        <img src="img/partner5.png" class="partners__partner" />
                    </a>
                    <a href="#">
                        <img src="img/partner6.png" class="partners__partner" />
                    </a>
                    <a href="#">
                        <img src="img/partner7.png" class="partners__partner" />
                    </a>
                    <a href="#">
                        <img src="img/partner8.png" class="partners__partner" />
                    </a>
                    <a href="#">
                        <img src="img/partner9.png" class="partners__partner" />
                    </a>
                    <a href="#">
                        <img src="img/partner10.png" class="partners__partner" />
                    </a>
                </div>

            </div>
        </section>
    </main>
    <footer class="footer">
    <div class="footer__container">
        <a href="#">
            <img src="img/footer-logo.svg" alt="">
        </a>
        <small class="footer__copyright">Copyright © 2022. MĂR. All rights reserved.</small>
        <div class="footer__social">
            <a href="#">
                <img src="img/instagram.svg" alt="instagram">
            </a>
            <a href="#">
                <img src="img/twitter.svg" alt="twitter">
            </a>
            <a href="https://www.facebook.com/AsociatiaMAR" target="_blank">
                <img src="img/facebook.svg" alt="facebook">
            </a>
        </div>
    </div>
</footer>

    <script src="js/app.min.js?_v=20220406154141"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>
