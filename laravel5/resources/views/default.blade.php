<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/css/fontawesome-all.min.css">
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <style>
    /*Custom Bootsratp-->Menu searchBtn and navbar*/

    /*Menu when you reduce the page*/

    /*The box arround*/
    .custom-toggler.navbar-toggler {
      border-color: rgb(255, 102, 203);
    }

    /* Three lines inside */
    .custom-toggler .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    /*searchBtn*/

    .btn {
      background-color: white;
      border: none;
      color: #6684bd;
      padding: 8px 20px;
      text-align: center;
      font-size: 16px;
    }

    .btn:hover {
      background: grey;
    }

    /*navbar*/

    /* .navbar-nav{
   display: flex;
   flex-direction: row-reverse;
   width: 100%;
 } */



    .navbar {
      background-color: #000000;
      font-weight: bold;
    }

    .navbar .navbar-brand {
      color: #ecf0f1;
    }

    .navbar .navbar-brand:hover,
    .navbar .navbar-brand:focus {
      color: #ec9d55;
    }

    .navbar .navbar-text {
      color: #ecf0f1;
    }

    .navbar .navbar-text a {
      color: #ec9d55;
    }

    .navbar .navbar-text a:hover,
    .navbar .navbar-text a:focus {
      color: #ec9d55;
    }

    .navbar .navbar-nav .nav-link {
      color: #ecf0f1;
      border-radius: .25rem;
      margin: 0 0.25em;
    }

    .navbar .navbar-nav .nav-link:not(.disabled):hover,
    .navbar .navbar-nav .nav-link:not(.disabled):focus {
      color: #ec9d55;
    }

    .navbar .navbar-nav .dropdown-menu {
      background-color: #000000;
      border-color: #6684bd;
    }

    .navbar .navbar-nav .dropdown-menu .dropdown-item {
      color: #ecf0f1;
    }

    .navbar .navbar-nav .dropdown-menu .dropdown-item:hover,
    .navbar .navbar-nav .dropdown-menu .dropdown-item:focus,
    .navbar .navbar-nav .dropdown-menu .dropdown-item.active {
      color: #ec9d55;
      background-color: #6684bd;
    }

    .navbar .navbar-nav .dropdown-menu .dropdown-divider {
      border-top-color: #6684bd;
    }

    .navbar .navbar-nav .nav-item.active .nav-link,
    .navbar .navbar-nav .nav-item.active .nav-link:hover,
    .navbar .navbar-nav .nav-item.active .nav-link:focus,
    .navbar .navbar-nav .nav-item.show .nav-link,
    .navbar .navbar-nav .nav-item.show .nav-link:hover,
    .navbar .navbar-nav .nav-item.show .nav-link:focus {
      color: #ec9d55;
      background-color: #6684bd;
    }

    .navbar .navbar-toggle {
      border-color: #6684bd;
    }

    .navbar .navbar-toggle:hover,
    .navbar .navbar-toggle:focus {
      background-color: #6684bd;
    }

    .navbar .navbar-toggle .navbar-toggler-icon {
      color: #ecf0f1;
    }

    .navbar .navbar-collapse,
    .navbar .navbar-form {
      border-color: #ecf0f1;
    }

    .navbar .navbar-link {
      color: #ecf0f1;
    }

    .navbar .navbar-link:hover {
      color: #ec9d55;
    }

    @media (max-width: 575px) {
      .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
        color: #ecf0f1;
      }

      .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
      .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: #ec9d55;
      }

      .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: #ec9d55;
        background-color: #6684bd;
      }
    }

    @media (max-width: 767px) {
      .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
        color: #ecf0f1;
      }

      .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
      .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: #ec9d55;
      }

      .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: #ec9d55;
        background-color: #6684bd;
      }
    }

    @media (max-width: 991px) {
      .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
        color: #ecf0f1;
      }

      .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
      .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: #ec9d55;
      }

      .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: #ec9d55;
        background-color: #6684bd;
      }
    }

    @media (max-width: 1199px) {
      .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
        color: #ecf0f1;
      }

      .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
      .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
        color: #ec9d55;
      }

      .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
        color: #ec9d55;
        background-color: #6684bd;
      }
    }

    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
      color: #ecf0f1;
    }

    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
      color: #ec9d55;
    }

    .navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
      color: #ec9d55;
      background-color: #6684bd;
    }

    .footer {
      background-color: black;
      color: white;
    }

    #sizeAdresseMail{
      font-size: small;
    }
  </style>

  <title> @yield('title')</title>
</head>

<body>
  <header>

    <div id="cookiesAccept"></div>
    <div id="cookiesScript">
      <!-- Your Script (ex : Google Analytics; facebook; twitter; ...) -->
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


  @yield('content')

  <section>

    @yield('section')

  </section>')

  </section>

  <aside>

  </aside>


  <footer class="mt-5 footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <!--Pour le sm-12 il prend pour 1 case 12 colonne; pour md-6 il prend pour 1 case pour 6 colonne il y aura donc 2 partie-->
          <i class="navbar-brand" href="#"><u> Réseaux sociaux : </u></i>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div>
            <a href="https://twitter.com/GroupeCESI?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" rel="noreferrer noopener" target="_blank" title="Twitter"><i class="fab fa-twitter logo4"></i></a> Twitter
          </div>
          <div>
            <a href="https://discord.gg/Y32yARN" rel="noreferrer noopener" target="_blank" title="LinkedIn"><i class="fab fa-discord logo4"></i></a> Discord
          </div>
          <div>
            <a href="https://www.instagram.com/campus_cesi/?hl=fr" rel="noreferrer noopener" target="_blank" title="Viadeo"><i class="fab fa-instagram logo4"></i></a> Instagram
          </div>
          <div>
            <!--Pour le sm-12 il prend pour 1 case 12 colonne; pour md-6 il prend pour 1 case pour 6 colonne il y aura donc 2 partie-->
            <a href="https://www.facebook.com/CESIingenieurs/" rel="noreferrer noopener" target="_blank" title="Facebook"><i class="fab fa-facebook logo4"></i></a> Facebook
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
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
        <div class="col-sm-3 col-md-3 col-lg-3">
          <i class="navbar-brand"><u> Contactez-nous :</u></i>
          <div><i>Téléphone : 05 59 32 57 62</i></div>
          <div><i id=sizeAdresseMail>Adresse mail : quentin.desens@viacesi.fr</i></div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
          <i class="navbar-brand"><u> © CESI 2019</u></i>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.8354489013727!2d-0.3117529842849723!3d43.31770398207772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5648107b30e995%3A0xd938961626e8938!2s8%20Rue%20des%20Fr%C3%A8res%20Charles%20et%20Alcide%20d&#39;%20Orbigny%2C%2064000%20Pau!5e0!3m2!1sfr!2sfr!4v1573392921733!5m2!1sfr!2sfr" width="275" height="175" frameborder="0" style="border:0;" allowfullscreen=""></iframe> </div>

      </div>
  </footer>

</body>

</html>