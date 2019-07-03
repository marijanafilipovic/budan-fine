
@extends('layouts.app')

@section('main')

<div style="padding-left: 10%; padding-right: 10%;">
    <p class="text-lg-center">Svi objavljeni i ne objavljeni postovi</p>
    @auth
        <div align="left">
                    <p class="btn btn-default"><a href="{{ url('logout') }}"> Odjavi se </a></p>
                    <p  class="btn bg-white active"><a href="{{ url('posts') }}">Sve objave </a></p>
                    <p  class="btn bg-white active "><a href="{{ url('tags') }}">Tagovi </a></p>
                    <p  class="btn btn-default"><a href="{{ url('create') }}">Nova objava</a></p>
                    <p  class="btn btn-default"><a href="{{ url('pripremi-objavu') }}">Napravi sliku</a></p>

        </div>
    @endauth

    <div align="left">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="col-lg-10">
     <table class="table table-bordered table-striped">
         <tr>
             <th>Status</th>
             <th>Slika</th>
             <th>Kategorija</th>
             <th>Naslov</th>

         </tr>
<tr>
    {{ $posts->links() }}
</tr>
             @foreach($posts as $row)

             <tr id="{{ $row->status }}" class="{{ $row->category }}">

                 <th>@if ($row->status === 1)
                         Objavljen
                     @else
                         Neobjavljen
                     @endif</th>
         <th><img src="{{ URL::to('/') }}/images/{{$row->image}}" class="img-thumbnail post-list-img" width="100px"/></th>
                 <th>{{ $row->category }}</th>
                 <th>{{ $row->title }}</th>

<th><a class="btn btn-xs btn-primary" href="post/{{$row->id}}/{{ $row->slug }}">Vidi</a></th>
                <th><a class="btn btn-xs btn-primary" href="{{ route('post-edit', $row->id) }}">Izmeni</a></th>
                 {{--       <th>
               {{--      @if($row->instagram === 'instagram')
                              <a class="btn btn-xs btn-default" >Story je objavljen na Instagramu</a>
                          @else

                              <a class="btn btn-xs btn-primary"href="post-publish/{{$row->id}}">Objavi Instagram Story</a>

                          @endif
                 </th>--}}
             </tr>

@endforeach

     </table>

</div>
</div>
<style>
    {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('https://gph.is/17eSQQn') 50% 50% no-repeat rgb(249,249,249);
        opacity: .8;
    }
</style>

@endsection
