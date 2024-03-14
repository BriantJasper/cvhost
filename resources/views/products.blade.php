@extends('partials.main')

@section('container')
    <div class="container products">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/products-page/carousel-1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/images/products-page/carousel-2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/images/products-page/carousel-3.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control carousel-control-prev" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <div class="carousel-btn">
                    <i class="bi bi-chevron-left"></i>
                    <span class="visually-hidden">Previous</span>
                </div>
            </button>
            <button class="carousel-control carousel-control-next" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <div class="carousel-btn">
                    <i class="bi bi-chevron-right"></i>
                    <span class="visually-hidden">Next</span>
                </div>
            </button>
        </div>

        <section class="products-section my-section">
            <div class="container">
                <div class="div" data-aos="fade-up">
                    <h2 class="text-center"><strong>Latest Products</strong></h2>
                    <div class="stripe mb-2">
                        <div class="div"></div>
                    </div>
                    <p class="text-center text-dark mt-1" style="font-weight: 500;">Our newest and latest up to date
                        products
                    </p>
                </div>
                {{-- Row --}}
                <div class="row">
                    {{-- Product --}}
                    <div class="col-md-3" data-aos="zoom-in">
                        <img src="/images/products/1.png" alt="" srcset="">
                        <div class="text-container ms-1">
                            <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                            <p>Rp 815.000,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
