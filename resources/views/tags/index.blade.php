@extends('layouts.app')


@section('content')

    <div class="container">

        <div class="col-sm-6">
            <div class="well bg-white" style="border-bottom-left-radius:15px; border-bottom-right-radius: 15px; border-top-left-radius: 0; border-top-right-radius: 0; background-color: #fff">
                <form action="{{ route('tags.store') }}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="tag_name">Tag</label>
                        <input name="name"  class="form-control" id="title" placeholder="tag naziv">
                    </div>

                    <input type="submit" class="btn btn-default btn-outline-dark input-lg" value="Kreiraj"/>

                </form>
            </div>
        </div>
        <div class="col-md-6 bg-white">
        <h3>Lista svih Tag oznaka:</h3>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Tag</th>
            </tr>
            </thead>
<div class="bg-white">
            <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <th class="bg-white">{{ $tag->id }}</th>
                    <td class="bg-white">{{ $tag->name }}</td>
                    <td><a class="btn btn-sm btn-primary" href="tags/{{$tag->id}}">Vidi sve tagovane objave</a>
                        <a class="btn btn-group-sm btn-default" href="tag-edit/{{$tag->id }}" >Izmeni TAG</a></td>

                </tr>
                @endforeach
            </tbody>
</div>
        </table>
    </div>

    </div>


    @endsection

