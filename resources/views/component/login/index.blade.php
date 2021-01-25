@extends('layouts.master')
@section("title", "Login")
@section('content')

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row no-gutters justify-content-center mb-4">
      <div class="col-md-6 text-center heading-section ftco-animate">
        <span class="subheading">Admin Area</span>
        <h2 class="mb-4">Login Into Your Account</h2>
      </div>
    </div>
    <div class="row block-9 justify-content-center mb-5">
      <div class="col-md-8 mb-md-5">
        <form action="{{route('login.login')}}" class="border p-5 contact-form row" method="POST">
            @csrf
          <div class="form-group col-md-12">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
          </div>
          <div class="form-group col-md-12">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
          </div>
          <button type="submit" class="btn btn-success col-md-12 py-2" style="font-weight:bold;margin-top:20px;">Log In</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
