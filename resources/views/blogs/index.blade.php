@extends('layouts.admin-nav')
@foreach($posts as $row)

    <tr id="{{ $row->category }}">
        <td><img src="{{ URL::to('/') }}/images/{{$row->image}}" class="img-thumbnail post-list-img" width="100px"/></td>
        <th>{{ $row->title }}</th>
        <th>{{ $row->body }}</th>
        <th>{{ $row->category }}</th>
    </tr>

@endforeach
