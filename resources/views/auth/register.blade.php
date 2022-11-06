@extends('layouts.auth-master')

@section('title')
Register
@endsection

@section('content')
<div class="card card-primary">
  <div class="card-header" style="width: 100%; text-align: center;">
    <h4 style="margin-left: 120px;">Register</h4>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible show fade" style="width: 100%;">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        {{ $message }}
      </div>
    </div>
    @elseif ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible show fade" style="width: 100%;">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        {{ $message }}
      </div>
    </div>
    @endif
  </div>

  <div class="card-body">
    <form method="POST" action="{{ route('register.post') }}">
      @csrf
      <input type="hidden" name="role" id="role" value="Admin">
      <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" tabindex="1" placeholder="Full name" value="{{ old('name') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('name') }}
        </div>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" tabindex="1" value="{{ old('email') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
      </div>

      <div class="form-group">
        <label for="password" class="control-label">Password</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" placeholder="Set account password" name="password" tabindex="2">
        <div class="invalid-feedback">
          {{ $errors->first('password') }}
        </div>
      </div>

      <div class="form-group">
        <label for="password_confirmation" class="control-label">Confirm Password</label>
        <input id="password_confirmation" type="password" placeholder="Confirm account password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}" name="password_confirmation" tabindex="2">
        <div class="invalid-feedback">
          {{ $errors->first('password_confirmation') }}
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Register
        </button>
      </div>
    </form>
  </div>
</div>
<div class="mt-5 text-muted text-center">
 Already have an account? <a href="{{ route('login') }}">Sign In</a>
</div>
@endsection
