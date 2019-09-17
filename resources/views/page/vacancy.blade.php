@include('includes.header')

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/Foto/hanggar4a.jpg); height:450px;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Career</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Career</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
    <div class="preloader d-flex align-items-center justify-content-center" style="background-color:#003679; opacity:0.9;">
        <center><br><br><br>
        <div class="loader" id="loader" ></div>
        <div class="loader" id="loader2"></div>
        <div class="loader" id="loader3"></div>
        <div class="loader" id="loader4"></div>
        <span id="text"><img src="{{asset('img/logo-white.png')}}"></span><br>
    </div>


    <!-- Vacancy -->
    <div class="cont">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
	    @foreach ($errors->all() as $error)
				{{ $error }} <br/>
				@endforeach
		</div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {!! session('success') !!}
    </div>
    @endif
    @if (session('alert'))
    <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {!! session('alert') !!}
    </div>
    @endif
        <h2 class="job"> Job Vacancy</h2>
        <p class="job">List of available job opportunity in Garuda Daya Pratama Sejahtera<p>
        <table class="table table-hover">
                  <tr>
                    <th>LOWONGAN</th>
                    <th>JENIS</th>
                    <th>BERAKHIR</th>
                    <th>KETERANGAN</th>
                  </tr>
                    <tr>
                    <td>BANK DATA</td>
                    <td>BANK DATA</td>
                    <td>UNLIMITED</td>
                    <td><a href="#" data-toggle="modal" data-target="#bank">APPLY</a></td>
                    @foreach ($vac as $va)
                    @if(date_create() < date_create($va->tanggal))
                      <td>{{ $va->judul }}</td>
                      <td>{{ $va->jenis }}</td>
                      <td>{{ $va->tanggal }}</td>
                      <td> <a href="/vacancy/detail/{{ $va->id }}">DETAIL</a>
                           <a> | </a>
                           @if ($va->jenis == 'JOB')
                           <a href="#" data-toggle="modal" data-target="#loginj">APPLY</a>
                           @elseif ($va->jenis == 'INTERNSHIP')
                           <a href="#" data-toggle="modal" data-target="#logini">APPLY</a>
                           @endif
                        </td>
                    @endif
                    </tr>
                  @endforeach
        </table>
    </div>

    <style>
        .modal-content {
            margin-top: 180px;
            width: 100%;
            height: auto;
        }

        .modal-header {
            background-image: url(img/foto/bg-02.jpg);
            background-size: cover;
            height: 120px;
        }

        .modal-header img {
            margin-left: 140px;
            height: 100px;
            width: 200px;
        }

        .modal-body {
            height: 310px;
        }

        .form-control {
            background-color: transparent;
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 20px;
            width: 300px;
            height: 50px;
        }

        .sub {
            margin-top: 20px;
            height: 50px;
            background: #003679;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            font-weight: bold;
        }
        .sub:hover{
            background:rgb(0, 162, 255);
        }

        .modal-footer {
            background-image: url(img/foto/bg-02.jpg);
            height: 30px;
        }


</style>




<!-- Modal LOGIN JOB -->
<div id="loginj" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{asset('img/Foto/logo_white.png')}}" >
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="/logon" method="GET">
                    {{csrf_field() }}
                    <div class="inp">
                        <input id="email_lamar" type="email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="email_lamar" value="{{ old('email_lamar') }}" placeholder="Email" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email_lamar'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email_lamar') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="inp">
                        <input  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="pass_lamar" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="login">
                        <button type="logon" id="logon" class="sub">Login</button>
                        <div style="font-size:10px;">
                        <a style="font-size:13px;" href="#" data-toggle="modal" data-target="#lupa" data-dismiss="modal">Forget Password</a>
                        </div>
                        <a>Belum punya akun?</a>
                        <a href="#" data-toggle="modal" data-target="#regis" data-dismiss="modal">Register</a>
                    </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <a>Belum punya akun?</a>
                <a href="#" data-toggle="modal" data-target="#regis" data-dismiss="modal">Register</a> -->
            </div>
        </div>
    </div>
</div>
<!-- End Modal JOB -->

<!-- Modal LOGIN INTERNSHIP -->
<div id="logini" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header" >
                <img src="{{asset('img/Foto/logo_white.png')}}" >
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="/logonint" method="GET">
                    {{csrf_field() }}
                    <div class="inp">
                        <input id="email_lamar" type="email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="email_lamar" value="{{ old('email_lamar') }}" placeholder="Email" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email_lamar'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email_lamar') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="inp">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="pass_lamar" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="login">
                        <button type="logonint" id="logonint" class="sub">Login</button>
                        <div style="font-size:10px;">
                        <a style="font-size:13px;" href="#" data-toggle="modal" data-target="#lupa" data-dismiss="modal">Forget Password</a>
                        </div>
                        <a>Belum punya akun?</a>
                        <a href="#" data-toggle="modal" data-target="#regis" data-dismiss="modal">Register</a>
                    </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- End Modal INTERNSHIP -->

<!-- Modal LOGIN BANK DATA -->
<div id="bank" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{asset('img/Foto/logo_white.png')}}" >

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="/bank" method="GET">
                    {{csrf_field() }}
                    <div class="inp">
                        <input id="email_lamar" type="email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="email_lamar" value="{{ old('email_lamar') }}" placeholder="Email" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email_lamar'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email_lamar') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="inp">
                        <input  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="pass_lamar" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="login">
                        <button type="logon" id="logon" class="sub">Login</button>
                        <div style="font-size:10px;">
                        <a style="font-size:13px;" href="#" data-toggle="modal" data-target="#lupa" data-dismiss="modal">Forget Password</a>
                        </div>
                        <a>Belum punya akun?</a>
                        <a href="#" data-toggle="modal" data-target="#regis" data-dismiss="modal">Register</a>
                    </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <a>Belum punya akun?</a>
                <a href="#" data-toggle="modal" data-target="#regis" data-dismiss="modal">Register</a> -->
            </div>
        </div>
    </div>
</div>
<!-- End Modal BANK DATA -->

<!-- MODAL REGISTER -->
<div id="regis" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <div class="modal-content" >
            <div class="modal-header" >
                <img src="{{asset('img/Foto/logo_white.png')}}" >

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="height:400px;">
                <div class="reg">
                    <form action="/registrasi" method="POST">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    {{csrf_field() }}
                    <div class="inp">
                        <input  id="name_lamar" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name_lamar" value="{{ old('name_lamar') }}" placeholder="Username" required autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        @if ($errors->has('name_lamar'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name_lamar') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="inp">
                        <input id="email_lamar" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email_lamar" value="{{ old('email_lamar') }}" placeholder="Email" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="inp">
                        <input  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="pass_lamar" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    </div>
                    <div class="inp">
                        <input  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="pass_lamar_confirmation" placeholder="Password Confirmation" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div>
                      <button type="lamar" id="lamar" class="sub">Register</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- End Modal REGISTER -->

<!-- MODAL LUPA PASSWORD -->
<div id="lupa" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
                <img src="{{asset('img/Foto/logo_white.png')}}" >
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="lupa">
                    <form action="/lupa-password" method="POST">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        {{csrf_field() }}

                        <div class="inp">
                            <input id="email_lamar" type="email" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="email_lamar" value="{{ old('email_lamar') }}" placeholder="Email" required>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @if ($errors->has('email_lamar'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email_lamar') }}</strong></span>
                            @endif
                        </div>

                        <div class="lupa">
                            <button id="lupa" class="sub">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- End Modal FORGET -->



    <!-- ##### vacancy Area start ##### -->



    <section class="bg-overlay" style="background-image: url(img/Foto/3.jpg); height:400px; background-attachment: fixed !important;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-sm-12 col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4" style="color:white;">It's a Pleasure to Work with You!</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5" style="color:white; font-size:17px;">We are open to everybody who's willing to work hard and having extensive maintenance expertise and skill. Check our job vacancy below for career and internship information.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="spasi" style="height:60px;">
        <div class="container"></div>
    </section>

    <section class="parallax-window background-1 bg-overlay" data-parallax="scroll" id="guidelines" style="background-image:url(img/Foto/person1.jpg); background-attachment: fixed !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="mb-4" style="color:white; padding-top:20px;">
                        Ready to Join Us?</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                </div>
            </div>
        </div><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1">

                </div>
                <div style="color:white" class="col-lg-2 col-md-2 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-user-plus text-white sr-icons"></i>
                        <h3>Sign Up</h3>
                        <p class="text-white">Fill in the register form</p>
                    </div>
                </div>
                <div style="color:white" class="col-lg-2 col-md-2 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-laptop text-white sr-icons"></i>
                        <h3>Sign In</h3>
                        <p class="text-white">Sign in to our website</p>
                    </div>
                </div>
                <div style="color:white" class="col-lg-2 col-md-2 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-pencil-square-o text-white sr-icons"></i>
                        <h3>Edit Profile</h3>
                        <p class="text-white">Go into your profile and click 'Edit profile' button to make your own CV</p>
                    </div>
                </div>
                <div style="color:white" class="col-lg-2 col-md-2 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-file-text-o text-white sr-icons"></i>
                        <h3>Apply</h3>
                        <p class="text-white">Get your proposal and cover letter together, and apply for an internship</p>
                    </div>
                </div>
                <div style="color:white" class="col-lg-2 col-md-2 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-hourglass text-white sr-icons"></i>
                        <h3>Waiting</h3>
                        <p class="text-white">We will check your application and notify you of further updates. Kindly keep checking the 'History' menu for your internship status</p>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1">

                </div>
            </div>
        </div>
    </section>

    <!-- ##### vacancy Area start ##### -->


    {{--  link belajar export pdf: https://itsolutionstuff.com/post/laravel-5-generate-pdf-from-html-view-file-and-download-using-dompdfexample.html  --}}



@include('includes.footer')
