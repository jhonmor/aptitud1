<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\preguntas;

use Illuminate\Http\Request;

Route::get('/', function(){


  $preguntass = preguntas::orderBy('preguntas','asc')->get();
 
    return view('preguntass', [
        'preguntass' => $preguntass
    ]);
}
);


Route::get('consulta', 'ConsultaController@index');


Route::resource('questions','QuestionsController',['only' => ['show','edit','create','store','update','destroy']]);

Route::get('/questions','QuestionsController@index');



Route::resource('/resultado','ResultadoController');

Route::post('enviarresultado', 'ResultadoController@enviarresultado');


Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/users/index', 'UsersController@index');//->name('users.index');

Route::get('/preguntas', Function(){
	
    return view('preguntas');
});


Route::get('/pregunta', Function(Request $request){

  
    $preg = new preguntas;
    $preg->id_pregunta = $request->id_pregunta;
	$preg->pregunta = $request->pregunta;
	$preg->tipo = $request->tipo;
	$preg->int_apt = $request->int_apt;

    $preg->save();
 
    return redirect('/preguntas');


});

Route::delete('/pregunta/{id}', Function($id){


});




