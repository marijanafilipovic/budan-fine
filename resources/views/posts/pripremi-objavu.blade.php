
@extends('layouts.app')

@section('content')



    @auth
        <div style="overflow:hidden;">
        <div align="left" style="float:left; width:250px; margin-right:50px;">
            <p class="btn btn-default" style="float:none; width:250px;  border-radius:0;"><a href="{{ url('logout') }}"> Odjavi se </a></p>
            <p  class="btn btn-default" style="float:none; width:250px; border-radius:0;"> <a href="{{ url('tags') }}">Tagovi </a></p>
            <p  class="btn btn-default" style="float:none; width:250px; border-radius:0;"><a href="{{ url('posts') }}">Sve objave </a></p>
            <p  class="btn btn-default" style="float:none; width:250px; border-radius:0;"><a href="{{ url('create') }}">Nova objava</a></p>
            <p  class="btn btn-default active" style="float:none; width:250px; border-radius:0;"><a href="{{ url('pripremi-objavu') }}">Napravi poster</a></p>
            <p style="float:none; width:250px; border-radius:0;" class="btn btn-success">
                <a target="_blank" href="https://analytics.google.com/analytics/web/provision/?authuser=6#/realtime/rt-overview/a142375665w203591404p197167213/">
                    Google Analytics
                </a>
            </p>
        </div>
    @endauth
    <div class="" style="width:100%; margin: 0 auto; text-align: center; padding-top:30px; border-top: 2px solid #cda349;">

    <form method="POST" action="{{ route('pripremljeno') }}" enctype="multipart/form-data"  target="_blank" class="pb-5">


        @csrf

<div class="" style="float:left; ">
        <div  >
<div class="col-sm-3"  align="left" >
            <label class="colorText" for="fontFirstLine"  style="padding-top:25px;">Izaberi pozadinu</label>
            <select name="cover" id="cover"  style=" width: 120px;" class="form-control" >
                <option   value="images/clienti/cover-preperd.jpg">POSTER I</option>
                <option   value="images/clienti/cover-divided.jpg">POSTER II</option>

            </select>


            <label class="colorText" for="fontAutor"  style="padding-top:20px;">Font za Autora</label>
            <select name="fontAutor" id="fontAutor"   class="form-control" style=" width: 120px;">
                <option   value="12">12</option>
                <option   value="14">14</option>
                <option   value="16">16</option>
                <option   value="18">18</option>
                <option   value="20">20</option>
                <option   value="22">22</option>
                <option   value="24">24</option>
                <option   value="28">28</option>

            </select>

            <label class="color" for="fontFirstLine" style="padding-top:20px;">Font za tekst</label>
            <select name="fontFirstLine" id="fontFirstLine"   class="form-control" style=" width: 120px;">
                <option   value="12">12</option>
                <option   value="14">14</option>
                <option   value="16">16</option>
                <option   value="18">18</option>
                <option   value="20">20</option>
                <option   value="22">22</option>
                <option   value="24">24</option>
                <option   value="28">28</option>

            </select>
</div>

    <div class="col-md-9" style="">
        <div class="col-sm-6" >
            <p style="text-align: center; padding-top:10px;" >POSTER I</p>
            <img   src="images/clienti/cover-preperd.jpg" style="border: 1px solid #2a9055; width: 250px; " />

        </div>
        <div class="col-sm-6" >
            <p style="text-align: center;  padding-top:10px;" >POSTER II </p>
            <img   src="images/clienti/cover-divided.jpg" style="border: 1px solid #2a9055;  width: 250px; " />

        </div>
    </div>


        <div class="container"   style="margin-top: 15px;   -webkit-box-shadow: 0px 1px 6px 1px rgba(0,0,0,0.25);
           -moz-box-shadow: 0px 1px 6px 1px rgba(0,0,0,0.25);
           box-shadow: 0px 1px 6px 1px rgba(0,0,0,0.25);">

            <div align="left">
        <label  style="padding-top:50px;" for="fontFirstLine">Tekst</label>
        <input  type="text" name="text" class="form-control"/>
            </div>
            <div align="left">
        <label  class="colorText" for="fontAutor"  style="padding-top:50px;">Tekst za ime Autora</label>
        <input type="text" name="autor" class="form-control" style="width:100%"/>
            </div>
            <div   style="margin-top:15px" >
                <input type="submit" class="btn btn-primary" value="Vidi"/>
            </div>

        </div>



    </form>
</div>
        </div>
        </div>
    <style>
       .colorText{
           color:#04453f;

       }
       #g{
           -webkit-box-shadow: 0px -2px 6px 3px rgba(0,0,0,0.55);
           -moz-box-shadow: 0px -2px 6px 3px rgba(0,0,0,0.55);
           box-shadow: 0px -2px 6px 3px rgba(0,0,0,0.55);
       }
       .shadow-small{
           -webkit-box-shadow: 1px -2px 4px -2px rgba(0,0,0,0.65);
           -moz-box-shadow: 1px -2px 4px -2px rgba(0,0,0,0.65);
           box-shadow: 2px 2px 4px 2px rgba(0,0,0,0.65);}
    </style>
    @endsection
