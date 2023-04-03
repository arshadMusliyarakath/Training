@extends('layouts.theme_pages')
@section('title', "Signup" )

@section("content")

  <div class="dynamic-page-header about-wall">
    <div data-w-id="fb504413-d5b4-3ca2-7c6c-2e8872f7d460" class="dynamic-header-overlay" style="will-change: background; background-color: rgba(7, 24, 34, 0.8);">
      <div class="container w-container">
        <div class="header-content-block" style="">
         
          <h1 class="header-title">Signup</h1>
          <div class="info-wrapper on-review-page">
          </div>
          <form class="myform" >
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" placeholder="Enter Name" autofocus>
            </div>
            <div class="form-group">
              <label for="">Email address</label>
              <input type="email" placeholder="Enter email" autofocus>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="" id="" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="">Retype Password</label>
              <input type="password" class="" id="" placeholder="Password">
            </div>
            
            <button type="submit" class="btn">CREATE</button>
            <a href="{{ route('login') }}" style="margin-left: 15px">I have alreday an Account</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  
 
@endsection
