@extends('layouts.app')

@section('content')

    @auth
    @endauth
    <style>
        .shadow-box{
            -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 2px 2px 1px 0px rgba(0,0,0,0.75);
        }
    </style>

    <div   style="min-height:60px;">
        <div class="row shadow-box"  >

            <h1 class="golden3">PIŠITE MI</h1>

        </div>
    </div>
    <div class="container"  style="padding-top: 20px; min-height:65vh;">
        <div class="row">
            @if (Session::has('flash-message'))
                <div class="alert alert-success">{{ Session::get('flash-message') }}</div>
            @endif
        </div>
        <div class="col-md-3">
            <h4 class="golden3">Možete me naći na Instagramu:</h4>
            <div class="col-sm-3 shadow-box" style="/*background: linear-gradient(to right, #6ee5b5 0%, #990055 100%);*/ height: 200px; width:200px; border-radius: 100px; text-align: center; padding-top: 75px;">
                <a href="">
                    <img src="images/instagram-logo.png"  alt="Budan-min-spa-by-Marija-Dajic-Instagram" width="150px"/>
                    {{-- <img src="images/moja-prica/moja-prica-1-cropped.jpg"  width="150px"  class="img-circle" style="border-radius:150px"/>--}}
                </a>
            </div>
        </div>
        <div class="col-md-9" style="text-align: left">
            <form method="POST" action="/slanje-poruke">
                @csrf
                <div class="col-md-9 form-group">
                    <label>Puno ime:</label>
                    <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                    <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                </div>
                <div class="col-md-9 form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" value="{{ old('email') }}" name="email">
                    <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                </div>
                <div class="col-md-9 form-group">
                    <label>Tekst poruke</label>
                    <textarea class="form-control" rows="8"  name="message">{{ old('message') }}</textarea>
                    <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                </div>
                <div class="form-group col-md-9">
                    <button class="btn btn-primary center-block">Posalji</button>
                </div>
            </form>
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
        bottom: 0px;
        position: relative;
        width:100%;
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

        background: #04453f;

    #app{
        background: white;
    }
</style>
