@extends('layouts.theme_pages')
@section('title', $single->movie_name.' '.$single->movie_year )

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section("content")
<div class="dynamic-page-header about-wall">
    <div data-w-id="fb504413-d5b4-3ca2-7c6c-2e8872f7d460" class="dynamic-header-overlay" style="will-change: background; background-color: rgba(7, 24, 34, 0.8);">
      <div class="container w-container">
        <div class="header-content-block" style="will-change: transform, opacity; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">
          <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d; background-image: url('{{ $single->movie_poster }}')" class="header-thumbnail-image about-pic-1">
            <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(60DEG) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(60DEG) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(60DEG) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(60DEG) skew(0, 0);opacity:0; " class="review-circle">
             
            </div>
          </div>

          <div class="singleRatingArea">
            <div class="currentRating float-left">
              <div><i class="fa-sharp fa-solid fa-star"></i></div>
              <div><h5><span>{{ $single->FinalRate }}</span>/10</h5></div>
              <div><h6>({{ 50+$single->RatedUsers }})</h6></div>
            </div>
  
            <div class="userRating float-right" data-bs-toggle="modal" data-bs-target="#rateModel">
              <i class="fa-regular fa-star"></i> Rate Now
            </div>
          </div>

          <div class="clear"></div>
          <div class="dvdr"></div>
     

          <h1 class="header-title">{{ $single->movie_name }}</h1>
          <div class="info-wrapper on-review-page geunre">
            <div class="info-block genre"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon">
                
                @foreach ($single->Genres as $Genre)
                <a href="{{ route('genre.movie',Str::remove(' ', $Genre) ) }}" class="info-title-link">{{ Str::remove(' ', $Genre) }}</a>  
                @endforeach
            </div>  
            <div class="info-block"><img src="{{ asset('assets/icons/clock.svg') }}" alt="" class="info-block-icon">
              <div class="info-title">{{ $single->movie_year }}</div>
            </div>
          </div>
          <p class="header-short-description">{{ $single->movie_description }} Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication, without the meaning of the text influencing the design.</p>
          {{-- <div class="header-info-block">
            <div class="header-info-item">
              <div class="header-info-title bold">Director:</div>
              <div class="header-info-title"></div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  


    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-all.min.css">
    <script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script>


<!-- Modal -->
<div class="modal fade ratingStarModel" id="rateModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="margin-top: 120px">
    <div class="modal-content">
      <div class="modal-body">
        <div class="rating-model">
          <div class="star"><i class="fa-sharp fa-solid fa-star"><div class="value" id="value">?</div></i></div>
          <h6>RATE THIS</h6>
          <h5>{{ $single->movie_name }}</h5>
          <script>
            var a=0;
          </script>
          <form action="{{ route('add.rating') }}" method="POST">
            @csrf
            <input type="hidden" name="movieID" value="{{ $single->movie_id }}">
            <input type="hidden" name="ratingID" value="{{ $validRating['valid_rating_id'] }}">
            <input data-role="rating" data-stars="10" name='star' data-value="{{ $validRating['valid_rating'] }}" data-star-color="#5799EF" data-stared-color="#5799EF"
            data-on-star-click="test(+arguments[0])">
            <input type="submit" value="Rate" class="rate_btn" id='rate_btn' disabled>
          </form>
          <script>
            function test(value){
              document.getElementById('value').innerHTML = value;
              document.getElementById("rate_btn").disabled = false;
            }
          </script>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
 
@endsection

<style>
  h1:first-child{

    margin-top: 20px !important;
    margin-bottom: 10px !important;
    color: #fff !important;
  }
  .container {
    max-width: 1200px !important;
    padding-right: 60px !important;
    padding-left: 60px !important;
}
ul.filmoRating {
    display: flex !important;
}
ul.userRating {
    display: unset !important;
}
.rating.single {
    width: 100%;
    /* text-align: right; */
    margin-bottom: 100px;
}
</style>