<!-- ##### Footer Area Start ##### -->
     <footer class="footer-area bg-img" >
        {{--  style="background-image: url(img/foto/3.jpg);"   --}}
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <!-- Footer Logo -->
                                <a href="{{route('index')}}" class="footer-logo"><img src="{{asset('img/white_logo.png')}}" alt=""></a>
                            </div>
                            <p style="color:white;">Menjalankan usaha di bidang penyediaan dan pengelolaan ketenagakerjaan, serta bidang aktivitas penyedia jasa lainnya</p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://id.linkedin.com/company/gdpsofficial" target="_blank" ><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>QUICK LINK</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="{{route('service')}}">Aircraft Technical Assistance</a></li>
                                    <li><a href="{{route('service')}}">Front Office</a></li>
                                    <li><a href="{{route('service')}}">Aircraft Ground Handling</a></li>
                                    <li><a href="{{route('service')}}">Aviation Security</a></li>
                                    <li><a href="{{route('service')}}">Aircraft Painter</a></li>
                                    <li><a href="{{route('service')}}">Office & Bulding Management</a></li>
                                    <li><a href="{{route('service')}}">Administration</a></li>
                                    <li><a href="{{route('service')}}">Security Guard</a></li>
                                    <li><a href="{{route('service')}}">Data Entry</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                            <div class="single-footer-widget">
                                <div class="widget-title">
                                    <h5>CONTACT</h5>
                                </div>

                                <div class="contact-information">
                                    <p>Tangcity Business Park Blok F no. 32
                                        Jl. Jenderal Sudirman No. 1 - Tanah Tinggi, Tangerang, Banten</p>
                                    <p><span>Phone:</span> +1 234 567 890</p>
                                    <p><span>Email:</span>marketing@garudapratama.com</p>
                                </div>
                            </div>
                        </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                    <a href="{{route('contact')}}">
                                <h5>MAPS LOCATION</h5>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="copywrite-content d-flex flex-justify-content-align-items-center">
                                <!-- Footer Logo -->
                                <img src="{{asset('img/maps_location.png')}}" alt="" style="max-width: 100%; height: auto;" width="200" height="216" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area" style="background-color:#052042;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-5">
                        <div class="copywrite-text">
                            <p>&copy;
                                <!-- Link back to Colorlib can't be removed. Template is under CC 3.0-->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Garuda Daya Pratama Sejahtera |<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('service')}}">Services</a></li>
                                    <li><a href="{{route('vacancy')}}">Career</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>



</body>
</html>
