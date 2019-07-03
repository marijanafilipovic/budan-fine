
@extends('layouts.app')

@section('content')
<div class="container">

    @auth
        <div align="left">
            <p class="btn btn-default"><a href="{{ url('logout') }}"> Odjavi se </a></p>
            <p  class="btn bg-white active"><a href="{{ url('posts') }}">Sve objave </a></p>
            <p  class="btn bg-white active "><a href="{{ url('tags') }}">Tagovi </a></p>
            <p  class="btn btn-default"><a href="{{ url('create') }}">Nova objava</a></p>

        </div>
    @endauth
    <div class="col-md-12" style="margin: 0 auto;">
    <form method="POST" action="{{ route('tag-update'), $tag->id }}" class="pb-5">
        @csrf
                    <h2 for="Naslov">Izmena Tag oznake:</h2>
<div class="row">
        <input type="hidden" value="{{$tag->id}}" name="id">
        <div class="form-group col-sm-6">
            <h3 for="name">{{ $tag->name }}</h3>

        </div>
</div>
        <div class="row col-sm-3">
    <input type="text" name="name" class="form-control" />
        </div>
        <div class="col-sm-3">
    @method('PUT')
    <input type="submit" class="btn btn-info input-lg  " value="Sacuvaj izmenu"/>
        </div>

    </form>

    </div>
</div>
@endsection
