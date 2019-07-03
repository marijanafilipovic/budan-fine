<?php

namespace App\Http\Controllers;
use App\Tag;
use App\Post;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Storage;
use Instagram;
use File;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Posts::all();
      //  $posts = Posts::paginate(2);
            $posts = Post::orderBy('id', 'desc')->paginate(6);
       // $posts = Posts::where('status', 2)->paginate(1);
       // $posts = Posts::where('category', 'blog')->paginate(1);
        return view('posts.index', [
            'posts' => $posts,
        ]);
        //   return view('posts.index', compact('datablog'))
        //       ->with('i', (request()->input('page, 1')-1)*5);

    }
         //   return view('posts.index', compact('datablog'))
         //       ->with('i', (request()->input('page, 1')-1)*5);

    public function blog()
    {
       // $posts = Posts::where('category', 'blog')->paginate(1);
        $posts = Post::where([['category', 'blog'],
        ['status', 1]])->paginate(9);

        return view('posts.blog', [
        'posts' => $posts,
    ]);
    }
    public function edukacija()
    {
        // $posts = Posts::where('category', 'blog')->paginate(1);
        $posts = Post::where([['category', 'edukacija'],
            ['status', 1]])->paginate(9);

        return view('posts.blog', [
            'posts' => $posts,
        ]);
    }
    public function price()
    {
        $posts = Post::where([['category', 'price'],
            ['status', 1]])->paginate(1);

        return view('posts.price', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        $tags = Tag::all();
     return view('posts.create')->withTags($tags);
    }

    public function store(Request $request)
    {

        //dd($request);
        $request->validate([
        'title' => 'required',
        'slug' => 'required',
        'body' => 'required',
        'category' => 'required',
        'status' => 'required',
       'image' => 'required|image|max:2048',

        ]);
  //  $new_name = storage_path('public/'). $request->slug . 'jpg';
//dd($request->file('image'));


      $image = $request->file('image');
//$img = Image::make($image->getRealPath());
//$img->insert(public_path('images/budan.png'), 'bottom-right', 10, 10);
  //      Image::make(Input::file($img))->resize(300, 200)->save(public_path('images'));


        $new_name = $request->slug.'.' . $image->getClientOriginalExtension();
        $location = ('images/');

        $img = Image::make($image->getRealPath());
$logo = $request->logo;
        if($logo == 1){
        $watermark =Image::make('/images/clienti/potpis-logo-2.png');
        $img->insert($watermark, 'bottom-right', 100, 50);
}else{
$logo = 0;
        // $image->move($location, $new_name);
}
        $img->save($location.'/'.$new_name);
$name = $request->slug . "." . "jpg";
        $post = new Post;

         $post->title = $request->title;
        $post->image = $name;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->category = $request->category;
        $post->status = $request->status;
        $post->save();
        $post->tags()->sync($request->tags, false);



        //return redirect()->route('post', $post->id, $post->slug)->with('success', 'Blog je objavljen uspesno.');
        return redirect('posts')->with('success', 'Blog je objavljen uspesno.');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'category' => 'required',
            'status' => 'required',
            'image' => '',
        ]);

        $id = $request->input('id');
         $post = Post::find($id);
        //dd($request);
         $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->category = $request->category;
        $post->status = $request->status;

            $new_name = $request->slug . rand(). '.jpg';
            $location = ('images/');

            $img = Image::make('images/'. $post->image);

            $logo = $request->logo;

            if($logo == 1){
                $watermark =Image::make('images/clienti/potpis-logo-2.png');
                $img->insert($watermark, 'bottom-right', 100, 50);
            }else{
                $logo = 0;
                // $image->move($location, $new_name);
            }
            $img->save($location.'/'.$new_name);
            //$name = $request->slug . "." . "jpg";
            $post->image = $new_name;
    $post->push();
        $post->tags()->sync($request->tags, false);



        return redirect()->route('posts');
    }

    public function pickImg( $id){
$post = Post::find($id);
        return view('img.pick')->withPost($post);
    }
public function changeImg(Request $request){
    $post = Post::find($request->id);



        $filename =  rand().'.jpg';
        $location = 'images/';
    $img = $request->file('image');




        $img->move($location, $filename);
        $post->image = $filename;
$post->image = $filename;
 $post->push();

 return redirect()->route('post-edit', $post->id);
}
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.single')->with('post', $post);
    }

    public function edit($id){
        $post = Post::find($id);
        $tags = Tag::all();
        return view('posts.edit')->withPost($post)->withTags($tags);

    }
    public function galerija(){
        //$slike =[];
        $files = File::files('images');
foreach($files as $slika) {
$slika->path;
   dd( $slika->path);
  // dd($slika->relativePathname);

}

      //  dd($files);

        return view('posts.galerija')->withFiles('files',$files);
    }
    public function prepremi(){

        return view('posts.pripremi-objavu');
    }
    public function pripremljeno(Request $request){
        // create Image from file
       $cover = $request->cover;

       // $img = Image::make('images/clienti/cover-preperd.jpg');
        $img = Image::make($cover);
//dd($request);
// write text
     //   $img->text($request->text);

// write text at position
      //$img->text($request->text, 0, 0);
$text= $request->text;
// use callback to define details
        $string = wordwrap($text,50,"br");
//create array of lines
        $strings = explode("br",$string);
        $i=220; //top position of string
//for each line added
        $fontFirstLine = $request->fontFirstLine;
        foreach($strings as $string) {
            $img->text($string, 300, $i, function ($font) use($fontFirstLine){
                //$img->text($text, 150, 150, function($font) {
                $font->file('fonts/Roboto-Light.ttf');
                $font->size($fontFirstLine);
                $font->color('#04453f');
                $font->align('center');
                $font->valign('middle');
                // $font->angle(95);
            });
            $i = $i + $fontFirstLine;
        }
        $fontAutor = $request->fontAutor;
        $autor = $request->autor;
        $img->text($autor, 300, 480, function($font) use($fontAutor){
            $font->file('fonts/Roboto-Light.ttf');
            $font->size($fontAutor);
            $font->color('#cda349');
            $font->align('center');
            $font->valign('bottom');
        });
//-----------Save as image ----------------------
/*        $location = 'images/';
        $new_name= 'budan' . rand() . '.jpg';
        $img->save($location.'/'.$new_name); */
//--------------return preview--------------------
        return $img->response('jpg');
    }
    public function publish($id){
        $post = Post::find($id);
        $post->instagram = 'instagram';
        $post->image;
        $slug = $post->slug;
        $image = public_path('images/'. $post->image);

        /////////// UPLOAD IMAGE TO INSTAGRAM STORY /////////////////////
        /// //////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////
        //        $img->uploadimage();
             set_time_limit(0);
            date_default_timezone_set('UTC');

            \InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;
            $username = 'filipfilipov5';
            $password = 'zvezdazvezda';

            $photoFilename = public_path('images/' . $post->image);
         //   dd($photoFilename);
            $debug = true;
            $truncatedDebug = false;
            $ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);
// HTTP proxy without authentication.
      //   $ig->setProxy('93.188.2.54:80');
          $ig->setProxy('93.188.1.110:21');
 //       $ig->setProxy('socks5://172.22.223.93:80');
        // HTTP proxy needing authentication.
   //     $ig->setProxy('http://sistim.rs:Smiavcirf8@93.188.2.54');
/////// MEDIA ////////
            //$photoFilename = $img;
//////////////////////
           // $ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);


            try {
                $ig->login($username, $password);
            } catch (\Exception $e) {
                echo 'Something went wrong: ' . $e->getMessage() . "\n";
                exit(0);
            }

// Now create the metadata array:
            $metadata = [
                // (optional) Captions can always be used, like this:
                'caption' => '#BudanMindSpaByMarijaDajiĆ',
                // (optional) To add a hashtag, do this:
                'hashtags' => [
                    // Note that you can add more than one hashtag in this array.
                    [
                        'tag_name' => 'BudanMindSpa', // Hashtag WITHOUT the '#'! NOTE: This hashtag MUST appear in the caption.
                        'x' => 0.5, // Range: 0.0 - 1.0. Note that x = 0.5 and y = 0.5 is center of screen.
                        'y' => 0.5, // Also note that X/Y is setting the position of the CENTER of the clickable area.
                        'width' => 0.24305555, // Clickable area size, as percentage of image size: 0.0 - 1.0
                        'height' => 0.07347973, // ...
                        'rotation' => 0.0,
                        'is_sticker' => false, // Don't change this value.
                        'use_custom_title' => false, // Don't change this value.
                    ],
                    // ...
                ],
                // (optional) To add a location, do BOTH of these:
                 // (optional) You can use story links ONLY if you have a business account with >= 10k followers.
                 // 'link' => 'http://budan.rs',
            ];
            try {
                // This example will upload the image via our automatic photo processing
                // class. It will ensure that the story file matches the ~9:16 (portrait)
                // aspect ratio needed by Instagram stories. You have nothing to worry
                // about, since the class uses temporary files if the input needs
                // processing, and it never overwrites your original file.
                //
                // Also note that it has lots of options, so read its class documentation!
                $photo = new \InstagramAPI\Media\Photo\InstagramPhoto($photoFilename, ['targetFeed' => \InstagramAPI\Constants::FEED_STORY]);
                // $ig->story->uploadPhoto($photo->getFile(), $metadata);
                // NOTE: Providing metadata for story uploads is OPTIONAL. If you just want
                // to upload it without any tags/location/caption, simply do the following:
   //  dd($photo);
                $ig->story->uploadPhoto($photo->getFile());
                $photo = new \InstagramAPI\Media\Photo\InstagramPhoto($photoFilename);
                $captionText = $post->title;
                $ig->timeline->uploadPhoto($photo->getFile(), ['caption' => $captionText]);
            } catch (\Exception $e) {
                echo 'Something went wrong: ' . $e->getMessage() . "\n";
            }
            //////////////// END INSTAGRAM UPLOAD //////////////////////////////
        /// ////////////////////////////////////////////////////////////////
        /// //////////////////////////////////////////////////////////////
//$post->push();
        return redirect('posts')->with('success', 'Story je uspesno objavljen na Instagram.');


    }

}
