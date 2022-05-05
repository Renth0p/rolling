@extends('layouts.app')
@section('title', 'Rolling | NFT Marketplace')
@section('content')
<div class="wrapper">
    @include('pages.header')
    <main>
        <div class="main__desc">
            <h1>Discover, collect,  and charity in extraordinary NFT marketplace</h1>
            <p>In aenean posuere lorem risus nec. Tempor tincidunt aenean purus purus vestibulum nibh mi venenatis</p>
            <a href="#" class="btn-explore">Explore</a>
            <a href="{{route("register")}}" class="btn-create">Create</a>
        </div>
        <div class="main__nft">
            <div class="main__nft-box">
                <div class="main__nft-box_img">
                    <img src="public/img/nft/nft1.svg" alt="NFT">
                </div>
                <div class="main__nft-box-title">
                    <p>Amet pellentesq</p>
                    <p>0.55 Weth</p>
                </div>
                <div class="main__nft-box_content">
                    <div class="main__nft-box_profile">
                        <img src="public/img/profile-pic/profile-1.svg" alt="">
                        <p>Laura</p>
                    </div>
                    <div class="main__nft-box_favourite">
                        <img src="public/img/heart.svg" alt="">
                        <p>25</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="live_auction">
        <div class="live_auction-header">
            <h2>Live auctions 🔥</h2>
            <p>View all auctions</p>
        </div>
        <div class="live_auction-cards">
            <div class="live_auction-card">
                <img src="public/img/nft/nft_1.svg" alt="NFT PICTURE">
                <div class="live_auction-card-title">
                    <p>3D Soft Curves</p>
                    <p>1.20 ETH</p>
                </div>
                <div class="live_auction-card-desc">
                    <p id="price"></p>
                    <button class="live_auction_btn">Bid Now</button>
                </div>
            </div>

            <div class="live_auction-card">
                <img src="public/img/nft/nft_2.svg" alt="NFT PICTURE">
                <div class="live_auction-card-title">
                    <p>Pink Cloud</p>
                    <p>2.54 ETH</p>
                </div>
                <div class="live_auction-card-desc">
                    <p id="price_2"></p>
                    <button class="live_auction_btn">Bid Now</button>
                </div>
            </div>

            <div class="live_auction-card">
                <img src="public/img/nft/nft_3.svg" alt="NFT PICTURE">
                <div class="live_auction-card-title">
                    <p>Black square</p>
                    <p>0.50 ETH</p>
                </div>
                <div class="live_auction-card-desc">
                    <p id="price_3"></p>
                    <button class="live_auction_btn">Bid Now</button>
                </div>
            </div>

            <div class="live_auction-card">
                <img src="public/img/nft/nft_4.svg" alt="NFT PICTURE">
                <div class="live_auction-card-title">
                    <p>3D Soft Curves</p>
                    <p>2.30 ETH</p>
                </div>
                <div class="live_auction-card-desc">
                    <p id="price_4"></p>
                    <button class="live_auction_btn">Bid Now</button>
                </div>
            </div>
        </div>
    </section>
    <section class="featured">
        <div class="featured-header">
            <h4>Featured ✨</h4>
        </div>
        <div class="cards">

            <article class="card">
                <img src="https://i.pinimg.com/564x/87/07/51/870751c04a1c5c907104a0594bdfff58.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/d9/6e/dc/d96edca5b570d0707d988a21e5d01564.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-3.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">SHIVERING DOG CLAN</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/39/58/bf/3958bf56b52c9e810b8b0661c022a6a4.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/ec/e9/5b/ece95b0008f382266c122279eca020b7.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-3.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">SHIVERING DOG CLAN</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/e5/4e/5b/e54e5b3a860ea56903eb1b1caec4c675.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/e2/e2/c7/e2e2c72e1ed248a7f719417f4e8e288d.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-3.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">SHIVERING DOG CLAN</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/2d/51/1f/2d511ffb1537e3878ab257ecb313f66c.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/93/c4/8a/93c48aa7f4bf14096e87384d2dc9edc3.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/06/dc/34/06dc34d50c2c5db354b7dd5cb88e68fa.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-3.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">SHIVERING DOG CLAN</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/f2/6b/14/f26b145906977d958eb9be6162650ec1.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/66/a1/d4/66a1d4047e4ee8e4b1840d3fb6e3c679.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/a7/cd/88/a7cd88558270ec80c55a4732390f3539.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="public/img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

        </div>
    </section>
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>
    @include('pages.footer')
</div>
<script src="https://kit.fontawesome.com/362e1a3315.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
</script>
<script src="public/js/btnup.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="public/js/timer.js"></script>
@endsection
