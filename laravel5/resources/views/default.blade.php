<?php

if (Session::has('login')) {
  //do nothing because there is no such thing like "hasnot" in laravel

} else {
  Session::put('login', 'false');
  Session::put('rang', '0');
  Session::put('username', '');
  Session::put('email', '');

}
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="https://arras.cesi.fr/wp-content/uploads/sites/9/2019/05/Cesi_Logo_INGENIEUR_RVB-HD-500x296.jpg">

  <!-- CSS here ------------------------------------>

  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
  <!--Menu-navbar -->
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <!--navbar -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/shop.css') }}">
  <!--footer CSS -->
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <!--bootstrap CSS-->
  <link rel="stylesheet" href="{{ asset('css/activite.css') }}">
  <!-- activitées -->
  <link rel="stylesheet" href="{{ asset('css/charles.css') }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  @yield('test')

  <!-- JS here ------------------------------------------>

  <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
  <script src="js/main.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  @yield('jqueryVersion')

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Autocomplete ! ------->
  <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
  <script src="http://demo.expertphp.in/js/jquery.js"></script>
  <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>

  @yield('head')
  <style>

    @font-face {
      font-family: "title";

      src: url('css/Madame.ttf');
    }
    h1 {
      text-align: center;
      font-size: 55px;
      font-family: "title", Helvetica, Arial, sans-serif;
    }

  </style>

  <title> @yield('title')</title>

</head>

<body>

  <header>

  <div class="header-area ">
    <div id="sticky-header" class="main-header-area">
      <div class="container-fluid p-0">
        <div class="row align-items-center justify-content-between no-gutters">
          <div class="col-xl-2 col-lg-2">
            <div class="logo-img">
              <a href="index.html">
                <img class="w-50" src="https://arras.cesi.fr/wp-content/uploads/sites/9/2019/05/Cesi_Logo_INGENIEUR_RVB-HD-500x296.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="col-xl-7 col-lg-8">
            <div class="main-menu  d-none d-lg-block">
              <nav>
                <ul id="navigation">

                  @yield('nav')
                  @yield('header')

                  <?php
                  if (Session::get('login') == 'true') {
                    echo "<li><a>Bienvenue " . Session::get('username') . "</a></li>";
                    ?>
                    <li><a href=" {{ url('/logout') }}">Logout</a></li>;
                    <?php

                      if (Session::get('rang') > 1) {
                        ?>
                      <li><a href="{{ url('/admingestion') }}">Admin/Bde</a></li>;
                    <?php
                      }
                    } else {
                      ?>
                    <li><a @yield('active') href="{{ url('/login') }}">Login/Register</a></li>;
                  <?php } ?>

                </ul>
              </nav>
            </div>
          </div>
          <div class="col-xl-3 col-lg-2 d-none d-lg-block">
            <div class="social_media_links">
              <ul>
                <li><a target="_blank" href="https://www.facebook.com/CESIingenieurs/"> <i class="fa fa-facebook"></i> </a></li>
                <li><a target="_blank" href="https://twitter.com/GroupeCESI?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"> <i class="fa fa-twitter"></i> </a></li>
                <li><a target="_blank" href="https://www.instagram.com/campus_cesi/?hl=fr"> <i class="fa fa-instagram"></i> </a></li>
              </ul>
            </div>
          </div>
          <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- header -->

  </header>

  <section>

    @yield('section')

  </section>


  <aside>

    @yield('aside')

  </aside>

  <!-- Footer -->

  <footer id="footer" class="footer-1">
    <div class="main-footer widgets-dark">
      <div class="container">
        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">BDE CESI<span></span></h5>
              <p>BDE fondé en 1878 par Jacky Puebert !</p>
              <ul class="thumbnail-widget">
                <li>
                  <div class="thumb-content"><a href="{{ url('/credits') }}">Crédits</a></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">Informations utiles<span></span></h5>
              <ul class="thumbnail-widget">
                <li>
                  <div class="thumb-content"><a href="{{ url('/cgu') }}">Mentions légales</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="{{ url('/cgu#données') }}">Politique de protection des données personnelles</a></div>
                </li>
                <li>
                  <div class="thumb-content"><a href="{{ url('/cgv') }}">Conditions d'achats</a></div>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="widget no-box">
              <h5 class="widget-title">Pour commencer <span></span></h5>
              <p>Pour pouvoir effectuer des achats il faut avoir un compte ! </p>
              <a class="btn btn-primary" href="{{ url('/login') }}">S'enregistrer maintenant</a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3">

            <div class="widget no-box">
              <h5 class="widget-title">Nous contacter <span></span></h5>
              <p>Téléphone : 05 59 32 57 62</p>
              <p>Mail : <a href="mailto:bde.cesi@viacesi.fr" title="glorythemes">bde.cesi@viacesi.fr</a></p>
              <p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.8354489013727!2d-0.3117529842849723!3d43.31770398207772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5648107b30e995%3A0xd938961626e8938!2s8%20Rue%20des%20Fr%C3%A8res%20Charles%20et%20Alcide%20d&#39;%20Orbigny%2C%2064000%20Pau!5e0!3m2!1sfr!2sfr!4v1573392921733!5m2!1sfr!2sfr" width="175" height="75" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>

    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright Company BDECESI © 2019. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>



<!--Script cookies------------------>

<div id="cookiesAccept"></div>
<div id="cookiesScript">

</div>
@yield('script')
<script>

  /** PARAM ////////////////////// */
  var bndIdCookiesInfos = 'cookiesAccept';
  var bndIdCookiesScript = 'cookiesScript';
  var contentInfosMessage = 'Ce site utilise des cookies afin d\'analyser le trafic et de mesurer les performances des annonces. En poursuivant votre navigation sur ce site, vous en acceptez l\'utilisation.';
  var contentInfosMessageLinkMore = '';
  /** .PARAM ////////////////////// */

  var blkInfos = null;
  var blkScript = null;
  var htmlChecked = null;
  window.onload = function() {
    if ((document.getElementById(bndIdCookiesInfos)) && (document.getElementById(bndIdCookiesScript))) {
      var cookiesAccepted = null;
      blkInfos = document.getElementById(bndIdCookiesInfos);
      blkScript = document.getElementById(bndIdCookiesScript);
      htmlChecked = true;
      if (sessionStorage.getItem("cookiesAccepted")) {
        cookiesAccepted = sessionStorage.getItem("cookiesAccepted");
      } else {
        sessionStorage.setItem('cookiesAccepted', 'null');
      }
      CookiesAreAccepted(cookiesAccepted);
    }
  };

  function CookiesAreAccepted(param) {
    if (htmlChecked === true) {
      if (param === 'true') {
        sessionStorage.setItem('cookiesAccepted', 'true');
        blkInfos.remove();
      } else if (param === 'false') {
        sessionStorage.setItem('cookiesAccepted', 'false');
        blkInfos.remove();
        blkScript.remove();
      } else {
        var htmlContent = '<div style="z-index: 9999 !important;position: fixed !important;background-color: rgba(51, 51, 51, 0.6);color:#fff;bottom: 0;width: 100%;padding: 10px;">';
        htmlContent += '<div style="float: left;"><em>' + contentInfosMessage + '</em>';
        if (contentInfosMessageLinkMore != '') {
          htmlContent += ' <a href="' + contentInfosMessageLinkMore + '" style="color:#fff;text-decoration: underline;">en savoir +</a>';
        }
        htmlContent += '</div>';
        htmlContent += '<div style="float: right;">';
        htmlContent += '<span id="btnAcceptCookies" style="padding:5px;background-color:green;cursor:pointer;" onclick="CookiesAreAccepted(\'true\');">ACCEPTER</span>  ';
        htmlContent += '<span id="btnDeclineCookies" style="padding:5px;background-color:red;cursor:pointer;" onclick="CookiesAreAccepted(\'false\');">REFUSER</span>  ';
        htmlContent += '</div></div>';
        blkInfos.innerHTML = htmlContent;
      }
    }
  }

  function ClearCookieschoices() {
    sessionStorage.removeItem('cookiesAccepted');
  }

</script>




</html>
