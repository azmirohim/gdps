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
@foreach ($detil as $de)
		<div class="bg-container-contact100" style="background-image: url(img/Foto/person.jpg);">
			<div class="contact100-header flex-sb-m">
				<a href="{{route('index')}}" class="contact100-header-logo">
					<img src="{{asset('img/Foto/logo_white.png')}}" alt="LOGO">
				</a>

				<div>
					<button class="btn-show-contact100">
						DETAIL VACANCY
					</button>
				</div>
			</div>
		</div>

		<div class="container-contact100">
			<div class="wrap-contact100" style="width:1200px;">

				<div class="contact100-form-title" style="background-image: url(images/bg-02.jpg); height:80px;">
					<span>{{$de->judul}}</span>
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="goBack()">
						Back to Prev Page
					</button>
				</div>

                <table style="font-size: 30px; margin-left:10px; width:1200px" >
                    <tr>
						<th style="width:50%; text-align:center; font-size:25px;" >Job Description</th>
						<th style=" width:50%; text-align:center; font-size:25px;">Job Requirement</th>
                    </tr>
                    <tr>
                        <td ><textarea  class="area"readonly>{{ $de->deskripsi }}</textarea></td>
						<td ><textarea  class="areaa"readonly>{{ $de->requirement }}</textarea></td>
					</tr>
                </table>
                <p> </p><br/>
                <p> </p>

			</div>
		</div>

<!-- Modal -->



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
		function goBack() {
		  window.history.back();
		}
	</script>
	<script>
	function area(){}
		var textarea = document.querySelector('textarea');
		textarea.addEventListener('keydown', autosize);
        	function autosize(){
				var el = this;
  				setTimeout(function(){
    			el.style.cssText = 'height:auto; padding:0';
				el.style.cssText = 'height:' + el.scrollHeight + 'px';
  				},0);
			};
	}
</script>
<script type=”text/javascript”>

elasticTextArea(“elastis”);

</script>

@endforeach
</body>
</html>
