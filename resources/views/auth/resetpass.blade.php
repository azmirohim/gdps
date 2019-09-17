@extends('layouts.header')

@section('content')
<div class="login-box">
    <div class="login-box-body">
        <div class="login-logo">
            <a href="{{ route('index') }}"><b>GARUDA DAYA </b>PRATAMA SEJATERA</a>
        </div>
        <div class="login-logo">
            <h3>Log In</h3>
        </div>
      <form action="{{ route('lupapas') }}" method="post">
        @csrf
        @if ($errors->any()) 
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
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
        <div class="form-group has-feedback">
            <input id="name" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
          </div>
          <!-- /.col -->
        </div>
      </form>  
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
@endsection
