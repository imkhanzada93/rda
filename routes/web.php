<?php

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

Auth::routes();

Route::get('account-form', function(){return view('accounts.form');});
Route::post('account/store', [App\Http\Controllers\AccountController::class, 'store']);
Route::post('client/store', [App\Http\Controllers\ClientController::class, 'store']);

Route::get('api/getInsuranceTypeData', [App\Http\Controllers\AccountController::class, 'getInsuranceTypeData']);
Route::get('api/getInsuranceData', [App\Http\Controllers\AccountController::class, 'getInsuranceData']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);

    Route::resource('insurance-types', App\Http\Controllers\InsuranceTypeController::class);
    Route::get('insurance-type-list', [App\Http\Controllers\InsuranceTypeController::class, 'getInsuranceTypes']);

    Route::resource('insurances', App\Http\Controllers\InsuranceController::class);
    Route::get('insurance-list', [App\Http\Controllers\InsuranceController::class, 'getInsurances']);

    Route::resource('plan-categories', App\Http\Controllers\PlanCategoryController::class);
    Route::get('plan-category-list', [App\Http\Controllers\PlanCategoryController::class, 'getPlanCategories']);
    
    Route::resource('benefits', App\Http\Controllers\BenefitController::class);
    Route::get('benefit-list', [App\Http\Controllers\BenefitController::class, 'getBenefits']);

    Route::resource('plans', App\Http\Controllers\PlanController::class);
    Route::get('plan-list', [App\Http\Controllers\PlanController::class, 'getPlans']);

    Route::resource('clients', App\Http\Controllers\ClientController::class);
    Route::get('client-list', [App\Http\Controllers\ClientController::class, 'getClients']);

    Route::resource('coupons', App\Http\Controllers\CouponController::class);
    Route::get('coupon-list', [App\Http\Controllers\CouponController::class, 'getCoupons']);

    Route::resource('accounts', App\Http\Controllers\AccountController::class);
    Route::get('account-list', [App\Http\Controllers\AccountController::class, 'getAccounts']);
});
