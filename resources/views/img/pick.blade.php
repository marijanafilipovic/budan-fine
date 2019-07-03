@extends('layouts.app')
@section('content')



<form method="POST" action="{{ route('changeImg', $post->id) }}" enctype="multipart/form-data"   files="true" class="pb-5">

    @csrf

    <input type="hidden" value="{{$post->id}}" name="id">
    <div class="form-group col-sm-6">
        <a hef=""><label for="image">Promeni sliku</label></a>
        <input type="file" name="image" class="form-control"/>
    </div>

    @method('PUT')
    <input type="submit" class="btn btn-primary input-lg" value="Sačuvaj izmene"/>
</form>
@endsection
