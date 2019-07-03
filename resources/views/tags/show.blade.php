@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-8">

        <h5 style="border: 1px solid grey; padding:10px; color:darkslategrey">Ukupno tagovanih objava: {{ $tag->posts()->count() }} </h5>
        <p style="border: 1px solid grey; padding:10px;  color:darkslategrey">  Tag oznaka: {{ $tag->name }} </p>

    </div>

</div>
 <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Kategorija</th>
                    <th>Naslov</th>
                    <th>Tagovi</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tag->posts as $post)
                    <tr>
                        <th>{{ $post->category }}</th>
                        <td>{{ $post->title }}</td>
                        <td>@foreach($post->tags as $tag)
                        <span class="label label-default">{{ $tag->name }}</span>
                        @endforeach
                        </td>

                        <td><a href="{{ route('posts', $post->id, $post->slug  ) }}" class="btn btn-default btn-xs">Vidi</a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
