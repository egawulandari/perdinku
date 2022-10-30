@extends('layouts.auth-master')

@section('title')
Forget Password
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
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Forgot Password
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
