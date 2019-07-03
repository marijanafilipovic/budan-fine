@extends('layouts.app')
@section('content')

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code',
            height : "480"
        });
    </script>
    <div class="">

            <h1>Izmeni objavu</h1>

                @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                    <li>{{ $error }}</li>
            </div>
                    @endforeach

        <div class="col-sm-3">
            <p>Objavljen:</p>
            <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
            </dl>
            <dl class="dl-horizontal">
                <p>Tagovi</p>
                <p>   <td>@foreach($post->tags as $tag)
                        <span class="label label-info">{{ $tag->name }}</span>
                    @endforeach
                </td></p>
            </dl>
            <hr>


        </div>
        <div class="col-sm-3">
            <p class="btn btn-default" ><a href="{{ url('pickImg', $post->id) }}">Promeni sliku</a></p>
            <img  src="{{ URL::to('/') }}/images/{{$post->image}}" width="150px" height="auto" />
        </div>

        <div class="col-md-12">
            <div class="">
                <form method="POST" action="{{ route('post-update', $post->id) }}" enctypte="multipart/form-data" files="true" class="pb-5">

                    @csrf
                    <input type="hidden" value="{{$post->id}}" name="id">
                    <div class="form-group col-sm-6">
                        <label for="status">Izaberi status objave</label>
                        <select name="status" id="status" class="form-control">
                            <option value="2">Ne objavljeno</option>
                            <option value="1">Objavljeno</option>

                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="logo">Logo</label>
                        <select name="logo" id="logo"   class="form-control" >
                            <option   value="2">bez loga</option>
                            <option   value="1">sa logom</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="category">Kategorija</label>
                        <select name="category" id="category"  class="form-control" data-role="tagsinput">

                            <option class="singltag" style="font-weight:bold " value="{{ $post->category }}">{{ $post->category }}</option>
                            <option class="singltag" value="price">Price sa kauca</option>
                            <option class="singltag" value="blog">Blog</option>
                            <option class="singltag" value="edukacije">Edukacije</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">

                        <!-- Scripts for Multi Tag -->


                        <label for="tags">Dodaj TAG oznake</label>




                        <select class="tag-container form-control" style="min-height:100px;" type="text" multiple name="tags[]" id="select">
                            @foreach($tags as $tag)
                                <option class="tag" onclick="addNewTag(' {{ $tag->id }} ')" value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        <!--<input type="hidden" name="base_value" value="0" />
                        <input id="arrayTag" class="tags" name="tags[]" type="text" />-->
                    </div>
                    <div class="form-group col-sm-6">

                        <label for="Naslov">Naslov</label>
                        <input name="title" type="title" class="form-control" id="title" value="{{$post->title}}" placeholder="{{$post->title}}">
                        <!-- SLUG -->
                        <label for="Slug">URL Slogovi</label>
                        <input name="slug" type="text" class="form-control" id="slug" value="{{$post->slug}}" placeholder="{{$post->slug}}">
                    </div>

                {{--    <div class="form-group col-sm-6">
                        <a hef=""><label for="image">Promeni sliku</label></a>
                       <input type="file" name="image" class="form-control"/>
                    </div>--}}

                    <div class="form-group col-sm-8">
                        <label for="body">Tekst:</label>

                        <textarea name="body" row="24">
{!! $post->body!!}
</textarea>
                    </div>
                    @method('PUT')
                    <input type="submit" class="btn btn-primary input-lg" value="Sačuvaj izmene"/>

                </form>

            </div>




        </div>

@endsection
            <style>

                .tag-container{
                    height: 80px;
                    width: 450px;
                    border: 2px solid #cce3f6;
                    padding: 6px;
                    border-radius: 4px;
                    overflow:hidden;
                }
                .tag{
                    float:left;
                    padding:5px;
                    border: 1px solid #cce3f6;
                    border-radius: 3px;
                    margin: 5px;
                    background: #67b168;
                    color: #1d643b;
                    min-width: 80px;
                    display: inline-flex;
                }
                .tag i{
                    font-size: 16px;
                    margin-left: 5px;
                }
            </style>
