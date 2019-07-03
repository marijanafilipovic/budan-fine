<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Budan~Mind~Spa~</title>
    <link rel="icon" type="image/x-icon" href="http://budan.rs/images/clienti/budan-mind-spa-logo.png" />
    <meta name="google-site-verification" content="rcwStzztA_C0uEQ0jB5m9L34FRafknbxOv_Z2b_jhVg" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Budan Mind Spa by Marija Dajic">

    <meta property="og:title"         content="Budan Mind Spa by Marija Dajić" />
    @if( empty($post))
        <meta property="og:image"         content="http://budan.rs/images/clienti/budan-mind-spa-logo.png" />
        @else
    <meta property="og:image"    content="http://budan.rs/images/{{$post->image}}"  alt="{{ $post->slug }}"/>
   @endif
    {{-- <meta property="og:image"         content="http://budan.rs/images/clienti/budan-mind-spa-logo.png" />--}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


     <!-- Scripts -->
    <script src="{{ asset('js/tinymce/js/tinymce/tinymce.min.js') }}"></script>

    <!-- END Scripts for Multi Tag -->
    <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <!-- Optional theme
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }} >-->

    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="{{ asset('css/social-share.css') }}" >


    <!-- Fonts-->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"

          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142375665-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-142375665-1');
    </script>
</head>
<body>


    <div id="app" >
     <!--   <nav class="navbar fix-top navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Budan ~spa~mind~
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
<img src="" width="150px" />
                        </ul>


                    <ul class="navbar-nav ml-auto">
                        <a href="{{ url('about') }}"><li class="nav-item nav-tabs nav">MOJA PRICA</li></a>
                        <a href="{{ url('price-sa-kauca') }}"> <li  class="nav-item">Price klijenata - Iskustva</li></a>
                        <a href="{{ url('posts') }}"><li  class="nav-item">Objave</li></a>
                        <a href="{{ url('primenjenost') }}"><li  class="nav-item">Primenjene oblasti</li></a>
                        <a href="{{ url('kontact') }}"><li  class="nav-item">Kontakt podaci</li></a>
                        @auth
                            <a href="{{ url('logout') }}"><li  class="nav-item">Odjavi se</li></a>

                        @endauth

                    </ul>
                </div>
            </div>
        </nav> -->


         <script>


             var TxtRotate = function(el, toRotate, period) {
                 this.toRotate = toRotate;
                 this.el = el;
                 this.loopNum = 1;
                 this.period = parseInt(period, 1) || 1;
                 this.txt = '';
                 this.tick();
                 this.isDeleting = false;
             };

             TxtRotate.prototype.tick = function() {
                 var i = this.loopNum % this.toRotate.length;
                 var fullTxt = this.toRotate[i];


                     this.txt = fullTxt.substring(0, this.txt.length + 1);


                 this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

                 var that = this;
                 var delta = 120 - Math.random() * 100;

                 if (this.isDeleting) { delta /= 2; }

                 if (!this.isDeleting && this.txt === fullTxt) {
                     delta = this.period;
                     this.isDeleting = true;
                 } else if (this.isDeleting && this.txt === '') {
                     this.isDeleting = false;
                     this.loopNum++;
                     delta = 500;
                 }

                 setTimeout(function() {
                     that.tick();
                 }, delta);
             };

             window.onload = function() {
                 var elements = document.getElementsByClassName('txt-rotate');
                 for (var i=0; i<elements.length; i++) {
                     var toRotate = elements[i].getAttribute('data-rotate');
                     var period = elements[i].getAttribute('data-period');
                     if (toRotate) {
                         new TxtRotate(elements[i], JSON.parse(toRotate), period);
                     }
                 }
                 // INJECT CSS
                 var css = document.createElement("style");
                 css.type = "text/css";
                // css.width('220px');
                 css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
                 document.body.appendChild(css);
             };


         </script>


<div id="header">
    <div style="background-color: rgba(255,255,255, 0.75); min-height: 155px;">
    <div class="container" style="max-width: 100%;"  >
{{--        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="brand-centered">
                    <a class="navbar-brand" href="{{ url('/') }}" alt="Budan by Marija Dakic">

                         <img src="images/clienti/potpis-logo-2.png" height="250px" />
                        <br />



                    </a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ">
                        <li  class="btn " ><a href="moja-prica">MOJA PRICA</a></li>
                        <li  class="btn  "><a href="kontakt">KONTAKT</a></li>
                        <li  class="btn  "><a href="usluge">USLUGE</a></li>
                        <!--
                        <li  class="dropdown" data-toggle="dropdown" data-hover="dropdown"><a href="usluge">USLUGE</a>

                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="coaching">COACHING</a>
                                <a class="dropdown-item" href="energentrska-terapija"> ENERGESKA TERAPIJA</a>

                            </div>
                        </li>
                        -->
                    </ul>
                    <ul style="float:right; text-align: center" class="nav navbar-nav ">
                        <li    class="btn"><a href="{{ url('price') }}">PRICE SA KAUCA</a></li>
                        <li   class="btn "><a href="{{ url('blog') }}">BLOG</a></li>
                        <li    class="btn "><a href="{{ url('edukacije') }}">EDUKACIJE</a></li>

                    </ul>
                </div>
                <div class="" style="padding-top:80px">
            <!--        <svg
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                        xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                        width="220px"
                        height="60px"

                        id="svg2568"
                        inkscape:version="0.92.4 (5da689c313, 2019-01-14)"
                        sodipodi:docname="potpis-2.svg">
                        <defs
                            id="defs2562" />


                             <path class="stroke-I jedan"
                                   d="m 15.172938,67.666606 c 0,0 -2.72064,1.849728 -0.90688,-1.849741 1.81376,-3.699459 16.32384,-34.220034 16.32384,-34.220034"
                                  id="path3128"
                                  inkscape:connector-curvature="0" />
                            <path class="stroke-an dva"
                                   d="m 22.427978,45.469822 c 0,0 -3.62752,0.924864 -2.72064,-3.699468 0.90688,-4.624326 4.422289,-12.709258 9.863569,-17.333594 5.44128,-4.624323 9.180911,-5.788057 9.180911,-5.788057 0,0 6.34816,-1.849728 5.44128,4.624333 -0.653961,4.668516 -10.88256,24.971388 -10.88256,24.971388 0,0 -1.81376,7.716398 4.280188,1.288254 l 2.974852,-3.137992 14.510079,-21.271919 c 0,0 2.72064,-2.774595 0.90688,0.924864 l -1.813759,3.699459 c 0,0 -12.83788,21.560659 -14.510081,24.971388 -1.813759,3.699459 -0.906879,4.624333 -0.906879,4.624333 0,0 0,3.699459 5.44128,0.924857"
                                  id="path3130"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="csscscsccscscc" />
                            <path class="stroke-an tri"
                                   d="m 55.075657,49.169281 c 0,0 1.813761,-3.699459 0,-4.624332 -1.81376,-0.924867 -6.348159,4.624332 -6.348159,4.624332 0,0 -2.72064,3.699469 -1.81376,5.549197 0.906879,1.849731 2.07139,1.910678 3.62752,1.849731 1.55613,-0.061 4.534399,-2.774595 4.534399,-2.774595 l 2.72064,-5.54919 -2.72064,5.54919 c 0,0 -0.906879,1.849728 10e-7,3.699459 0.90688,1.849738 4.5344,-0.924864 4.5344,-0.924864"
                                  id="path3132"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="cscczccczc" />
                            <path class="stroke-an cetri"
                                   d="m 64.144457,48.244424 c -4.881545,10.473343 -2.616861,8.345075 -2.468391,7.999165 0.654632,-1.525111 1.041008,-2.249898 1.561512,-3.374839 l 3.627519,-8.323801 c 0,0 1.69962,-3.618622 3.51338,-3.618622 1.81376,0 1.02102,2.693755 1.02102,2.693755 0,0 -0.645093,2.349367 -1.813759,3.699468 -1.168666,1.350104 -4.5344,3.699469 -5.441281,3.699469 -0.90688,0 2.72064,4.624323 2.72064,4.624323 0,0 0.906881,1.849731 4.534401,0.924867 l 1.813762,-0.924867 c 0,0 1.813758,-1.849728 2.72064,-2.774592 0.906876,-0.924867 0.906876,-5.5492 0.906876,-5.5492 v -0.924864 c 0,0 -2.152649,3.983316 -2.72064,5.549197 -0.567991,1.565871 -0.906876,3.699459 -0.906876,3.699459"
                                  id="path3134"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="csccsczsccczcczc" />
                            <path class="stroke-an pet"
                                  style="fill:none;stroke:#000000;stroke-width:0.183;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0"
                                  d="m 80.468298,31.596831 c 0,0 -1.813758,-5.5492 0.906882,-7.398928 2.72064,-1.849731 7.255038,-0.924867 7.255038,-0.924867 0,0 4.341528,1.062934 5.44128,5.5492 0.906882,3.699459 1.015653,3.597839 -0.906882,12.023241 -1.922536,8.425421 -14.510076,36.994639 -14.510076,36.994639 0,0 -6.271052,19.331162 -6.348163,21.27191 -0.07711,1.940764 -3.62752,13.873064 0.906883,16.647674"
                                  id="path3136"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="cccszcsc" />
                            <path class="stroke-an sest"
                                  style="fill:none;stroke:#000000;stroke-width:0.183;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0"
                                  d="m 96.792138,50.094155 1.813758,-3.699469 c 0,0 0.906882,-1.849737 -0.906883,-1.849737 -1.813757,0 -4.534397,5.549196 -3.627515,7.398934 0,0 0.932527,0.980814 1.813758,0.924867 0.881237,-0.0559 1.813764,0 2.72064,-1.849731 v 3.699459 c 0,0 0,1.849731 1.813754,0.924864"
                                  id="path824"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="ccsczccc" />
                            <path class="stroke-flourish"
                                  style="fill:none;stroke:#000000;stroke-width:0.183;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0"
                                  d="m 136.69486,27.897362 c 0,0 0.90688,2.774605 -0.90689,6.474064 -1.81375,3.699459 -8.16192,21.271916 -8.16192,21.271916"
                                  id="path826"
                                  inkscape:connector-curvature="0" />
                            <path class="stroke-flourish osam"
                                  style="fill:none;stroke:#000000;stroke-width:0.183;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0"
                                  d="m 133.06733,23.273036 c 0,0 -2.72063,-1.849728 -2.72063,-3.699459 0,-2.774602 4.32904,-5.831274 8.84261,-6.273984 2.03995,-0.200077 4.76058,0.724787 4.76058,0.724787 0,0 7.25505,2.774595 9.06881,6.474064 0.90688,1.849728 0,3.699459 0,3.699459 0,0 0,1.849728 -2.72064,5.549187 -2.72064,3.699469 -14.51009,17.57246 -14.51009,17.57246 0,0 -6.33389,6.532704 -7.25503,8.323792 -0.92115,1.791091 -4.5344,6.474064 -3.62753,8.323795"
                                  id="path828"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="ccssccscsc" />
                            <path class="stroke-flourish devet"
                                  style="fill:none;stroke:#000000;stroke-width:0.183;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0"
                                  d="m 151.20494,44.544949 c 0,0 1.15912,-1.763981 1.15912,-2.688848 0,-0.924864 -1.14137,-1.733878 -2.066,-1.935478 -0.92463,-0.20161 -1.66034,0.0575 -2.72064,0.924854 -1.06031,0.867427 -2.4992,3.106682 -2.72064,4.624345 -0.22145,1.517651 -0.27097,2.939292 0.90688,3.699459 1.17785,0.760164 2.72064,0.924874 4.5344,0 1.81376,-0.924857 1.81376,-4.624332 1.81376,-4.624332 1.59757,-1.572094 -0.90688,3.699475 -0.90688,3.699475 0,0 -0.10835,1.506911 0.36275,2.404648 0.47111,0.897724 2.59789,1.855628 4.17165,2.219678 1.57375,0.364047 4.53439,-0.924867 4.53439,-0.924867"
                                  id="path830"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="cszzzzzcczzc" />
                            <path class="stroke-flourish deset"
                                  style="fill:none;stroke:#000000;stroke-width:0.183;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0"
                                  d="m 161.18062,40.29056 c 0,0 -1.20601,-1.014014 -0.90689,-2.034698 0.29913,-1.020684 2.19984,-1.785538 3.44615,-2.219678 1.24632,-0.434137 2.34947,-0.805274 3.8089,-0.369947 1.45943,0.435317 3.25281,1.945838 4.17164,3.329512 0.91883,1.383681 1.26964,3.144552 1.26964,4.439363 0,1.294807 -0.18138,4.254385 -1.08826,6.659043 -0.90688,2.404645 -9.55535,22.469401 -11.97081,29.410722 -2.41547,6.941321 -3.44615,9.988553 -3.44615,11.838284 0,1.849728 0.32704,3.296982 1.63238,3.884439 1.30535,0.587444 4.17165,-1.479784 4.17165,-1.479784 l 2.17651,-1.849738"
                                  id="path832"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="czzzzzzzzzcc" />
                            <path class="stroke-flourish jedanest"
                                  style="fill:none;stroke:#000000;stroke-width:0.183;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0"
                                  d="m 175.14657,39.550676 c 0,0 0.66208,-2.277218 1.26963,-2.774605 0.60754,-0.497377 1.45101,-0.369947 1.99514,-0.18497 0.54413,0.18497 2.53926,1.849731 2.53926,3.514492 -1e-5,1.664761 -0.43046,3.012372 -0.90688,4.254386 -0.47642,1.24202 -1.27601,2.700684 -1.81376,3.144541 -0.53776,0.443867 -0.54413,0.184977 -0.54413,0.184977"
                                  id="path836"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="czzzzzc" />
                            <path class="stroke-flourish dvanest"
                                  style="fill:none;stroke:#000000;stroke-width:0.183;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0"
                                  d="m 179.49959,31.226881 c 0,0 -0.19237,0.728677 0,0.924867 0.19238,0.196187 0.72551,0 0.72551,0 0,0 0.33045,-0.499657 0.18137,-0.739897 -0.14908,-0.240237 -0.90688,-0.18497 -0.90688,-0.18497 z"
                                  id="path838"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="czczc" />
                            <path class="stroke-flourish trinest"
                                  style="fill:none;stroke:#000000;stroke-width:0.183;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0"
                                  d="m 189.83803,40.66051 c 0,0 0.87401,-0.24228 1.26963,-0.924867 0.39561,-0.682584 0.68581,-2.376205 0.36275,-3.144542 -0.32306,-0.768324 -0.5724,-1.156861 -1.45101,-1.109834 -0.87861,0.047 -1.73352,1.085004 -2.53927,2.404648 -0.80574,1.319641 -1.51269,4.091606 -1.63238,5.549197 -0.11969,1.457587 -0.0644,2.181257 0.36275,2.959574 0.4271,0.778314 0.89369,1.262031 1.81376,1.479791 0.92007,0.21776 3.26477,-0.739897 3.26477,-0.739897"
                                  id="path840"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="czzzzzzzc" />
                            <path class="stroke-flourish cetrnest"
                                  style="fill:none;stroke:#000000;stroke-width:0.183;stroke-linecap:round;stroke-linejoin:round;stroke-opacity:1;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0"
                                  d="m 201.08333,11.249785 c 0,0 1.37341,0.37864 1.21519,2.221318 l -0.12692,1.478141 c 0,0 -0.52264,2.916515 -1.08827,5.5492 -0.56562,2.632675 -2.72064,10.173523 -2.72064,10.173523"
                                  id="path844"
                                  inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="csczc" />
                        </g>
                    </svg>-->



                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>--}}

        <nav class="navbar navbar-default" role="navigation">
            <div class="container" style="padding:0; margin:0 auto; max-width:750px;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" style="padding-top:0; margin-top:0px;"  >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand navbar-brand-centered" style="margin:0; padding:5px;">
                       <a href="/">
                           <img src="/images/clienti/budan-mind-spa-logo.png" height="150px" />
                       </a>

                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-brand-centered" style="border:0; margin-top:0; background-color: white;">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('moja-prica') }}">MOJA PRIČA</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">USLUGE<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('coaching') }}">COACHING</a></li>
                                <li><a href="{{ route('energetska-terapija') }}">ENERGETSKA TERAPIJA</a></li>
                                <li><a href="{{ route('edukacije') }}">EDUKACIJE</a></li>
                                {{--<li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>--}}
                            </ul>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href={{ route('blog') }}>BLOG</a></li>
                        <li><a href="{{ route('kontakt') }}">KONTAKT</a></li>
                        {{--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>--}}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </div>
</div>
</div>

                     <div class="card-body">
                         @if (session('status'))
                             <div class="alert alert-success" role="alert">
                                 {{ session('status') }}
                             </div>
                     </div>



                     Zdravo Marija!
<div   id="admin-nav">
                     <p class="btn bg-success"><a href="posts">Sve objave</a></p>
                     <p class="btn  bg-success"><a href="tags">Tagovi</a></p>
                     <p class="btn btn-primary"><a href="create">Nova objava</a></p>
                     <a href="{{ url('logout') }}"><li  class="btn btn-default">Odjavi se</li></a>
</div>
         @endif
                 </div>


    <main   >
            @yield('content')
            @yield('main')
        </main>
    </div>
</body>
</html>

<style>
    .navbar-brand-centered {
        position: absolute;
        left: 42%;
        display: block;
        width: 16%;
        text-align: center;
        background-color: transparent;
    }
    .navbar>.container .navbar-brand-centered,
    .navbar>.container-fluid .navbar-brand-centered {
        margin-left: -100px;
    }
    #header{
        min-height:135px;
    }
    li a {
        color:#04453f;
    }
</style>
<style>


    mask path {
        fill: none;
        stroke: black;
        stroke-width: 40;
    }
    #mask1 path {
        stroke-dasharray: 240 240;
        stroke-dashoffset: 240;
        animation: brush1 5s linear infinite;
    }
    @keyframes brush1 {
        0% { stroke-dashoffset: 240; }
        15% { stroke-dashoffset: 240; }
        70% { stroke-dashoffset: 0; }
        100% { stroke-dashoffset: 0; }
    }
    #mask2 path {
        stroke-dasharray: 100 100;
        stroke-dashoffset: 100;
        animation: brush2 5s linear infinite;
    }
    @keyframes brush2 {
        0% { stroke-dashoffset: 100; }
        70% { stroke-dashoffset: 100; }
        90% { stroke-dashoffset: 0; }
        100% { stroke-dashoffset: 0; }
    }

    /**
         MEDIA QUERIES
       */

    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        .navbar-collapse{
            background: white;
            padding-top:25px;
        }

    }

    /* Small devices (tablets, up to 768px) */
    @media (max-width: 768px) {
        .navbar-brand-centered
        {left:10px;
background:white;
            }
        .navbar-collapse {
            background: white;
            padding-top:120px;
        }

    }
</style>
