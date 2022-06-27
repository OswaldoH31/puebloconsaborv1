<?php

use App\Http\Controllers\Indexcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Proveedorcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\AvisoPrivacidadController;
use App\Http\Controllers\BebidaController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\HuejutlaController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PieController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RefrescoController;
use App\Http\Controllers\SliderHuejutlaController;
use App\Http\Controllers\SliderPrincipalController;
use App\Http\Controllers\SolicitudesController;
use App\Http\Controllers\UsuariosController;
use App\Models\Local;
use App\Models\SliderPrincipal;
use Illuminate\Support\Facades\Auth;


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

Route::get('/',[Indexcontroller::class,'index']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/Usuario', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('2fa');


Route::get('2fa', [App\Http\Controllers\UserCodeController::class, 'index'])->name('2fa.index');
Route::post('2fa', [App\Http\Controllers\UserCodeController::class, 'store'])->name('2fa.post');
Route::get('2fa/reset', [App\Http\Controllers\UserCodeController::class, 'resend'])->name('2fa.resend');



Route::get('2fa', [App\Http\Controllers\UserCodeController::class, 'indexAdmin'])->name('2fa.indexAdmin');
Route::post('2fa', [App\Http\Controllers\UserCodeController::class, 'storeAdmin'])->name('2fa.postAdmin');


Route::get('2fa', [App\Http\Controllers\UserCodeController::class, 'indexUsuario'])->name('2fa.indexUsuario');
Route::post('2fa', [App\Http\Controllers\UserCodeController::class, 'storeUsuario'])->name('2fa.postUsuario');



Route::get('/Preguntasecreta', [App\Http\Controllers\PreguntaController::class, 'index']);
Route::post('preguntasecreta', [PreguntaController::class,'store'])->name('pregunta.store');

Route::resource('/Proveedor', Proveedorcontroller::class);

Route::resource('/Admin', Admincontroller::class);

Route::resource('/Usuario', UsuariosController::class);

Route::get('/buscar',[App\Http\Controllers\MenuController::class,'search'])->name('buscar.show');

Route::get('/perfil', [App\Http\Controllers\PerfilController::class,'edit'])->name('profile.edit');
Route::put('/profile', [App\Http\Controllers\PerfilController::class, 'update'])->name('profile.update');



/*Se agrego 19-06*/
Route::get('/verificar', [App\Http\Controllers\PerfilController::class,'login'])->name('verificar');
Route::get('/verificar', [App\Http\Controllers\PerfilController::class,'verificarAdmin'])->name('verificar.verificarAdmin');
Route::get('/verificar', [App\Http\Controllers\PerfilController::class,'verificarUsuario'])->name('verificarUsuario');





Route::get('/profileAdmin', [App\Http\Controllers\PerfilController::class,'editAdmin'])->name('profile.editAdmin');
Route::put('/profileAdmin', [App\Http\Controllers\PerfilController::class, 'updateAdmin'])->name('profile.updateAdmin');


Route::get('/HuejutlaA',[HuejutlaController::class,'Huejutla'])->name('Huejutla.Huejutla');
Route::get('HuejutlaA/{HuejutlaA}/edit', [HuejutlaController::class,'edit'])->name('Huejutla.edit');
Route::patch('HuejutlaA/{HuejutlaA}', [HuejutlaController::class,'update']);


Route::get('/Listadolocales',[LocalController::class,'show'])->name('Locales.show');
Route::get('/Listadousuarios',[UsuariosController::class,'index'])->name('Usuarios.index');


Route::get('/profileProveedor', [App\Http\Controllers\PerfilController::class,'editProveedor'])->name('profile.editProveedor');
Route::put('/profileProveedor', [App\Http\Controllers\PerfilController::class, 'updateProveedor'])->name('profile.updateProveedor');


Route::get('Solicitudes', [SolicitudesController::class, 'index'])->name('Solicitudes.index');
Route::get('Solicitudes/UpdateStatusSoli', [SolicitudesController::class, 'UpdateStatusSoli'])->name('UpdateStatusSoli');


Route::get('/Huejutla',[HuejutlaController::class,'index'])->name('Huejutla.index');

Route::get('agregarlocal', [LocalController::class,'index'])->name('local.index');
Route::post('agregarlocal', [LocalController::class,'store'])->name('local.store');
Route::get('Locales', [LocalController::class,'locales'])->name('local.locales');

Route::get('Locales/{local}/edit', [LocalController::class,'edit']);
Route::post('Locales/{local}', [LocalController::class,'update'])->name('local.update');
Route::delete('Locales/{local}', [LocalController::class,'destroy'])->name('local.destroy');

//Route::resource('',LocalController::class);


Route::get('/Menu/{menu}', [MenuController::class, 'show'])->name('Menu.show');
Route::get('/Menu/{menu}/agregarmenu', [MenuController::class,'index'])->name('Menu.index');
Route::get('/Menu/{menu}/Listabebidas', [MenuController::class,'mostrar']);
Route::get('agregarmenu/{menu}', [MenuController::class,'index']);



Route::get('Listaplatillos/{platillo}', [MenuController::class,'mostrarplatillo'])->name('platillo.mostrarplatillo');
Route::post('Listaplatillos/{platillo}', [PlatilloController::class,'update'])->name('platillo.update');
Route::delete('Listaplatillos/{platillo}', [PlatilloController::class,'destroy'])->name('platillo.destroy');
Route::get('Listaplatillos/{platillo}/edit', [PlatilloController::class,'edit'])->name('platillo.edit');


Route::get('Listabebidas/{platillo}', [MenuController::class,'mostrarbebida'])->name('platillo.mostrarbebida');

Route::get('Listabebidas/{bebida}', [BebidaController::class,'show']);
Route::get('Listabebidas/{bebida}/edit', [BebidaController::class,'edit'])->name('bebida.edit');
Route::post('Listabebidas/{bebida}', [BebidaController::class,'update'])->name('bebida.update');
Route::delete('Listabebidas/{bebida}', [BebidaController::class,'destroy'])->name('bebida.destroy');




Route::post('platillo', [PlatilloController::class, 'store'])->name('platillo.store');
Route::post('bebida', [BebidaController::class,'store'])->name('bebida.store');
Route::post('menu', [RefrescoController::class,'store'])->name('refresco.store');



Route::resource('pie', PieController::class);

Route::resource('Directorio', DirectorioController::class);

Route::get('/buscarpor', [DirectorioController::class, 'buscar'])->name('Directorio.buscar');

Route::get('Directorio/Listabebidas/{Directorio}', [DirectorioController::class,'listabebidas']);
Route::get('Directorio/Listaplatillos/{Directorio}', [DirectorioController::class,'listaplatillos']);

//Route::resource('Comentario', ComentarioController::class);
Route::post('Comentario', [ComentarioController::class, 'store'])->name('Comentario.store');

Route::get('Opinion/{Opinion}', [OpinionController::class,'index'])->name('Opinion.index');
Route::post('Opinion', [OpinionController::class,'store'])->name('Opinion.store');

Route::resource('AvisoPrivacidad', AvisoPrivacidadController::class);

Route::get('Contactanos',[ContactanosController::class,'index'])->name('contactanos.index');
Route::post('Contactanos',[ContactanosController::class,'store'])->name('contactanos.store');

Route::resource('slider',SliderPrincipalController::class);
Route::resource('sliderHuejutla',SliderHuejutlaController::class);



Route::get('/recuperar', [App\Http\Controllers\RecuperarController::class, 'index'])->name('recuperarcontrasenia');

Route::post('/resetear', [App\Http\Controllers\RecuperarController::class, 'buscar'])->name('recuperar.buscar');
Route::post('/reseteocorrecto', [App\Http\Controllers\RecuperarController::class,'update'])->name('recuperar.update');
Route::get('/ContraseniaModificada', [App\Http\Controllers\RecuperarController::class, 'mostrar']);





