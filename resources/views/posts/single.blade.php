@extends('layouts.app')
@section('content')

    <script>
        var buttonID = "viber_share";
        var text = "Check this out: ";
        document.getElementById(buttonID)
            .setAttribute('href', "https://3p3x.adj.st/?adjust_t=u783g1_kw9yml&adjust_fallback=https%3A%2F%2Fwww.viber.com%2F%3Futm_source%3DPartner%26utm_medium%3DSharebutton%26utm_campaign%3DDefualt&adjust_campaign=Sharebutton&adjust_deeplink=" + encodeURIComponent("viber://forward?text=" + encodeURIComponent(text + " " + window.location.href)));
    </script>

<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

            @auth
                <div class="col-sm-12">
                    <div class="col-sm-6" style="text-align: right">
                        <p class="btn btn-primary"><a class="btn btn-xs btn-primary" href="{{ route('post-edit', $post->id) }}" style="color:white">Izmeni</a></p>

                    </div>
                 {{--   @if($post->instagram == 'uninstagram')
                    <div class="col-sm-6" style="text-align: left; margin-bottom: 15px;">

                        <p class="btn btn-primary"> <a class="btn btn-xs btn-primary" href="post/{{$post->id}}">Objavi Instagram Story</a></p>
                    </div>
            @endif--}}

                </div>
            @endauth
            <ul class="ct-socials" style="background: #04453f">
                <li>
                    <a href="viber://forward?text=http://budan.rs/post/{{$post->id}}/{{ $post->slug }}" style="background: #04453f" id="viber_share" style="color: white; font-weight: 200; text-decoration: none;"
                         {{--  <img src="img/logo_icon_white_small.png" height="18">--}}>V</a>
                  {{--  <a href="https://3p3x.adj.st/?adjust_t=u783g1_kw9yml&adjust_fallback=https%3A%2F%2Fwww.viber.com%2F%3Futm_source%3DPartner%26utm_medium%3DSharebutton%26utm_campaign%3DDefualt&adjust_campaign=Sharebutton&adjust_deeplink=" + encodeURIComponent("viber://forward?text=" + encodeURIComponent(text + " " + window.location.href)));"
                        id="viber_share" style="color: white; font-weight:bold; text-decoration: none;" >V</a>--}}
                </li>
                <li>
                    <a  style="background: #04453f"href="https://twitter.com/intent/tweet?text=http://budan.rs/post/{{$post->id}}/{{ $post->slug }}" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://budan.rs/post/{{$post->id}}/{{ $post->slug }}" target="_blank"  style="background: transparent">
                        <i class="fa fa-facebook"></i></a>
                </li>

                <li>
                    <a  style="background: #04453f"href="https://www.linkedin.com/shareArticle?mini=true&url=http://budan.rs/post/{{$post->id}}/{{ $post->slug }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                </li>
           {{--     <li>
                    <a style="background: #04453f" href="/" target="_blank"><i class="fa fa-flickr"></i></a>
                </li>--}}
            </ul>
            <div class="col-sm-12" style="margin: 0 auto; text-align: center; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: lighter; ">
         <h1 class="  golden3" style="width:auto; text-align: center"> {{ $post->title }} </h1>

                <p>Objavljen: {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                <p>Tagovi: <td>@foreach($post->tags as $tag)
                        <span class="label label-default">{{ $tag->name }}</span>
                    @endforeach
                </td></p>
 
        </div>



        <div class=" col-sm-12" style="text-align: center">
            <img src="{{ URL::to('/') }}/images/{{$post->image}}" style="width: 80%; height: auto;"/>

        </div>

        <div class="container">
            <div class=" col-sm-12" style="text-align: center"> {!! $post->body !!} </div>
        </div>


<div class="row shadow">
    <div class="col-md-12" style="text-align: center; padding-bottom:10px;">

        <div style="">
            <h2 class="golden3 " style="font-fammily: 'Roboto Lite', sans-serif; font-weight:400; text-align: center; padding-bottom:10px;">BUDAN.RS</h2>


                <a  href="https://www.instagram.com/budan.rs/">
                    <img src="{{ URL::to('/') }}/images/instagram-logo.png"  alt="Budan-min-spa-by-Marija-Dajic-Instagram" width="100px"/><p class="heading-line"></p>
            <img class="img-circle shadow-small" style="padding:5px;" src="{{ URL::to('/') }}/images/clienti/budan-mind-spa-logo.jpg" alt="budan.rs" width="150px"/>
            {{-- <img src="images/moja-prica/moja-prica-1-cropped.jpg"  width="150px"  class="img-circle" style="border-radius:150px"/>--}}
            </a>

        </div>
    </div>
</div>
</div>
        <div class="row naslov footer"  >

        <p class="golden3">Dobrodošao u<br />
            Mind Spa by Marija Dajić
        </p>
    </div>
 @endsection
<style>
    .coach-cena-sesije{
        background: rgba(255,255,255, 0.75);

        padding: 5px;
        border-radius:2px;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }

    .bela-pozadina{
        background: rgba(255,255,255, 1);
        padding: 5px;
        border-radius:5px;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }
    p{
         text-align: justify;
     }
    p:hover{
        color: #1a1a1a;
    }
    #gradient{
        background: #67b168;
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
.ct-socials li a{
    background: #04453f;
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
</style>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="social-share.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
