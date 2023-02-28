<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/apropos', function () {
//     return view('apropos');
// });

// Route::get('/etudiant', function(){

// $nomEtudiant = [
//     'nom'=>'tawey', 'prenom'=>'georges'
// ];

//     return view('etudiant', compact("nomEtudiant"));
// }
// );
// Route::get('/contact', function(){

//     return 'bonjour , vous etes sur la page contact';
// }

// );



// Route::redirect('/test', '/b', 301);

// Route::any('/login/{username}', function ($username) {
//     return "connexion au compte utilisateur.$username";
// })->where('username', '[a-z]+');

Route::get('/', [EtudiantController::class, 'welcome'])->name('welcome');


Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant');
Route::get('/createEtudiant', [EtudiantController::class, 'create'])->name('etudiant.create');
