@extends('layouts.app')

@section('content')

    @auth
    @endauth
    <div id="gradient">
    <div class="row naslov"  >

        <h1 class="candara golden3">USLUGE</h1>

    </div>
    <div class="row" style="border-bottom:1px solid rgba(245,169,54,1)">
        <div id="coaching" class="gradient col-sm-9 " style="text-align: center; padding-top:60px">

        </div>
        <div class="col-sm-3" id="energetska-terapija" style="background-color: rgba(0,0,0,0.45); padding-top:60px;"> <a href="coaching" ><h2 class="golden3 candara">COACHING PROGRAM</h2></a></div>
    </div>
    <div class="row">
        <div id="energetska-terapija" class="col-sm-8"  style="background-color: rgba(48, 45, 63,0.95); text-align: center; padding-top:60px; ">
            <a href="energetska-terapija"><h2 class="golden3 candara shadow" >ENERGETSKA TERAPIJA</h2></a>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
    <div class="row naslov footer"  >

        <p class="golden3">Dobrodošao u<br />
            Mind Spa by Marija Dajić
        </p>
    </div>

</div>
@endsection

<style>
    #gradient{
        background: linear-gradient(to right, #6ee5b5 0%, #eaf779 100%);
    }
    .gradient{
        background: linear-gradient(to right, #6ee5b5 0%, #eaf779 100%);
    }
    #coaching{
        background: linear-gradient(to right, #6ee5b5 0%, #eaf779 100%);
        height:50%;
        text-align: center;
    }
    #coaching h2{
        text-decoration: none;
    }
    #energetska-terapija{
        background-color: rgba(60,56,87,0.81);
        height:50%;
        text-align: center;
    }
    #energetska-terapija h2{
        text-decoration: none;
    }
    p:hover{
    color: #1a1a1a;
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
    .golden {
        background: linear-gradient(to bottom, #cfc09f 22%,#634f2c 24%, #cfc09f 26%, #cfc09f 27%,#ffecb3 60%,#3a2c0f 78%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        color: #fff;
     font-family: Candara;

        margin: 0;

        text-align: center;
    }
.golden3{
    text-shadow: hoff voff blur #000;
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
border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;

               }

.shadow{

    text-shadow: 1px 5px 5px #aba8a8;
}
</style>
