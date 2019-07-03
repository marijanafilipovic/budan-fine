
@extends('layouts.app')

@section('content')
@foreach($images as $image)
    <img src="images/pripremljeno/{{$s}}" />
@endforeach
    @endsection
