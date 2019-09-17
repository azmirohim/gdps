@include('includes.header')

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="hero-slideshow owl-carousel">

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/Foto/person.jpg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">SELAMAT DATANG</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">  <span>Garuda Daya Pratama Sejahtera</span> </h2>
                            <p data-animation="fadeInUp" data-delay="500ms">Menjalankan usaha di bidang penyediaan dan pengelolaan ketenagakerjaan, serta bidang aktivitas penyedia jasa lainnya</p>
                        </div>
                    </div>
                </div>
              </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/foto/bg_3.jpg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">DAPATKAN SEGERA</h6>
                            <h2 data-animation="fadeInDown" data-delay="300ms"><span>Pelayanan Premium </span></h2>
                            <p data-animation="fadeInDown" data-delay="500ms">Memberikan layanan yang prima dan terbaik untuk kepuasan seluruh pelanggan secara konsisten</p>
                            <a href="{{route('service')}}" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(img/administration.jpg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms"></h6>
                            <h2 data-animation="fadeInDown" data-delay="300ms"><span>Profesional dan Terpercaya </span></h2>
                            <p data-animation="fadeInDown" data-delay="500ms">Menjadi mitra profesional dan berintegritas guna menghasilkan layanan yang berkualitas</p>
                            <a href="{{route('service')}}" class="btn credit-btn mt-50" data-animation="fadeInDown" data-delay="700ms">Discover</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

    </div>
</div>
<!-- ##### Hero Area End ##### -->

 {{--  our index services  --}}

 <section class="breadcrumb-area bg-img jarallax" style="background-color:#021c3c; height:520px;">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-sm-12 col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4" style="color:white; font-size:40px; padding-bottom:10px;">Our Value</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                <p class="mt-5" style="color:white; font-size:20px;">Untuk meraih visi dan misi perusahaan, kami memiliki nilai-nilai yang menjadi budaya dan harus dianut oleh semua anggota dalam organisasi. Nilai-nilai ini diharapkan bisa membuat organisasi terus bertahan terhadap berbagai perubahan serta tantangan bisnis dari luar.</p>
                <a href="{{route('about')}}" class="btn btn-light">CEO Message</a>
            </div>
        </div>
    </div>
</section>

{{--  our index services  --}}


{{--  newsletter start  --}}

<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span><i class="fa fa-phone" aria-hidden="true"></i></span></div>
                        <div class="text" style="color:#032a5a;">
                            <h3>000 (123) 456 7890</h3>
                            <p>Garuda Daya Pratama Sejahtera</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span></div>
                        <div class="text" style="color:#032a5a;">
                            <h3>Location</h3>
                            <p>Tangcity Business Park Blok F No. 32</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span><i class="fa fa-clock-o" aria-hidden="true"></i></span></div>
                        <div class="text" style="color:#032a5a;">
                            <h3>Open Monday-Friday</h3>
                            <p>8:00am - 9:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-md-flex pl-md-5 p-4 align-items-center">
                <ul class="social-icon">
          <li class="ftco-animate"><a href="#"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
          <li class="ftco-animate"><a href="#"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
          <li class="ftco-animate"><a href="#"><span><i class="fa fa-instagram" aria-hidden="true"></i></span></a></li>
        </ul>
        <br>&nbsp;&nbsp;
        <a href="{{route('contact')}}"><span class="btn btn-light medium" aria-hidden="true">Contact Us</span></a>
        </ul>
            </div>
        </div>
    </div>
</section>

<!-- ##### newsletter area end ###### -->

{{--  newsletter end  --}}

<!-- ##### Call To Action Start ###### -->
<section class="cta-area d-flex flex-wrap">
    <!-- Cta Thumbnail -->
    <div class="cta-thumbnail bg-img" style="background-image: url(img/core-img/bg_4.jpg); padding-top:50px; height:500px; background-attachment: fixed !important;">
        <div class="col sm-12 col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4" style="color:white;">Your Prime Partners</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <img src="{{asset('img/logo-white.png')}}" alt="" style="max-width: 100%; height: auto; padding-top:20px;" width="100" height="100" class="responsive-img">


            <p class="mt-5" style="color:white; ">Kami akan menjadi mitra bisnis strategis anda dengan menjunjung tinggi nilai-nilai perusahaan. Menjadi mitra yang professional dan berintegritas guna menghasilkan layanan yang berkualitas.</p>
            <a href="{{route('about')}}" class="btn btn-light">Read More</a>
        </div>
    </div>
    <!-- Cta Content -->
    <div class="cta-content" style="background-image:url(img/foto/person.jpg); background-size:cover;">
        <!-- Section Heading -->
        <div class="section-heading white">
    </div>

</section>
<!-- ##### Call To Action End ###### -->

<!-- ##### Logo Area Start ###### -->
<section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/agree.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="nl-content text-center">
                    <img src="{{asset('img/core-img/new-logo-gdps.png')}}" alt="" style="height:400px; width:800px;"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Logo Area End ###### -->

@include('includes.footer')
