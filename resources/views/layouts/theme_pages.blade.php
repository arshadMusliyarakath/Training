<!DOCTYPE html>
<html>
  <title>@yield('title') - FilmoRate</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/tovinos-trendy-project.webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet" type="text/css">
  
  <script src="{{ asset('assets/js/webfont.js') }}" type="text/javascript"></script>
  <link rel="stylesheet" href="./TOVINO THOMAS_files/css" media="all"><script type="text/javascript">WebFont.load({  google: {    families: ["Roboto:100,300,regular,italic,500,700,900","Catamaran:100,200,300,regular,500,600,700,800,900"]  }});</script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('assets/icons/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('assets/icons/favicon.ico') }}" rel="apple-touch-icon">

</head>
<body>
  <div class="navbar-wrapper-fixed">
    <div data-collapse="medium" data-animation="over-right" data-duration="400" data-no-scroll="1" data-doc-height="1" class="navbar w-nav" style="will-change: background; background-color: rgba(12, 39, 56, 0);">
      <div class="container w-container nav-cont"><a href="{{ route('home') }}" class="logo-link-block align-left w-nav-brand">
        <h1 class="brand"><span class="fname">Filmo</span>Rate</h1>
      </a>
        <nav role="navigation" class="nav-menu w-nav-menu">
          <a href="{{ route('home') }}" class="nav-link w-nav-link" style="max-width: 1200px;">Home</a>
        
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
  </div>


    @yield("content")


  <div class="section footer">

    <div class="bottom-footer">
      <div class="container w-container">
        <div class="footer-row w-row">
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
        <div class="bottom-footer-paragraph">Copyright © <a href="https://packapeer.com/" target="_blank" class="bottom-footer-link">Packapeer</a> Academy Pvt.Ltd.<br></div>
        <div class="bottom-footer-paragraph">Website design by&nbsp;<a href="https://www.youtube.com/channel/UCoGHeFY7jE2OB_TJS_87MOA" target="_blank" class="bottom-footer-link">Crossroads Team</a>&nbsp;</div>
        <div class="bottom-footer-paragraph"><a href="https://www.youtube.com/channel/UCoGHeFY7jE2OB_TJS_87MOA"><img style="width: 15%" src="./aboutTovi_files/crlogo.png" alt=""></a> </div>

        </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5ea716a72e7dcf4ea8ac6e98" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/js/webflow.js') }}" type="text/javascript"></script>
  
</body></html>