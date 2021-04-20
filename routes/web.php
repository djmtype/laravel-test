<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\MenuController;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/about', function () {
	return view('about');
});

Route::get('/posts', function () {

	
	// $posts = array_map(function ($file) {
	// 	$document = YamlFrontMatter::parseFile($file);
	// 		return new Post(
	// 			$document->title,
	// 			$document->excerpt,
	// 			$document->date,
	// 			$document->body(),
	// 			$document->slug,
	// 		);
	// }, $files);
 
		return view('posts', [
		 'posts' => Post::all()

	]);

});

Route::get('posts/{post}', function ($slug) {

	return view('post', [
		'post' => Post::findOrFail($slug)
	]);

});


// Route::get('/', [MenuController::class, 'index']);

// Route::get('/about', [MenuController::class, 'about']);








// Route::get('/users', function () {
//     return response()->json([
//         'name' => 'Scott',
//         'color' => 'green',
//         'specialty' => 'typing'
//     ]);
// });
