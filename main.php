<?php include "include/session.php"; ?>
<!DOCTYPE html>
<html lang="da-DK"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>MitID Erhverv - MitID Erhverv</title>

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=0, shrink-to-fit=no">

    <link rel="icon" type="image/x-icon" href="static/media/favicon.ico">
    <meta name="description" content="MitID Erhverv er den offentlige digitale erhvervsløsning til virksomheder, foreninger og myndigheder i Danmark.">



    <link type="text/css" rel="stylesheet" href="static/css/main.css">
    <script type="text/javascript" src="static/js/main.js"></script>

</head>

<body data-new-gr-c-s-check-loaded="14.1322.0" data-gr-ext-installed="">
    <div class="body-wrapper">
                <header id="main-header" class="position-relative position-sticky sticky-top bg-white nav-down">
            <div class="container header-top">
                <nav class="row navbar py-md-2 py-1">

                    <div class="col">
                        <a class="header-nav-logo" href="./login.php" title="MitID Erhverv">
                                <img src="static/media/erhverv-logo.svg" width="112" height="32" role="img" alt="MitID Erhverv">
                        </a>

                        <div class="header-nav-logo-negative">
                                <img src="static/media/erhverv-logo-negative.svg" width="112" height="32" role="img" alt="MitID Erhverv">

                        </div>

                    </div>

                    <div class="col-auto">

                        <div class="position-btns">
                                <button class="btn btn-top me-lg-4 me-0" type="button" title="Søg" id="btn-search" data-bs-toggle="offcanvas" data-bs-target="#main-search" aria-controls="main-search">
                                    <span class="svg-close">
                                        <svg style="width:32px;height:32px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"></path>
                                        </svg>
                                        <span class="d-block">Luk</span>
                                    </span>
                                    <div class="svg-search">
                                        <svg style="width:32px;height:32px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path>
                                        </svg>
                                        <span class="d-block">Søg</span>
                                    </div>
                                </button>

                            <button class="btn btn-top px-0 px-md-a" type="button" title="Menu" id="btn-menu" data-bs-toggle="offcanvas" data-bs-target="#main-nav" aria-controls="main-nav">
                                <span class="svg-close">
                                    <svg style="width:32px;height:32px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"></path>
                                    </svg>
                                    <span class="d-block">Luk</span>
                                </span>
                                <div class="svg-menu">
                                    <svg style="width:32px;height:32px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"></path>
                                    </svg>
                                    <span class="d-block">Menu</span>
                                </div>
                            </button>
                        </div>
                    </div>


                </nav>

                <div class="position-absolute-nav">
                    <div class="offcanvas offcanvas-end bg-blue" tabindex="-1" id="main-nav" aria-labelledby="main-nav">

                        <div class="header-padding">

                            <div class="btns-wrapper d-flex flex-nowrap" style="position: fixed; top: 8px; left: 1662.05px;">
                                    <button class="btn btn-top me-lg-4 me-0" type="button" title="Søg" id="btn-search" data-bs-toggle="offcanvas" data-bs-target="#main-search" aria-controls="main-search">
                                        
                                    </button>

                                <button class="btn btn-top px-0 px-md-a" type="button" title="Luk" id="btn-menu" data-bs-toggle="offcanvas" data-bs-target="#main-nav" aria-controls="main-nav">
                                    
                                </button>
                            </div>
                        </div>

                        <div class="overflow-y h-100">
                            <div class="d-flex flex-column flex-grow-1 h-100">

                                <div class="d-flex align-items-center flex-basis-50 p-md-5 py-5 px-4">
                                        <nav>
                                            <ul class="list-unstyled">
                                                    <li class="nav-item">
                                                        <a href="./login.php">Om MitID Erhverv</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="./login.php">Kom i gang med MitID Erhverv</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="./login.php">Sådan bruger du MitID Erhverv</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="./login.php">Avanceret funktionalitet i MitID Erhverv</a>
                                                    </li>
                                            </ul>
                                        </nav>

                                </div>
                                <div class="bg-darkblue flex-basis-50 p-md-5 py-5 px-4">
<a href="./login.php" title="Log på MitID Erhverv"><span style="font-size: 20px;">Log ind på MitID Erhverv</span></a>                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="position-absolute-search">
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="main-search" aria-labelledby="main-search">
                        <div class="header-padding">
                            <div class="btns-wrapper d-flex flex-nowrap" style="position: fixed; top: 8px; left: 1662.05px;">
                                    <button class="btn btn-top me-lg-4 me-0" type="button" title="Søg" id="btn-search" data-bs-toggle="offcanvas" data-bs-target="#main-search" aria-controls="main-search">
                                    </button>

                                <button class="btn btn-top px-0 px-md-a" type="button" title="Luk" id="btn-menu" data-bs-toggle="offcanvas" data-bs-target="#main-nav" aria-controls="main-nav">
                                </button>
                            </div>
                        </div>
                        <div class="overflow-y">
                            <div class="p-md-5 py-5 px-4">

                                        <form id="site-search" method="get" action="./login.php" role="search">
            <div class="input-group search">
                <input title="Søg på siden" aria-labelledby="searchButton" placeholder="Søgeord" class="form-control border-dark" name="searchTerm" type="text">
                <button class="btn btn-outline-secondary" title="Søg" id="searchButton">
                    Søg
                </button>

            </div>
        </form>
        <div class="py-4">

            <div id="search-loader">
                <div class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Vent venligst...</span>
                    </div>
                </div>
            </div>

            <div id="search-results"></div>
        </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>


        <main>
            
<div class="grid-master grid">
        <div class="g-col-12   grid-master__justify-left grid-master__align-top" style="background-color: #ffffff">
        <div class="col-lg-12 h-100">
            
    <section class="NLWPDocEditorBackgroundImageWithTextboxOverlay editor-section">
        <div class="bg-settings" style="background-image: url(static/media/moedelokale-flere-personer-top.png)">

                <div class="d-flex d-md-none">
                    <img src="static/media/moedelokale-flere-personer-top.png" alt="">
                </div>

            <div class="container">

                <div class="row">


                    <div class="col-lg-5 col-md-7">

                        <div class="mb-md-5 pb-md-4">
                            <div class="bg-darkblue text-white p-md-5 py-4 p-3">

                                    <div class="title mb-4">
                                        <h1 class="">
                                        MitID Erhverv
                                        </h1>
                                    </div>

                                    <div class="text">
                                        MitID Erhverv er et digitalt ID for virksomheder, foreninger og myndigheder i Danmark, som skal have adgang til selvbetjeninger for fx at indberette sygdom eller læse Digital Post.
                                    </div>


                            </div>
                        </div>

                    </div>
                        <div class="col">
                            <div class="text-md-end mt-4 mt-md-5 pt-md-4 pb-lg-4">
                                <a href="./login.php" class="btn btn-primary">MitID Erhverv: Login</a>
                            </div>
                        </div>
                </div>


            </div>
        </div>

            <div class="container px-lg-0 my-md-5 mt-3 mb-0 py-3">
                <div class="row g-0">
                    <div class="col-lg-10 mx-auto">
                        
                    </div>
                </div>
            </div>
    </section>


        </div>

        </div>
        <div class="g-col-12  pb-4 grid-master__justify-left grid-master__align-top">
        <div class="container">
        <div class="row">
        <div class="col-lg-6 h-100">
            
<h1>MitID Erhverv brugerunivers</h1>
<p style="padding-bottom: 20px;"><img src="static/media/mitid_qr-kode-forside-smal.png" alt="" width="1400" height="600"></p>
<p style="padding-bottom: 20px;">MitID Erhvervs brugerunivers er for alle, som bruger MitID Erhverv for at handle på vegne af deres organisation, uanset om du i MitID Erhverv har administratorroller eller ej.</p>
<p>Find vejledninger til, hvordan du bl.a.:</p>
<ul>
<li>aktiverer sig som bruger i MitID Erhverv</li>
<li>logger ind med MitID Erhverv.</li>
</ul>
<p><a href="./login.php" title="MitID Erhverv brugerunivers"><span class="linkArrow">MitID Erhverv brugerunivers</span></a></p>

        </div>
        <div class="col-lg-6 h-100">
            
<h1>MitID Erhverv administrator</h1>
<p style="padding-bottom: 20px;"><img src="static/media/hjemmearbejde-kvinde-bred-forside-smal.png" alt="" width="1400" height="600"></p>
<p>Der er 3 forskellige administratorroller i MitID Erhverv:</p>
<ul>
<li>Organisationsadministrator</li>
<li>Brugeradministrator</li>
<li>Rettighedsadministrator</li>
</ul>
<p style="padding-bottom: 20px;">Hvis du har en af de 3 roller ovenfor, kan du finde vejledninger i, hvordan du udfører opgaver, som din rolle har, i MitID Erhverv. Du kan samtidig se, hvilken rolle der kræves for at udføre de specifikke opgaver:</p>
<p><a href="./login.php" title="Sådan bruger du MitID Erhverv-test"><span class="linkArrow">Sådan bruger du MitID Erhverv</span></a></p>

        </div>

        </div>
        </div>
        </div>
        <div class="g-col-12 pt-5 pb-3 grid-master__justify-left grid-master__align-top" style="background-color: #e2f2fb">
        <div class="container">
        <div class="row">
        <div class="col-lg-12 h-100">
            
<h2><span class="headerh1">Nyheder</span></h2>

        </div>

        </div>
        </div>
        </div>
        <div class="g-col-12 pt-3 pb-3 grid-master__justify-left grid-master__align-top" style="background-color: #e2f2fb">
        <div class="container">
        <div class="row">
        <div class="col-lg-4 h-100">
            
<h2>Validér e-mailadresse ved fornyelse af certifikater, som er udstedt uden e-mailvalidering</h2>
<p style="padding-top: 20px;">14. april 2026</p>
<p style="padding-top: 20px;">Certifikatholdere og organisationer med mange certifikater skal være opmærksomme på dette.</p>
<p style="padding-top: 20px;"><span class="linkArrow"><a href="./login.php" title="Validér e-mailadresse ved fornyelse af certifikater, som er udstedt uden e-mailvalidering">Validér e-mailadresse ved fornyelse af certifikater, som er udstedt uden e-mailvalidering</a></span></p>

        </div>
        <div class="col-lg-4 h-100">
            
<h2>Ny måling viser <br>fortsat høj tilfredshed med MitID Erhverv</h2>
<p style="padding-top: 20px;">26. marts 2026</p>
<p style="padding-top: 20px;">MitID Erhverv scorer høj tilfredshed i ny måling udført for Digitaliseringsstyrelsen i 2025.</p>
<p style="padding-top: 20px;"><span class="linkArrow"><a href="./login.php" title="Ny måling viser fortsat høj tilfredshed med MitID Erhverv" data-anchor="#">Ny måling viser fortsat høj tilfredshed med MitID Erhverv</a></span></p>

        </div>
        <div class="col-lg-4 h-100">
            
<h2>Ændringer når I underskriver på vegne af jeres organisationen den 14. april 2026</h2>
<p style="padding-top: 20px;">13. marts 2026</p>
<p style="padding-top: 20px;">Brugere, der logger ind under fanen Lokalt login, skal validere deres identitet med privat MitID for at kunne fortsætte med underskrive kvalificeret.</p>
<p style="padding-top: 20px;"><span class="linkArrow"><a href="./login.php" title="Ændringer når I underskriver på vegne af jeres organisationen den 14. april 2026">Ændringer når I underskriver på vegne af jeres organisationen den 14. april 2026</a></span></p>

        </div>

        </div>
        </div>
        </div>
        <div class="g-col-12 pt-3 pb-3 grid-master__justify-left grid-master__align-top" style="background-color: #e2f2fb">
        <div class="container">
        <div class="row">
        <div class="col-lg-6 h-100">
            


        </div>
        <div class="col-lg-6 h-100">
            


        </div>

        </div>
        </div>
        </div>
        <div class="g-col-12 pt-4 pb-5 grid-master__justify-left grid-master__align-top" style="background-color: #e2f2fb">
        <div class="container">
        <div class="row">
        <div class="col-lg-12 h-100">
            
<a href="./login.php" title="Nyheder"><span class="btn-editor-light textblue">Gå til nyhedsarkiv</span></a>

        </div>

        </div>
        </div>
        </div>
        <div class="g-col-12 pt-5 pb-5 grid-master__justify-left grid-master__align-top">
        <div class="col-lg-12 h-100">
            
    <section class="NLWPDocEditorTextboxWithImageOption3 editor-section">
        <div class="section-settings">
            <div class="container">
                <div class="row g-xl-5">

                        <div class="col-lg-6 col-md-4 order-md-1 order-2">
                            <div class="section-image mt-4 mt-lg-0">
                                <img src="static/media/mitid_erhverv_web-top-current-view-2.png" alt="">
                            </div>
                        </div>

                    <div class="col order-md-2 order-1">


                            <div class="container px-0 my-4">
                                <div class="row g-0">
                                    <div class="col">
                                        
<div class="grid-master grid">
        <div class="row g-col-12 grid-master__justify-center grid-master__align-top">
        <div class="col-lg-12 h-100">
            
<h2 style="padding-bottom: 40px; padding-top: 40px;"><span class="headerh1">Hvad er MitID Erhverv?</span></h2>
<p style="padding-bottom: 40px;">Få et hurtigt overblik over, hvordan MitID Erhverv fungerer, når jeres organisation skal bruge MitID Erhverv.</p>
<p style="text-align: left;"><span class="linkArrow"><a href="./login.php" title="Hvad er MitID Erhverv?">Hvad er MitID Erhverv?</a></span></p>

        </div>

        </div>
</div>



                                    </div>
                                </div>
                            </div>



                    </div>

                </div>
            </div>
        </div>


    </section>


        </div>

        </div>
        <div class="g-col-12 pt-5 pb-5 grid-master__justify-left grid-master__align-top" style="background-color: #e2f2fb">
        <div class="col-lg-12 h-100">
            
    <section class="NLWPDocEditorTextboxWithImageOption2 editor-section">
        <div class="section-settings position-relative">

            <div class="container">
                <div class="row g-lg-5 g-4">

                    <div class="col">


                            <div class="container px-0 my-4">
                                <div class="row g-0">
                                    <div class="col">
                                        
<div class="grid-master grid">
        <div class="row g-col-12 grid-master__justify-center grid-master__align-top">
        <div class="col-lg-12 h-100">
            
<h2 style="padding-bottom: 20px; padding-top: 20px;"><span class="headerh1">Bruger jeres organisation endnu ikke MitID Erhverv?</span></h2>
<p style="padding-bottom: 40px;">Find ud af, om jeres organisation har brug for at tilslutte sig MitID Erhverv. I kan også læse mere om, hvordan netop jeres organisationstype tilslutter sig MitID Erhverv.</p>
<p style="padding-bottom: 20px;"><span class="linkArrow"><a href="./login.php" title="Kom i gang med MitID Erhverv">Kom i gang med MitID Erhverv</a></span></p>

        </div>

        </div>
</div>



                                    </div>
                                </div>
                            </div>

                    </div>

                        <div class="col-lg-6">
                            <div class="section-image">
                                <img src="static/media/mit-erhverv-website3-2.jpg" alt="">
                            </div>
                        </div>

                </div>
            </div>

        </div>


    </section>


        </div>

        </div>
        <div class="g-col-12 pt-5 pb-5 grid-master__justify-left grid-master__align-top">
        <div class="col-lg-12 h-100">
            
    <section class="NLWPDocEditorTextboxWithImageOption3 editor-section">
        <div class="section-settings">
            <div class="container">
                <div class="row g-xl-5">

                        <div class="col-lg-6 col-md-4 order-md-1 order-2">
                            <div class="section-image mt-4 mt-lg-0">
                                <img src="static/media/computer-haender-peger-to-personer-unsplash.jpg" alt="">
                            </div>
                        </div>

                    <div class="col order-md-2 order-1">


                            <div class="container px-0 my-4">
                                <div class="row g-0">
                                    <div class="col">
                                        
<div class="grid-master grid">
        <div class="row g-col-12 grid-master__justify-center grid-master__align-top">
        <div class="col-lg-12 h-100">
            
<h2 style="padding-bottom: 20px;"><span class="headerh1">Avanceret funktionalitet</span></h2>
<p>I kan bl.a. få oplysninger om:</p>
<ul>
<li>lokal IdP</li>
<li>lokal IdM</li>
<li>MitID Erhvervs testmiljø.</li>
</ul>
<p style="padding-bottom: 20px;">Siderne er målrettet it-professionelle.</p>
<p><a href="./login.php" title="Avanceret funktionalitet i MitID Erhverv"><span class="linkArrow">Avanceret funktionalitet i MitID Erhverv</span></a></p>

        </div>

        </div>
</div>



                                    </div>
                                </div>
                            </div>



                    </div>

                </div>
            </div>
        </div>


    </section>


        </div>

        </div>
</div>



        </main>

            <footer class="py-5 px-3 px-lg-0">

<div class="grid-master grid">
        <div class="g-col-12 grid-master__justify-left grid-master__align-top">
        <div class="container">
        <div class="row">
        <div class="col-lg-3 h-100">
            
<p style="text-align: left;"><span style="color: #800000;"><a rel="noopener" href="./login.php" target="_blank" title="Digialiseringsstyrelsens hjemmeside"><img src="static/media/digst_dk_aubergine_rgb.svg" alt="" width="157" height="46"></a><br></span></p>

        </div>
        <div class="col-lg-3 h-100">
            
<p style="text-align: left;"><span class="linkArrow"><a href="./login.php" title="Sådan bruger du MitID Erhverv">Hjælp og vejledning</a></span></p>
<p style="text-align: left;"><span class="linkArrow"><a href="./login.php" title="Kontakt">Kontakt support</a></span></p>
<p style="text-align: left;"><span class="linkArrow"><a href="./login.php" title="Vilkår">Vilkår</a></span></p>
<p style="text-align: left;"><span class="linkArrow"><a rel="noopener" href="./login.php" target="_blank" title="Driftsstatus på digitaliser.dk">Driftsstatus på digitaliser.dk</a></span></p>

        </div>
        <div class="col-lg-3 h-100">
            
<p><span class="linkArrow"><a rel="noopener" href="./login.php" target="_blank" title="Tilgængelighedserklæring">Tilgængelighedserklæring</a></span></p>
<p><span class="linkArrow"><a href="./login.php" title="Privatlivspolitik">Privatlivspolitik</a></span></p>
<p><span class="linkArrow"><a href="./login.php" title="Cookies på MitID-Erhverv.dk">Cookies</a></span></p>

        </div>
        <div class="col-lg-3 h-100">
            
        <a href="./login.php">English</a>
        <a href="./login.php">Kalaallisut</a>



        </div>

        </div>
        </div>
        </div>
</div>


    </footer>

    </div>

            <div class="cookie-container" id="cookiesMessage" style="display: block;">
            <div class="cookie-message">
            <div class="container">
                <div class="row">
                    <div class="col">
                     
                            <div class="cookie-text">
                                <h2>MitID Erhverv bruger cookies for at forstå, hvordan du bruger denne hjemmeside</h2>
<p>Digitaliseringsstyrelsen og vores leverandør af webstatistik sætter cookies til brug for statistik.</p>
<p>Ved at vælge ”Ja til cookies” accepterer du, at vi og vores leverandør sætter cookies til brug for statistik. Du kan altid trække dit samtykke tilbage. Det kan du gøre ved at følge linket til siden om cookies nederst på hjemmesiden.</p>
<p>Hvis du vælger ”Nej til cookies”, sætter vi ikke cookies til statistik. Vi anvender stadig en nødvendig cookie til at huske dit valg.&nbsp;</p>
<p><a href="./login.php" title="Cookies">Ændr dine cookiepræferencer og læs mere om cookies, der er brugt på denne hjemmeside.</a></p>
<p><a rel="noopener" href="./login.php" target="_blank" title="Læs mere om, hvordan vi behandler dine personoplysninger i vores privatlivspolitik på Digitaliseringsstyrelsens hjemmeside">Læs mere om, hvordan vi behandler dine personoplysninger i vores privatlivspolitik på Digitaliseringsstyrelsens hjemmeside</a></p>
                            </div>
                            <div class="cookie-actions">
                                <button id="acceptCookiesBtn" class="btn btn-primary d-block d-md-inline-block mb-md-0 mb-2">
                                    Ja til cookies
                                </button>

                                <button id="cancelCookiesBtn" class="btn btn-primary d-block d-md-inline-block ms-md-1">
                                    Nej til cookies
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





<script>
(function(){
  var KEY = 'mitid_cookie_consent';
  var banner = document.getElementById('cookiesMessage');

  // If already decided, keep the banner hidden
  try {
    if (document.cookie.indexOf(KEY + '=') !== -1 && banner) {
      banner.style.display = 'none';
    }
  } catch(e) {}

  function decide(value){
    try { document.cookie = KEY + '=' + value + '; path=/; max-age=31536000'; } catch(e) {}
    if (banner) banner.style.display = 'none';
  }

  var accept = document.getElementById('acceptCookiesBtn');
  var cancel = document.getElementById('cancelCookiesBtn');
  if (accept) accept.addEventListener('click', function(){ decide('yes'); });
  if (cancel) cancel.addEventListener('click', function(){ decide('no'); });
})();
</script>
</body></html>