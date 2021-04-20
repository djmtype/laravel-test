<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;

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

Route::get('/', function () {
	return view('index');
});

Route::get('/posts', function () {
	return view('posts');
});

Route::get('posts/{post}', function ($slug) {

	if (!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
		return redirect('/posts');
	}


	// php 7.3
	$post = cache()->remember("posts.{$slug}", now()->addDay(), function () use ($path) {
		// var_dump('field_get_contents');
		return file_get_contents($path);
	});

	// php 7.4
	// $post = cache()->remember("posts.{$slug}", 5, fn() => file_get_contents($path));


	return view('post', ['post' => $post]);
})->where('post', '[A-z_\-]+');








// Route::get('/', [MenuController::class, 'index']);

Route::get('/about', [MenuController::class, 'about']);








// Route::get('/users', function () {
//     return response()->json([
//         'name' => 'Scott',
//         'color' => 'green',
//         'specialty' => 'typing'
//     ]);
// });
