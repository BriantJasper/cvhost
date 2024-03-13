@extends('partials.main')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="image-container">
                <img src="/images/hero.jpg" alt="" srcset="" width="100%" height="100%">
                <div class="overlay d-flex flex-column justify-content-center align-items-center text-light">
                    <h2 class="text-center mb-5" style="font-size:3rem;"><Strong>Selamat Datang Di <br> CCTV Host &
                            Computer</Strong></h2>
                    <a class="cta-hero mt-5" style="font-size: 3rem" href="#about"><strong>Start</strong></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">

        {{-- About Us Section --}}
        <section class="about-section my-section" id="about">
            <div class="row">
                <div class="col-md-12">
                    <h2><Strong>About Us</Strong></h2>
                    div.
                </div>
            </div>
        </section>
        {{-- End of About Us Section --}}

        {{-- Partners Section --}}
        <section class="partners-section my-section">
            <div class="section mt-5">
                <h2><strong>Our Partners</strong></h2>
                <p style="font-weight: 400">Bekerja sama dengan lebih dari 100+ partner</p>
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
        {{-- End Of Partners Section --}}
    </div>
    </section>


    {{-- Services Section --}}
    <section class="services-section my-section text-center">

        <div class="container">
            <h2 class="mb-4"><strong>Services</strong></h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="card mb-4" style="width: 100%;">
                        <img src="/images/computer.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Komputer</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec
                                facilisis ligula, a volutpat
                                diam.
                                Nulla porttitor,</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4" style="width: 100%;">
                        <img src="/images/computer.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CCTV</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec
                                facilisis ligula, a volutpat
                                diam.
                                Nulla porttitor,</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4" style="width: 100%;">
                        <img src="/images/computer.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Air Conditioner</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec
                                facilisis ligula, a volutpat
                                diam.
                                Nulla porttitor,</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- End of Services Section --}}

    {{-- FAQ Section --}}

    <section class="faq-section my-section">
        <div class="container">
            <div class="row my-5 p-5">
                <div class="header col-md-12 text-center">
                    <h2 style=""><Strong>FAQ - Your Often Asked Questions <br> Answered</Strong></h2>
                </div>
                {{-- Question 1 --}}
                <div class="question col-md-12 mt-5">
                    <div class="card-header" role="tab" id="headingOne">
                        <a class="d-flex flex-row justify-content-between align-items-center text-dark" role="button"
                            class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core=""
                            href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <h4><Strong>Do you offer warranty on your services?</Strong></h4>
                            <div class="justify-content-end">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                    <div id="collapse1" class="panel-collapse noScroll collapse" role="tabpanel"
                        aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0"
                        style="">
                        <div class="panel-body">
                            <p class="mbr-fonts-style panel-text display-7">
                                Absolutely! We stand by our work with a rock-solid warranty to ensure your peace of mind.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Question 2 --}}
                <div class="question col-md-12">
                    <div class="card-header" role="tab" id="headingTwo">
                        <a class="d-flex flex-row justify-content-between align-items-center text-dark" role="button"
                            class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse"
                            data-core="" href="#collapse2" aria-expanded="false" aria-controls="collapse1">
                            <h4><Strong>Can I book a maintenance service online?</Strong></h4>
                            <div class="justify-content-end">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                    <div id="collapse2" class="panel-collapse noScroll collapse" role="tabpanel"
                        aria-labelledby="headingTwo" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0"
                        style="">
                        <div class="panel-body">
                            <p class="mbr-fonts-style panel-text display-7">
                                Of course! Our online booking system is as easy as waving a wand. Just a few clicks and
                                you're all set!
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Question 3 --}}
                <div class="question col-md-12">
                    <div class="card-header" role="tab" id="headingOne">
                        <a class="d-flex flex-row justify-content-between align-items-center text-dark" role="button"
                            class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse"
                            data-core="" href="#collapse3" aria-expanded="false" aria-controls="collapse1">
                            <h4><Strong>Do you provide installation services too?</Strong></h4>
                            <div class="justify-content-end">
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                    <div id="collapse3" class="panel-collapse noScroll collapse" role="tabpanel"
                        aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0"
                        style="">
                        <div class="panel-body">
                            <p class="mbr-fonts-style panel-text display-7">
                                Indeed! Our installation experts will have your new tech set up and running smoothly in a
                                flash.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    {{-- End of FAQ Section --}}
@endsection
