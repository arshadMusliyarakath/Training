@extends('layouts.theme_pages')
@section('title', $selectGenre." Movies" )

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section("content")
<div class="dynamic-page-header about-wall category_area">
  <div data-w-id="" class="dynamic-header-overlay" style="will-change: background; background-color: rgba(7, 24, 34, 0.8);">
    <div class="container" style="padding-top: 100px;text-align: center;">
      <div class="row">
        <h1><span style="color: #f1b722;">Genre:</span> <b>{{ $selectGenre }}</b></h1>
        <div class="dvdr"></div>
        @foreach ($movies as $movie)
          
            <div class="col-md-3">
              <a href="{{ route('single.movie', $movie->permalink) }}"><div class="thumbnile" style="background-image: url('{{ $movie->movie_poster }}')"></div></a>
              <h3><a href="{{ route('single.movie', $movie->permalink) }}">{{ $movie->movie_name }}</a></h3>
            </div>


         @endforeach
          
        
        
      </div>
    </div>
  </div>
</div>




@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
 
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

</style>