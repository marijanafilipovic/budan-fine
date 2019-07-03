@extends('layouts.app')

@section('content')

    @auth
    @endauth
<style>
    .pm-none{
        padding:0;
        margin:0;
    }
    .coach-cena-sesije{
        margin-top:5px;
        /* background: rgba(255,255,255, 0.75);
        */
        padding: 5px;
        border-radius:5px;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }
    .ellipsis {
        font-family: Candara;
        display: block; /* or inline-block */
        text-overflow: ellipsis;
        word-wrap: break-word;
        overflow: hidden;
        max-height: 3.6em;
        line-height: 1.8em;
    }
    .golden-base {
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight:bold;
        -webkit-margin-before: 0.3em;
        -webkit-margin-after: 0.2em;
    }
</style>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    {{--
    <div class="row just-shadow coach-cena-sesije">

        <div class="col-md-6 pm-none" style="border-right: 1px solid grey;">
        <div class="col-sm-6 pm-none" style="text-align: center; padding:0;">
            <h3 class="candara pm-none" style="text-align: center; margin:0; ">Najnoviji blog</h3>
            @foreach($posts as $post)
            <p class="btn btn-default candara" style="text-align: center">{{ $post->updated_at }}</p>
                @endforeach
        </div>
        <div class="col-sm-6 pm-none">
            @foreach($posts as $post)
                <div class="" style="float:left; ">
            <h2 class="candara golden3" style=" margin:0px;   padding-top:0px; text-shadow: 0.5px 0.5px 0.5px rgba(0,0,0,.45); font-weight: 400">{{ $post->title }}</h2>
                    <div class="candara ellipsis" style="margin-left:15px; padding-left: 15px; padding-right: 15px; height:80px;">

                    <p class="ellipsis">{!! $post->body !!}</p>
                    </div>

                </div>
                @endforeach
        </div>

    </div>
    <div class="col-md-6 pm-none">
        <div class="col-sm-6  pm-none">
            <img src="images/clienti/instagram-logo.png" width="100px"/>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
    </div>
--}}
    <div class="col-md-12"
         style="background-image: url('images/clienti/naslovna-fotografija-2.jpg');
         background-repeat: no-repeat;
         background-size: 100%;
                 height:100vh;
        text-align:left;
                padding:0; margin:0;
            position:relative;
         padding-top:250px;">
  <div style="background-color: rgba(255,255,255,0.45); padding:5px; float:left; text-align: left;">

            <h1 class="golden3 title" style="max-width: 420px;  text-shadow: 0.5px 0.5px 0.5px rgba(0,0,0,.45);">
                <span  class="txt-rotate" data-rotate='["Svaka je priča vredna življenja, ali nije svaka priča vredna čitanja... "]'></span>


            </h1>

        </div>
        <br>
        <p></p>
        <a href="blog" style="text-decoration-line: none; top:385px; position: absolute;  left: 35px; display:block">
            <h3 class="golden3" style="font-family: Roboto; text-align: right;
                text-decoration-line: none; margin-top: 20px; padding-right:10px; text-shadow: 0.5px 0.5px 0.5px rgba(0,0,0,.45);">Izaberi priču &#187;</h3>
        </a>
        <!--<div style="position:absolute; text-align: center; bottom: 3px"><a href="#energetska-terapija" style="text-align: center">Nastavi <spam style="font-size: 36px; color: white; text-align: center">&#10151;</spam></a></div>
    -->
    </div>

    <!--  <div class="row" style="border-bottom:1px solid rgba(245,169,54,1); height:50vh;">

        <div id="energetska-terapija" class="col-sm-3"  style="  text-align: center; padding:0; border-radius:0; ">
            <div class="naslov" style="padding:4px; border-radius:3px; width:auto;" >
            <a href="energetska-terapija" style=" text-decoration-line: none"><h2 class="golden3 candara shadow" >ENERGETSKA TERAPIJA</h2></a>

            </div>

        </div>
        -->
        <div class="col-md-9" style="padding:0; height:420px;">
            <div class="carousel fade-carousel slide carousel-fade" data-ride="carousel"
                 data-interval="5000" id="bs-carousel">
                <!-- Overlay -->
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="1"></li>
                    <li data-target="#bs-carousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides active carousel-item">
                        <div class="slide-1">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="item slides carousel-item">
                        <div class="slide-2">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="item slides carousel-item">
                        <div class="slide-3">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    {{--    <div class="hero ">
                        {{-- <div style="width:200px; padding:2px; border-radius:12px; background-color: rgba(255,255,255,0.87);">

                          <div>
                          <h1 class="" style=" text-shadow: 0.5px 0.5px 0.5px rgba(0,0,0,.45); ">Svaka je priča vredna življenja,
                                  <br>
                              ali nije svaka priča vredna čitanja..
                              </h1>
                              <a href="blog"><h3>Izaberi priču &#187;</h3>
                               </a>
                          </div>

                      </div>
                </div>--}}
            </div>

        </div>
    </div>
    <div class="col-md-3 " style="padding-left:0; height:420px;">
        <div class="">
<h2 class="golden3" style=" color:whitesmoke; font-family: 'Roboto', sans-serif; ">ENERGETSKA TERAPIJA</h2>
<hr>
        </div>
        <div class=" " style="  text-align: justify">
            <p style="padding:25px; font-family: 'Roboto', sans-serif; font-size:14px;">
Da li je moguće nekom tehnikom dovesti životnu energiju u balans?
            </p>
            <p style="padding:25px; font-family: 'Roboto', sans-serif; font-size:14px;">
Može li se uticati na energetske oscilacije u telu?
            </p>

            <a href="energetska-terapija" style="  padding:0;"><p class="golden3"
                                                                   style=" font-family: 'Roboto', sans-serif;
                                                                    font-weight:lighter; font-size:16px;">Saznaj više >>></p></a>
        </div>

    </div>
    </div>

        <div class="col-md-3" id="energetska-terapija" style="
        height:420px;
         padding:0; margin:0; vertical-align: middle">
            <div class=" ">
            <div class=" " style="padding:4px; width:auto;" >

                <a href="coaching" style=" text-decoration-line: none;">
                    <h2 class="golden3" style=" color:whitesmoke; font-family: 'Roboto', sans-serif;">COACHING</h2></a>
<hr>
            </div>
                <div class=" " style="height: 88%; text-align: justify">
                    <p style="padding:25px; font-family: 'Roboto', sans-serif; font-size:14px;">Reč „coach“ nastala je od mađarske reči „kočija“ koja označava prevozno sredstvo za putovanje od tačke A do tačke B.
                    </p>
                    <p style="padding:25px;  font-family: 'Roboto', sans-serif;  font-size:14px;">
                        Adekvatno tome, i coach je vaš prevoznik koji vas prevodi od tačke problema do tačke rešenja.</p>
                    <a href="coaching" style="padding:25px;"><p class="golden3"
                                                                style="
                                                                 /*text-shadow: 0.5px 0.5px 0.5px rgba(0,0,0,.45);
                                                                  */
                                                                  font-family: 'Roboto', sans-serif; font-weight: lighter; font-size:16px; ">Saznaj više >>></p></a>

                </div>

        </div>
        </div>
    <div class="col-md-9" style="padding:0; height:420px;">
            <div class="carousel fade-carousel slide carousel-fade" data-ride="carousel"
                 data-interval="5000" id="bs-carousel">
                <!-- Overlay -->
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="3" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="4"></li>
                    <li data-target="#bs-carousel" data-slide-to="5"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides active carousel-item">
                        <div class="slide-4">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="item slides carousel-item">
                        <div class="slide-5">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="item slides carousel-item">
                        <div class="slide-6">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    {{--    <div class="hero ">
                        {{-- <div style="width:200px; padding:2px; border-radius:12px; background-color: rgba(255,255,255,0.87);">

                          <div>
                          <h1 class="" style=" text-shadow: 0.5px 0.5px 0.5px rgba(0,0,0,.45); ">Svaka je priča vredna življenja,
                                  <br>
                              ali nije svaka priča vredna čitanja..
                              </h1>
                              <a href="blog"><h3>Izaberi priču &#187;</h3>
                               </a>
                          </div>

                      </div>
                </div>--}}
                </div>

            </div>
        </div>
<style>
    .slider {

        position: relative;
    }
    .slide1,.slide2,.slide3,.slide4,.slide5,.slide6 {
        position: absolute;
        width: 100%;
        height: 100%;
    }
    .slide1 {
        background: url('images/clienti/reiki2.jpg')no-repeat center;
        background-size: 100%;
        animation:fade 8s infinite;
        -webkit-animation:fade 8s infinite;

    }
    .slide2 {
        background: url('images/clienti/reiki3.jpg')no-repeat center;
        background-size: 100%;
        animation:fade2 8s infinite;
        -webkit-animation:fade2 8s infinite;
    }
    .slide3 {
        background: url('images/clienti/reiki.jpg')no-repeat center;
        background-size: 100%;
        animation:fade3 8s infinite;
        -webkit-animation:fade3 8s infinite;
    }
    .slide4 {
        background: url('images/coaching/coaching-1.jpg')no-repeat center;
        background-size: 100%;
        animation:fade 8s infinite;
        -webkit-animation:fade 8s infinite;

    }
    .slide5 {
        background: url('images/coaching/coaching-2.jpg')no-repeat center;
        background-size: 100%;
        animation:fade2 8s infinite;
        -webkit-animation:fade2 8s infinite;
    }
    .slide6 {
        background: url('images/coaching/coaching-3.jpg')no-repeat center;
        background-size: 100%;
        animation:fade3 8s infinite;
        -webkit-animation:fade3 8s infinite;
    }
    @keyframes fade
    {
        0%   {opacity:1}
        33.333% { opacity: 0}
        66.666% { opacity: 0}
        100% { opacity: 1}
    }
    @keyframes fade2
    {
        0%   {opacity:0}
        33.333% { opacity: 1}
        66.666% { opacity: 0 }
        100% { opacity: 0}
    }
    @keyframes fade3
    {
        0%   {opacity:0}
        33.333% { opacity: 0}
        66.666% { opacity: 1}
        100% { opacity: 0}
    }
</style>
{{--
    </div>--}}

{{--
    <div class=""   background: linear-gradient(to right, #6ee5b5 0%, #eaf779 100%);>
    <div  class="col-md-6" style="background-color: rgba(0,0,0, 0.35);     height:250px; text-align: center">
        <h2  style="padding-top:50px; text-align: center;" class="golden3">Najnovije objave</h2>
    </div>
    <div class="col-md-6" style="background-color: rgba(0,0,0, 0.25); height:250px;">
        <h2 style="padding-top:50px; text-align: center;" class="golden3">U pripremi</h2>
    --}}{{--    @if(count($posts === 1))
        @foreach($posts as $post)
            <p class="center-block"> {{$post->title }} </p>
            <p class="center-block">{!! $post->created_at !!}</p>
        @endforeach
        @else
            <p>U pripremi </p>
        @endif--}}{{--
    </div>
</div>--}}
    <div class="col-md-12" style="margin:0; padding:0; border-top:1px solid slategrey;">
        <div class='col-md-offset-2 col-md-8 text-center'>
            <h2 class="golden3" style=" color:whitesmoke; font-family: 'Calibri Light'">REKLI SU O MENI</h2>
        </div>
    </div>
    <div class="row">
        <div class='col-md-offset-2 col-md-8'>
            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#quote-carousel" data-slide-to="1"></li>
                    <li data-target="#quote-carousel" data-slide-to="2"></li>
                </ol>

                <!-- Carousel Slides / Quotes -->
                <div class="carousel-inner">

                    <!-- Quote 1 -->
                    <div class="item active">
                        <blockquote >
                            <div class="row" style="height:290px">
                                <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="images/clienti/jelena.jpg" style="width: 150px; height:auto;">
                                    <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                                </div>
                                <div class="col-sm-8"  style="height:300px">
                                    <p style="min-height: 200px">Posle coachinga koje sam imala sa Marijom, bila sam danima pod utiskom. Da može ceo moj osećaj da stane u jednu reč, ta reč bi bila: POVERENJE. Pa onda prirodno dolazi i reč ZNANJE. Ono koje nije samo naučeno, jer Marija mnoge stvari zna tako što ih oseća. Sledeća reč koja mi pada na pamet je ZAHVALNOST. Što sam radila baš sa njom. SREĆA. Srećna sam što je poznajem.</p>
                                    <small>Jelena</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Quote 2 -->
                    <div class="item">
                        <blockquote>
                            <div class="row"  style="height:290px">
                                <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="images/clienti/milica.jpg" style="width: 150px; height:auto;">
                                </div>
                                <div class="col-sm-8"  style="height:300px">
                                    <p style="min-height: 200px">Zaljubila sam se u Marijinu energiju onog trenutka kad sam je upoznala. Neko ko prirodno emituje radost, ljubav i mudrost je prava osoba kojoj ću dozvoliti da se „igra“ sa mojom energijom, da je popravlja i „šteluje“ sa punim poverenjem. Reiki tretman sa njom je uvek doživljaj. Marija je neko ko uloži celu sebe na čemu god da radimo. Neko ko se edukuje sa ciljem da konstantno unapređuje sebe a time i nas. Neko ko će uvek biti moj Reiki Majstor, učitelj NLP-a i, kako je od milja zovem, moj „Guru“. Zadovoljstvo je poznavati je.</p>
                                    <small>Milica</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Quote 3 -->
                    <div class="item">
                        <blockquote>
                            <div class="row" style="height: 290px;">
                                <div class="col-sm-3 text-center">
                                    <img class="img-circle" src="images/clienti/aleksandar.jpg" style="width: 150px; height:auto;">
                                </div>
                                <div class="col-sm-8"  style="height:300px">
                                    <p  style="min-height:200px">Marija je prijatna, komunikativna i nadasve iskrena. Spremna je da sasluša i o svemu otvoreno popriča. Svojom energijom ume da primiri osobe oko sebe. A kada „upali“ svoje Reiki dlanove... magija nastaje!</p>
                                    <small>Aleksandar</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                <div class="item">
                <blockquote>
                    <div class="row" style="height: 290px;">
                        <div class="col-sm-3 text-center">
                            <img class="img-circle" src="images/clienti/default.png" style="width: 150px; height:auto;">
                        </div>
                        <div class="col-sm-8"  style="height:300px">
                        <p style="text-align: justify">Šta da kažem - u telefonu mi je zapisana kao Marija Magija.

                            Od prvog susreta i sa neopisivom lakoćom stekla sam potpuno poverenje u Mariju, njen rad, i za mene možda najvažnije - u njene plemenite namere. Jednostavnim jezikom - žena VRLO zna šta radi.

                            Ne znam koliko ima smisla opisivati iskustvo tokom samog Reiki tretmana, jer verujem da su ta iskustva vrlo individualna, ali ono što mogu donekle da opišem i konkretizujem jesu izrazito intenzivne fizičke senzacije i vizualizacije, i potpuna relaksiranost na kraju tretmana. Osim toga, primetila sam i promene u životu i u sebi u onim oblastima i namerama na kojima smo radile tokom tretmana, kao i važne spoznaje.

                            Osim reikija, Marija je i SJAJAN life coach i NLP konsultant, i imala sam priliku (i sreću) da sa mnom radi i kroz te tehnike. Moja preporuka bi svakako bila da se standardni reiki tretmani makar povremeno dopunjuju i ovom vrstom rada sa njom.
                        </p>
                        <small>Jovana</small>
                    </div>

                </blockquote>
                </div> </div>
                <!-- Carousel Buttons Next/Prev -->
                <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row shadow">
        <div class="col-md-12" style="text-align: center">

            <div style="">
                <h2 class="golden3 " style="font-fammily: 'Roboto Lite', sans-serif; font-weight:400; text-align: center; padding-bottom:10px;">BUDAN.RS</h2>

                <p class="animated fadeInLeft">
                    <a class="wow lightSpeedIn animated" href="https://www.instagram.com/budan.rs/">
                        <img src="images/instagram-logo.png"  alt="Budan-min-spa-by-Marija-Dajic-Instagram" width="100px"/><p class="heading-line"></p>
                <img class="img-circle shadow-small" style="padding:5px;" src="images/clienti/budan-mind-spa-logo.jpg" alt="budan.rs" width="150px"/>
                {{-- <img src="images/moja-prica/moja-prica-1-cropped.jpg"  width="150px"  class="img-circle" style="border-radius:150px"/>--}}
                </a>
                </p>
            </div>
        </div>
    </div>
    </div>
    <div class="naslov footer"  >

        <p class="golden3">Dobrodošao u<br>
            Mind Spa by Marija Dajić
        <hr>
        </p>
    </div>
@endsection

<style>
    .containerText {
        text-align: justify;
        font-family: Candara;
        /* background: rgba(255,255,255, 0.65);
         */
        border-left: 1px solid #04453f;


    }
    pm-none{
        margin:0;
        padding:0;
    }
#header{
   /* background: linear-gradient(to top, #6ee5b5 0%, #eaf779 100%);*/
}
    .naslov{
        /* background: linear-gradient(to right, #04453f 0%, #273844 100%);
 */
        background: #04453f;


    }
    p{
        padding-top:10px;
        margin:0;
    }
/*********************USLUGE****************
***********************************************************/
/*.gradient{
    background: linear-gradient(to right, #6ee5b5 0%, #eaf779 100%);
}*/
#coaching{
    background: linear-gradient(to right, #6ee5b5 0%, #eaf779 100%);
    height:290px;
    text-align: center;
}
#coaching h2{
    text-decoration: none;
}
#energetska-terapija{
  /*  background-color: rgba(47, 140, 98, 0.91);
   */
    height:100%;
    text-align: center;
}
#energetska-terapija h2{
    text-decoration: none;
text-decoration-line: none;
}
a:hover{
    text-decoration-line: none;
}
/****************************************************FOOTER*********************/
    .footer{
        font-size: 18px;
        padding:16px;
    }
    #app{
        /*
        background: linear-gradient(to right, #6ee5b5 0%, #eaf779 100%);

    */}
    .header-image{
        height:350px;

        background-image: url('https://clarksvillenow.sagacom.com/wp-content/blogs.dir/43/files/2014/04/yoga.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
    }
    /* carousel */
    .candara{
        font-family: Candara;
    }
    #quote-carousel
    {
        font-family: Candara;
        padding: 0 10px 30px 10px;
        margin-top: 30px;
    }

    /* Control buttons  */
    #quote-carousel .carousel-control
    {
        font-family: Candara;
        background: none;
        color: #222;
        font-size: 2.3em;
        text-shadow: none;
        margin-top: 30px;
    }
    /* Previous button  */
    #quote-carousel .carousel-control.left
    {
        left: -12px;
    }
    /* Next button  */
    #quote-carousel .carousel-control.right
    {
        right: -12px !important;
    }
    /* Changes the position of the indicators */
    #quote-carousel .carousel-indicators
    {
        right: 50%;
        top: auto;
        bottom: 0px;
        margin-right: -19px;
    }
    /* Changes the color of the indicators */
    #quote-carousel .carousel-indicators li
    {
        background: #c0c0c0;
    }
    #quote-carousel .carousel-indicators .active
    {
        background: #333333;
    }
    #quote-carousel img
    {
        width: 250px;
        height: 100px
    }
    /* End carousel */

    .item blockquote {
        border-left: none;
        margin: 0;
        min-height: 350px;


    }

    .item blockquote img {
        margin-bottom: 10px;
    }

    .item blockquote p:before {
        content: "\f10d";
        font-family: 'Fontawesome';
        float: left;
        margin-right: 10px;
    }



    /**
      MEDIA QUERIES
    */

    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        #quote-carousel
        {
            margin-bottom: 0;
            padding: 0 40px 30px 40px;
        }

    }

    /* Small devices (tablets, up to 768px) */
    @media (max-width: 768px) {

        .item blockquote {
            min-height: 650px;
        }

        /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
        #quote-carousel .carousel-indicators {
            bottom: -20px !important;
        }
        #quote-carousel .carousel-indicators li {
            display: inline-block;
            margin: 0px 5px;
            width: 15px;
            height: 15px;
        }
        #quote-carousel .carousel-indicators li.active {
            margin: 0px 5px;
            width: 20px;
            height: 20px;
        }
    }
    .golden3{
        font-family: Candara;
        text-align: center;
        background: -webkit-linear-gradient(top, #8f6B29, #FDE08D, #DF9F28);
        background: linear-gradient(top, #8f6B29, #FDE08D, #DF9F28);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    /***********SLIDER*********************
    *************************************
     */
    .carousel-fade .carousel-inner .item {
        -webkit-transition-property: opacity;
        transition-property: opacity;
    }
    .carousel-fade .carousel-inner .item,
    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        opacity: 0;
    }
    .carousel-fade .carousel-inner .active,
    .carousel-fade .carousel-inner .next.left,
    .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
    }
    .carousel-fade .carousel-inner .next,
    .carousel-fade .carousel-inner .prev,
    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        left: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-control {
        z-index: 2;
    }

    /*
    Fade content bs-carousel with hero headers
    Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
    Image credits: unsplash.com
    */

    /********************************/
    /*       Fade Bs-carousel       */
    /********************************/
    .fade-carousel {
        position: relative;
        height: 100%;
    }
    .fade-carousel .carousel-inner .item {
        height: 100%;
    }
    .fade-carousel .carousel-indicators > li {
        margin: 0 2px;
        background-color: #f39c12;
        border-color: #f39c12;
        opacity: .7;
    }
    .fade-carousel .carousel-indicators > li.active {
        width: 10px;
        height: 10px;
        opacity: 1;
    }

    /********************************/
    /*          Hero Headers        */
    /********************************/
    .hero {
        position: absolute;
        top: 50%;
        left: 80%;
        z-index: 3;
        color: #fff;
        text-align: center;
        /*text-transform: uppercase;*/
        text-shadow: 1px 1px 0 rgba(0,0,0,.75);
        -webkit-transform: translate3d(-50%,-50%,0);
        -moz-transform: translate3d(-50%,-50%,0);
        -ms-transform: translate3d(-50%,-50%,0);
        -o-transform: translate3d(-50%,-50%,0);
        transform: translate3d(-50%,-50%,0);
    }



    .fade-carousel .carousel-inner .item .hero {
        opacity: 0;
        -webkit-transition: 4s all ease-in-out 5s;
        -moz-transition: 4s all ease-in-out 5s;
        -ms-transition: 4s all ease-in-out 5s;
        -o-transition: 4s all ease-in-out 5s;
        transition: 4s all ease-in-out 5s;
    }
    .fade-carousel .carousel-inner .item.active .hero {
        opacity: 1;
        -webkit-transition: 3s all ease-in-out 5s;
        -moz-transition: 3s all ease-in-out 5s;
        -ms-transition: 3s all ease-in-out 5s;
        -o-transition: 3s all ease-in-out 5s;
        transition: 3s all ease-in-out 5s;
    }

    /********************************/
    /*            Overlay           */
    /********************************/
    .overlay {
        width: 100%;
        height: 100%;
        z-index: 2;
       /* background-color: #080d15;*/
        opacity: .7;
    }

    /********************************/
    /*          Custom Buttons      */
    /********************************/
    .btn.btn-lg {padding: 10px 40px;}
    .btn.btn-hero,
    .btn.btn-hero:hover,
    .btn.btn-hero:focus {
        color: #f5f5f5;
        background-color: #1abc9c;
        border-color: #1abc9c;
        outline: none;
        margin: 20px auto;
    }

    /********************************/
    /*       Slides backgrounds     */
    /********************************/
    .fade-carousel .slides .slide-1,
    .fade-carousel .slides .slide-2,
    .fade-carousel .slides .slide-3,
    .fade-carousel .slides .slide-4,
    .fade-carousel .slides .slide-5,
    .fade-carousel .slides .slide-6{
       width: 100%;
        height: auto;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }
    .fade-carousel .slides .slide-1 {
        background-image: url('images/clienti/reiki.jpg');
    }
    .fade-carousel .slides .slide-2 {
        background-image: url('images/clienti/reiki1.jpg');
    }
     .fade-carousel .slides .slide-3 {
        background-image: url('images/clienti/reiki3.jpg');
    }
     /**************************************
     ********   Slider COACHING ************
     ***************************************/
    .fade-carousel .slides .slide-4 {
        background-image: url('images/coaching/coaching-1.jpg');

    }
    .fade-carousel .slides .slide-5 {
        background-image: url('images/coaching/coaching-2.jpg');
    }
    .fade-carousel .slides .slide-6 {
        background-image: url('images/coaching/coaching-3.jpg');
    }

    /********************************/
    /*          Media Queries       */
    /********************************/
    @media screen and (min-width: 980px){
        .hero { width: 980px; }
    }
    @media screen and (max-width: 640px){
        .hero h1 { font-size: 4em; }
    }

.left-border{

    border-left: 2px solid #04453f;
    padding-left: 25px;
    padding-top: 25px;
    border-right: 1px solid rgba(245,169,54,1);
}
.just-shadow{
padding:1px;
    -webkit-box-shadow: 2px 2px 5px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 2px 2px 5px 2px rgba(0,0,0,0.75);
    box-shadow: 2px 2px 5px 2px rgba(0,0,0,0.75);
}
    .shadow{

    margin-top:10px;
    padding: 5px;
    border-radius:5px;
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }

    .shadow-small{
        -webkit-box-shadow: 1px -2px 4px -2px rgba(0,0,0,0.65);
        -moz-box-shadow: 1px -2px 4px -2px rgba(0,0,0,0.65);
        box-shadow: 2px 2px 4px 2px rgba(0,0,0,0.65);}

</style>
<script>
    $(document).ready(function() {
        //Set the carousel options
        $('#quote-carousel').carousel({
            pause: true,
            interval: 4000,
        });
    });
</script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
