<!DOCTYPE html>
<html lang="en">
<head>
	<title>GDPS | E-Recruitment</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	
    <link rel="icon" href="{{asset('img/logo-white.png')}}">

<!--===============================================================================================-->
</head>
<body>		
		<div class="bg-container-contact100" style="background-image: url(img/Foto/hanggar4a.jpg);">
			<div class="contact100-header flex-sb-m">
				<a href="{{route('index')}}" class="contact100-header-logo">
					<img src="{{asset('img/Foto/logo_white.png')}}" alt="LOGO">
				</a>

				<div>
					<button class="btn-show-contact100">
						E-RECRUITMENT
					</button>
				</div>
			</div>
		</div>

		<div class="container-contact100">
			<div class="wrap-contact100">
				<button class="btn-hide-contact100">
					<i class="zmdi zmdi-close"></i>
				</button>

				<div class="contact100-form-title" style="background-image: url(images/bg-02.jpg);">
					<span>E-RECRUITMENT</span>
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="goBack()">
						Back to Prev Page
					</button>
				</div>

				<form class="contact100-form validate-form" id="e-recruit" method="POST" action="{{ route('submit') }}" enctype="multipart/form-data">
					@csrf
					@if (session('success'))
					<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					{!! session('success') !!}
					</div>
					@endif
					@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
					@endif
					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="name" placeholder="Nama lengkap" value="{{ old('name') }}" required>
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-user m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="nationality" placeholder="Asal Daerah" value="{{ old('nationality') }}" required>
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-flag m-b-2"></span>
						</label>
					</div>
					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="nik" placeholder="No.KTP" value="{{ old('nik') }}" maxlength="16" required numeric>
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-flag m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" onblur="(this.type='text')" onfocus="(this.type='date')" name="born_date" placeholder="Tanggal lahir" style="color: #BDBDBD" value="{{ old('born_date') }}" required>
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-calendar-full m-b-2"></span>
						</label>
					</div>
					
					<div class="wrap-input100 validate-input">
						<input id="jenis" class="input100" type="text" name="jenis" value="BANK DATA" style="color: #BDBDBD" readonly>
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-code m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="jenis" class="input100" type="text" name="job" value="BANK DATA" style="color: #BDBDBD" readonly>
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-code m-b-2"></span>
						</label>
					</div>					

					<div class="wrap-input100 validate-input"> 
						<select name="pendidikan" id="name" class="input100" style="height: 30px; color: #BDBDBD" required>
							<option value="" disabled selected hidden>PILIH PENDIDIKAN</option>
							<option value="smk">SMK</option>
							<option value="sma">SMA</option>
							<option value="d1">D1</option>
							<option value="d2">D2</option>
							<option value="d3">D3</option>
							<option value="s1">S1</option>
							<option value="s2">S2</option>
						</select>
						<label class="label-input100" for="name">
							<span class="lnr lnr-code m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="jurusan" placeholder="Jurusan" value="{{ old('jurusan') }}" required>
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-frame-contract m-b-5"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="sekolah" placeholder="Nama Sekolah Ex. Universitas Telkom" value="{{ old('sekolah') }}" required>
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-frame-contract m-b-5"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="nilai" placeholder="Nilai(IPK/UAN)" value="{{ old('nilai') }}" required>
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-frame-contract m-b-5"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="email" class="input100" type="email" name="email" value="{{session()->get('email')}}" placeholder="Email@mail.com" required>
						<span class="focus-input100"></span>
						<label class="label-input100" for="email">
							<span class="lnr lnr-envelope m-b-5"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="phone" class="input100" type="text" name="phone" placeholder="Nomor telepon" value="{{ old('phone') }}" required>
						<span class="focus-input100"></span>
						<label class="label-input100" for="phone">
							<span class="lnr lnr-smartphone m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<textarea id="message" class="input100" name="address" placeholder="Alamat lengkap" value="{{ old('address') }}" required></textarea>
						<span class="focus-input100"></span>
						<label class="label-input100 rs1" for="message">
							<span class="lnr lnr-inbox"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<p style="text-align: center"> PAS FOTO (Format: .jpg .jpeg .png | max: 2mb</p>
						<input id="pas" class="input100" type="file" name="pas" value="{{ old('pas') }}" required>
						<span class="focus-input100"></span>
						<label class="label-input100 rs1" for="message">
							<span class="lnr lnr-file-add"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<p style="text-align: center"> CV (Format: .pdf | max: 2mb</p>
						<input id="cv" class="input100" type="file" name="cv" value="{{ old('cv') }}" required>
						<span class="focus-input100"></span>
						<label class="label-input100 rs1" for="message">
							<span class="lnr lnr-file-add"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<p style="text-align: center"> KTP | Passport (Format: .jpg .jpeg .png | max: 2mb</p>
						<input id="ktp" class="input100" type="file" name="ktp" value="{{ old('ktp') }}" required>
						<span class="focus-input100"></span>
						<label class="label-input100 rs1" for="message">
							<span class="lnr lnr-file-add"></span>
						</label>
					</div>



					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" type="submit" id="e-recruit">
							Send Now
						</button>
					</div>
				</form>
			</div>
		</div>



<!--===============================================================================================-->
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<script>
	function jenis(){
	var jenis = document.getElementById("jenis").value;
	if ( jenis == "JOB"){
		$coba = "dua";
	}
	if ( jenis == "INTERNSHIP"){
		$coba = "tiga";
	}
	}
	</script>
	<script>
		function goBack() {
		  window.history.back();
		}
	</script>
</body>
</html>
