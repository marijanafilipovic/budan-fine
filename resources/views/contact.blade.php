@extends('layouts.app')

@section('content')

    @auth
    @endauth

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


    <div   style="min-height:60px;">
        <div class="row shadow-box"  >

            <h1 class="golden3" style="font-weight: 400;">PIŠITE MI</h1>

        </div>
    </div>
<div class="container"  style="padding-top: 20px; min-height:65vh;">
<div class="row" style="margin: 0 auto;">
@if (Session::has('flash-message'))
        <div class="alert alert-success">{{ Session::get('flash-message') }}</div>
    @endif
</div>

    <div class="col-md-12" style="text-align: left">
<form method="post" action="{{ route('send-message') }}">
  @csrf
    <div class="col-md-12 form-group">
        <label>Puno ime:</label>
        <input type="text" class="form-control" name="name">
        <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
    </div>
    <div class="col-md-12 form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="email">
        <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
    </div>
    <div class="col-md-12 form-group">
        <label>Tekst poruke:</label>
        <textarea class="form-control" rows="8"  name="message"></textarea>
        <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
    </div>
    <div class="form-group col-md-12">
         <button class="btn btn-primary center-block">Pošalji</button>
    </div>
</form>
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
    <div class=" naslov footer"  >

        <p class="golden3">Dobrodošao u<br />
            Mind Spa by Marija Dajić

        </p>
        <hr>
        <p style="font-size: x-small; float: right;"></p>
    </div>
@endsection
<!-- js -->
<script src="js/allstar/jquery.js"></script>
<script src="js/allstar/bootstrap.min.js"></script>
<script src="js/allstar/wow.min.js"></script>
<script src="js/allstar/jquery.scrollTo.min.js"></script>
<script src="js/allstar/jquery.nav.js"></script>
<script src="js/allstar/modernizr.custom.js"></script>
<script src="js/allstar/grid.js"></script>
<script src="js/allstar/stellar.js"></script>


<!-- Template Custom Javascript File -->
<script src="js/allstar/custom.js"></script>

<style>
p:hover{
    color: #1a1a1a;
}
#gradient{
/*    background: linear-gradient(to right, #6ee5b5 0%, #eaf779 100%);*/
    background: linear-gradient(to right, #6ee5b5 0%, #04453f 100%);
}

    .containerText {
        text-align: justify;
        font-family: 'Roboto Light', sans-serif;
      /* background: rgba(255,255,255, 0.65);
      border-right: 1px solid lightgrey;
        */   border-left: 1px solid lightgrey;
        padding: 15px;
        padding-left: 30px;
        padding-right: 30px;
    }
    .footer{
        font-size: 18px;
        padding:16px;
        bottom: 0px;
        position: relative;
        width:100%;
    }
    /* carousel */
    .candara{
        font-family: Candara;
    }
    .shadow{
        -webkit-box-shadow: 0px -2px 6px 3px rgba(0,0,0,0.55);
        -moz-box-shadow: 0px -2px 6px 3px rgba(0,0,0,0.55);
        box-shadow: 0px -2px 6px 3px rgba(0,0,0,0.55);
    }
.shadow-small{
    -webkit-box-shadow: 1px -2px 4px -2px rgba(0,0,0,0.65);
    -moz-box-shadow: 1px -2px 4px -2px rgba(0,0,0,0.65);
    box-shadow: 2px 2px 4px 2px rgba(0,0,0,0.65);}


.golden3{
    font-family: Candara;
    text-align: center;
    background: -webkit-linear-gradient(top, #8f6B29, #FDE08D, #DF9F28);
    background: linear-gradient(top, #8f6B29, #FDE08D, #DF9F28);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
    .naslov{

        background: #04453f;

 #app{
     background: white;
 }
.shadow-box{
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 8px 2px 5px 0px rgba(0,0,0,0.75);
}
</style>
