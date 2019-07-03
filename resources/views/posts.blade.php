
@extends('layouts.app')

@section('main')

<div>
    <p class="text-lg-center">Sve objave</p>
<p>Sortiranje po:<br/> ID</p><p> vremeski najsvezije</p>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
     <table class="table table-bordered table-striped">
         <tr>
             <th>Slika</th>
             <th>Naslov</th>
             <th>Tekst</th>
             <th>Kategorije</th>
         </tr>

             @foreach($data as $row)

             <tr id="{{ $row->category }}">
         <td><img src="{{ URL::to('/') }}/images/{{$row->image}}" class="img-thumbnail post-list-img" width="100px"/></td>
         <th>{{ $row->title }}</th>
         <th>{{ $row->body }}</th>
         <th>{{ $row->category }}</th>
             </tr>

@endforeach

     </table>
    {!! $data->links() !!}
</div>


@endsection
