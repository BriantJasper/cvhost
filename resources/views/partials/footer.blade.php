<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="mt-5">

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">


        <!-- Section: Links  -->
        <section class="p-3">
            <div class="container text-center text-md-start mt-5">
                <!-- Footer Content -->

                <div class="row mt-3">
                    <!-- Logo and Name -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">CV. HOST</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <a href="/">
                            <img src="/images/logo.png" alt="CV. HOST Logo" class="mt-4">
                        </a>
                    </div>
                    <!-- End of Logo and Name -->

                    <!-- Useful Links -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="{{ $title == 'Home' ? '#' : '/' }}" class="text-white">Home</a>
                        </p>
                        <p>
                            <a href="{{ $title == 'About' ? '#' : '/about' }}" class="text-white">About</a>
                        </p>
                        <p>
                            <a href="/products" class="text-white">Products</a>
                        </p>
                        <p>
                            <a href="/pricing" class="text-white">Pricing</a>
                        </p>
                    </div>
                    <!-- End of Useful Links -->

                    <!-- Contact -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="bi bi-house-door-fill"></i> Jalan Sei. Raya Dalam, Ruko Kompleks Bumi Serdam Damai
                            No. 1</p>
                        <p style="text-transform:none !important;">
                            <i class="bi bi-envelope-fill"></i> hostcomcctv@yahoo.com
                        </p>
                        <p><i class="bi bi-telephone-fill"></i> 0561 - 712987</p>
                        <p><i class="bi bi-telephone-plus-fill"></i> +62 812 57 21033</p>
                    </div>
                    <!-- End of Contact -->

                </div>
                <!-- End of Footer Content -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            Copyright © 2024 CV. HOST
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</div>
<!-- End of .container -->
