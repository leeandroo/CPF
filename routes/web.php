<?php

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
//RUTAS interfaz (solo redireccionamineto de vistas)
Route::get('/', 'InterfazController@get_landing_page'); // redireccionar a la pagina de inicio
Route::get('/login', 'InterfazController@get_login_page'); // redireccionar a la pagina de inicio de sesion
Route::get('/register', 'InterfazController@get_register_page'); // redireccionar a la pagina de registro
Route::get('/user-profile', 'InterfazController@get_user_profile'); // redirecciona al dashboard con la informacion del perfil
Route::get('/plan/{especie}/{mascota}/{user}','InterfazController@get_plan_user');//redirecciona a la vista del plan editable con dos atributos el ID tanto de la mascota como del usuario 
Route::get('/cotizarPlan', 'InterfazController@get_planCotizar');
Route::post('planCot', 'InterfazController@planCotizar')->name('planCot');//redireccinoa al controlador para determinar el plan 

//RUTAS AUTH (Autentificación)
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
//RUTAS Mascota
Route::get('/user-profile/mascota', 'MascotaController@index'); // redirecciona al controlador de mascota para obtener informacion y depues ir a la vista de las mascotas
Route::post('registerPet', 'MascotaController@agregarMascota')->name('registerPet');//redireccinoa al controlador para la insersion 
Route::get('/mascota/create','MascotaController@listEspecies');//redirecciona al controlador para este ebtner las especies y luego redireccionar a la vista de ingreso de mascota
Route::post('/plan/contratarp','PlanController@registerPlanDog');//redirecciona al controlador del plan para realizar la insersion en la tabla "plan" y "plan_variante" para la especie perro
Route::post('/plan/contratarg','PlanController@registerPlanCat');//redirecciona al controlador del plan para realizar la insersion en la tabla "plan" y "plan_variante" para la especie gato
//RUTAS Planes
Route::get('/user-profile/plan/{user}', 'PlanController@index'); // redirecciona al controlador los planes para obtener informacion y depues ir a la vista de los planes contratados
Route::get('/detalle_plan/{petid}','PlanController@detalle');//redirecciona a la vista del plan detalle con un atributo el ID de la mascota del plan

//redirecciona al controlador de la mascota para obtener las razas    
Route::Get('razas/{id}', 'MascotaController@getRazas');

// RUTAS PROFILE (Vista de perfil de cliente con vistas a sus mascotas y planes)
//Route::get('/user-profile','InterfazController@get_user_profile');//compact('detalle_usuario')

Route::get('/varianteexitosa', 'VarianteController@exitoso')->name('variante.resultado');


Route::view('/user-profile/planes','pages.profile.cliente.plan');
Route::view('/cotizar', 'pages.stepers');
Route::view('/sugerido', 'pages.plan-sugerido');
Route::view('/plan-editar', 'pages.plan-edit');

