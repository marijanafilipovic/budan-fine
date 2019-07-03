
@extends('layouts.app')

@section('content')


        @auth
            <div align="left">
                <p class="btn btn-default"><a href="{{ url('logout') }}"> Odjavi se </a></p>
                <p  class="btn bg-white active "><a href="{{ url('tags') }}">Tagovi </a></p>
                <p  class="btn bg-white active"><a href="{{ url('posts') }}">Sve objave </a></p>
                <p  class="btn btn-default  active"><a href="{{ url('create') }}">Nova objava</a></p>
                <p  class="btn btn-default  active"><a href="{{ url('pripremi-objavu') }}">Napravi poster</a></p>

            </div>
            <div align="right">
             {{--   <p class="btn btn-success"><a href="https://search.google.com/u/6/search-console/performance/search-analytics?resource_id=http%3A%2F%2Fbudan.rs%2F">
                        Google Search Console
                    </a></p>--}}
                <p class="btn btn-success">
                    <a target="_blank" href="https://analytics.google.com/analytics/web/provision/?authuser=6#/realtime/rt-overview/a142375665w203591404p197167213/">
                        Google Analytics
                    </a>
                </p>
            </div>
        @endauth

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="container"  >

        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>
@if(!empty($posts))
    <section class="background-gray-lightest" style="min-height:90vh">
        <div class="col-md-12" style="pading:0; margin:0 auto; text-align: center">
            <div class="row" style="text-align: center">
                @foreach($posts as $post)
                <div class="col-sm-3 shadow-box  " style="padding:0; margin:60px; border:1px solid rgba(0,0,0, 0.15)">
                    <div class="post">
                        <div class="image">
                            <a href="post/{{$post->id}}/{{ $post->slug }}">
                               {{-- <img  src="{{ URL::to('/') }}/images/{{$post->image}}"  alt="{{ $post->slug }}" class="img-responsive">
--}}                        <img  src="images/{{$post->image}}"  alt="{{ $post->slug }}" class="img-responsive">

                            </a>
                        </div>

                        <a href="post/{{$post->id}}/{{ $post->slug }}">
                            <h3 class="golden3" style="font-weight: 400;">{{ $post->title }}</h3>
                        </a>
{{--
                        <p class="post__intro">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
--}}
                        <div style="padding:13px;">

                        <p>Objavljen: {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                            <p>Tagovi:</p>
                            <div style="text-align: left">
                            @foreach($post->tags as $tag)
                                <p class="label label-default" style="padding:4px; margin:4px;"> {{ $tag->name }} </p>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    <div class="row" style="margin: 0 auto;">
        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>
  {{--  <div class="container">
        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>
             @foreach($posts as $post)
<!--
                 <div id="coaching" class="container left-border" >
                 <div class="row "   >
                     <div class="col-md-6 " style="padding-left: 5px;">
    -->
<div class="" style="border-bottom:1px solid rgba(245,169,54,1);">
    <div id="coaching" class="gradient col-sm-6 " style=" height: 280px; text-align: center; padding:0;">
        <div class="naslov">
        <h2 class="golden3 candara shadow" style="padding:3px; margin:0;">{{ $post->title }}</h2>
            </div>
                <div class="center-block">
                <div class="candara ellipsis" style="margin-left:15px; padding-left: 15px; padding-right: 15px; height:180px;">
<div class="left-border shadow-articl">
                    {!! $post->body !!}
</div>
                </div>
                </div>
        <div>
        <a style="vertical-align: bottom" class="btn btn-primary"  href="post/{{$post->id}}/{{ $post->slug }}">Vidi sve</a>
        </div>
        <div >
            <!-- Sharingbutton Facebook -->
            <a class="btn btn-xs btn-default" href="https://facebook.com/sharer/sharer.php" target="_blank" rel="noopener" aria-label="Share on Facebook">
                   Facebook
            </a>

            <!-- Sharingbutton Twitter -->
            <a class="btn btn-xs btn-default" href="https://twitter.com/intent/tweet/?text=;url=" target="_blank" rel="noopener" aria-label="Share on Twitter">
                 Twitter
            </a>

            <!-- Sharingbutton Google+ -->
            <a class="btn btn-xs btn-default" href="https://plus.google.com/share" target="_blank" rel="noopener" aria-label="Share on Google+">
                      Google+
            </a>

            <!-- Sharingbutton Tumblr -->
            <a class="btn btn-xs btn-default" href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;caption=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;content=http%3A%2F%2Fsharingbuttons.io&amp;canonicalUrl=http%3A%2F%2Fsharingbuttons.io&amp;shareSource=tumblr_share_button" target="_blank" rel="noopener" aria-label="Share on Tumblr">
                  Share on Tumblr
            </a>

            <!-- Sharingbutton E-Mail -->
            <a class="btn btn-xs btn-default" href="mailto:?subject=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;body=http%3A%2F%2Fsharingbuttons.io" target="_self" rel="noopener" aria-label="Share by E-Mail">
             Email To  </a>

            <!-- Sharingbutton Pinterest -->
            <a class="btn btn-xs btn-default" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fsharingbuttons.io&amp;media=http%3A%2F%2Fsharingbuttons.io&amp;description=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking." target="_blank" rel="noopener" aria-label="Share on Pinterest">
                     Pinterest
            </a>

        </div>
    </div>


    <div class="col-sm-6" id="" style="background-color: rgba(0,0,0,0.45); padding:0;">
    <img   src="{{ URL::to('/') }}/images/{{$post->image}}"  style="height:auto; width:100%; margin:0;"  />

    </div>

</div>


@endforeach--}}
@else
    <p class="golden3">Objave su u pripremi...</p>
@endif

        <div class="row shadow">
            <div class="col-md-12" style="text-align: center">

                <div style="text-align: center">
                    <h2 class="golden3 " style="font-fammily: 'Roboto Lite', sans-serif; font-weight:400; text-align: center; padding-bottom:10px;">BUDAN.RS</h2>


                        <a href="https://www.instagram.com/budan.rs/" style="text-align: center">
                            <img src="images/instagram-logo.png"  alt="Budan-min-spa-by-Marija-Dajic-Instagram" width="100px"/><p class="heading-line"></p>
                    <img class="img-circle shadow-small" style="padding:5px;" src="images/clienti/budan-mind-spa-logo.jpg" alt="budan.rs" width="150px"/>
                    {{-- <img src="images/moja-prica/moja-prica-1-cropped.jpg"  width="150px"  class="img-circle" style="border-radius:150px"/>--}}
                    </a>

                </div>
            </div>
        </div>
        </div>
    <div class="naslov footer">

    <div class="golden3">Dobrodošao u</div>
      <div class="golden3">Mind Spa by Marija Dajić</div>
    <hr>
     <a href="login" style="color:white; font-size:xx-small; float:right; ">|  admin |</a>
</div>

@endsection
<style>
    .shadow{
        -webkit-box-shadow: 0px -2px 6px 3px rgba(0,0,0,0.55);
        -moz-box-shadow: 0px -2px 6px 3px rgba(0,0,0,0.55);
        box-shadow: 0px -2px 6px 3px rgba(0,0,0,0.55);
    }
    .shadow-small{
        -webkit-box-shadow: 1px -2px 4px -2px rgba(0,0,0,0.65);
        -moz-box-shadow: 1px -2px 4px -2px rgba(0,0,0,0.65);
        box-shadow: 2px 2px 4px 2px rgba(0,0,0,0.65);}

    .shadow-box{
        border-radius:1px;
        -webkit-box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.65);
        -moz-box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.65);
        box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.65);
        margin:5px;
    }
    #blog-published{
        height:100%;
    }
    .list-image img{

        width: auto;
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
background-color: rgba(255,255,255, 0.65);
        border-left: 2px solid #04453f;
        margin : 15px;
        padding-left:10px;
        min-height: 120px;
    }
    .shadow-articl{
         /* background: rgba(255,255,255, 0.75);
        */
         border-radius:5px;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }
    p:hover{
        color: #1a1a1a;
    }
    p{
        text-align: justify;
    }
    #gradient{
        background: white;
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

        width:100%;
        z-index:10000;
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
        font-family: 'Roboto', sans-serif;
        text-shadow: rgba(0, 0, 0, 0.25) 0.5px 0.5px 0.5px;
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
    .ellipsis {
        font-family: Candara;
        display: block; /* or inline-block */
        text-overflow: ellipsis;
        word-wrap: break-word;
        overflow: hidden;
        max-height: 3.6em;
        line-height: 1.8em;
    }
</style>
