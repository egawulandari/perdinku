@extends('layouts.auth-master')

@section('title')
Login
@endsection

@section('content')
<div class="card card-primary">
  <div class="card-body">
    <form method="POST" action="">
        @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input aria-describedby="emailHelpBlock" id="email" type="email" class="form-control" name="email" placeholder="Registered email address" tabindex="1" value="{{ old('email') }}" autofocus>
        <div class="invalid-feedback">
          
        </div>
      </div>

      <div class="form-group">
        <div class="d-block">
            <label for="password" class="control-label">Password</label>
          <div class="float-right">
            <a href="{{ Route('auth.forget-password') }}" class="text-small">
              Forgot Password?
            </a>
          </div>
        </div>
        <input aria-describedby="passwordHelpBlock" id="password" type="password" placeholder="Your account password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password" tabindex="2">
        <div class="invalid-feedback">
          
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Login
        </button>
      </div>
    </form>
  </div>
</div>
{{-- <div class="mt-5 text-muted text-center">
  Don't have an account? <a href="">Create One</a>
</div> --}}
@endsection
