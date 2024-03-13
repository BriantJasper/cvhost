@extends('partials.main')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="image-container">
                <img src="https://i.postimg.cc/Y0N94GxQ/hero.png" alt="" srcset="" width="100%">
                <div class="overlay d-flex flex-column justify-content-center align-items-center text-light">
                    <h2 class="text-center mb-5 mt-5" style="font-size:2.5rem;"><Strong>Selamat Datang Di <br> CCTV Host &
                            Computer</Strong></h2>
                    <a class="cta-hero mt-5" style="font-size: 2.5rem" href="#about"><strong>Start</strong></a>
                </div>
            </div>
        </div>
    </div>

    {{-- About Us Section --}}
    <section class="about-section my-section" id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <h2><Strong>About Us</Strong></h2>
                    <div class="stripe">
                        <div class="div"></div>
                    </div>
                </div>
                <div class="col-md-12 my-4">
                    <h4>Kami adalah perusahaan yang bergerak di bidang CCTV, Komputer dan Elektronik. Kami menyediakan
                        berbagai jasa. Termasuk instalasi, maintenance dan perbaikan. Kami menyediakan berbagai jasa lengkap
                        untuk anda atau bisnis anda.</h4>
                </div>
                <div class="col-md-4">
                    <img src="https://i.ibb.co/VJCTTZB/a1.jpg" alt="Inside of A PC" />
                </div>
                <div class="col-md-4">
                    <img src="https://i.ibb.co/7y9x987/a2.jpg" alt="CCTV" />
                </div>
                <div class="col-md-4">
                    <img src="https://i.ibb.co/vjLwqD6/a3.jpg" alt="Air Conditioner Exhaust" />
                </div>
            </div>
        </div>
    </section>
    {{-- End of About Us Section --}}

    {{-- Latest Products Section --}}
    <section class="products-section">
        <div class="container">
            <h2 class="text-center"><strong>Latest Products</strong></h2>
            <div class="stripe mb-2">
                <div class="div"></div>
            </div>
            <p class="text-center text-dark mt-1" style="font-weight: 500;">Our newest and latest up to date products</p>

            {{-- Row --}}
            <div class="row">
                {{-- Product --}}
                <div class="col-md-3">
                    <div class="product-img">
                        <img src="/images/product/1.png" alt="" srcset="">
                    </div>
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3">
                    <img src="/images/product/1.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3">
                    <img src="/images/product/1.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3">
                    <img src="/images/product/1.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3">
                    <img src="/images/product/1.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3">
                    <img src="/images/product/1.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3">
                    <img src="/images/product/1.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-md-3">
                    <img src="/images/product/1.png" alt="" srcset="">
                    <div class="text-container ms-1">
                        <h5 class="mt-2"><strong>Black Mini Camera</strong></h5>
                        <p>Rp 815.000,00</p>
                    </div>
                </div>

            </div>



        </div>
    </section>
    {{-- End of Latest Products Section --}}

    {{-- Services Section --}}
    <section class="services-section my-section">
        <div class="container">
            <h2 class="text-center"><strong>Services</strong></h2>
            <div class="stripe mb-4">
                <div class="div"></div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="services">
                        <div class="icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h2>CCTV Services</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="services">
                        <div class="icon">
                            <i class="bi bi-pc-display"></i>
                        </div>
                        <h2>Computer Services</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="services">
                        <div class="icon">
                            <i class="fa-regular fa-snowflake"></i>
                        </div>
                        <h2>Air Conditioner Services</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="services">
                        <div class="icon">
                            <i class="fa-solid fa-hammer"></i>
                        </div>
                        <h2>Installation Services</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="services">
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
    <div class="container text-center">

        <section class="partners-section my-section">
            <div class="section mt-5">
                <h2><strong>Our Partners</strong></h2>
                <div class="stripe mb-2">
                    <div class="div"></div>
                </div>
                <p style="font-weight: 500">Bekerja sama dengan lebih dari 100+ partner</p>
            </div>
            <div class="row mt-5 mb-3">
                <div class="col-md-2 align-middle">
                    <img src="https://i.ibb.co/yXB5yk3/hikvision-logo.png" alt="asus-logo" width="100%">
                </div>
                <div class="col-md-2">
                    <img src="https://i.ibb.co/wzhDwW3/dahua-logo.png" alt="">
                </div>

                <div class="col-md-2">
                    <img src="https://i.ibb.co/JRjC3qZ/ezviz-logo.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="https://i.ibb.co/HgTD9Bn/asus-logo.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="https://i.ibb.co/TkpNVW7/epson-logo.png" alt="">
                </div>
                <div class="col-md-2">
                    <img src="https://i.ibb.co/MG7V23Y/solution-logo.png" alt="">
                </div>
            </div>
        </section>
    </div>
    {{-- End Of Partners Section --}}

    {{-- FAQ Section --}}

    <section class="faq-section my-section">
        <div class="container">
            <div class="row my-5 p-5">
                <div class="header col-md-12 text-center">
                    <h2><Strong>FAQ - Frequently Asked Questions</Strong></h2>
                </div>
                {{-- Question 1 --}}
                <div class="question col-md-12 mt-5">
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
                <div class="question col-md-12">
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
                <div class="question col-md-12">
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
