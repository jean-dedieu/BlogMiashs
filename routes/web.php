<?php
use App\Mail\ContactsMessageCreated;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


/*Route::get('/', 'HomeController@index');*/

Route::get('/',[
    'as'=> 'root_path',
    'uses' => 'HomeController@index'
])->middleware('auth');

//Route::get('articles', 'ArticlesController@article');

Route::get('/articles',[
    'as'=> 'articles_path',
    'uses' => 'ArticlesController@article'
])->middleware('auth');



Route::get('/articles/{post_name}', 'PostsController@show')->middleware('auth');
/*Route::post('contact', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);
Route::get('contact', 'EmailController@getForm');*/


Route::get('/about',[
    'as'=> 'about_path',
    'uses' => 'PagesController@about'
]);

Route::get('/contact',[
    'as'=> 'contact_path',
    //pour respecter les conventions REST
    'uses' => 'ContactsController@create'
])->middleware('auth');

Route::post('/contact',[
    'as'=> 'contact_path',

    //por respecter les conventions REST

    //pour respecter les convention REST

    'uses' => 'ContactsController@store'
])->middleware('auth');

//test email
Route::get('/test-email',function(){
//on retourne notre mailable pour afficher le message
return new ContactsMessageCreated;
//on retourne notre mailable pour afficher le message
return new ContactsMessageCreated('Jean de Dieu TWAGIRUMUHOZA','jeandedieu.emploi@gmail.com','Merci');
});




Route::get('/welcomeslide', function () {
    return view('welcomeslide');
});


Route::get('/slideer', function () {
    return view('slideee.demos.ind');
})->middleware('auth');



Route::get('/login', function () {
    return view('auth.login');
});

/*Route::get('/home', function () {
    return view('home');
})*/

Auth::routes();


<<<<<<< HEAD

/*Route::get('/home', 'HomeController@index');
->name('home');
Route::get('/home', 'HomeController@index')->name('home');*/



=======
>>>>>>> roles

/*Route::get('/home', 'HomeController@index');
->name('home');
Route::get('/home', 'HomeController@index')->name('home');*/




Route::post('{post}/comments/', 'CommentsController@store');

//routes pour socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//route pour acceder à la liste des utilisateurs


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('users', 'UsersController');

});
