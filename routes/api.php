<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\SubscriptionsController;
use App\Http\Controllers\OwnerClientController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PlansLevelTwoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceAtributesController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DataCompanyController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\TypesLocalizationController;
use App\Http\Controllers\InstallationStatusController;
use App\Http\Controllers\HistoricalIntallationOrderController;
use App\Http\Controllers\InstallationOrdersController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ExtraAtributesController;
use App\Http\Controllers\SexUserDataController;
use App\Http\Controllers\UserDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'App\Http\Controllers\AuthController@signUp');
Route::post('login', 'App\Http\Controllers\AuthController@auth');

Route::resource('plans', PlansController::class);
Route::resource('subscriptions', SubscriptionsController::class);
Route::resource('ownerclient', OwnerClientController::class);
Route::resource('payments', PaymentsController::class);
Route::resource('payment_methods', PaymentMethodController::class);
Route::resource('invoice', InvoiceController::class);
Route::resource('plansleveltwo', PlansLevelTwoController::class);
Route::resource('service', ServiceController::class);
Route::resource('service_attributes', ServiceAtributesController::class);
Route::resource('packages', PackagesController::class);
Route::resource('contract', ContractController::class);
Route::resource('client', ClientController::class);
Route::resource('datacompany', DataCompanyController::class);
Route::resource('direction', DirectionController::class);
Route::resource('localization', LocalizationController::class);
Route::resource('typeslocalization', TypesLocalizationController::class);
Route::resource('installationstatus', InstallationStatusController::class);
Route::resource('historical_intallation_order', HistoricalIntallationOrderController::class);
Route::resource('installation_orders', InstallationOrdersController::class);
Route::resource('types', TypeController::class);
Route::resource('extra_tributes', ExtraAtributesController::class);
Route::resource('sex_user_data', SexUserDataController::class);
Route::resource('user_data', UserDataController::class);
Route::resource('type-user', TypeUserController::class);


Route::post('users', [UserController::class, 'store']);
Route::post('subscribe', [UserController::class, 'subscribe']);
Route::get('users', [UserController::class, 'index']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::get('users_show/{id}', [UserController::class, 'show']);
Route::delete('users/{id}', [UserController::class, 'destroy']);
Route::get('get_instalation_technical/{id}', [InstallationOrdersController::class,'get_instalation_technical']);
Route::post('add_service_plan/{id}', [PlansLevelTwoController::class, 'addServicePlan']);
Route::delete('remove_service_plan', [PlansLevelTwoController::class, 'removeServicePlan']);

Route::group(['middleware' => ['jwt.verify']], function() {
  
  Route::get('user','App\Http\Controllers\AuthController@getAuthUser');
  
});
