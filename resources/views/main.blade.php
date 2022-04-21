@extends('layouts.app')
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
                    <img src="img/nft/nft1.svg" alt="NFT">
                </div>
                <div class="main__nft-box-title">
                    <p>Amet pellentesq</p>
                    <p>0.55 Weth</p>
                </div>
                <div class="main__nft-box_content">
                    <div class="main__nft-box_profile">
                        <img src="img/profile-pic/profile-1.svg" alt="">
                        <p>Laura</p>
                    </div>
                    <div class="main__nft-box_favourite">
                        <img src="img/heart.svg" alt="">
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
                <img src="img/nft/nft_1.svg" alt="NFT PICTURE">
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
                <img src="img/nft/nft_2.svg" alt="NFT PICTURE">
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
                <img src="img/nft/nft_3.svg" alt="NFT PICTURE">
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
                <img src="img/nft/nft_4.svg" alt="NFT PICTURE">
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
                <img src="https://i.pinimg.com/564x/f9/55/f5/f955f56ca6408d6ff5fcf202f8a0af84.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/33/ab/82/33ab82a20c241c6c4fc4e680bee8ec2c.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-3.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">SHIVERING DOG CLAN</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/f9/55/f5/f955f56ca6408d6ff5fcf202f8a0af84.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/33/ab/82/33ab82a20c241c6c4fc4e680bee8ec2c.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-3.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">SHIVERING DOG CLAN</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/f9/55/f5/f955f56ca6408d6ff5fcf202f8a0af84.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/33/ab/82/33ab82a20c241c6c4fc4e680bee8ec2c.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-3.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">SHIVERING DOG CLAN</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/f9/55/f5/f955f56ca6408d6ff5fcf202f8a0af84.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/f9/55/f5/f955f56ca6408d6ff5fcf202f8a0af84.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/33/ab/82/33ab82a20c241c6c4fc4e680bee8ec2c.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-3.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">SHIVERING DOG CLAN</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/f9/55/f5/f955f56ca6408d6ff5fcf202f8a0af84.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/f9/55/f5/f955f56ca6408d6ff5fcf202f8a0af84.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-2.svg" alt="" />
                        <div class="card__header-text">
                            <h3 class="card__title">Jessica Parker</h3>
                            <span class="card__tagline">QUAINT RHINOCEROS SQUAD</span>
                        </div>
                    </div>
                    <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                </div>
            </article>

            <article class="card">
                <img src="https://i.pinimg.com/564x/f9/55/f5/f955f56ca6408d6ff5fcf202f8a0af84.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                        <img class="card__thumb" src="img/profile-pic/profile-2.svg" alt="" />
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
    @include('pages.footer')
</div>
    <script src="js/timer.js"></script>
@endsection
