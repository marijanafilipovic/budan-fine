@extends('layouts.app')

@section('content')

    @auth
    @endauth

    <style>
h2{
    animation: crescendo alternate 2s;
}
        @keyframes crescendo {
            0%   {transform: scale(.8);}
            100% {transform: scale(1.5);}
        }
    </style>

    <script src="https://bootstrapmade.com/demo/assets/js/jquery-3.1.0.min.js"></script>
    <script src="https://bootstrapmade.com/demo/assets/js/custom.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-55234356-4', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- intro area -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="item active">
                        <div class="carousel-background"><img src="img/intro/1.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animated fadeInDown">Alstar web studio</h2>
                                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="item">
                        <div class="carousel-background"><img src="img/intro/2.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animated fadeInDown">Creativity and technology</span></h2>
                                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="item">
                        <div class="carousel-background"><img src="img/intro/3.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animated fadeInDown">Sequi ea ut et est quaerat</span></h2>
                                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->
{{--
    <div class="naslov"  >

    <h1 class="candara golden3" style="margin:0;">COACHING</h1>

</div>--}}

 {{--   <div id="prva-slika" class="colmd-12"></div>--}}
<div class="container candara">
<div class="col-sm-12">
    <div id="coaching" class="left-border">
    <h2><span class="txt-rotate" data-period="4500" data-rotate='["ŠTA JE COACHING?"]'></span> </h2>

        <p>Reč „coach“ nastala je od mađarske reči „kočija“ koja označava prevozno sredstvo za putovanje od tačke A do tačke B.</p>
        <p>Adekvatno tome, i coach je vaš prevoznik koji vas prevodi od tačke problema do tačke rešenja.</p>
    </div>
    <div class="col-left-border">
    <h2>KAKO COACH TO RADI?</h2>
        <div class=" ">
        <p>Tako što vas navodi da pričate.</p>
        <p>Coach je pre svega profesionalni slušalac i postavljač neobičnih, intimnih pitanja.</p>
        <p>Nežna ljubopitljivost coacha nije u vezi sa njegovom ličnom radoznalošću za vaš život, već ima za cilj da izvuče iz vas one odgovore koji će vam ukazati na uzroke vaših mentalnih, emotivnih i telesnih blokada. Na taj način vas coach dovodi do onog „ahaaa“ momenta kada napokon razumete stanje u kom se trenutno nalazite.</p>
        <p>Stoga je razgovor sa coach-em poput razgovora sa ogledalom.</p>
        </div>
    </div>

        <div id="section-coach" class="left-border">
        <h2>KO NIJE COACH?</h2>

        <div class=" ">
        <p>Coach nije i ne mora nužno da bude ekspert za one oblasti života u kojima vam je potreban progres.</p>
        <p>Coach nije neko ko daje savete. Ljudi su generalno imuni na savete svog okruženja i zato smernice za vaš život možete dati samo sebi samima, vođeni dobronamernom asistencijom coach-a.</p>
        <p>Coach svakako nije neko ko leči psihičke bolesti i smetnje. To je posao psihijatra i psihoterapeuta. Coaching je namenjen pre svega psihički zdravim ljudima koji su se zaglavili na putu ličnog razvoja i koji traže najbolji način za prevazilaženje određenih životnih situacija.</p>
        </div>
        </div>
        <div id="section-about-coach" class="left-border">
            <h2>KO JESTE COACH?</h2>
            <p>Coach je osoba od poverenja kojoj se sa lakoćom možete prepustiti.</p>
            <p>Poverenje je ključna reč i vrednost kojoj težim u radu.</p>
            <p>Jednom kada steknem poverenje svog klijenta i lociram epicentar njegovog problema – tu počinje moj pravi posao.</p>
            <p>Tada klijentu predlažem konkretne tehnike za otključavanje ličnog potencijala i otklanjanje prepreka na putu ka zadovoljnijem životu.</p>
    <p>Konkretno, u radu sa svojim klijentima koristim se tehnikama Neuro Lingvističkog Programiranja (NLP) i Racionalno Emotivne Bihejvioralne Terapije (REBT) za koje sam edukovana i koje iskustveno daju najbrže i najefikasnije rezultate. Zarad prijatnijeg procesa i postizanja intenzivnijih rezultata, navedene coaching alate kombinujem sa raznim tehnikama opuštanja poput meditacije i energetskih tretmana.</p>
            <p>Vodeći klijente duž vremenske linije njihove prošlosti i budućnosti, igrajući se sa njihovim unutrašnjim predstavama i ulogama, pomažem im da se najzad nađu rasterećeni u jedinoj svrhovitoj tački življenja: u sadašnjem trenutku.</p>
    </div>
        <div id="seanse"  >
    <div class="naslov top-15" style="border-bottom-right-radius: 15px; border-bottom-left-radius: 15px; padding:5px;">
            <h3 class="golden3">Neke od tema koje obrađujem u radu sa klijentima su:</h3>
    </div>
            <div class="seanse-lista">
    <h4> - Rešavanje sukoba u porodičnim, partnerskim i poslovnim odnosima</h4>
    <h4> - Prevazilaženje neželjenih emotivnih stanja</h4>
    <h4> - Rad na ličnim i profesionalnim ciljevima</h4>
    <h4> - Priprema za poslovne sastanke i pregovore</h4>
    <h4> - Razvoj prodajnih veština</h4>
    <h4> - Razvoj veštine komunikacije</h4>
    <h4> - Životni dizajn</h4>
    <h4> - Buđenje kreativnosti</h4>
    <h4> - Prevazilaženje ograničavajućih uverenja</h4>
    <h4> - Ublažavanje i otklanjanje fobija</h4>
    <h4> - Rad sa alergijama</h4>
                <p class="float-right">i mnoge druge...</p>
            </div>
   <div class="coach-cena-sesije">
    <div >Coaching sesije se izvode uživo, razgovorom 1 na 1, a u dogovoru sa klijentom moguć je i rad na daljinu,  putem on-line veze.</div>
    <div>Cena jedne coaching sesije iznosi 3.500,00 dinara.</div>
    <div >Ukoliko se pronalazite u nekoj od pomenutih tema i ukoliko imate bilo kakva pitanja u vezi sa mojim radom, sa zadovoljstvom ću odgovoriti na sve vaše poruke.</div>
    <div> Radujem se upoznati vas i biti vam od pomoći.</div>
    Vama na usluzi,<br>
    Marija Dajić
    </div>
            <div class="col-md-12"
                 style="background-color: whitesmoke;
                  padding:0; border-left:2px solid #04453f; border-right:1px solid #04453f;
                   border-top:2px solid #04453f;">
                <div class="naslov col-sm-6"
                 style=" font-size:12px;
                 padding:4px;
                 margin-right:3px;
                 border-bottom-right-radius: 38px;
                 border-top: 1px solid #04453f;
                 border-left: 1px solid #04453f;
                border-bottom:1px solid #04453f"
                >
                    <h3 class="golden3">KO SAM JA</h3>
                </div>
                    <p style="padding-left:3px">Ja sam sertifikovani Majstor Tibetanskog Reikija 3. stepena. Veština mi je preneta od strane učitelja Dejana Petrovića kome ovim putem izražavam svoju zahvalnost. Aktivno se bavim energetskim terapijama od 2018. godine i u svom portfoliju imam veliki broj zadovoljnih klijenata koji nesebično dele svoje impresije o radu sa mnom. Njihove preporuke moja su najbolja reklama.</p>
             <hr>
                <div class="naslov  col-sm-6"
                     style="font-size:12px;
                      padding:4px;
                      margin:0;
                      margin-right:3px;
                      border-bottom-right-radius: 38px;
                      border-top: 1px solid #04453f">
                    <h3 class="golden3">NAPOMENA</h3>
                </div>
                    <p  style="padding-left:3px">Reiki tretman ne izaziva nikakve fizičke i mentalne bolesti. Reiki nije zamena za medicinsku terapiju. U slučaju bilo kakvih zdravstvenih problema potražite savet lekara.</p>
            <hr>
            </div>
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

</div>
@endsection

<style>
    #prva-slika{
       background-image: url('images/coaching/coaching-4.jpg');
        background-size: 100%;
        background-repeat: no-repeat;
        height: 80vh;
        background-position: center;
    }
body{
    font-family: Candara;
}
h4{
    padding-left: 105px;
}
.top-15{
    paddin-top:15px
}
.bottom-15{
    padding-bottom: 15px;
}
    .left-border{
        margin-bottom: 45px;
        border-left: 2px solid #04453f;
        padding-left: 25px;
        border-right: 1px solid rgba(245,169,54,1);
    }
.shadow-box{

   /* background: rgba(255,255,255, 0.75);
   */
    padding: 5px;
    border-radius:5px;
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
}
p:hover{
    color: #1a1a1a;
}
p{
    padding-right: 5px;
    text-align: justify;
}
    #gradient{
    }

    .containerText {
        text-align: justify;
        font-family: Candara;
      /* background: rgba(255,255,255, 0.65);
       */ border-right: 1px solid lightgrey;
        border-left: 1px solid lightgrey;
        padding: 15px;
        padding-left: 30px;
        padding-right: 30px;
    }
    .footer{
        font-size: 18px;
        padding:16px;
    }
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


    .golden3{
        font-family: Candara;
        text-align: center;
        background: -webkit-linear-gradient(top, #8f6B29, #FDE08D, #DF9F28);
        background: linear-gradient(top, #8f6B29, #FDE08D, #DF9F28);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .naslov{
       /* background: linear-gradient(to right, #04453f 0%, #273844 100%);
*/
        background: #04453f;
/*border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;

 */

               }

</style>
