@extends('layouts.app')

@section('content')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link code',
            height : "480"
        });
    </script>
<div >
<div class="">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   <form method="POST" action="{{ route('store-post') }}" enctype="multipart/form-data"   class="pb-5">

@csrf
       <div class="form-group col-sm-3">
           <label for="image" >Izaberi sliku</label>
           <input type="file" name="image" />

       </div>
       <div class="form-group col-sm-3">
           <label for="logo">Logo</label>
           <select name="logo" id="logo"   class="form-control" >
               <option   value="2">bez loga</option>
               <option   value="1">sa logom</option>

           </select>
       </div>
      <!--
       <div class="form-group col-sm-3">
           <label for="logo">Instagram</label>
           <select name="logo" id="logo"   class="form-control" >
               <option   value="1">Podeli</option>
               <option   value="0">Ostavi</option>
           </select>
       </div>
       -->
       <div class="form-group col-sm-3">
           <label for="status">Izaberi status objave</label>
           <select name="status" id="status" class="form-control">
               <option value="1">Objavljeno</option>
               <option value="2">U pripremi</option>
           </select>
       </div>

                <div class="form-group col-sm-3">
                    <label for="category">Kategorija</label>
                    <select name="category" id="category"   class="form-control" data-role="tagsinput">
                        <option class="singltag" value="blog">Blog</option>
                        <option class="singltag" value="edukacije">Edukacije</option>
                        <option class="singltag" value="price">Price sa kauca</option>
                    </select>
                </div>
       <div class="form-group col-sm-9">

           <!-- Scripts for Multi Tag -->


           <label for="tags">Dodaj TAG oznake</label>




           <select class="tag-container form-control" type="text" multiple name="tags[]" id="select">
               @foreach($tags as $tag)
                   <option class="tag" onclick="addNewTag(' {{ $tag->id }} ')" value="{{ $tag->id }}">{{ $tag->name }}</option>
               @endforeach
           </select>
           <!--<input type="hidden" name="base_value" value="0" />
           <input id="arrayTag" class="tags" name="tags-array[]" type="text" />-->
       </div>
       <div class="form-group col-lg-8">

            <label for="Naslov">Naslov</label>
            <input name="title" type="title" class="form-control" id="title" placeholder="naslovna linija">

            <!-- SLUG -->
            <label for="Slug">URL Slogovi</label>
            <input name="slug" type="text" class="form-control" id="slug" placeholder="log-po-slog-za-SEO">
        </div>

                <div class="form-group col-lg-8">
                    <label for="body">Tekst:</label>

<textarea name="body" row="35">

</textarea>
                </div>

       <input type="submit" class="btn btn-primary" value="Podeli"/>
            </form>
        </div>
</div>
<p id="array"></p>
<script type="text/javascript">
    // const addTag = document.querySelector('.tag');
    //const tagsCont = document.querySelector('.tags');
    ///             const cont = document.querySelector('.tags input');

    function addNewTag (tagvalue) {
           const tagsarray = document.getElementById('arrayTag');
          tagsarray.value += tagvalue;
         //  alert( "Dodat je TAG " + tagvalue);
    }
</script>

@endsection
<style>

     .tag-container{
         min-height: 80px;
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

