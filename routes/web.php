<?php
//-------------------------------Contect Form-------------------------
Route::get('pisite-mi', 'ContactController@create')->name('pisite-mi');

Route::post('slanje-poruke', 'ContactController@store')->name('slanje-poruke');

////////////////////////////////////////////////////////////////////////////////////
///
///
Route::get('galerija', 'PostController@galerija')->name('galerija');
Route::get('pripremi-objavu', 'PostController@prepremi')->name('pripremi-objavu');
Route::post('pripremljeno', 'PostController@pripremljeno')->name('pripremljeno');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//------------------------------------- POSTS -----------------------------------------------------------------------
///////////////////////////////--------------------------------------------------------------------------POSTS
Route::get('posts', 'PostController@index')->name('posts');

///////////////////////////////--------------------------------------------------------------------------POSTS CREATE
Route::get('create', 'PostController@create');

///////////////////////////////--------------------------------------------------------------------------POSTS STORE
Route::post('store-post', 'PostController@store')->name('store-post');
///////////////////////////////--------------------------------------------------------------------------POSTS SHOW
Route::get('post/{id}/{slug}', 'PostController@show')->name('post-show');
///////////////////////////////--------------------------------------------------------------------------POSTS EDIT
Route::get('post-edit/{id}', 'PostController@edit')->name('post-edit');
///////////////////////////////--------------------------------------------------------------------------POSTS UPDATE
Route::any('post-update/{id}', 'PostController@update')->name('post-update');


//-------------------------------------  EDUKACIJA -----------------------------------------------------------------------
///////////////////////////////--------------------------------------------------------------------------BLOG LIST
Route::get('edukacije', 'PostController@edukacija')->name('edukacije');
//-------------------------------------  BLOG -----------------------------------------------------------------------
///////////////////////////////--------------------------------------------------------------------------BLOG LIST
Route::get('blog', 'PostController@blog')->name('blog');
//Route::get('blog/{slug}', ['as'=>'posts.single', 'uses'=>'BlogsController@single'])->where('slug', '[\w\d\-\_]+');
///////////////////////////////--------------------------------------------------------------------------POSTS STORE
Route::any('post-publish/{id}', 'PostController@publish')->name('post-publish');

Route::get('post-delete', function(){
    return view('/', 'home');
});

//---------------------------------- TAGS ----------------------------------------------------------------------
////////////------------------------------------------------------------------------TAGS LIST
Route::resource('tags', 'TagController', ['except' => ['create']]);


////////////------------------------------------------------------------------------TAG EDIT
Route::get('tag-edit/{id}', 'TagController@edit')->name('tag-edit');
////////////------------------------------------------------------------------------TAGS UPDATE
Route::any('tag-update', 'TagController@update')->name('tag-update');

//--------------------------------- PAGES ---------------------------------------------------------------------
///////////////////////////////--------------------------------------------------------------------------NASLOVNA
Route::get('/', 'PagesController@index');
///////////////////////////////--------------------------------------------------------------------------KONTAKT
//Route::view('kontakt-budan-spa-mind', 'kontakt');
///////////////////////////////--------------------------------------------------------------------------MOJA PRICA
Route::get('moja-prica', 'PagesController@prica')->name('moja-prica');
///////////////////////////////--------------------------------------------------------------------------USLUGE
Route::get('usluge', 'PagesController@usluge')->name('usluge');
///////////////////////////////--------------------------------------------------------------------------COACHING
Route::get('coaching', 'PagesController@coaching')->name('coaching');
///////////////////////////////--------------------------------------------------------------------------TERAPIJA
Route::get('energetska-terapija', 'PagesController@energija')->name('energetska-terapija');
///////////////////////////////--------------------------------------------------------------------------LOG OUT
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

///////////////////////////////--------------------------------------------------------------------PUBLISH INST STORY
Route::post('publishInst', 'PagesController@publishInst');


//Route::get('post-destroy', 'PostCOntroller@destroy')->name('post-destroy');
//Route::get('blog', 'BlogsController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('/');

//------------------------------------- MAIL ----------------------------------------------------------------------
///////////////////////////////---------------------------------------------------------SEND MAIL
Route::post('send-message', 'PagesController@store')->name('send-message');
///////////////////////////////--------------------------------------------------------------------------KONTAKT
Route::get('kontakt', 'PagesController@contact')->name('kontakt');

///////////////////////////////--------------------------------------------------------------------------CLEAR CACHE
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('optimize');
    // return what you want
});

Route::get('pickImg/{id}', 'PostController@pickImg')->name('pickImg');

Route::any('changeImg', 'PostController@changeImg')->name('changeImg');
