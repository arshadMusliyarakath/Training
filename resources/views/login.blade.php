@extends('layouts.theme_pages')
@section('title', "Login" )

@section("content")

  <div class="dynamic-page-header about-wall">
    <div data-w-id="fb504413-d5b4-3ca2-7c6c-2e8872f7d460" class="dynamic-header-overlay" style="will-change: background; background-color: rgba(7, 24, 34, 0.8);">
      <div class="container w-container">
        <div class="header-content-block" style="">
         
          <h1 class="header-title">Login</h1>
          <div class="info-wrapper on-review-page">
          </div>
          <form class="myform" method="POST" action="{{ route('loginSubmited') }}">
            @csrf
            <div class="form-group">
              <label for="">Email address</label>
              <input type="email" placeholder="Enter email" name='email' value="arssshu@mail.com"  autofocus>
              </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="" name='password'  placeholder="Password" value="Shabanu">
            </div>
          
            <button type="submit" class="btn">LOGIN</button>
            <a href="{{ route('signup') }}" style="margin-left: 15px">Create an Account</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  
 
@endsection
