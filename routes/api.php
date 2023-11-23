<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



/*
use App\Models\MyClass;
Route::get("myclasses", function() {
    return MyClass::get();
});
*/

/*
use App\Http\Controllers\MyClassController;
Route::get("myclasses",  [MyClassController::class, "index"]);
Route::post("myclasses", [MyClassController::class, "store"]);
Route::get("myclasses/{myclass}", [MyClassController::class, "show"]);
*/

use App\Http\Controllers\MyClassController;
Route::resource("myclasses", MyClassController::class)->except(['create', 'edit']);

use App\Http\Controllers\MyStudentController;
Route::resource("mystudents", MyStudentController::class)->except(['create', 'edit']);