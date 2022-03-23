<?php

use Illuminate\Support\Facades\Route;
use App\Events\NewMessage;
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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', function() {
    return view('chat');
})->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middlewarte' => 'auth'], function() {
    Route::get('test-event', function() {
        broadcast(new NewMessage(auth()->user()));
        echo 'ok';
    }); 
});

// get user
Route::get('/getUser', function() {
	return Auth::user();
})->middleware('auth');

// get message
Route::get('/messages', function() {
    return App\Models\Message::with('user')->get();
})->middleware('auth');

// insert message
Route::post('/messages', function() {
   $user = Auth::user();

  $message = new App\Models\Message();
  $message->message = request()->get('message', '');
  $message->user_id = $user->id;
  $message->save();

  broadcast(new NewMessage($message, $user));

  return ['message' => $message->load('user')];
})->middleware('auth');