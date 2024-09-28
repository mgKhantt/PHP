<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BladeTemplateController;
use App\Http\Controllers\CSRFController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StarterController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\MyAuthMiddleware;
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

// Route::get('/starter/page1', function() {
//     return view('starter.page1');
// });

// Route::get('/starter/page2', function() {
//     return view('starter.page2');
// });
Route::middleware(['locale'])->group(function () {

    Route::get('/', function () {
    return view('app.index');
    });

    Route::prefix('admin')->group(function () {

        //auth
        Route::get('/', function () {
            return view('admin.auth.login');
        });

        Route::post('/login', [AuthController::class, 'login']);

        Route::middleware(['myAuth'])->group(function () {

            Route::get('/logout', [AuthController::class, 'logout']);
            //starter page
            Route::get('/starter/page1', [StarterController::class, 'getPage1']);
            Route::get('/starter/page2', [StarterController::class, 'getPage2']);
            Route::get('starter/page3', [StarterController::class, 'getPage3']);

            //route page
            Route::get('/routing/view-only', [RoutingController::class, 'getViewOnly']);
            Route::get('/routing/pass-data-view', [RoutingController::class, 'getPassDataToView']);
            Route::get('/routing/route-para/{bgColor}/{color}', [RoutingController::class, 'getRoutePara']);

            //dynamic route
            Route::get('/routing/dynamic-route-para', [RoutingController::class, 'getDynamicRoutePara']);
            Route::post('/routing/dynamic-route-para', [RoutingController::class, 'postDynamicRoutePara']);

            //name route
            Route::get('/routing/name-route', [RoutingController::class, 'getNameRoute'])->name('named-route');

            //testing middleware
            Route::get('routing/test-middleware', [RoutingController::class, 'getTestMiddleWare']);
            Route::post('routing/test-middleware', [RoutingController::class, 'postTestMiddleWare'])->middleware('allow-only-adult');

            Route::get('routing/check-with-regx/{name}/{age}', [RoutingController::class, 'getCheckWithRegx'])->where(
                [
                    'name' => "[a-z]+",
                    'age' => "[0-9]+",
                ]
            );
            //regx => regular expression

            //csrf
            Route::get('csrf/lecture1', [CSRFController::class, 'getLecture1']);
            Route::get('csrf/lecture2', [CSRFController::class, 'getLecture2']);
            Route::get('csrf/lecture3', [CSRFController::class, 'getLecture3']);

            Route::post('csrf/create', [CSRFController::class, 'postCreate']);
            Route::post('csrf/get-data', [CSRFController::class, 'getGetData']);

            //session
            Route::get('session/get', [SessionController::class, 'get']);
            Route::get('session/put', [SessionController::class, 'put']);

            Route::get('session/flash', [SessionController::class, 'flash']);
            Route::post('session/flash-session', [SessionController::class, 'flashSession']);

            Route::get('session/delete', [SessionController::class, 'delete']);
            Route::post('session/delete-session/{sessionType}', [SessionController::class, 'deleteSession']);

            Route::get('session/ajax', [SessionController::class, 'ajax']);
            Route::get('session/get-session-with-ajax/{sessionName}', [SessionController::class, 'getSessionWithAjax']);

            Route::post('session/put-session', [SessionController::class, 'putSession']);

            //blade template
            Route::get('/blade-template/component', [BladeTemplateController::class, 'getComponent']);
            Route::get('/blade-template/localization', [BladeTemplateController::class, 'getLocalization']);

            Route::post('/blade-template/change-localization', [BladeTemplateController::class, 'changeLocalization']);


            //Project
            //User
            Route::get('/users/get-reset-password/{id}', [UserController::class, 'getResetPassword'])->name('users.get-reset-password');
            Route::put('/users/reset-password/{id}', [UserController::class, 'resetPassword'])->name('users.reset-password');
            Route::resource('users', UserController::class);

            // //Portfolios
            // Route::resource('portfolios', PortfolioController::class);
        });
        //Portfolios
        Route::resource('portfolios', PortfolioController::class);
    });
});
