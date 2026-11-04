<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ModalidadController;
use App\Http\Controllers\TiposEventoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LlamadoSeleccionController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PasantiaController;
use App\Http\Controllers\ParametroController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\ProgramasInstitucionalesController;

use App\Models\Evento;
use App\Http\Controllers\Slim\PasantiaSLIMController;
use App\Http\Controllers\Slim\ProgramasInstitucionalesSLIMController;
use App\Http\Controllers\Slim\PublicacionSLIMController;
use App\Http\Controllers\Slim\DocenteSLIMController;
use App\Http\Controllers\Slim\LlamadoSeleccionSLIMController;
use App\Http\Controllers\Slim\EventoSLIMController;
use App\Http\Controllers\Slim\HomeSLIMController;
use App\Http\Controllers\Slim\NoticiasSLIMController;

use App\Models\Parametro;
use App\Models\ProgramasInstitucionales;
use App\Models\Eventos;
use App\Models\Noticia;
use App\Models\TiposEvento;

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

Route::middleware(['auth:sanctum', 'verified'])->get('admin/dashboard', function () {
			return view('dashboard');
		})->name('dashboard');

Route::middleware('auth')->get('user/profile', function (Request $request) {
    return view('profile.show', ['request' => $request, 'user' => $request->user()]);
})->name('profile.show');

Route::prefix('admin')->name('admin.')->group(function () {
	Route::get('', function () {
	    return view('auth.login');
	});

	Route::get('/login', function () {
	    return view('auth.login');
	})->name('login');

	Route::post('/logout', function (Request $request) {
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect(route('admin.login'));
	})->name('logout');
});

// Todo el panel de administración requiere sesión iniciada
Route::prefix('admin')->middleware('auth')->group(function () {
	Route::name('admin.')->group(function () {
		//PROFILE MANAGEMENT - Asociado a user
		//Actualizar datos personales
		Route::PUT('updateDatosPersonales',[UserController::class,'updateDatosPersonales'])->name('updateDatosPersonales');
		//Actualizar contraseña
		Route::PUT('updatePassword',[UserController::class,'updatePassword'])->name('updatePassword');
		//Resetear contraseña
		Route::get('restorePassword/{user}',[UserController::class,'restorePassword'])->name('restorePassword');
		//FIN PROFILE MANAGEMENT

		
		Route::post('tipoEventoStorePopup',[TiposEventoController::class,'storePopup'])->name('tipoEventoStorePopup');
		Route::post('modalidadStorePopup',[ModalidadController::class,'storePopup'])->name('modalidadStorePopup');

		Route::resource('llamadosSeleccion', LlamadoSeleccionController::class)->parameters([
		    'llamadosSeleccion' => 'llamadoSeleccion'
		]);
		Route::get('llamadosSeleccion/{llamadoSeleccion}/eliminarActa', [LlamadoSeleccionController::class, 'eliminarActa'])->name('llamadosSeleccion.eliminarActa');

		Route::resource('publicaciones', PublicacionController::class)->parameters([
		    'publicaciones' => 'publicacion'
		]);
		Route::resource('docentes', DocenteController::class);

		Route::patch('llamadosSeleccion/{llamadoSeleccion}/cambiarEstado', [LlamadoSeleccionController::class, 'cambiarEstado'])->name('llamadosSeleccion.cambiarEstado');

		Route::patch('programas/{programa}/cambiarEstado', [ProgramasInstitucionalesController::class, 'cambiarEstado'])->name('programas.cambiarEstado');

		Route::resource('users', UserController::class);
		Route::resource('pasantias', PasantiaController::class);
		Route::resource('eventos', EventoController::class);
		Route::resource('tiposEvento', TiposEventoController::class);
		Route::resource('modalidades', ModalidadController::class)->parameters([
		    'modalidades' => 'modalidades'
		]);
		Route::resource('programas', ProgramasInstitucionalesController::class);
		Route::resource('roles', RoleController::class);
		Route::resource('permissions', PermissionController::class);
		Route::resource('parametros', ParametroController::class);
		Route::resource('noticias', NoticiaController::class);

		//Cambiar estado
		Route::patch('eventos/{evento}/cambiarEstado', [EventoController::class, 'cambiarEstado'])->name('eventos.cambiarEstado');

		Route::patch('pasantias/{pasantia}/cambiarEstado', [PasantiaController::class, 'cambiarEstado'])->name('pasantias.cambiarEstado');

		Route::patch('llamadosSeleccion/{llamadoSeleccion}/cambiarEstado', [LlamadoSeleccionController::class, 'cambiarEstado'])->name('llamadosSeleccion.cambiarEstado');

		Route::patch('publicaciones/{publicacion}/cambiarEstado', [PublicacionController::class, 'cambiarEstado'])->name('publicaciones.cambiarEstado');

		Route::patch('noticias/{noticia}/cambiarEstado', [NoticiaController::class, 'cambiarEstado'])->name('noticias.cambiarEstado');
	});
});

Route::get('/', function () {
	$programas_institucionales = ProgramasInstitucionales::where('tipo','=','Programa institucional')->where('active',true)->orderby('orden')->orderby('id')->get();
    $catedras = ProgramasInstitucionales::where('tipo','=','Cátedra libre')->where('active',true)->orderby('orden')->orderby('id')->get();
    $BaseURL = '/files/';
    $today = now();
    $today->setTime(0, 0, 0);
    $eventos = Evento::where('fecha_inicio','>=',$today)->orderby('fecha_inicio','asc')->take(3)->get();
    $cantNoticias = Noticia::orderby('created_at','desc')->count();

    if($cantNoticias === 0){
    	$ultimaNoticia = null;
    }else{
    	$ultimaNoticia = Noticia::where('active','=',true)->orderby('created_at','desc')->first();
    }
    //->FirstOrFail()->get();
    return view('app.slim.index', [
        'catedras' => $catedras, 
        'programas_institucionales' => $programas_institucionales,
        'BaseURL' => $BaseURL,
        'eventos' => $eventos,
        'ultimaNoticia' => $ultimaNoticia
    ]);
})->name('index');

Route::get('/institutos',[HomeSLIMController::class,'getInstitutes'])->name('institutos');
Route::get('/sobrenosotros',[HomeSLIMController::class,'getAboutUs'])->name('acercaDe');

//Departamentos
Route::get('/departamentos/ciencias_educacion',[HomeSLIMController::class,'getCiencias_educacion'])->name('Ciencias_Educacion');
Route::get('/departamentos/educacion_inicial',[HomeSLIMController::class,'getEducacion_inicial'])->name('Educacion_Inicial');
Route::get('/departamentos/educacion_primaria',[HomeSLIMController::class,'getEducacion_primaria'])->name('Educacion_Primaria');



//programas Institucionales / Catedras libres
Route::get('/programas-institucionales/{item}', [ProgramasInstitucionalesSLIMController::class,'show'])->name('programas.show');
Route::get('/catedras-libres/{item}', [ProgramasInstitucionalesSLIMController::class,'show'])->name('catedras.show');


//Estudiantes
//pasantias
Route::get('/pasantias',[PasantiaSLIMController::class,'index'])->name('pasantias.index');
Route::get('/pasantias/{pasantia}',[PasantiaSLIMController::class,'show'])->name('pasantias.show');


//Comunidad
//Actividades Académicas
Route::get('/actividades_academicas/{actividad}', [EventoSLIMController::class,'show'])->name('eventos.show');

Route::get('/seminarios', [EventoSLIMController::class, 'seminarios'])->name('eventos.seminarios');
Route::get('/actividades_academicas/calendar/json', [EventoSLIMController::class,'eventosCalendar'])->name('eventos.calendar');
Route::get('/actividades_academicas', [EventoSLIMController::class,'index'])->name('eventos.index');


//Docentes
//Llamados a Seleccion
Route::get('/llamadosSeleccion',[LlamadoSeleccionSLIMController::class,'index'])->name('llamadosSeleccion.index');
Route::get('/llamadosSeleccion/{llamadoSeleccion}',[LlamadoSeleccionSLIMController::class,'show'])->name('llamadosSeleccion.show');

//Planta docente
Route::get('/docentes',[DocenteSLIMController::class,'index'])->name('docentes.index');
Route::get('/docentes/{docente}',[DocenteSLIMController::class,'show'])->name('docentes.show');
Route::post('/docentes/filtrar', [DocenteSLIMController::class,'filtrar'])->name('docentes.filtrar');


//Publicaciones
Route::get('/publicaciones',[PublicacionSLIMController::class,'index'])->name('publicaciones.index');
Route::get('/publicaciones/{publicacion}',[PublicacionSLIMController::class,'show'])->name('publicaciones.show');
Route::post('/publicaciones/DatosPublicacion',[PublicacionSLIMController::class,'datosPublicacion'])->name('publicacion.datos');

//noticias
Route::get('/noticias',[NoticiasSLIMController::class,'index'])->name('noticias.index');
Route::get('/noticias/{noticia}', [NoticiasSLIMController::class,'show'])->name('noticias.show');


require __DIR__.'/contenido_estatico.php';
require __DIR__.'/contenido_estatico_extendido.php';
