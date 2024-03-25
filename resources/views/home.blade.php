@extends('partials.main')

@section('container')
    {{-- Hero --}}
    <div class="row">
        <div class="col-md-12">
            <div class="image-container">
                <img src="/images/hero.png" alt="" srcset="" width="100%">
                <div class="overlay d-flex flex-column justify-content-center align-items-center text-light">
                    <h2 class="text-center mb-5 mt-5" style="font-size:2.5rem;"><Strong>Selamat Datang Di <br> CCTV Host &
                            Computer</Strong></h2>
                    <a class="cta-hero mt-5" style="font-size: 2.5rem" href="#about"><strong>Start</strong></a>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Hero --}}

    <form action="/logout" method="post">
        @csrf
        <button class="btn btn-primary" type="submit">Logout</button>
    </form>

    {{-- About Us Section --}}
    <section class="about-section my-section" id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <h2><Strong>About Us</Strong></h2>
                    <div class="stripe">
                        <div class="div"></div>
                    </div>
                </div>
                <div class="col-md-12 my-4" data-aos="fade-up">
                    <h4>Kami adalah perusahaan yang bergerak di bidang CCTV, Komputer dan Elektronik. Kami menyediakan
                        berbagai jasa. Termasuk instalasi, maintenance dan perbaikan. Kami menyediakan berbagai jasa lengkap
                        untuk anda atau bisnis anda.</h4>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="https://i.ibb.co/VJCTTZB/a1.jpg" alt="Inside of A PC" />
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="https://i.ibb.co/7y9x987/a2.jpg" alt="CCTV" />
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="https://i.ibb.co/vjLwqD6/a3.jpg" alt="Air Conditioner Exhaust" />
                </div>
            </div>
        </div>
    </section>
    {{-- End of About Us Section --}}

    {{-- Latest Products Section --}}
    <section class="products-section">
        {{-- Large view --}}
        <div class="container d-none d-md-block d-lg-block">
            <div class="div" data-aos="fade-up">
                <h2 class="text-center"><strong>Latest Products</strong></h2>
                <div class="stripe mb-2">
                    <div class="div"></div>
                </div>
                <p class="text-center text-dark mt-1" style="font-weight: 500;">Our newest and latest up to date products
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
                {{-- Product --}}
                <div class="col-md-3" data-aos="zoom-in">
                    <img src="/images/products/2.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3" data-aos="zoom-in">
                    <img src="/images/products/3.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3" data-aos="zoom-in">
                    <img src="/images/products/4.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3" data-aos="zoom-in">
                    <img src="/images/products/5.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3" data-aos="zoom-in">
                    <img src="/images/products/6.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3" data-aos="zoom-in">
                    <img src="/images/products/7.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3" data-aos="zoom-in">
                    <img src="/images/products/8.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Mobile View --}}
        <div class="container d-sm-block d-md-none">
            <div class="div">
                <h2 class="text-center"><strong>Latest Products</strong></h2>
                <div class="stripe mb-2">
                    <div class="div"></div>
                </div>
                <p class="text-center text-dark mt-1" style="font-weight: 500;">Our newest and latest up to date
                    products
                </p>
                {{-- Row --}}
                <div class="row">
                    {{-- Product --}}
                    <div class="col-6" data-aos="zoom-in">
                        <img src="/images/products/1.png" alt="" srcset="">
                        <div class="text-container ms-1">
                            <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                            <p>Rp 815.000,00</p>
                        </div>
                    </div>
                    {{-- Product --}}
                    <div class="col-6" data-aos="zoom-in">
                        <img src="/images/products/2.png" alt="" srcset="">
                        <div class="text-container ms-1">
                            <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                            <p>Rp 815.000,00</p>
                        </div>
                    </div>
                    {{-- Product --}}
                    <div class="col-6" data-aos="zoom-in">
                        <img src="/images/products/3.png" alt="" srcset="">
                        <div class="text-container ms-1">
                            <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                            <p>Rp 815.000,00</p>
                        </div>
                    </div>
                    {{-- Product --}}
                    <div class="col-6" data-aos="zoom-in">
                        <img src="/images/products/4.png" alt="" srcset="">
                        <div class="text-container ms-1">
                            <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                            <p>Rp 815.000,00</p>
                        </div>
                    </div>
                    {{-- Product --}}
                    <div class="col-6" data-aos="zoom-in">
                        <img src="/images/products/5.png" alt="" srcset="">
                        <div class="text-container ms-1">
                            <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                            <p>Rp 815.000,00</p>
                        </div>
                    </div>
                    {{-- Product --}}
                    <div class="col-6" data-aos="zoom-in">
                        <img src="/images/products/6.png" alt="" srcset="">
                        <div class="text-container ms-1">
                            <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                            <p>Rp 815.000,00</p>
                        </div>
                    </div>
                    {{-- Product --}}
                    <div class="col-6" data-aos="zoom-in">
                        <img src="/images/products/7.png" alt="" srcset="">
                        <div class="text-container ms-1">
                            <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                            <p>Rp 815.000,00</p>
                        </div>
                    </div>
                    {{-- Product --}}
                    <div class="col-6" data-aos="zoom-in">
                        <img src="/images/products/8.png" alt="" srcset="">
                        <div class="text-container ms-1">
                            <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                            <p>Rp 815.000,00</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>
    {{-- End of Latest Products Section --}}

    {{-- Product Showcase Section --}}
    <section class="product-showcase my-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center" data-aos="fade-up">
                    <img src="/images/products/showcase.png" alt="HikVision CCTV">
                </div>
                <div class="col-md-8 p-4 ps-5">
                    <div class="heading" data-aos="fade-up">
                        <h2><strong>The World Through Better Lens for Better View</strong></h2>
                    </div>

                    <div class="row">
                        <div class="col-md-6" data-aos="fade-right" data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <div class="icon mt-4">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <h4 class="mt-3" style="font-weight: 400"><Strong>Burglar & Intrusion</Strong></h4>
                            <p>Protect your employees, customers and assets with an smart alarm.</p>
                        </div>
                        <div class="col-md-6" data-aos="fade-right" data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <div class="icon mt-4">
                                <i class="bi bi-camera-video"></i>
                            </div>
                            <h4 class="mt-3" style="font-weight: 400"><Strong>Video Surveillance</Strong></h4>
                            <p>24 hour inside and outside the premises provided with video surveillance.</p>
                        </div>
                        <div class="col-md-6" data-aos="fade-right" data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <div class="icon mt-2">
                                <i class="bi bi-eye"></i>
                            </div>
                            <h4 class="mt-3" style="font-weight: 400"><Strong>Crystal clear imaging</Strong></h4>
                            <p>Boasting a 2 MP resolution at 1920x1080, ensuring high-quality visuals for every frame.</p>
                        </div>
                        <div class="col-md-6" data-aos="fade-right" data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <div class="icon mt-2">
                                <i class="bi bi-moon-stars"></i>
                            </div>
                            <h4 class="mt-3" style="font-weight: 400"><Strong>Enhanced night vision</Strong></h4>
                            <p>With up to 20 m IR distance and 20 m white light distance, capture bright and detailed images
                                even in low-light conditions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of Product Showcase Section --}}

    {{-- Services Section --}}
    {{-- Windows View --}}
    <section class="services-section my-section d-none d-md-block d-lg-block" style="box-sizing: content-box !important;">
        <div class="container">
            <div data-aos="fade-up">
                <h2 class="text-center"><strong>Services</strong></h2>
                <div class="stripe mb-4">
                    <div class="div"></div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="services" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h2>CCTV Services</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="services" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-computer"></i>
                        </div>
                        <h2>Computer Services</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="services" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-regular fa-snowflake"></i>
                        </div>
                        <h2>Air Conditioner Services</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="services" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-hammer"></i>
                        </div>
                        <h2>Installation Services</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="services" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-wrench"></i>
                        </div>
                        <h2>Repair Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Mobile View --}}
    <section class="services-section-mobile my-section d-sm-block d-md-none" style="box-sizing: content-box !important;">
        <div class="container">
            <div data-aos="fade-up">
                <h2 class="text-center"><strong>Services</strong></h2>
                <div class="stripe mb-4">
                    <div class="div"></div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="services" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h2>CCTV Services</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="services" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-computer"></i>
                        </div>
                        <h2>Computer Services</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="services" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-regular fa-snowflake"></i>
                        </div>
                        <h2>Air Conditioner Services</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="services" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-hammer"></i>
                        </div>
                        <h2>Installation Services</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="services" data-aos="zoom-in">
                        <div class="icon">
                            <i class="fa-solid fa-wrench"></i>
                        </div>
                        <h2>Repair Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- End of Services Section --}}

    {{-- Partners Section --}}
    {{-- Windows View --}}
    <section class="partners-section my-section d-none d-md-block d-lg-block">
        <div class="container text-center">
            <div class="section mt-5" data-aos="fade-up">
                <h2><strong>Our Partners</strong></h2>
                <div class="stripe mb-2">
                    <div class="div"></div>
                </div>
                <p style="font-weight: 500">Bekerja sama dengan lebih dari 100+ partner</p>
            </div>
            <div class="row mt-5 mb-3" data-aos="fade-right" data-aos-duration="900">
                <div class="col-md-2 align-middle">
                    <img src="https://i.ibb.co/yXB5yk3/hikvision-logo.png" alt="HikVision Logo">
                </div>
                <div class="col-md-2">
                    <img src="https://i.ibb.co/wzhDwW3/dahua-logo.png" alt="Dahua Logo">
                </div>

                <div class="col-md-2">
                    <img src="https://i.ibb.co/JRjC3qZ/ezviz-logo.png" alt="EzViz Logo">
                </div>
                <div class="col-md-2">
                    <img src="https://i.ibb.co/HgTD9Bn/asus-logo.png" alt="Asus Logo">
                </div>
                <div class="col-md-2">
                    <img src="https://i.ibb.co/TkpNVW7/epson-logo.png" alt="Epson Logo">
                </div>
                <div class="col-md-2">
                    <img src="https://i.ibb.co/MG7V23Y/solution-logo.png" alt="Solution Logo">
                </div>
            </div>
        </div>
    </section>
    {{-- Mobile View --}}
    <section class="partners-section my-section d-sm-block d-md-none">
        <div class="container text-center">
            <div class="section mt-5" data-aos="fade-up">
                <h2><strong>Our Partners</strong></h2>
                <div class="stripe mb-2">
                    <div class="div"></div>
                </div>
                <p style="font-weight: 500">Bekerja sama dengan lebih dari 100+ partner</p>
            </div>
            <div class="row mt-5 mb-3" data-aos="fade-right" data-aos-duration="900">
                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="partner">
                        <img src="https://i.ibb.co/yXB5yk3/hikvision-logo.png" alt="HikVision Logo">
                    </div>
                    <div class="partner">
                        <img src="https://i.ibb.co/wzhDwW3/dahua-logo.png" alt="Dahua Logo">
                    </div>
                    <div class="partner">
                        <img src="https://i.ibb.co/JRjC3qZ/ezviz-logo.png" alt="EzViz Logo">
                    </div>
                    <div class="partner">
                        <img src="https://i.ibb.co/HgTD9Bn/asus-logo.png" alt="Asus Logo">
                    </div>
                    <div class="partner">
                        <img src="https://i.ibb.co/TkpNVW7/epson-logo.png" alt="Epson Logo">
                    </div>
                    <div class="partner">
                        <img src="https://i.ibb.co/MG7V23Y/solution-logo.png" alt="Solution Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- End Of Partners Section --}}

    {{-- FAQ Section --}}
    {{-- Windows View --}}
    <section class="faq-section my-section d-none d-md-block d-lg-block">
        <div class="container">
            <div class="row my-5 p-5">
                <div class="header col-md-12 text-center" data-aos="fade-up">
                    <h2><Strong>FAQ - Frequently Asked Questions</Strong></h2>
                </div>
                {{-- Question 1 --}}
                <div class="question col-md-12 mt-5" data-aos="fade-up">
                    <div class="card-header" role="tab" id="headingOne">
                        <a class="d-flex flex-row justify-content-between align-items-center text-dark" role="button"
                            class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse"
                            data-core="" href="#question1" aria-expanded="false">
                            <h4>Apakah Anda menawarkan garansi pada layanan Anda?</h4>
                            <div class="justify-content-end">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </a>

                    </div>
                    <div id="question1" class="panel-collapse noScroll collapse" role="tabpanel"
                        aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0"
                        style="">
                        <div class="panel-body">
                            <p class="mbr-fonts-style panel-text display-7">
                                Tentu saja! Kami mendukung pekerjaan kami dengan garansi yang kokoh untuk memastikan
                                ketenangan pikiran Anda.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Question 2 --}}
                <div class="question col-md-12" data-aos="fade-up">
                    <div class="card-header" role="tab" id="headingTwo">
                        <a class="d-flex flex-row justify-content-between align-items-center text-dark" role="button"
                            class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse"
                            data-core="" href="#question2" aria-expanded="false">
                            <h4>Bisakah saya memesan layanan servis secara online?</h4>
                            <div class="justify-content-end">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                    <div id="question2" class="panel-collapse noScroll collapse" role="tabpanel"
                        aria-labelledby="headingTwo" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0"
                        style="">
                        <div class="panel-body">
                            <p class="mbr-fonts-style panel-text display-7">
                                Tentu saja! Pesan layanan servis Anda secara online sekarang. Hemat waktu dan tenaga dengan
                                proses pemesanan yang cepat dan mudah. Percayakan kebutuhan servis Anda kepada kami dan
                                nikmati kenyamanan memesan secara online!
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Question 3 --}}
                <div class="question col-md-12" data-aos="fade-up">
                    <div class="card-header" role="tab" id="headingOne">
                        <a class="d-flex flex-row justify-content-between align-items-center text-dark" role="button"
                            class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse"
                            data-core="" href="#question3" aria-expanded="false">
                            <h4>Apakah Anda menyediakan layanan instalasi juga?</h4>
                            <div class="justify-content-end">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                    <div id="question3" class="panel-collapse noScroll collapse" role="tabpanel"
                        aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0"
                        style="">
                        <div class="panel-body">
                            <p class="mbr-fonts-style panel-text display-7">
                                Tentu! Kami menyediakan layanan instalasi profesional untuk memastikan penggunaan produk
                                kami dengan sempurna di lingkungan Anda. Dengan tim ahli kami, Anda dapat yakin setiap
                                langkah dilakukan dengan sempurna. Hubungi kami sekarang untuk detail lebih lanjut!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    {{-- Mobile View --}}
    <section class="faq-section-mobile my-section d-sm-block d-md-none">
        <div class="container">
            <div class="row my-5 p-5">
                <div class="header col-12 text-center" data-aos="fade-up">
                    <h2><Strong>FAQ - Frequently Asked Questions</Strong></h2>
                </div>
                {{-- Question 1 --}}
                <div class="question col-12 mt-5" data-aos="fade-up">
                    <div class="card-header" role="tab" id="headingOne">
                        <a class="d-flex flex-row justify-content-between align-items-center text-dark" role="button"
                            class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse"
                            data-core="" href="#question1" aria-expanded="false">
                            <h4>Apakah Anda menawarkan garansi pada layanan Anda?</h4>
                            <div class="justify-content-end">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </a>

                    </div>
                    <div id="question1" class="panel-collapse noScroll collapse" role="tabpanel"
                        aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0"
                        style="">
                        <div class="panel-body">
                            <p class="mbr-fonts-style panel-text display-7">
                                Tentu saja! Kami mendukung pekerjaan kami dengan garansi yang kokoh untuk memastikan
                                ketenangan pikiran Anda.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Question 2 --}}
                <div class="question col-12" data-aos="fade-up">
                    <div class="card-header" role="tab" id="headingTwo">
                        <a class="d-flex flex-row justify-content-between align-items-center text-dark" role="button"
                            class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse"
                            data-core="" href="#question2" aria-expanded="false">
                            <h4>Bisakah saya memesan layanan servis secara online?</h4>
                            <div class="justify-content-end">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                    <div id="question2" class="panel-collapse noScroll collapse" role="tabpanel"
                        aria-labelledby="headingTwo" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0"
                        style="">
                        <div class="panel-body">
                            <p class="mbr-fonts-style panel-text display-7">
                                Tentu saja! Pesan layanan servis Anda secara online sekarang. Hemat waktu dan tenaga dengan
                                proses pemesanan yang cepat dan mudah. Percayakan kebutuhan servis Anda kepada kami dan
                                nikmati kenyamanan memesan secara online!
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Question 3 --}}
                <div class="question col-12" data-aos="fade-up">
                    <div class="card-header" role="tab" id="headingOne">
                        <a class="d-flex flex-row justify-content-between align-items-center text-dark" role="button"
                            class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse"
                            data-core="" href="#question3" aria-expanded="false">
                            <h4>Apakah Anda menyediakan layanan instalasi juga?</h4>
                            <div class="justify-content-end">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                    <div id="question3" class="panel-collapse noScroll collapse" role="tabpanel"
                        aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0"
                        style="">
                        <div class="panel-body">
                            <p class="mbr-fonts-style panel-text display-7">
                                Tentu! Kami menyediakan layanan instalasi profesional untuk memastikan penggunaan produk
                                kami dengan sempurna di lingkungan Anda. Dengan tim ahli kami, Anda dapat yakin setiap
                                langkah dilakukan dengan sempurna. Hubungi kami sekarang untuk detail lebih lanjut!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    {{-- End of FAQ Section --}}
@endsection
