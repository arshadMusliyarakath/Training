<!DOCTYPE html>
<html>

  
  <title>Home - FilmoRate</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/tovinos-trendy-project.webflow.css') }}" rel="stylesheet" type="text/css">
  <script src="{{ asset('assets/js/webfont.js') }}" type="text/javascript"></script>
  <link rel="stylesheet" href="./TOVINO THOMAS_files/css" media="all"><script type="text/javascript">WebFont.load({  google: {    families: ["Roboto:100,300,regular,italic,500,700,900","Catamaran:100,200,300,regular,500,600,700,800,900"]  }});</script>
  
  <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('assets/icons/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('assets/icons/favicon.ico') }}" rel="apple-touch-icon">
</head>
<body>
  <div class="top-logo-bar"><a href="{{ route('home') }}" aria-current="page" class="logo-link-block w-nav-brand w--current"><!--<img src="images/Logo-3.svg" alt="" class="logo">-->
    <h1 class="brand"><span class="fname">Filmo</span>Rate</h1>
  </a></div>



  <div class="hero-section w-clearfix">
    @foreach ($topRated as $topRate)
      @if ($loop->iteration==1)
              <div class="hero-column">
                <div class="header-list-wrapper w-dyn-list">
                  <div class="header-list w-dyn-items">
                    <div class="header-item w-dyn-item">
                      <a data-w-id="630f3a6a-f505-0062-199f-5dbb8e37d22e" href="{{ route('single.movie', $topRate->permalink) }}" class="header-item-link-block w-inline-block">
                        <div class="header-item-overlay">
                          <div class="item-titles-wrapper">
                            <div class="highlight-item-content-block">
                              <div class="large-rating-number"></div>
                              <h1 class="large-item-title mobile-align-left">{{ $topRate->movie_name }}</h1>
                              <div class="info-wrapper large">
                                <div class="info-block mobile-full">
                                  <div class="rating">
                                    <ul>
                                      <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                      <li><h5><span>{{ $topRate->FinalRate }}</span>/10</h5></li>
                                      <li><h6>({{ 50+$topRate->RatedUsers }})</h6></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon">
                                  <div class="info-title-link">{{ $topRate->movie_genre }}</div>
                                </div>
                    
                              </div>
                              <p class="highlight-paragraph">{{ $topRate->movie_description }}</p>
                            </div>
                            <div class="author-block bottom-right push-up w-clearfix">
                            
                              <div class="author-name"></div>
                            </div>
                          </div>
                        </div>
                        <div class="item-image top-film" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-image: url('{{ $topRate->movie_poster }}')">
          
                        </div>
                      </a>
                    </div>
                  </div>
              
                </div>
              </div>  
      @elseif ($loop->iteration==2)

              
                <div class="hero-column right-column">
                  <div class="header-list-wrapper half w-dyn-list">
                    <div class="header-list w-dyn-items">
                      <div class="header-item half w-dyn-item">
                        <a data-w-id="021743dc-d730-0c7c-38ed-e8456ca0ff0b" href="{{ route('single.movie', $topRate->permalink) }}" class="header-item-link-block w-inline-block">
                          <div class="header-item-overlay">
                            <div class="item-titles-wrapper small">
                              <div class="highlight-item-content-block full">
                                <div class="large-rating-number small"></div>
                                <h1 class="large-item-title medium">{{ $topRate->movie_name }}</h1>
                                <div class="info-wrapper large">
                                  <div class="info-block mobile-full">
                                    <div class="rating">
                                      <ul>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><h5><span>{{ $topRate->FinalRate }}</span>/10</h5></li>
                                        <li><h6>({{ 50+$topRate->RatedUsers }})</h6></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon">
                                    <div class="info-title-link">{{ $topRate->movie_genre }}</div>
                                  </div>
                                  
                                </div>
                              
                              </div>
                              <div class="author-block bottom-right push-up hide-on-mobile w-clearfix">
                                <div class="author-name"></div>
                              </div>
                            </div>
                          </div>
                          <div class="item-image f2p" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-image: url('{{ $topRate->movie_poster }}')">
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>


              @elseif ($loop->iteration==3)    

                  <div class="header-list-wrapper second-half w-dyn-list">
                    <div class="header-list w-dyn-items w-row">
                      <div class="header-item half w-dyn-item w-col w-col-6">
                        <a data-w-id="26a2180a-b98c-0db1-b3a3-f0a6fe4784da" href="{{ route('single.movie', $topRate->permalink) }}" class="header-item-link-block w-inline-block">
                          <div class="header-item-overlay">
                            <div class="item-titles-wrapper small">
                              <div class="highlight-item-content-block full">
                                <div class="large-rating-number small"></div>
                                <h1 class="large-item-title medium mobile-small">{{ $topRate->movie_name }}</h1>
                                <div class="info-wrapper large">
                                  <div class="rating small">
                                    <ul>
                                      <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                      <li><h5><span>{{ $topRate->FinalRate }}</span>/10</h5></li>
                                      <li><h6>({{ 50+$topRate->RatedUsers }})</h6></li>
                                    </ul>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-image f3p" style="transform: translate3d(0px, 0px, 0px) scale3d(1.05, 1.05, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-image: url('{{ $topRate->movie_poster }}')">
                          </div>
                        </a>
                      </div>

                      @elseif ($loop->iteration==4)   

                      <div class="header-item half w-dyn-item w-col w-col-6">
                        <a data-w-id="26a2180a-b98c-0db1-b3a3-f0a6fe4784da" href="{{ route('single.movie', $topRate->permalink) }}" class="header-item-link-block w-inline-block">
                          <div class="header-item-overlay">
                            <div class="item-titles-wrapper small">
                              <div class="highlight-item-content-block full">
                                <div class="large-rating-number small"></div>
                                <h1 class="large-item-title medium mobile-small">{{ $topRate->movie_name }}</h1>
                                <div class="info-wrapper large">
                                  <div class="rating small">
                                    <ul>
                                      <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                      <li><h5><span>{{ $topRate->FinalRate }}</span>/10</h5></li>
                                      <li><h6>({{ 50+$topRate->RatedUsers }})</h6></li>
                                    </ul>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item-image f4p" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; background-image: url('{{ $topRate->movie_poster }}')">
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>


      @endif

    
    @endforeach
    
  </div>
  <div data-collapse="medium" data-animation="over-right" data-duration="400" data-no-scroll="1" data-doc-height="1" class="navbar w-nav">
    <div class="container w-container"><a href="#" aria-current="page" class="logo-link-block align-left w-nav-brand w--current"><!--<img src="images/Logo-3.svg" alt="" class="logo small">-->
      <h1 class="brand"><span class="fname">Filmo</span>Rate</h1>
    </a>
    <nav role="navigation" class="nav-menu w-nav-menu">
      <a href="{{ route('home') }}" class="nav-link w-nav-link w--current" style="max-width: 1200px;">Home</a>
    
      @if (Auth::guard('admin')->user())
      <a href="{{ route('Dashboard') }}" class="nav-link w-nav-link" style="max-width: 1200px;">Dashboard</a>
      @else
          @if (Auth::user())
            <a href="{{ route('logout') }}" class="nav-link w-nav-link " style="max-width: 1200px;">Logout </a>  
          @else
            <a href="{{ route('login') }}" class="nav-link w-nav-link" style="max-width: 1200px;">Login</a>
          @endif
      @endif
    </nav>
      <div class="menu-button w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  <div class="w-nav-overlay" data-wf-ignore=""></div></div>
  <div class="section">
    <div class="container w-container">
      <div class="section-title-wrapper align-left">
        <h1 class="section-title">Latest Movies<br></h1>
        <div class="section-subtitle">Be sure not to miss these movies</div>
      </div>
      <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
        <div class="tabs-menu w-tab-menu" role="tablist">
        </div>
        <div class="tabs-content w-tab-content">
          <div data-w-tab="Author Picks" class="tab-pane w-tab-pane w--tab-active">
            <div class="item-list-wrapper w-dyn-list">
              <div class="item-list w-dyn-items w-row">
               
               
                <!-- Latest Movies-->

                @foreach ($latestMovies as $latest)
                <div class="item w-dyn-item w-col w-col-3">
                  <div class="item-block">
                    <a href="{{ route('single.movie', $latest->permalink) }}" class="item-image-block poster-format w-inline-block f5p" style="background-image: url('{{ $latest->movie_poster }}')">
                      <div class="item-number"></div>
                      <div class="film-description">
                        {{-- <p>{{ $latest->movie_description }}</p> --}}
                        <p>{{ Str::limit($latest->movie_description, 120, $end='...') }}</p>
                      </div>
                    </a>

                    <a href="{{ route('single.movie', $latest->permalink) }}" class="item-block-title">{{ $latest->movie_name }}</a>
                    <div class="info-wrapper small">
                      <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon small">{{ $latest->movie_genre }}<a href="#" class="info-title-link"></a></div>
                      <div class="rating small" style="color: white">
                        <ul>
                          <li><i class="fa-sharp fa-solid fa-star"></i></li>
                          <li><h5><span>{{ $latest->FinalRate }}</span>/10</h5></li>
                          <li><h6>({{ 50+$latest->RatedUsers }})</h6></li>
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                </div>

                @endforeach 
              </div>



            </div>
          </div>
          <div data-w-tab="Featured" class="tab-pane w-tab-pane">
            <div class="item-list-wrapper w-dyn-list">
              <div class="item-list w-dyn-items w-row">
                <div class="item w-dyn-item w-col w-col-3">
                  <div class="item-block">
                    <a href="#" class="item-image-block poster-format w-inline-block">
                      <div class="item-number"></div>
                    </a><img src="#" alt="" class="info-block-icon stars"><a href="#" class="item-block-title"></a>
                    <div class="info-wrapper small">
                      <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon small"><a href="#" class="info-title-link"></a></div>
                    </div>
                  </div>
                </div>
              </div>
         
            </div>
          </div>
          <div data-w-tab="New" class="tab-pane w-tab-pane">
            <div class="item-list-wrapper w-dyn-list">
              <div class="item-list w-dyn-items w-row">
                <div class="item w-dyn-item w-col w-col-3">
                  <div class="item-block">
                    <a href="#" class="item-image-block poster-format w-inline-block">
                      <div class="item-number"></div>
                    </a><img src="#" alt="" class="info-block-icon stars"><a href="#" class="item-block-title"></a>
                    <div class="info-wrapper small">
                      <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon small"><a href="#" class="info-title-link"></a></div>
                    </div>
                  </div>
                </div>
                <!--popular movies end-->
              </div>
              <!--<div class="w-dyn-empty">
                <div>No items found.</div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section highlighted-section">
    <div class="highlight-item-list-wrapper w-dyn-list">
      <div class="highlight-list w-dyn-items">
        <div class="highlight-item w-dyn-item">
          <div class="highlight-item-block u1p">
            <div class="higlight-item-overlay">
              <div class="container w-container">
                <div class="highlight-item-content-block">
                  <div class="large-rating-number"></div>
                  <h1 class="large-item-title">2403 ft</h1>
                  <div class="info-wrapper large">
                   <!-- <div class="info-block"><img src="https://assets.website-files.com/59f5ae906a27c400013267f0/5c3d9ef28bb4597313e39aff_Stars-4.svg" alt="" class="info-block-icon stars"></div>-->
                    <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon"><a href="#" class="info-title-link">Drama</a></div>
                    <div class="info-block"><img src="{{ asset('assets/icons/clock.svg') }}" alt="" class="info-block-icon">
                      <div class="info-title"> 2020</div>
                    </div>
                  </div>
                  <p class="highlight-paragraph">
                    Filmmaker Jude Anthany Joseph announced his film 2403 ft, which is inspired by the real life incidents that happened during the floods that ravaged Kerala last year. The film is bankrolled by Anto Joseph under the banner Anto Joseph Film Company. Jude Anthany has scripted the film in association with John Manthrickal.
                   </p>
                 <!-- <a href="#" class="button outline-button white w-button">Read MOre</a></div>-->
                <div class="author-block bottom-right hide-mobile w-clearfix">
                 <!-- <div class="author-image-block"></div>-->
                  <div class="author-name"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- <div class="w-dyn-empty">
        <div>No items found.</div>
      </div>-->
    </div>
  </div>
  <div class="section">
    <div class="container push-up w-container">
      <div class="section-title-wrapper">
        <h1 class="section-title large">Upcoming Releases</h1>
        <div class="section-subtitle">  </div>
      </div>
      <div class="row w-clearfix">
        <div class="column right-column">
          <div class="item-list-wrapper w-dyn-list">
            <div class="item-list mobile-full-list w-dyn-items">
              <div class="item w-dyn-item">
                <div class="item-block large">
                  <a href="#" class="item-image-block large w-inline-block u2p">
                    <div class="item-number"></div>
                  </a><img src="#" alt="" class="info-block-icon stars"><a href="#" class="item-block-title large">Ajayante Randam Moshanam</a>
                  <div class="info-wrapper small">
                    <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon small"><a href="#" class="info-title-link">Indian Drama</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="item-list-wrapper w-dyn-list">
            <div class="item-list mobile-full-list w-dyn-items w-row">
              <div class="item small w-dyn-item w-col w-col-6">
                <div class="item-block in-list">
                  <a href="#" class="item-image-block w-inline-block u3p">
                    <div class="item-number"></div>
                  </a><img src="#" alt="" class="info-block-icon stars"><a href="#" class="item-block-title">Pallichattambi</a>
                  <div class="info-wrapper small">
                    <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon small"><a href="#" class="info-title-link">Drama</a></div>
                  </div>
                </div>
              </div>
              <div class="item small w-dyn-item w-col w-col-6">
                <div class="item-block in-list">
                  <a href="#" class="item-image-block w-inline-block u4p">
                    <div class="item-number"></div>
                  </a><img src="#" alt="" class="info-block-icon stars"><a href="#" class="item-block-title">Minnal Murali</a>
                  <div class="info-wrapper small">
                    <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon small"><a href="#" class="info-title-link">Action Comedy</a></div>
                  </div>
                </div>
              </div>
              <div class="item small w-dyn-item w-col w-col-6">
                <div class="item-block in-list">
                  <a href="#" class="item-image-block w-inline-block u5p">
                    <div class="item-number"></div>
                  </a><img src="#" alt="" class="info-block-icon stars"><a href="#" class="item-block-title">Thallumala</a>
                  <div class="info-wrapper small">
                    <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon small"><a href="#" class="info-title-link">Action Comedy</a></div>
                  </div>
                </div>
              </div>
              <div class="item small w-dyn-item w-col w-col-6">
                <div class="item-block in-list">
                  <a href="#" class="item-image-block w-inline-block u6p">
                    <div class="item-number"></div>
                  </a><img src="#" alt="" class="info-block-icon stars"><a href="#" class="item-block-title">Aaravam</a>
                  <div class="info-wrapper small">
                    <div class="info-block"><img src="{{ asset('assets/icons/tag.svg') }}" alt="" class="info-block-icon small"><a href="#" class="info-title-link">Sports Drama</a></div>
                  </div>
                </div>
              </div>
            </div>
           <!-- <div class="w-dyn-empty">
              <div>No items found.</div>
            </div>-->
          </div>
        </div>
      </div>
      <!--<div class="search-wrapper">
        <div class="search-title">Looking for something else? Search our reviews:</div>
        <form action="/search" class="search-form w-clearfix w-form"><input type="search" class="search-field w-input" maxlength="256" name="query" placeholder="Try &quot;The Lord of the Rings&quot;" id="search" required=""><input type="submit" value="." class="search-button w-button"></form>
      </div>-->
    </div>
  </div>
   
    
    </div>
  <div class="section footer">
    <!--<div class="container w-container">
      <div class="footer-wrapper">

      </div>
    </div>-->
    <div class="bottom-footer">
      <div class="container w-container">
        <div class="footer-row w-row">
          <!--<div class="footer-column w-col w-col-4">
            <div class="footer-title">Information</div><a href="template-info/licensing.html" class="footer-link">Image Licenses</a><a href="contact.html" class="footer-link">Contact us</a><a href="about-us.html" class="footer-link">Our Authors</a></div>
          <div class="footer-column w-col w-col-4">
            <div class="footer-title">Discover</div><a href="all-reviews.html" class="footer-link">All Reviews</a><a href="author-picks.html" class="footer-link">Author Picks</a><a href="new-reviews.html" class="footer-link">New Reviews</a></div>
          -->
          <div class="footer-column w-col w-col-12">
            <div class="footer-title">Social Connections</div>
            <div class="social-media">
            <a href="https://www.facebook.com/ActorTovinoThomas/" target="_blank" class="footer-social-link w-inline-block">
              <div class="footer-social-title icon"></div>
              <!--<div class="footer-social-title">Facebook</div>-->
            </a>
            <a href="https://twitter.com/ttovino" target="_blank" class="footer-social-link w-inline-block">
              <div class="footer-social-title icon"></div>
             <!-- <div class="footer-social-title">Twitter</div>-->
            </a>
            <a href="https://www.instagram.com/tovinothomas/" target="_blank" class="footer-social-link w-inline-block">
              <div class="footer-social-title icon"></div>
              <!--<div class="footer-social-title"></div>-->
            </a>
            </div>
          </div>
        </div>
        <div class="bottom-footer-paragraph">Copyright © <a href="https://packapeer.com/" target="_blank" style="text-decoration: none;color: #8f9da7;" class="bottom-footer-link" onmouseover="this.style.color=&#39;#fff&#39;" onmouseout="this.style.color=&#39;#8f9da7&#39;">Packapeer</a> Academy Pvt.Ltd.<br></div>
        <div class="bottom-footer-paragraph">Website design by&nbsp;<a href="https://www.youtube.com/channel/UCoGHeFY7jE2OB_TJS_87MOA" target="_blank" class="bottom-footer-link" style="text-decoration: none;color: #8f9da7;" onmouseover="this.style.color=&#39;#fff&#39;" onmouseout="this.style.color=&#39;#8f9da7&#39;">Crossroads Team</a>&nbsp;</div>
        <div class="bottom-footer-paragraph"><a href="https://www.youtube.com/channel/UCoGHeFY7jE2OB_TJS_87MOA"><img style="width: 15%" src="./TOVINO THOMAS_files/crlogo.png" alt=""></a> </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/js/jquery-3.4.1.min.220afd743d.js') }}" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/webflow.js') }}" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

</div></body></html>