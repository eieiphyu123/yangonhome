@extends('layouts.frontend')
@section('content')
<!-- Start Banner -->
<div id="carouselExample" class="carousel slide carousel-fade"  data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('frontend/images/banner1.jpg')}}" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-text">
                <h3>Welcome to Yangon Home</h3>
                <p class="d-none d-md-block">In the heart of Yangon, this property is a true gem that combines timeless elegance with modern comfort. <br> Your trust is our most valued currency.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('frontend/images/banner2.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-text">
                <h3>Client-Centric Focus</h3>
                <p class="d-none d-md-block">Our client-centric approach means your needs and preferences guide every decision.<br>You are at the center of what we do.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('frontend/images/banner3.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-text">
                <h3>Dream home journey</h3>
                <p class="d-none d-md-block">We understand that buying or selling a property is a significant life event. <br> Where your dream home journey begins with a promise.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('frontend/images/banner4.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-text">
                <h3>Discover Home Through Real Eyes</h3>
                <p class="d-none d-md-block">Our platform captures the authentic experiences of homeowners, buyers, and sellers. <br>Turned real estate dreams into reality.
                </p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- End Banner -->

<!-- Start Support -->
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <div class="card p-3">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-people-arrows fa-3x"></i>
                    </div>
                    <div class="col-9">
                        <h6>Free Consultaion</h6>
                        <small class="text-secondary">Professionl Expert Advice</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <div class="card p-3">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-handshake-angle fa-3x"></i>
                    </div>
                    <div class="col-9">
                        <h6>Reliable Partner</h6>
                        <small class="text-secondary">Your Success, Our Trust</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <div class="card p-3">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-comments-dollar fa-3x"></i>
                    </div>
                    <div class="col-9">
                        <h6>Client's Voice</h6>
                        <small class="text-secondary">Explore client's Happiness</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-3">
            <div class="card p-3">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-book-open fa-3x"></i>
                    </div>
                    <div class="col-9">
                        <h6> Buy/Sell Guide</h6>
                        <small class="text-secondary"> Strategies to Negotiation</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Support -->

<!-- Start Most View Home List -->
<div class="container">
    <h4  class="text-danger border-5 border-start border-danger mb-4 ps-3">Most View Home Lists</h4>
    <section id="scroller" class="customer-logos slider">
        <div class="slide">
            <div class="card">
                <a href="detail1.html" class="mostView_hover">
                    <img src="image/home12.jpg" class="card-img-top mostView_image">
                </a>
                <div class="mostView_text card-body">
                    <span class="d-block btn btn-danger rounded mt-2 px-3 py-1 text-white">
                        <h6 class="d-inline">North Dagon - Sell <i style="font-size: 12px;"> ( Bank Loan )</i></h6>
                    </span>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="card">
                <a href="detail1.html" class="mostView_hover">
                    <img src="image/home13.jpg" class="card-img-top mostView_image">
                </a>
                <div class="mostView_text card-body">
                    <span class="d-block btn btn-danger rounded mt-2 px-3 py-1 text-white">
                        <h6 class="d-inline">Yankin - Rent <i style="font-size: 12px;"> ( 1 Year Contract )</i></h6>
                    </span>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="card">
                <a href="detail1.html" class="mostView_hover">
                    <img src="image/home14.jpg" class="card-img-top mostView_image">
                </a>
                <div class="mostView_text card-body">
                    <span class="d-block btn btn-danger rounded mt-2 px-3 py-1 text-white">
                        <h6 class="d-inline">Tharkata -Sell <i style="font-size: 12px;">( Fully Funish )</i></h6>
                    </span>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="card">
                <a href="detail1.html" class="mostView_hover">
                    <img src="image/home15.jpg" class="card-img-top mostView_image">
                </a>
                <div class="mostView_text card-body">
                    <span class="d-block btn btn-danger rounded mt-2 px-3 py-1 text-white text-decoration-line-through">
                        <h6 class="d-inline">Bo Ta Htaung -Sold Out <i style="font-size: 12px;"> ( 4500 Lakh)</i></h6>
                    </span>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Most View Home List -->

<!-- Start New Home List -->
<div class="container my-5">
    <h4  class="text-danger border-5 border-start border-danger mb-4 ps-3">New Home List</h4>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
        <div class="col mb-3">
            <div class="card">
                <div class="new_arrival_hover">
                    <a href=""><img src="image/home10.jpg" alt="" class="card-img-top new_arrival_img"></a>
                    <p class="new_arrival_icon">
                        <a href="detail1.html" class="btn btn-outline-danger"><i class="fa-solid fa-eye"></i></a>
                        <a href="" class="btn btn-outline-danger"><i class="fa-regular fa-heart"></i></a>
                     </p>
                </div>
                <p class="card-body mb-0">
                    <span class="text-danger d-block"><span class="fw-bold">For Sale</span> - 3500 Lakh (kyats)</span>
                    <span><i class="fa-solid fa-location-dot"></i> 3rd Street, Bahan Township </span>
                    <div class="ms-3">
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-solid fa-eye"></i> Detail</a>
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-regular fa-heart"></i> Favorite</a>
                    </div>
                </p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card">
                <div class="new_arrival_hover">
                    <a href=""><img src="image/home11.jpg" alt="" class="card-img-top new_arrival_img"></a>
                    <p class="new_arrival_icon">
                        <a href="detail1.html" class="btn btn-outline-danger"><i class="fa-solid fa-eye"></i></a>
                        <a href="" class="btn btn-outline-danger"><i class="fa-regular fa-heart"></i></a>
                     </p>
                </div>
                <p class="card-body mb-0">
                    <span class="text-danger d-block"><span class="fw-bold">For Rent</span> - 8 Lakh per month</span>
                    <span><i class="fa-solid fa-location-dot"></i> 3rd Street, Bahan Township </span>
                    <div class="ms-3">
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-solid fa-eye"></i> Detail</a>
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-regular fa-heart"></i> Favorite</a>
                    </div>
                   </p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card">
                <div class="new_arrival_hover">
                    <a href=""><img src="image/home1/home1.jpg" alt="" class="card-img-top new_arrival_img"></a>
                    <p class="new_arrival_icon">
                        <a href="detail1.html" class="btn btn-outline-danger"><i class="fa-solid fa-eye"></i></a>
                        <a href="" class="btn btn-outline-danger"><i class="fa-regular fa-heart"></i></a>
                     </p>
                </div>
                <p class="card-body mb-0">
                    <span class="text-danger d-block"><span class="fw-bold">For Sale</span> - 3500 Lakh (kyats)</span>
                    <span><i class="fa-solid fa-location-dot"></i> 3rd Street, Bahan Township </span>
                    <div class="ms-3">
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-solid fa-eye"></i> Detail</a>
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-regular fa-heart"></i> Favorite</a>
                    </div>
                   </p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card">
                <div class="new_arrival_hover">
                    <a href=""><img src="image/home8.jpg" alt="" class="card-img-top new_arrival_img"></a>
                    <p class="new_arrival_icon">
                        <a href="detail1.html" class="btn btn-outline-danger"><i class="fa-solid fa-eye"></i></a>
                        <a href="" class="btn btn-outline-danger"><i class="fa-regular fa-heart"></i></a>
                     </p>
                </div>
                <p class="card-body mb-0">
                    <span class="text-danger d-block"><span class="fw-bold">For Rent</span> - 5 Lakh per month</span>
                    <span><i class="fa-solid fa-location-dot"></i> 3rd Street, Bahan Township </span>
                    <div class="ms-3">
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-solid fa-eye"></i> Detail</a>
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-regular fa-heart"></i> Favorite</a>
                    </div>
                   </p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card">
                <div class="new_arrival_hover">
                    <a href=""><img src="image/home5.jpg" alt="" class="card-img-top new_arrival_img"></a>
                    <p class="new_arrival_icon">
                        <a href="detail1.html" class="btn btn-outline-danger"><i class="fa-solid fa-eye"></i></a>
                        <a href="" class="btn btn-outline-danger"><i class="fa-regular fa-heart"></i></a>
                     </p>
                </div>
                <p class="card-body mb-0">
                    <span class="text-danger d-block"><span class="fw-bold">For Sale</span> - 3500 Lakh (kyats)</span>
                    <span><i class="fa-solid fa-location-dot"></i> 3rd Street, Bahan Township </span>
                    <div class="ms-3">
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-solid fa-eye"></i> Detail</a>
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-regular fa-heart"></i> Favorite</a>
                    </div>
                   </p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card">
                <div class="new_arrival_hover">
                    <a href=""><img src="image/home4.jpg" alt="" class="card-img-top new_arrival_img"></a>
                    <p class="new_arrival_icon">
                        <a href="detail1.html" class="btn btn-outline-danger"><i class="fa-solid fa-eye"></i></a>
                        <a href="" class="btn btn-outline-danger"><i class="fa-regular fa-heart"></i></a>
                     </p>
                </div>
                <p class="card-body mb-0">
                    <span class="text-danger d-block"><span class="fw-bold">For Sale</span> - 3500 Lakh (kyats)</span>
                    <span><i class="fa-solid fa-location-dot"></i> 3rd Street, Bahan Township </span>
                    <div class="ms-3">
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-solid fa-eye"></i> Detail</a>
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-regular fa-heart"></i> Favorite</a>
                    </div>
                   </p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card">
                <div class="new_arrival_hover">
                    <a href=""><img src="image/home2.jpg" alt="" class="card-img-top new_arrival_img"></a>
                    <p class="new_arrival_icon">
                        <a href="detail1.html" class="btn btn-outline-danger"><i class="fa-solid fa-eye"></i></a>
                        <a href="" class="btn btn-outline-danger"><i class="fa-regular fa-heart"></i></a>
                     </p>
                </div>
                <p class="card-body mb-0">
                    <span class="text-danger d-block"><span class="fw-bold">For Sale</span> - 5500 Lakh (kyats)</span>
                    <span><i class="fa-solid fa-location-dot"></i> 3rd Street, Bahan Township </span>
                    <div class="ms-3">
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-solid fa-eye"></i> Detail</a>
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-regular fa-heart"></i> Favorite</a>
                    </div>
                   </p>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card">
                <div class="new_arrival_hover">
                    <a href=""><img src="image/home6.jpg" alt="" class="card-img-top new_arrival_img"></a>
                    <p class="new_arrival_icon">
                        <a href="detail1.html" class="btn btn-outline-danger"><i class="fa-solid fa-eye"></i></a>
                        <a href="" class="btn btn-outline-danger"><i class="fa-regular fa-heart"></i></a>
                     </p>
                </div>
                <p class="card-body mb-0">
                    <span class="text-danger d-block"><span class="fw-bold">For Sell</span> - Installmant</span>
                    <span><i class="fa-solid fa-location-dot"></i> 3rd Street, Bahan Township </span>
                    <div class="ms-3">
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-solid fa-eye"></i> Detail</a>
                        <a href="detail1.html" class="btn btn-outline-danger d-inline me-1" style="font-size: 10pt;"><i class="fa-regular fa-heart"></i> Favorite</a>
                    </div>
                   </p>
            </div>
        </div>
    </div>
</div>
<!-- End New Home List  -->

<!-- Start Subscribe -->
<div class="bgBlue">
    <div class="container py-5 px-5 px-lg-0">
        <div class="row">
            <div class="col-12 col-lg-8 text-white pe-lg-5 order-1 order-md-0">
                <a href=""><img src="image/adv1.jpg" alt="" class="img-fluid mt-2"></a>
            </div>
            <div class="col-12 col-lg-4 text-white">
               <h5 class="text-danger mt-0 mt-md-5 mt-lg-0">Email For New Properties</h5>
               <p class="fst-italic" style="font-size: 10pt;">We'll never share your email with anyone else.</p>
                <form>
                    <div class="mb-3">
                        <input class="form-control" type="email" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-danger">Send New List</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Subscribe -->

<!-- Start Latest News -->
<div class="container my-5">
    <h4  class="text-danger border-5 border-start border-danger mb-4 ps-3">Stay Ahead with Latest News</h4>
    <div class="row row-cols-1 mx-2">
        <div class="col bg-light mb-3">
            <div class="row px-4 py-4">
                <div class="col-12 col-lg-4 news_hover border border-white rounded-2 px-0">
                    <a href="#" class="">
                        <img src="image/news1.jpg" alt="" class="border border-white rounded-2 img-fluid news_image h-100 w-100">
                    </a>
                </div>
                <div class="col-12 col-lg-8 px-0 px-lg-3 pt-3 pt-lg-0">
                    <h5 class="d-inline text-danger">Bank Loan for Installment </h5>
                    <small class="fst-italic d-none d-md-inline text-secondary"> By Admin on 16 October 2023</small>
                    <p class="mt-2">Understanding the Installment Bank Loan Process is your Path to Financial Freedom. Installment bank loans are flexible financial tool that can make significant purchases or overcome unforeseen expenses.</p>
                    <p id="readMore">A bank loan for real estate installment is a financial arrangement designed to assist individuals or businesses in acquiring real property. This type of loan allows borrowers to purchase or invest in real estate by repaying the borrowed amount over a specified period through fixed installments.<span class="mt-3 d-block">Acquiring a bank loan for real estate installment provides an avenue for individuals and businesses to achieve property ownership while distributing the financial commitment over time. Thorough understanding of the terms, careful financial planning, and compliance with legal requirements are crucial aspects of this process.</span></p>
                    <button class="btn btn-danger" href="" id="toggle">Read More >> </button>
                </div>
            </div>
        </div>
        <div class="col bg-light-subtle mb-3">
            <div class="row px-4 py-4">
                <div class="col-12 col-lg-8 px-0 px-lg-3 pt-3 pt-lg-0 order-lg-0 order-1">
                    <h5 class="d-inline text-danger">Professional Legal Assistance</h5>
                    <small class="fst-italic d-none d-md-inline text-secondary">By Ei on 22 November 2023</small>
                    <p class="mt-2 ">The lawyer contract, also known as the engagement agreement, serves as a formal document outlining the rights and responsibilities of both parties. It's crucial to establish clear terms and expectations.</p>
                    <p id="readMore1">Legal experts assist in drafting, reviewing, and enforcing contracts. Whether dealing with clients, suppliers, or partners, having legally sound agreements in place is crucial for clarity and dispute prevention. <span class="mt-3 d-block">Legal professionals help safeguard intellectual property rights through trademarks, patents, and copyrights. They can pursue legal action against infringement and advise on strategies for IP portfolio management.</span></p>
                    <button class="btn btn-danger" href="" id="toggle1">Read More >> </button>
                </div>
                <div class="col-12 col-lg-4 news_hover border border-white rounded-2 px-0 order-0 order-lg-1">
                    <a href="#"  class="border border-white rounded-2 img-fluid news_image h-100 w-100">
                        <img src="image/news2.jpg" alt="" class="border border-white rounded-2 img-fluid news_image h-100 w-100">
                    </a>
                </div>
            </div>
        </div>
        <div class="col bg-light mb-3">
            <div class="row px-4 py-4">
                <div class="col-12 col-lg-4 news_hover border border-white rounded-2 px-0">
                    <a href="#" class="">
                        <img src="image/news3.jpg" alt="" class="border border-white rounded-2 img-fluid news_image h-100 w-100">
                    </a>
                </div>
                <div class="col-12 col-lg-8 px-0 px-lg-3 pt-3 pt-lg-0">
                    <h5 class="d-inline text-danger">The power of Ownership </h5>
                    <small class="fst-italic d-none d-md-inline text-secondary"> By Admin on 16 October 2023</small>
                    <p class="mt-2">You are a seasoned investor or a first-time home buyer, this book is your key to unlocking the full potential of property ownership. Don't just own real estate. Own your truly success!</p>
                    <p id="readMore2">A transformative guide that unlocks the secrets to real estate success.
                        Authored by industry experts, this book is a game-changer for anyone navigating the dynamic world of property ownership.<span class="mt-3 d-block">Whether you're a seasoned investor or a first-time homebuyer, this book is your key to unlocking the full potential of property ownership. Don't just own real estate—own your success.</span></p>
                    <button class="btn btn-danger" href="" id="toggle2">Read More >> </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Latest News -->
@endsection
