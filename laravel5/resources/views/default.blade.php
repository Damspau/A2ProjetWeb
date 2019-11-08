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

   /*Custom Bootsratp-->Nav and SearchBtn*/

   #navbarSupportedContent{
       position: relative;
       right: 0%;
   }

.btn {
  background-color: white; 
  border: none;
  color: #6684bd;
  padding: 8px 20px;
  text-align: center;
  font-size: 16px;
}
.btn:hover{
    background:grey;
}

.navbar {
  background-color: #6684bd;
  font-weight:bold;

}
.navbar .navbar-brand {
  color: #ecf0f1;
}
.navbar .navbar-brand:hover,
.navbar .navbar-brand:focus {
  color: #6684bd;
}
.navbar .navbar-text {
  color: #ecf0f1;
}
.navbar .navbar-text a {
  color: #6684bd;
}
.navbar .navbar-text a:hover,
.navbar .navbar-text a:focus {
  color: #6684bd; 
}
.navbar .navbar-nav .nav-link {
  color: #white;
  border-radius: .25rem;
  margin: 0 0.25em;
}
.navbar .navbar-nav .nav-link:not(.disabled):hover,
.navbar .navbar-nav .nav-link:not(.disabled):focus {
  color: white;
}
.navbar .navbar-nav .nav-item.active .nav-link,
.navbar .navbar-nav .nav-item.active .nav-link:hover,
.navbar .navbar-nav .nav-item.active .nav-link:focus,
.navbar .navbar-nav .nav-item.show .nav-link,
.navbar .navbar-nav .nav-item.show .nav-link:hover,
.navbar .navbar-nav .nav-item.show .nav-link:focus {
  color: #6684bd;
  background-color: #ffffff;
}
.navbar .navbar-toggle {
  border-color: #ffffff;
}
.navbar .navbar-toggle:hover,
.navbar .navbar-toggle:focus {
  background-color: #ffffff;
}
.navbar .navbar-toggle .navbar-toggler-icon {
  color: #ecf0f1;
}
.navbar .navbar-collapse,
.navbar .navbar-form {
  border-color: #ecf0f1;
}
.navbar .navbar-link {
  color: white;
}
.navbar .navbar-link:hover {
  color: #6684bd;
}

@media (max-width: 575px) {
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #ecf0f1;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #6684bd;
  }
  .navbar-expand-sm .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #6684bd;
    background-color: #ffffff;
  }
}

@media (max-width: 767px) {
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #ecf0f1;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #6684bd;
  }
  .navbar-expand-md .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #6684bd;
    background-color: #ffffff;
  }
}

@media (max-width: 991px) {
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #ecf0f1;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #6684bd;
  }
  .navbar-expand-lg .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #6684bd;
    background-color: #ffffff;
  }
}

@media (max-width: 1199px) {
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item {
    color: #ecf0f1;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:hover,
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item:focus {
    color: #6684bd;
  }
  .navbar-expand-xl .navbar-nav .show .dropdown-menu .dropdown-item.active {
    color: #6684bd;
    background-color: #ffffff;
  }
}

.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item {
  color: #ecf0f1;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:hover,
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item:focus {
  color: #6684bd;
}
.navbar-expand .navbar-nav .show .dropdown-menu .dropdown-item.active {
  color: #6684bd;
  background-color: #ffffff;
}
    </style> 

    <title> @yield('title')</title>
</head>

<body>

    <header>

    <div id="cookiesAccept"></div>
<div id="cookiesScript"><!-- Your Script (ex : Google Analytics; facebook; twitter; ...) --></div>
<script>
    /** PARAM ////////////////////// */
    var bndIdCookiesInfos = 'cookiesAccept';
    var bndIdCookiesScript = 'cookiesScript';
    var contentInfosMessage = 'Ce site utilise des cookies afin d\'analyser le trafic et de mesurer les performances des annonces. En poursuivant votre navigation sur ce site, vous en acceptez l\'utilisation.';
    var contentInfosMessageLinkMore = '';
    /** .PARAM ////////////////////// */
 
    var blkInfos = null;var blkScript = null;var htmlChecked = null;
    window.onload = function () {
        if ((document.getElementById(bndIdCookiesInfos)) && (document.getElementById(bndIdCookiesScript))) {
            var cookiesAccepted = null;
            blkInfos = document.getElementById(bndIdCookiesInfos);
            blkScript = document.getElementById(bndIdCookiesScript);
            htmlChecked = true;
            if (sessionStorage.getItem("cookiesAccepted")) {cookiesAccepted = sessionStorage.getItem("cookiesAccepted");}
            else {sessionStorage.setItem('cookiesAccepted', 'null');}
            CookiesAreAccepted(cookiesAccepted);
        }
    };
    function CookiesAreAccepted(param) {
        if (htmlChecked === true) {
            if (param === 'true') {
                sessionStorage.setItem('cookiesAccepted', 'true');
                blkInfos.remove();
            }
            else if (param === 'false') {
                sessionStorage.setItem('cookiesAccepted', 'false');
                blkInfos.remove(); blkScript.remove();
            }
            else {
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
    function ClearCookieschoices() {sessionStorage.removeItem('cookiesAccepted');}
</script>

    @yield('header')





    </header>


    @yield('content')

    <section>

    </section>

    <aside>

    </aside>

    <footer>

    </footer>

</body>

</html>