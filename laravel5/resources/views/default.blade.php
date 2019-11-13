<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="https://arras.cesi.fr/wp-content/uploads/sites/9/2019/05/Cesi_Logo_INGENIEUR_RVB-HD-500x296.jpg">

  <!-- CSS here -->

  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/slicknav.css">
  <link rel="stylesheet" href="css/goodStyle.css">
  <link rel="stylesheet" type="text/css" href="shop.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- JS here -->

  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  @yield('head')
  <style>
    /*Footer position*/

    footer {
      bottom: 0;
      background-color: black;
      color: white;
      position: relative;
      width: 100%;
    }

    footer u {
      color: orange;
    }

    /*-------------------*/
  </style>

  <title> @yield('title')</title>

</head>

<body>

  <header>

    <!--Script cookies------------------>

    <div id="cookiesAccept"></div>
    <div id="cookiesScript">

    </div>
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

    @yield('header')





  </header>

  @yield('nav')

  <section>

    @yield('section')

  </section>


  <aside>

  </aside>

  <footer class="" id="idk">

    <div class="container">
      <div class="row">

        <div class="col-sm-5 col-md-3 col-lg-3 ">
          <i class=" navbar-brand" href="#"> <u>Mentions légales : </u></i>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div>
            <i>Crédits</i>
          </div>
          <div>
            <i>Politique de protection des données personnelles</i>
          </div>

        </div>
        <div class="col-sm-5 col-md-3 col-lg-3 ">
          <i class="navbar-brand"><u> Contactez-nous :</u></i>
          <div><i>Téléphone : 05 59 32 57 62</i></div>
          <div><i id=sizeAdresseMail>Adresse mail : quentin.desens@viacesi.fr</i></div>
        </div>

        <div class="col-sm-5 col-md-3 col-lg-3 ">
          <i class="navbar-brand"><u> © CESI 2019</u></i>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.8354489013727!2d-0.3117529842849723!3d43.31770398207772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5648107b30e995%3A0xd938961626e8938!2s8%20Rue%20des%20Fr%C3%A8res%20Charles%20et%20Alcide%20d&#39;%20Orbigny%2C%2064000%20Pau!5e0!3m2!1sfr!2sfr!4v1573392921733!5m2!1sfr!2sfr" width="175" height="75" frameborder="0" style="border:0;" allowfullscreen=""></iframe> </div>

      </div>

  </footer>

</body>

@yield('script')


</html>